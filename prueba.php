<?php

header("Content-type: application/xml");
#$token="9882dda954f23d4da680de806293f912";
$token="f19ad4cf9ecfb802a8da2254bfa6b43d";
$url = "https://crm.zoho.com/crm/private/xml/Leads/insertRecords";

$xml = '
<Leads>
<row no="1">
<FL val="Lead Source">Web Download</FL>
<FL val="Company">Huguntu 6</FL>
<FL val="First Name">Huguntu 6</FL>
<FL val="Last Name">Smith</FL>
<FL val="Email">testing@testing6.com</FL>
<FL val="Title">Manager</FL>
<FL val="Phone">1234567890</FL>
<FL val="Home Phone">0987654321</FL>
<FL val="Other Phone">1212211212</FL>
<FL val="Fax">02927272626</FL>
<FL val="Mobile">292827622</FL>
<FL val="Lugar de preferencia del Evento">jajajaja</FL>
<FL val="Horario probable del evento">jajajaja</FL>
<FL val="Lugar de preferencia del Evento">Salón Altea</FL>
<FL val="Lead Owner">Melany Zelada</FL>
<FL val="LEADCF1">Salón Altea</FL>
</row>
</Leads>
';

#Sal&oacute;n&#x20;Altea&#x20;
$param= "newFormat=1&wfTrigger=true&authtoken=".$token."&scope=crmapi&xmlData={$xml}";
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