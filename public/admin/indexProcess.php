<?php
$connect = mysqli_connect("localhost", "root", "", "agriculture");
session_start();

if(isset($_POST["login"]))
{
     if(empty($_POST["username"]) && empty($_POST["password"]))
     {
         echo '<script>alert("Valid password and user ")</script>';
     }
     else
     {
          $username = ($_POST["username"]);
          $username = base64_encode($username);
          $password = ($_POST["password"]);
          $password = md5($password);
          $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
          $result = mysqli_query($connect, $query);
          if(mysqli_num_rows($result) > 0)
          {
               $_SESSION['username'] = base64_decode($username);
               echo '<script> if(window.confirm("Successful log-in")){window.location.href="adminEntry.php"};</script>';


          }
          else
          {

            echo '<script> if(window.confirm("Invalid Username Or Password ")){window.location.href="index.php"};</script>';


          }
     }
}
?>
