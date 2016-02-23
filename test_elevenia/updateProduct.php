<?php
$key = "fe868c8788f602061778b49949cf3643";
$url = "https://api.elevenia.co.id/rest/prodservices/updateProductOption/250602";

$data = <<<_EOT_
<?xml version="1.0" encoding="utf­8"?>
<product>
  <optSelectYn>Y</optSelectYn>
  <txtColCnt>1</txtColCnt>
  <prdExposeClfCd>01</prdExposeClfCd>
  <colTitle>Color/Size</colTitle>
  <productOption>
    <colOptPrice>0</colOptPrice>
    <colValue0>Blue/XL</colValue0>
    <colCount>200</colCount>
    <optWght>40</optWght>
    <useYn>Y</useYn>
  </productOption>
  <productOption>
    <colOptPrice>2000</colOptPrice>
    <colValue0>Blue/XXL</colValue0>
    <colCount>300</colCount>
    <optWght>50</optWght>
    <useYn>Y</useYn>
  </productOption>
</product>
_EOT_;

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/xml;charset=utf-8',
    'openapikey: ' . $key)                                                                       
);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
echo $result;

?>