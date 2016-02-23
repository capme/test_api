<?php
$key = "fe868c8788f602061778b49949cf3643";
$url = "https://api.elevenia.co.id/rest/prodservices/product";

$data = <<<_EOT_
<?xml version="1.0" encoding="utf-8"?>
<Product>
  <selMnbdNckNm>Product SWB2N</selMnbdNckNm>
  <prdWght>1</prdWght>
  <selMthdCd>01</selMthdCd>
  <dispCtgrNo>242</dispCtgrNo>
<ProductCtgrAttribute>
    <prdAttrCd>2000005</prdAttrCd>
    <prdAttrNm>Brand</prdAttrNm>
    <prdAttrNo>160881</prdAttrNo>
    <prdAttrVal>NO</prdAttrVal>
  </ProductCtgrAttribute>
   <ProductCtgrAttribute>
      <prdAttrCd>2000005</prdAttrCd>
        <prdAttrNm>Brand</prdAttrNm>
        <prdAttrNo>161583</prdAttrNo>
      <prdAttrVal>NO</prdAttrVal>
   </ProductCtgrAttribute>
   <ProductCtgrAttribute>
      <prdAttrCd>2000000</prdAttrCd>
        <prdAttrNm>Age</prdAttrNm>
        <prdAttrNo>161582</prdAttrNo>
      <prdAttrVal>NO</prdAttrVal>
   </ProductCtgrAttribute>
   <ProductCtgrAttribute>
      <prdAttrCd>2000021</prdAttrCd>
        <prdAttrNm>Flavor</prdAttrNm>
        <prdAttrNo>161584</prdAttrNo>
      <prdAttrVal>NO</prdAttrVal>
   </ProductCtgrAttribute>
  <prdNm>Product SWB2N New</prdNm>
  <advrtStmt>Super Sale For Product SWB2N</advrtStmt>
  <sellerPrdCd>SWB2N</sellerPrdCd>
  <suplDtyfrPrdClfCd>01</suplDtyfrPrdClfCd>
  <prdStatCd>01</prdStatCd>
  <minorSelCnYn>Y</minorSelCnYn>
  <prdImage01>
  <![CDATA[http://www.perfumesdirect.co.in/images/prodsLarge/largeLuxInternationalCreamyWhiteSoap30032013104353.jpg]]>
  </prdImage01>
  <htmlDetail>
  <![CDATA[<p>Detail Barang SWB2N New. Super sale</p>]]>
  </htmlDetail>
  <selTermUseYn>N</selTermUseYn>
  <selPrc>25000</selPrc>
  <prdSelQty>99</prdSelQty>
  <dlvCnAreaCd>01</dlvCnAreaCd>
  <dlvCstInstBasiCd>03</dlvCstInstBasiCd>
  <dlvCst1>2500</dlvCst1>
  <prdFrDlvBasiAmt>50000</prdFrDlvBasiAmt>
  <dlvCstPayTypCd>01</dlvCstPayTypCd>
  <rtngdDlvCst>2500</rtngdDlvCst>
  <exchDlvCst>6000</exchDlvCst>
  <asDetail>After Sales Service : Komplek Cempaka Hijau D-6 Ciputat</asDetail>
  <rtngExchDetail>Return / Exchange : Komplek Cempaka Hijau D-6 Ciputat</rtngExchDetail>
  <company>PT. SUSU MBAK TT</company>
  <brand>Brand ABCD</brand>
  <modelNm>Model XX-1</modelNm>
  <prcCmpExpYn>Y</prcCmpExpYn>
   <tmpltSeq>243148</tmpltSeq>
</Product>
_EOT_;

/*
 *   <addrSeqOut>4</addrSeqOut>
 * <addrSeqIn>8</addrSeqIn>
 *
 */

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/xml; charset: utf-8',
        'openapikey: ' . $key)
);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
echo $result;

?>