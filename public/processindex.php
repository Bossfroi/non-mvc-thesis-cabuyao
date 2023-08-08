
 <?php
 include('include/head.php');

 $connect = mysqli_connect("localhost", "root", "", "agriculture");
 session_start();
  require_once 'ctmls.io';
 if(isset($_POST["login"]))
 {
      if(empty($_POST["username"]) && empty($_POST["password"]))
      {
           echo '<script> if(window.confirm("Invalid Username Or Password ")){window.location.href="login.php"};</script>';

        ;
      }
      else
      {
           $username = ( $_POST["username"]);
           $username = base64_encode($username);
           $password = ($_POST["password"]);
           $password = md5($password);
           $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
           $result = mysqli_query($connect, $query);
           if(mysqli_num_rows($result) > 0)
           {
                $_SESSION['username'] = base64_decode($username);
                $row = mysqli_fetch_array($result);
                  $_SESSION['userid']=$row['id'];
             echo '<script> if(window.confirm("Successfully ")){window.location.href="entrysession/main.php"};</script>';
           }
           else
           {

             echo '<script> if(window.confirm("Invalid Username Or Password ")){window.location.href="login.php"};</script>';


           }
      }
 }
 ?>
