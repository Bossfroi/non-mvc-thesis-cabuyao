<?php
$db = mysqli_connect('localhost', 'root', '', 'agriculture');
  include('../include/sessionfunction/sessionhead.php');
if(isset($_POST['update']))
if(empty($_POST["firstnamee"]) && empty($_POST["lastnamee"]))
{
        echo '<script> if(window.confirm("both are required")){window.location.href="Checkout.php"};</script>';

   }else{

        $firstname = ($_POST["firstnamee"]);
        $lastname = ($_POST["lastnamee"]);
        $address = ( $_POST["addresss"]);
        $email = ($_POST["email"]);
        $address2 = ($_POST["address2"]);
        $phone = ($_POST["Phone2"]);
        $sqls = "UPDATE user set Firstname ='$firstname' ,Lastname ='$lastname' ,address2 ='$address2' ,email ='$email' ,address ='$address' ,Phone ='$phone' where username = '".base64_encode($_SESSION['username']). "'";

        if(mysqli_query($db, $sqls)){

             echo '<script> if(window.confirm("Successfully Updated")){window.location.href="Checkout.php"};</script>';


}else{

  echo "try again";
}

}
?>
