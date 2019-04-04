<?php
	require_once("PagSeguro.class.php");// PASSA O PARAMETRO COMO REFERENCIA E ELE TE MOSTRA COMO ESTA O PAGAMENTO

	if(isset($_GET['reference'])){
		$PagSeguro = new PagSeguro();
		$P = $PagSeguro->getStatusByReference($_GET['reference']);
		echo $PagSeguro->getStatusText($P->status);
	}else{
	    echo "Parâmetro \"reference\" não informado!";
	}

?>