<?php

include("lib/nusoap.php");
	

	//téléchargement du fichier depuis le lien de la FDJ
	file_put_contents("loto.zip", file_get_contents("https://media.fdj.fr/generated/game/loto/nouveau_loto.zip"));
      
    //le dézipper
	$zip = new ZipArchive;
	if ($zip->open('loto.zip') === TRUE) {
	    $zip->extractTo('C:/wamp/www/FDJ/');
	    $zip->close();
	    echo 'ok';
	} else {
	    echo 'échec';
	}


	
	$ligne = 1; // compteur de ligne
	$fic = fopen("loto.csv", "a+");
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
	exemple
	include("lib/nusoap.php");
	$client = new soapclient("http://localhost/WebServiceSOAP/server.php?wsdl");
	$result    =    $client->gethelloworld("Milap Patel");
	echo "<pre>";
	print_r($result);
	echo "</pre>";*/
?>