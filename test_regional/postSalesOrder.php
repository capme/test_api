<?php
$ch = curl_init();

$url = "https://fulfillment.api.acommercedev.com/channel/frisianflag/order/FRISSSSO123456";
$data = array(
			"orderCreatedTime" => "2016-02-18T10:00:00Z",
			"customerInfo" => 
			array(
				"addressee" => "Dan Happiness",
				"address1" => "964 Rama 4 Road",
				"province" => "Bangkok",
				"postalCode" => "9999",
				"country" => "Indonesia",
				"phone" => "081347344234",
				"email" => "capme001@gmail.com"
			),
			"orderShipmentInfo" =>
			array(
				"addressee" => "smith",
				"address1" => "ciputat",
				"address2" => "",
				"subDistrict" => "ciputat",
				"district" => "tangerang",
				"city" => "",
				"province" => "banten",
				"postalCode" => "15412",
				"country" => "Indonesia",
				"phone" => "0812889977",
				"email" => "capme001@gmail.com"
			),
			"paymentType" => "COD",
			"shippingType" => "STANDARD_2_4_DAYS",
			"grossTotal" => 101500,
			"currUnit" => "THB",
			"orderItems" => 
			array(
				0 =>
					array(
						"partnerId" => "143",
						"itemId" => "PAYUNG01",
						"qty" => 1,
						"subTotal" => 101500
					)
			)
		);	
$data_string = json_encode($data);  
echo "\n\n".$data_string."\n\n";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
	'X-Subject-Token: bff22a0249bc474aae130f3efb654a4a',
	'User-Agent: Mozilla Firefox',
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;


?>