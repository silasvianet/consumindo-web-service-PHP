<?php
// WebServices - iMasters.com.br
// Autor: Mauricio Reckziegel
// http://www.mauricioreckziegel.com
// Arquivo : cliente2.php
// Observa��es:
// Comentar a extens�o php_soap
// Baixar o arquivo nusoap.php

require_once('nusoap.php');
// Defini��o da localiza��o do arquivo WSDL
$wsdl = 'http://oficinaluizinho.com.br/php/server2.php?wsdl'; // ex.: http://localhost/imasters/nuSOAP/server2.php?wsdl
// cria��o de uma inst�ncia do cliente
$client = new soapclient($wsdl, true);
// verifica se ocorreu erro na cria��o do objeto
$err = $client->getError();
if ($err){
	echo "Erro no construtor<pre>".$err."</pre>";
}
// chamada do m�todo SOAP
$result = $client->call('hello',array('Mauricio Reckziegel')); 
// verifica se ocorreu falha na chamada do m�todo
if ($client->fault){
	echo "Falha<pre>".print_r($result)."</pre>";
}else{
	// verifica se ocorreu erro
	$err = $client->getError();
	if ($err){
		echo "Erro<pre>".$err."</pre>";
	} else{
			print_r($result);
	}//end_else
}//end_else
?>

