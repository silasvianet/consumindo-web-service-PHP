<?php
// WebServices - iMasters.com.br
// Autor: Mauricio Reckziegel
// http://www.mauricioreckziegel.com
// Arquivo : server.php
// Observa��es:
// Comentar a extens�o php_soap
// Baixar o arquivo nusoap.php

// inclus�o do arquivo de classes NuSOAP
require_once('nusoap.php');
// cria��o de uma inst�ncia do servidor
$server = new soap_server;
// registro do m�todo
$server->register('hello');
// defini��o do m�todo como uma fun��o do PHP
	function hello($name) {
		return 'Hello '.$name;
	}
// requisi��o para uso do servi�o
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ?
$HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>

