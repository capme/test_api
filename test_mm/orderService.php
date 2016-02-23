<?php
$key = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiaXN0YW5hLmFjb20yMDE1QGdtYWlsLmNvbSIsInBhc3MiOiJkZDlhZDM2NWMxNDVkYTExMGE4NzQ5ZDQ1MjVlMDViNSJ9.I74cOzMD2A2F85OJZLXxkEfR2J5hRSLUnh8AuCsnXdE";
$url = "http://seller.staging.mataharimall.net/api/seller/v1/orders/list";

$data = '
{
    "start_date": "2016-02-04",
    "end_date": "2016-02-04"
}
';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Authorization: ' . $key)                                                                       
);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$result = curl_exec($ch);
print_r($result);
?>