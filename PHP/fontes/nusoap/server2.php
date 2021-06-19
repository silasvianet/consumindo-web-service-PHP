<?php
// WebServices - iMasters.com.br
// Autor: Mauricio Reckziegel
// http://www.mauricioreckziegel.com
// Arquivo : server2.php
// Observa��es:
// Comentar a extens�o php_soap
// Baixar o arquivo nusoap.php

// inclus�o do arquivo de classes NuSOAP
require_once('nusoap.php');

// cria��o de uma inst�ncia do servidor
$server = new soap_server;

// inicializa o suporte a WSDL
$server->configureWSDL('server.hello','urn:server.hello');
$server->wsdl->schemaTargetNamespace = 'urn:server.hello';

// registra o m�todo a ser oferecido
$server->register('hello', //nome do m�todo
array('name' => 'xsd:string'), //par�metros de entrada
array('return' => 'xsd:string'), //par�metros de sa�da
'urn:server.hello', //namespace
'urn:server.hello#hello', //soapaction
'rpc', //style
'encoded', //use
'Retorna o nome' //documenta��o do servi�o
);

	function hello($name) {
		return 'Hello '.$name;
	}
// requisi��o para uso do servi�o
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>
