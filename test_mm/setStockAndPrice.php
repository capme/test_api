<?php
$key = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiaXN0YW5hLmFjb20yMDE1QGdtYWlsLmNvbSIsInBhc3MiOiJkZDlhZDM2NWMxNDVkYTExMGE4NzQ5ZDQ1MjVlMDViNSJ9.I74cOzMD2A2F85OJZLXxkEfR2J5hRSLUnh8AuCsnXdE";
$url = "http://seller.staging.mataharimall.net/api/seller/v1/update_stock_price";

$data = '
[
    {
        "variant_sku": "XBM0024830000000101",
        "stock": 100,
        "normal_price": 150000,
        "effective_price": 140000
    }
]
';

$data = '
[
    {
        "store_sku": "FRSIANPRODUCT000002x",
        "stock": 200
    }
]
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