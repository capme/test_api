<?php
$ch = curl_init();

$url = "https://fulfillment.api.acommerce.asia/channel/frisianflag/order/1";

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

echo $server_output;
?>