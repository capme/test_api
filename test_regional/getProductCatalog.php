<?php
$ch = curl_init();

$url = "https://seller.api.acommerce.asia/partner/frisianflag/product/FRSIAN64254110000000M";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	'X-Subject-Token: 223ecd5ee8334c679396e637ba1828b2',
	'User-Agent: Mozilla Firefox'
	)
);                                                                                                                   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;


?>