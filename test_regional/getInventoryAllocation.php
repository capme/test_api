<?php
$ch = curl_init();
//143 is frisian flag merchant id
$url = "https://fulfillment.api.acommercedev.com/channel/frisianflag/allocation/merchant/143";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	'X-Subject-Token: bd0c7e8573054243a293aefdce27b979',
	'Content-Type: application/json;charset=UTF-8',
	'User-Agent: Mozilla Firefox'
	)
);                                                                                                                   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;


?>