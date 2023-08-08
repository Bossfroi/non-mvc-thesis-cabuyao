<?php include('../../include/sessionfunction/sessionhead.php');?>
<?php    require_once '../../ctmls.io'; ?>
<?php
$query1 =  "SELECT * FROM `cart` where UsernameCart = '".($_SESSION['username'])."'";
if(count(fetchAll($query1)) > 0){
  foreach(fetchAll($query1) as $rows){
    $location = $rows['Location'];
    $productname = $rows['product_name'];
    $caat = $rows['Category'];
    $address = $rows['address'];
    $post = $rows['post'];
    $contact = $rows['Contact'];
    $photo = ($rows['Photo']);
    $price = $rows['quantity'] * $rows['Price'];
    $usernameseller = $rows['Usernameseller'];
    $usernameCart = $_SESSION['username'];
    $kg = $rows['KG'];
    $ITEMID = $rows['ITEMID'];
    $quantity =$rows['quantity'];
    $date1 = ($rows['date']);
    $stat = ($rows['Orderstatus']=1);

      $query1 = ("INSERT  into  `buyproduct` (`id`,`Location`, `Category`, `product_name`, `address`, `post`, `Contact`, `Photo`, `Price`, `Usernameseller`, `UsernameBuyer`, `KG`, `ITEMID`,`Quantity`, `date` ,`Orderstatus`)
       VALUES  (NULL,'$location', '$caat', '$productname', '$address', '$post', '$contact', '$photo', '$price', '$usernameseller', '$usernameCart', '$kg', '$ITEMID' ,'$quantity', CURRENT_TIMESTAMP ,'$stat');");
  $query1 .= "DELETE FROM `cart` WHERE  UsernameCart = '".($_SESSION['username'])."'";

 if(performQuery(++$query1)){
     echo '<script> window.alert("Your Order has been Processed. Please wait for confirmation. Thank you.");{window.location.href="../successfullybuy.php"};</script>';
}else{
  echo "try again";

}
}
}
?>
