<?php
include("lib/nusoap.php");
include("index.php");

$client = new soapclient("http://localhost/WebServiceSoap/server.php?wsdl");
$prenom = $_POST['numero1']; 
$result    =    $client->gethelloworld("Hello");
echo $result;

$nom = $_POST['numero2']; 
echo "valeurs :".$nom.$prenom; 
?>