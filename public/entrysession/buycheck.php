<?php include('../../include/sessionfunction/sessionhead.php');?>
<?php    require_once '../../ctmls.io';
$id = $_GET['id'];
$sql_u = "SELECT * FROM cart WHERE ITEMID='$id' and  UsernameCart='".$_SESSION['username']."'";
$res_u = mysqli_query($conn, $sql_u);
if(mysqli_num_rows($res_u) > 0) {
//CHECKING
$query1 = "select * from cart where ITEMID='$id' and UsernameCart='".$_SESSION['username']."'";
 if(count(fetchAll($query1)) > 0){
    foreach(fetchAll($query1) as $rows){
      $count=$rows['quantity'];
        $new_count=$count+1;
    }
  }

$sqls = "UPDATE cart set quantity=$new_count WHERE ITEMID='$id'";
if(mysqli_query($conn, $sqls)){
  echo '<script> window.alert("You already carted '.$new_count.' this product Thank you.");{window.location.href="../checkout.php"};</script>';

}
}else{
   ?>
<?php
    $id = $_GET['id'];
    $query1 = "select * from sellaproduct where `id` = '$id' ";
     if(count(fetchAll($query1)) > 0){
        foreach(fetchAll($query1) as $rows){
            $id== $rows['id'];
          $location = $rows['Location'];
          $caat = $rows['Category'];
          $productname = $rows['product_name'];
          $address = $rows['address'];
          $post = $rows['post'];
          $contact = $rows['Contact'];
          $photo = base64_encode($rows['Photo']).'" height="250" width="350"/></td>"';
          $price = $rows['Price'];
          $usernameseller = $rows['Usernameseller'];
          $usernameCart = $_SESSION['username'];
          $kg = $rows['KG'];
          $ITEMID = $_GET['id'];
          $quantity =$rows['Quantity'] = 1;
          $date1 = ($rows['date']);
          $query1 = "INSERT INTO cart (`id`,`Location`, `Category`, `product_name`, `address`, `post`, `Contact`, `Photo`, `Price`, `Usernameseller`, `UsernameCart`, `KG`, `ITEMID`,`Quantity`, `date`)  VALUES  (NULL,'$location', '$caat', '$productname', '$address', '$post', '$contact', '$photo', '$price', '$usernameseller', '$usernameCart', '$kg', '$ITEMID' ,'$quantity', CURRENT_TIMESTAMP);";
        }

        if(performQuery($query1)){
          echo '<script> window.alert("You already carted '.$new_count.' this product Thank you.");{window.location.href="../checkout.php.php"};</script>';

        }else{
            echo "TRY";
        }
    }else{
        echo "ERROR.";
    }

}

?>
<br/><br/>
