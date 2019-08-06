<?php

$status = "development"; //set as "production" or "development"

if ($status === "development") {
	$root = "/Personal-Website/";
    $db = "rafadb";
} else if ($status === "production") {
	$root = "http://rafaelmachado.site/";
    $db = "epiz_22101782_rafadb";
}

date_default_timezone_set('America/Sao_Paulo');

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

if ($status === "production") {
	$PublicIP = get_client_ip(); 
	$json  = file_get_contents("http://ipinfo.io/$PublicIP/geo");
	$json  =  json_decode($json ,true);
	$country =  $json['country'];
	$region= $json['region'];
	$city = $json['city'];
    if ($country === "BR" || $country === "PT") {
        $lang = "pt-br";
    } else {
        $lang = "en";
    }
} else if ($status === "development") {
	$country = "BR";
    $lang = "pt-br";
}

if (array_key_exists("lang", $_GET)) {
	$lang = $_GET["lang"];
}

?>