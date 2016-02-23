<?php
$key = "a958961bc81268a6f2309905decc6faf";
$url = "https://api.elevenia.co.id/rest/prodservices/product/list";

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
$order = new SimpleXMLElement($result);
print_r(json_decode(json_encode($order), true));
?>