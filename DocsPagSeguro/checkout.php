<?php
header("access-control-allow-origin: https://pagseguro.uol.com.br");//PERMISSÃO PARA O PAGSEGURO
header("Content-Type: text/html; charset=UTF-8",true);
date_default_timezone_set('America/Sao_Paulo');//ARRUMA DATA E HORA

require_once("PagSeguro.class.php");
$PagSeguro = new PagSeguro();
	
//EFETUAR PAGAMENTO	
//REALIZANDO VENDA, AS INFORMAÇÕES ABAIXO PRECISÃO SER INFORMADAS
$venda = array("codigo"=>"1",
			   "valor"=>100.00,
			   "descricao"=>"VENDA DE NONONONONONO",
			   "AreaCode"=>"16",
			   "Type"=>"3",
			   "AddressComplement"=> "ap",
			   "nome"=>"teste",
			   "email"=> "c45213665448699620276@sandbox.pagseguro.com.br",
			   "telefone"=>"(16)99999-9999",
			   "rua"=>"Teste",
			   "numero"=>"101",
			   "bairro"=>"Jardim",
			   "cidade"=>"Tangamandapio",
			   "estado"=>"SP", //2 LETRAS MAIÚSCULAS
			   "cep"=>"14.350-000",// VERIFICR SE PRECISA DE AJUSTE NO FORMATO
			   "codigo_pagseguro"=>" ");//PAGSEGURO GERA UMA TRANSACTIONID QUE É ARMAZENADA AQUI
			   
$PagSeguro->executeCheckout($venda,"http://SEUSITE/pedido/".$_GET['codigo']);//qUANDO A PESSOA ACABAR DE REALIZAR O PAGAMENTO É PARA ESSA URL QUE ELA VAI VOLTAR,  PRECISAMOS DEFINIR ABA DE PEDIDOS, VAI SER VIA GET???

//----------------------------------------------------------------------------


//RECEBER RETORNO
if( isset($_GET['transaction_id']) ){// A TRAMSATION ID QUE RECEBE DO PAG SEGURO É O CODIGO_PAGSEGURO CITADO ACIMA
	$pagamento = $PagSeguro->getStatusByReference($_GET['codigo']);//CODIGO É O PARAAMETRO QUE DEFINIMOS ACIMA
	
	$pagamento->codigo_pagseguro = $_GET['transaction_id'];
	if($pagamento->status==3 || $pagamento->status==4){
		//ATUALIZAR DADOS DA VENDA, COMO DATA DO PAGAMENTO E STATUS DO PAGAMENTO
		echo "Pago";
	}else{
		//ATUALIZAR NA BASE DE DADOS ==> PRECISAMOS FERIFICAR COMO VAI FICAR
	}
}

?>