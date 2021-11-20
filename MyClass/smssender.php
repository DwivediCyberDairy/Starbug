<?php
class SMSSender
{
function sendSMS($mob,$msg)
{
$msg_data='<?xml version="1.0"?>
<parent>
<child>
<user>KSSCKT</user>
<key>41f95f660fxx</key>
<mobile>'.$mob.'</mobile>
<message>'.$msg.'</message>
<accusage>1</accusage>
<senderid>KSSCKT</senderid>
</child>
</parent>';

$URL = "http://t.160smsalert.com/submitsms.jsp?";

$ch = curl_init($URL);
curl_setopt($ch, CURLOPT_ENCODING, "UTF-8");
curl_setopt($ch, CURLOPT_HTTPHEADER, array("content-type: application/xml"));
curl_setopt($ch, CURLOPT_POSTFIELDS, "$msg_data");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);

$res=substr(trim($output),0,4);
if($res=="sent")
    return true;
else 
	return false;
}
}
 ?>