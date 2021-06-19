<?php
// WebServices - iMasters.com.br
// Autor: Mauricio Reckziegel
// http://www.mauricioreckziegel.com
// Arquivo : server.php
// Observa��es:
// Adicionar a extens�o php_soap

//cria��o de uma inst�ncia do servidor (coloque o endere�o na sua m�quina local)
$server = new SoapServer(null, array('uri' => "http://caminho"));  // ex.: http://localhost/imasters/soap/
//defini��o do servi�o ( vai retornar apenas a frase Hello + par�metro que receber )
	  function hello($name) {
			return 'Hello '.$name;
	  }	
//registro do servi�o
$server->addFunction("hello");
// chamada do m�todo para atender as requisi��o do servi�o 
// se a chamada for um POST executa, sen�o apenas mostra as fun��es �cadastradas�
if ($_SERVER["REQUEST_METHOD"]== "POST") {
		$server->handle();
} else {
	$functions = $server->getFunctions();
	foreach ($functions as $func) {
		print $func. "<br>";
	}
}
?>
