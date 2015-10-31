<?php
include("lib/nusoap.php");
include("index.php");

$client = new soapclient("http://localhost/WebServiceSoap/server.php?wsdl");

$result    =    $client->gethelloworld("Hello");

if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
$prenom = $_POST['numero1']; 
$nom = $_POST['numero2']; 
}
?>