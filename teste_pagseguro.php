<?php
include "Docs PagSeguro/PagSeguro.class.php";

$pagseguro = new PagSeguro();
$pagseguro->executeCheckout($dados,$retorno);

?>
