<?php

header("Content-type: application/xml");
$token="9882dda954f23d4da680de806293f912";
$url = "https://crm.zoho.com/crm/private/xml/Leads/insertRecords";

$xml = '
<Leads>
<row no="1">
<FL val="Lead Source">Web Download</FL>
<FL val="Company">Huguntu</FL>
<FL val="First Name">Hannah</FL>
<FL val="Last Name">Smith</FL>
<FL val="Email">testing@testing.com</FL>
<FL val="Title">Manager</FL>
<FL val="Phone">1234567890</FL>
<FL val="Home Phone">0987654321</FL>
<FL val="Other Phone">1212211212</FL>
<FL val="Fax">02927272626</FL>
<FL val="Mobile">292827622</FL>
</row>
</Leads>
';

$param= "newFormat=1&authtoken=".$token."&scope=crmapi&xmlData={$xml}";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
return $result;
?>