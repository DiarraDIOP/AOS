<?php
include("lib/nusoap.php");
include("index.php");

$client = new soapclient("http://localhost/FDJ/server.php?wsdl");   


if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['numero4']) 
	&& isset($_POST['numero5']) && isset($_POST['numeroChance'])) {


	//appel du service
	$res = $client->verifTicket("nouveau_loto", intval($_POST['numero1']), intval($_POST['numero2']), intval($_POST['numero3']), intval($_POST['numero4']), intval($_POST['numero5']), intval($_POST['numeroChance'])); 

	
	if($res){
		header('location: gagner.php'); 
	}else{
		header('location: perdu.php'); 
	}
}

?>