<?php 
$xml = simplexml_load_string($result, 'SimpleXMLElement', LIBXML_NOERROR | LIBXML_NOWARNING);
			
			$id = '';
			
			$id = $xml->result->recorddetail->FL[0];
			if ($id <> ''){
				$url = "https://crm.zoho.com/crm/private/xml/Leads/uploadFile";
				$param= "authtoken=".$token."&scope=crmapi&id=".$id."&content=".JPATH_COMPONENT.DS."assets".DS."cotizacion.pdf";
				
				$post = array('authtoken' => $token,'scope' => 'crmapi', 'id' => $id, 'content'=>'@'.JPATH_COMPONENT.DS."assets".DS."cotizacion.pdf");

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_TIMEOUT, 30);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				$result = curl_exec($ch);
				curl_close($ch);
				
				echo $result;
			}
?>