<?php

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

$PublicIP = get_client_ip(); 
//---------- for delopment issues ----------
if ($PublicIP === "::1") {
	$PublicIP = "170.247.53.16";
}
//------------------------------------------
$json  = file_get_contents("http://ipinfo.io/$PublicIP/geo");
$json  =  json_decode($json ,true);
$country =  $json['country'];
$region= $json['region'];
$city = $json['city'];

$lang = $_GET['lang'];

if (($country === "BR" || $country === "PT") && $lang === "pt") {
	require_once "body-pt.php";
} else if (($country === "BR" || $country === "PT") && $lang === "en") {
	require_once "body-en.php";
} else if ($country === "BR" || $country === "PT") {
	require_once "body-pt.php";
} else {
	require_once "body-en.php";
}

?>