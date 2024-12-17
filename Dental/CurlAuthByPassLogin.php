<?php

// $ch = curl_init("https://suchandranath-bajjuri.000webhostapp.com/Login.php");
$ch = curl_init("https://272-web-environment.000webhostapp.com/Login.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_COOKIEJAR,true);
$response= curl_exec($ch);

$dom = new DOMDocument;
$dom->loadHTML($response);

$data = array(
    "username" => "admin",
    "password" => "admin",
    "submit" => "Log In",
);
// curl_setopt($ch, CURLOPT_URL, "https://suchandranath-bajjuri.000webhostapp.com/Login.php");
curl_setopt($ch, CURLOPT_URL, "https://272-web-environment.000webhostapp.com/Login.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$response = curl_exec($ch);
echo $response;

?>