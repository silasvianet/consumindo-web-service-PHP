<? 
// WebServices - iMasters.com.br
// Autor: Mauricio Reckziegel
// http://www.mauricioreckziegel.com
// Arquivo : cliente.php
// Observa��es:
// Adicionar a extens�o php_soap

// passando o endere�o do servidor
$client = new SoapClient(null, array(
	'location' => 'http://oficinaluizinho.com.br/php/server.php',              // ex.: http://localhost/imasters/soap/server.php
	'uri' => 'http:/oficinaluizinho.com.br/php/',                   	   // ex.: http://localhost/imasters/soap/
	'trace' => 1));
// chamada do servi�o SOAP
$result = $client->hello('Mauricio Reckziegel'); 			 
// verifica erros na execu��o do servi�o e exibe o resultado
if (is_soap_fault($result)){
	trigger_error("SOAP Fault: (faultcode: {$result->faultcode},
	faultstring: {$result->faulstring})", E_ERROR);
}else{
	echo "Resultado Encontrado : <br><br>";
	print_r($result);
}
?>

