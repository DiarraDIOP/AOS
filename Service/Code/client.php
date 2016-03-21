<?php
include("lib/nusoap.php");
include("index.php");

$client = new soapclient("http://localhost/AOS/Service/Code/server.php?wsdl");   



if (isset($_GET['x'] )) {

	if ($_GET['x'] == 'loto'){

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
	}elseif ($_GET['x'] == 'euro') {

		if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['numero4']) 
			&& isset($_POST['numero5']) && isset($_POST['etoile1']) && isset($_POST['etoile2'])) {

			//appel du service
			$res = $client->verifTicket2("euromillions_2", intval($_POST['numero1']), intval($_POST['numero2']), intval($_POST['numero3']), intval($_POST['numero4']), intval($_POST['numero5']), intval($_POST['etoile1']), intval($_POST['etoile2'])); 
			if($res){
				header('location: gagner.php'); 
			}else{
				header('location: perdu.php'); 	
			}
		}
	}elseif (($_GET['x'] == 'joker')) {

		if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['numero4']) 
			&& isset($_POST['numero5']) && isset($_POST['numero6']) && isset($_POST['numero7'])) {


			//appel du service
			$res = $client->verifTicket3("jokerplus", intval($_POST['numero1']), intval($_POST['numero2']), intval($_POST['numero3']), intval($_POST['numero4']), intval($_POST['numero5']), intval($_POST['numero6']), intval($_POST['numero7'])); 
		
			if($res){
				header('location: gagner.php'); 
				
			}else{
				header('location: perdu.php'); 

				
			}
		}

	}
}

?>