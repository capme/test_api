<?php
$ch = curl_init();

$url = "https://shipping.api.acommercedev.com/partner/143/shipping-order-status?since=2015-06-18T08:30:00Z&shipOrderStatus=NEW";
$url = "https://shipping.api.acommercedev.com/partner/143/shipping-order-status/id?id=SHIPFRIS00001";
$url = "https://shipping.api.acommercedev.com/partner/143/shipping-order-status";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	'X-Subject-Token: da28a04909584b06834cef508eefcf4b',
	'User-Agent: Mozilla Firefox'
	)
);                                                                                                                   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;

/*
return : empty json
*/

?>