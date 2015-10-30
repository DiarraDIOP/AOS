<?php
include("lib/nusoap.php");
$client = new soapclient("http://localhost/WebServiceSoap/server.php?wsdl");
$result    =    $client->gethelloworld("Milap Patel");
echo "<pre>";
print_r($result);
echo "</pre>";
?>