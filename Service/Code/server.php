<?php
require_once("lib/nusoap.php");
//on crée une instance de serveur
$server = new soap_server();
$server->configureWSDL('server','urn:server');

//on enregistre nos 3 méthodes services
$server->register("verifTicket",
				array("name" => "xsd:string", "numero1" => "xsd:number", "numero2" => "xsd:number",
				"numero3" => "xsd:number", "numero4" => "xsd:number",
				"numero5" => "xsd:number", "numeroChance" => "xsd:number" ),
				array("return" => "xsd:boolean"),
				"urn:fdj","urn:fdj#verifTicket");

$server->register("verifTicket2",
				array("name" => "xsd:string", "numero1" => "xsd:number", "numero2" => "xsd:number",
				"numero3" => "xsd:number", "numero4" => "xsd:number",
				"numero5" => "xsd:number", "etoile1" => "xsd:number",
				"etoile2" => "xsd:number" ),
				array("return" => "xsd:boolean"),
				"urn:fdj","urn:fdj#verifTicket2");

$server->register("verifTicket3",
				array("name" => "xsd:string", "numero1" => "xsd:number", "numero2" => "xsd:number",
				"numero3" => "xsd:number", "numero4" => "xsd:number",
				"numero5" => "xsd:number", "numero6" => "xsd:number",
				"numero7" => "xsd:number" ),
				array("return" => "xsd:boolean"),
				"urn:fdj","urn:fdj#verifTicket3");
		 
//définition des methodes
	function recupereLoto($name){

		//téléchargement du fichier depuis le lien du site de la FDJ
		file_put_contents($name.".zip", file_get_contents("https://media.fdj.fr/generated/game/loto/".$name.".zip"));
	      
	    //le dézipper
		$zip = new ZipArchive;
		$res = $zip->open($name.".zip");
		if ( $res === TRUE) {
		    $zip->extractTo('./');
		    $zip->close();
		} else {
		    var_dump($res);
		}

		//Récuperation de la deuxième 
		$ligne = 1; // compteur de lignes
		$resultats = array();
		$fic = fopen($name.".csv", "a+");
		while($tab=fgetcsv($fic,1024,';'))
		{
			$champs = count($tab);  
			$ligne ++;
			//affichage de le 2ème ligne
			if ($ligne >2 && $ligne <4){
				//affichage de la 5ème à la 9ème colonne
				for($i=4; $i<10; $i ++)
				{
					$resultats[$i-4] = $tab[$i];
				}
			}
		}
		return $resultats;
	}


	function verifTicket($name, $numero1, $numero2, $numero3, $numero4, $numero5, $numeroChance) {
		$resulats = recupereLoto($name);
		$res = TRUE;
		// comparaison des résultats 
		if ($resulats[0] != $numero1 || $resulats[1] != $numero2 || $resulats[2] != $numero3 ||
			 $resulats[3] != $numero4 || $resulats[4] != $numero5 || $resulats[5] != $numeroChance ){
			$res = FALSE;
		}
		return $res;
	}

	function recupereEuro($name){

		//téléchargement du fichier depuis le lien du site de la FDJ
		file_put_contents($name.".zip", file_get_contents("https://media.fdj.fr/generated/game/euromillions/".$name.".zip"));
	      
	    //le dézipper
		$zip = new ZipArchive;
		$res = $zip->open($name.".zip");
		if ( $res === TRUE) {
		    $zip->extractTo('./');
		    $zip->close();
		} else {
		    var_dump($res);
		}

		//Récuperation de la deuxième 
		$ligne = 1; // compteur de lignes
		$resultats = array();
		$fic = fopen($name.".csv", "a+");
		while($tab=fgetcsv($fic,1500,';'))
		{
			$champs = count($tab);  
			$ligne ++;
			//affichage de le 2ème ligne
			if ($ligne >2 && $ligne <4){
				//affichage de la 5ème à la 10ème colonne
				for($i=4; $i<11; $i ++)
				{
					$resultats[$i-4] = $tab[$i];
				}
			}
		}
		return $resultats;
	}

	function verifTicket2($name, $numero1, $numero2, $numero3, $numero4, $numero5, $etoile1, $etoile2) {
		$resulats = recupereEuro($name);
		$res = TRUE;
		// comparaison des résultats 
		if ($resulats[0] != $numero1 || $resulats[1] != $numero2 || $resulats[2] != $numero3 ||
			 $resulats[3] != $numero4 || $resulats[4] != $numero5 || $resulats[5] != $etoile1 ||
			  $resulats[6] != $etoile2 ){
			$res = FALSE;
		}
		return $res;
	}

	function recupereJoker($name){

		//téléchargement du fichier depuis le lien du site de la FDJ
		file_put_contents($name.".zip", file_get_contents("https://media.fdj.fr/generated/game/jokerplus/".$name.".zip"));
	      
	    //le dézipper
		$zip = new ZipArchive;
		$res = $zip->open($name.".zip");
		if ( $res === TRUE) {
		    $zip->extractTo('./');
		    $zip->close();
		} else {
		    var_dump($res);
		}

		//Récuperation de la deuxième 
		$ligne = 1; // compteur de lignes
		$resultats = array();
		$fic = fopen($name.".csv", "a+");
		while($tab=fgetcsv($fic,1024,';'))
		{
			$champs = count($tab);  
			$ligne ++;
			//affichage de le 2ème ligne
			if ($ligne >2 && $ligne <4){
				//affichage de la 5ème colonne
					$resultats[$i-4] = $tab[4];
			}
		}
		return $resultats;
	}


	function verifTicket3($name, $numero1, $numero2, $numero3, $numero4, $numero5, $numero6, $numero7) {
		$resulats = recupereJoker($name);
		$res = TRUE;
		// comparaison des résultats 
		if ($resulats[0] != $numero1 || $resulats[1] != $numero2 || $resulats[2] != $numero3 ||
			 $resulats[3] != $numero4 || $resulats[4] != $numero5 || $resulats[5] != $numero6 ||
			  $resulats[6] != $numero7 ){
			$res = FALSE;
		}
		return $res;
	}

 //on envoie le résultat.

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>