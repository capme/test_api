<?php
$ch = curl_init();

$url = "https://shipping.api.acommercedev.com/partner/143/order/SHIPFRIS00002";

$data = array(
			"shipCreatedTime" => "2015-06-18T10:30:40Z",
			"shipSender" => 
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
			"shipShipment" => 
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
			"shipPickup" => 
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
			"shipInsurance" => false,
			"shipCurrency" => "THB",
			"shipShippingType" => "NEXT_DAY",
			"shipPaymentType" => "COD",
			"shipPickingList" => 
			array(
				0 =>
					array(
						"itemDescription" => "A flagship smartphone",
						"itemQuantity" => 1
					)
			)
		);	


$data_string = json_encode($data);  
echo $data_string."\n";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
	'X-Subject-Token: da28a04909584b06834cef508eefcf4b',
	'User-Agent: Mozilla Firefox',
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_VERBOSE, 1);
$result = curl_exec($ch);
echo $result;


/*

Return :

{"error":{"message":"Validation Failed","errors":[{"message":"shipPaymentType. You are not eligible for this PaymentType.","reason":""},{"message":"partner. \"143\" is an invalid partner ID. Please co
ntact aCommerce support for your partner ID","reason":"invalid_value"},{"message":"shipShippingType. You are not eligible for this ShippingType.","reason":""}]}}

*/

?>