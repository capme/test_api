<?php
$ch = curl_init();

$url = "https://fulfillment.api.acommercedev.com/channel/elevenia-indo/allocation/merchant/1063";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  	
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	'X-Subject-Token: 232e7ddaa96e4e6d9e42567dab1a6130',
	'User-Agent: Mozilla Firefox'
	)
);                                                                                                                   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;

//print_r(json_decode($result, true));


?>