<?php

$status = "development"; //set as "production" or "development"

if ($status === "development") {
	$root = "/Personal-Website/";

    define('DB_SERVER', 'localhost:3306');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'password');
    define('DB_DATABASE', 'rafadb');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
} else if ($status === "production") {
	$root = "http://rafaelmachado.site/";

    define('DB_SERVER', 'sql109.epizy.com');
    define('DB_USERNAME', 'epiz_22101782');
    define('DB_PASSWORD', 'password');
    define('DB_DATABASE', 'epiz_22101782_rafadb');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
}

date_default_timezone_set('America/Sao_Paulo');
session_start();

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
    if ($PublicIP !== "UNKNOWN") {
	   $json  = file_get_contents("http://ipinfo.io/$PublicIP/geo");
	   $json  =  json_decode($json ,true);
	   $country =  $json['country'];
	   $region= $json['region'];
	   $city = $json['city'];
    } else {
        $country = "US";
    }
} else if ($status === "development") {
	$country = "BR";
}

if ($country === "BR" || $country === "PT") {
    $lang = "pt-br";
} else {
    $lang = "en";
}

if (array_key_exists("lang", $_GET)) {
	$lang = $_GET["lang"];
}

?>
