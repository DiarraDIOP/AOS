<?php
require_once("lib/nusoap.php");
$server = new soap_server();
$server->configureWSDL("Testing WSDL ","urn:Testing WSDL ");
 
$server->register("gethelloworld",array("name" => "xsd:string"),array("return" => "xsd:string"),"urn:helloworld","urn:helloworld#gethelloworld");
 
function gethelloworld($name) {
	$ligne = 1; // compteur de ligne
$fic = fopen("fichierCSV.csv", "a+");
while($tab=fgetcsv($fic,1024,';'))
{
$champs = count($tab);//nombre de champ dans la ligne en question   
$ligne ++;
//affichage de chaque champ de la ligne en question
for($i=0; $i<$champs; $i ++)
{
}
if($name == $tab[0]){
	return "tot".$tab[0];
}
else
{
	return "toto".$tab[0];
}
}


}
 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>