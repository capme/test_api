<?php
$ch = curl_init();

$url = "https://api.acommercedev.com/identity/token";
//$url = "https://api.acommerce.asia/identity/token";

$data = array("auth" =>
			array("apiKeyCredentials" =>
				array(
					"username" => "frisianflag",
					"apiKey" => "frisianflag123!"
				)
			)
		);	
$data_string = json_encode($data);  
echo $data_string;

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;
?>