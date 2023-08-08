<?php


function itexmo($number,$msg,$apicode='TR-DIGIT795332_WCGYH'){
			$ch = curl_init();
			$itexmo = array('1' => $number, '2' => $msg, '3' => $apicode);
			curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
			curl_setopt($ch, CURLOPT_POST, 1);
			 curl_setopt($ch, CURLOPT_POSTFIELDS,
			          http_build_query($itexmo));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			return curl_exec ($ch);
			curl_close ($ch);

}
$result = (iTexMo($number11,$msg,"TR-DIGIT795332_WCGYH"));
if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.
Please CONTACT US for help. ";
}else if ($result == 0){
echo "Message Sent!";
}
else{
echo "Error Num ". $result . " was encountered!";
}
 ?>
