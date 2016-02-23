<?php
$key = ".eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiaXN0YW5hLmFjb20yMDE1QGdtYWlsLmNvbSIsInBhc3MiOiJkZDlhZDM2NWMxNDVkYTExMGE4NzQ5ZDQ1MjVlMDViNSJ9.I74cOzMD2A2F85OJZLXxkEfR2J5hRSLUnh8AuCsnXdE";
$url = "http://seller.staging.mataharimall.net/api/seller/v1/orders/update_shipment_status";

$data = '
[
    {
        "so_number": "S1453113322789",
        "status": "Shipped",
        "shipping_provider": "JNE",
        "tracking_id": "JNE12345678910"
    }
]
';

$data = '
[
    {
        "so_number": "S14531133227890000",
        "status": "Canceled",
        "reason": "Out of Stock"
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