<?php
require_once("lib/nusoap.php");
$server = new soap_server();
$server->configureWSDL("Testing WSDL ","urn:Testing WSDL ");
 
$server->register("gethelloworld",array("name" => "xsd:string"),array("return" => "xsd:string"),"urn:helloworld","urn:helloworld#gethelloworld");
 
function gethelloworld($name) {
$myname    =    "My Name Is <b>".$name . "</b>";
return $myname;
}
 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>