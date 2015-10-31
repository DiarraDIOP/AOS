<?php

include("lib/nusoap.php");

	file_put_contents("loto.zip", file_get_contents("https://media.fdj.fr/generated/game/loto/nouveau_loto.zip"));
      
	
/*
	exemple
	include("lib/nusoap.php");
	$client = new soapclient("http://localhost/WebServiceSOAP/server.php?wsdl");
	$result    =    $client->gethelloworld("Milap Patel");
	echo "<pre>";
	print_r($result);
	echo "</pre>";*/
?>