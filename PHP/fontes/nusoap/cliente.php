<?php 
// WebServices - iMasters.com.br
// Autor: Mauricio Reckziegel
// http://www.mauricioreckziegel.com
// Arquivo : cliente.php
// Observa��es:
// Comentar a extens�o php_soap
// Baixar o arquivo nusoap.php

// inclus�o do arquivo de classes NuSOAP
require_once('nusoap.php');
// cria��o de uma inst�ncia do cliente
$client = new soapclient('http://oficinaluizinho.com.br/php/server.php'); // ex.: http://localhost/imasters/nuSOAP/server.php
// chamada do m�todo SOAP
$result = $client->call('hello',array('Mauricio Reckziegel'));
// exibe o resultado
print_r($result);

// OPCIONAL : exibe a requisi��o e a resposta

/*

echo '<h2>Requisi��o</h2>';
echo '<pre>'.htmlspecialchars($client->request).'</pre>';
echo '<h2>Resposta</h2>';
echo '<pre>'.htmlspecialchars($client->response).'</pre>';
// Exibe mensagens para debug
echo '<h2>Debug</h2>';
echo '<pre>'.htmlspecialchars($client->debug_str).'</pre>';

*/
?>
