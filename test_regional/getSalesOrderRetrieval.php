<?php
$ch = curl_init();

$url = "https://fulfillment.api.acommercedev.com/channel/alifaza/order/ALIFAZA0001";
//$url = "https://fulfillment.api.acommerce.asia/partner/302/order/201602127178850";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	'X-Subject-Token: 1347000150ed4184bed07f66beba2044',
	'User-Agent: Mozilla Firefox'
	)
);                                                                                                                   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;


?>