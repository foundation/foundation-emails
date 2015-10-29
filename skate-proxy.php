<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");
$url = "http://skate.zurb.com/api/v1/raw";


ini_set("allow_url_fopen", 1);
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, file_get_contents("php://input"));
curl_exec($ch);
curl_close($ch);

?>
