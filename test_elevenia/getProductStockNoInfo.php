<?php
$key = "fe868c8788f602061778b49949cf3643";
$url = "https://api.elevenia.co.id/rest/prodmarketservice/prodmarket/stck/254832";

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/xml',    
	'Accept­Charset: utf­8',
    'openapikey: ' . $key)                                                                       
);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;

?>