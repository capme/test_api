<?php
$ch = curl_init();

//$url = "https://fulfillment.api.acommercedev.com/channel/frisianflag/sales-order-status?since=2015-06-18T10:30:40Z&orderStatus=NEW";
/*
return : empty json
*/
$url = "https://shipping.api.acommercedev.com/channel/mataharimall/sales-order-status/id?id=QAVS116656091";
//$url = "https://fulfillment.api.acommercedev.com/partner/141/sales-order-status/id?id=qavs116656091";
/*
return :
[{"orderId":"FRIS00001","error":{"code":404,"message":"Not Found"}}]
*/
//$url = "https://fulfillment.api.acommercedev.com/channel/frisianflag/sales-order-status";
/*
return : empty json
*/

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	'X-Subject-Token: 87d7c11dd5284eb5a287d36e396cb34b',
	'User-Agent: Mozilla Firefox'
	)
);                                                                                                                   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
//echo $result;
print_r(json_decode($result, true));


?>