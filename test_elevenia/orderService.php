<?php
$key = "a958961bc81268a6f2309905decc6faf";
$url = "http://api.elevenia.co.id/rest/orderservices/orders?ordStat=202&dateFrom=2016/02/09&dateTo=2016/02/30";
http://api.elevenia.co.id/rest/orderservices/orders?ordStat=202&dateFrom=2016/01/15&dateTo=
//$url = "http://google.com";
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