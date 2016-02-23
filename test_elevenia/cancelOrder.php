<?php
$key = "fe868c8788f602061778b49949cf3643";
$url = "https://api.elevenia.co.id/rest/orderservices/order/reject?dlvNo=8000029170&ordNo=201602016188089&ordPrdSeq=2&message=test ajah cancel&ordCnRsnCd=99&ordQty=1";
//$url = "http://google.com";
$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/xml',    
	'Accept­Charset: utf­8',
    'openapikey: ' . $key)                                                                       
);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;


/*
<?xml version="1.0" encoding="UTF-8" standalone="yes"?><ClientMessage><productNo>250717</productNo><message>Order: 201512286029293 has been cancelled.</message><resultCode>200</resultCode></ClientMessage>

<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<ClientMessage>
    <resultCode>200</resultCode>
    <message>ERROR when attempting to cancel order: Invalid order number or delivery number, please check ordNo and dlvNo parameters.</message>
</ClientMessage>
*/

?>