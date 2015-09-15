<?php

//AUTHTOKEN=9882dda954f23d4da680de806293f912Created Authtoken is : 9882dda954f23d4da680de806293f912

$token	=	"4ed471ef35a7755da846c622ad756bac";
$url 	=	"https://crm.zoho.com/crm/private/xml/Leads/getRecords";
$param	=	"authtoken=".$token."&scope=crmapi";
	
$username = "chiqui@banquetesantares.net";
$password = "chiquiantares123.";
$param = "SCOPE=ZohoCRM/crmapi&EMAIL_ID=".$username."&PASSWORD=".$password;
$ch = curl_init("https://accounts.zoho.com/apiauthtoken/nb/create");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
$result = curl_exec($ch);
/*This part of the code below will separate the Authtoken from the result. 
Remove this part if you just need only the result*/
$anArray = explode("\n",$result);
$authToken = explode("=",$anArray['2']);
$cmp = strcmp($authToken['0'],"AUTHTOKEN");
echo $anArray['2'].""; if ($cmp == 0)
{
echo "Created Authtoken is : ".$authToken['1'];
return $authToken['1'];
}
curl_close($ch);
?>