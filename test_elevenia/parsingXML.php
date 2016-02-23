
<?php

$dataXML = "
<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>
	<ns2:productCtgrAttributes xmlns:ns2=\"http://skt.tmall.business.openapi.spring.service.client.domain\">
		<ns2:productCtgrAttribute>
			<prdAttrCd>2000005</prdAttrCd>
			<prdAttrNm>Brand</prdAttrNm>
			<prdAttrNo>160881</prdAttrNo>
		</ns2:productCtgrAttribute>
		<ns2:productCtgrAttribute>
			<prdAttrCd>2000017</prdAttrCd>
			<prdAttrNm>Fabric</prdAttrNm>
			<prdAttrNo>160882</prdAttrNo>
		</ns2:productCtgrAttribute>
		<ns2:productCtgrAttribute>
			<prdAttrCd>2000042</prdAttrCd>
			<prdAttrNm>Neck Style</prdAttrNm>
			<prdAttrNo>160883</prdAttrNo>
		</ns2:productCtgrAttribute>
		<ns2:productCtgrAttribute>
			<prdAttrCd>2000058</prdAttrCd>
			<prdAttrNm>Sleeve Length</prdAttrNm>
			<prdAttrNo>160884</prdAttrNo>
		</ns2:productCtgrAttribute>
	</ns2:productCtgrAttributes>
	";
$p = xml_parser_create();
xml_parser_set_option($p, XML_OPTION_CASE_FOLDING, 0);
xml_parser_set_option($p, XML_OPTION_SKIP_WHITE, 1);
xml_parse_into_struct($p, $dataXML, $vals, $index);
xml_parser_free($p);
echo "Index array\n";
print_r($index);
echo "\nVals array\n";
print_r($vals);
?>