<?php

include("lib/nusoap.php");
	
	
	//téléchargement du fichier depuis le lien de la FDJ
	file_put_contents("nouveau_loto.zip", file_get_contents("https://media.fdj.fr/generated/game/loto/nouveau_loto.zip"));
      
    //le dézipper
	$zip = new ZipArchive;
	$res = $zip->open('nouveau_loto.zip');
	if ( $res === TRUE) {
	    $zip->extractTo('./');
	    $zip->close();
	} else {
	    var_dump($res);
	}

	
	$ligne = 1; // compteur de ligne
	$fic = fopen("nouveau_loto.csv", "a+");
	while($tab=fgetcsv($fic,1024,';'))
	{
		$champs = count($tab);//nombre de champ dans la ligne en question   
		$ligne ++;
		//affichage de chaque champ de la ligne en question
		for($i=0; $i<$champs; $i ++)
		{
			
		}
	}

/*
	$client = new soapclient("http://localhost/WebServiceSOAP/server.php?wsdl");
	$result    =    $client->gethelloworld("Milap Patel");
	echo "<pre>";
	print_r($result);
	echo "</pre>";*/
?>