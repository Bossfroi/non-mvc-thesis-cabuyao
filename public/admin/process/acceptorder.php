<?php
      include('../../ctmls.io');

      function itexmo($number,$message,$apicode){
        $ch = curl_init();
        $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
        curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
        curl_setopt($ch, CURLOPT_POST, 1);
         curl_setopt($ch, CURLOPT_POSTFIELDS,
                  http_build_query($itexmo));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        return curl_exec ($ch);
        curl_close ($ch);
  }
    $id1 = $_GET['id'];
      $accept = 2;

    $query = "update buyproduct set Orderstatus=$accept where `id` = '$id1';";
        if(performQuery($query)){

        }else{
            echo "Unknown error occured. Please try again.";
        }
        $query1 = "SELECT * FROM buyproduct WHERE id='$id1'";
        $result = mysqli_query($conn, $query1);
        if(mysqli_num_rows($result))
        $row = mysqli_fetch_array($result);
        $number = $row['Contact'];
        $message= ' Your order has been ship by agriculture of cabuyao laguna ProductName: '.$row['product_name'].' PRICE:'.$row['Price'].'';
        $apicode="TR-DIGIT795332_WCGYH";
$result = itexmo("$number","$message","$apicode");
if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.
Please CONTACT US for help. ";
}else if ($result == 0){
echo "Message Sent!";
$url=$_SERVER['HTTP_REFERER'];
header("location:$url");
}
else{
echo "Error Num ". $result . " was encountered!";
$url=$_SERVER['HTTP_REFERER'];
header("location:$url");
}


?>
