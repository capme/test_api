<?php
$key = "fe868c8788f602061778b49949cf3643";
$url = "https://api.elevenia.co.id/rest/prodservices/stockqty/1534497460";

$data = <<<_EOT_
<?xml version="1.0" encoding="UTF-8"?>
<ProductStock> 
  <prdNo>254832</prdNo> 
  <prdStckNo>1534497460</prdStckNo> 
  <stckQty>15</stckQty> 
  <optWght>1</optWght> 
</ProductStock>
_EOT_;

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/xml;charset=utf-8',
    'openapikey: ' . $key)                                                                       
);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
//curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
echo $result;

?>