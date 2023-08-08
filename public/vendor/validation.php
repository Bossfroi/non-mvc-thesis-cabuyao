<?php
$db = mysqli_connect('localhost', 'root', '', 'agriculture');
$username = $_POST['username'];
$email = $_POST['email'];
$sql_u = "SELECT * FROM user WHERE username='$username'";
$sql_e = "SELECT * FROM user WHERE email='$email'";
$res_u = mysqli_query($db, $sql_u);
$res_e = mysqli_query($db,$sql_e);
if (mysqli_num_rows($res_u) > 0) {
  $name_error = "Sorry... username already taken";
  echo "Your not Registered because Username has already taken.Please be carefull ! Thank you.";
}else if(mysqli_num_rows($res_e) > 0){
    $email_error = "Sorry... email already taken";
      echo "Your not Registered because Email has already taken.please be carefull! Thank you.";
}else{

  echo "username $username ok.please be carefull! Thank you.";


}

?>
