<?php

if(isset($_SESSION["username"]))
{
}

$db = mysqli_connect('localhost', 'root', '', 'agriculture');
  require_once 'ctmls.io';
if(isset($_POST['register']))
$username = $_POST['username'];
$email = $_POST['email'];
$username = base64_encode($username);
$usern= $username;
{
		if(empty($_POST["username"]) && empty($_POST["password"]) && empty($_POST["email"]) && empty($_POST["address"]) && empty($_POST["Phone1"]) && empty($_POST["fileToUploadacc"]) && empty($_POST["fileToUpload"]))
		{
				 echo '<script>alert("Both Fields are required")</script>';

		}
		else
		{
 }
 $sql_u = "SELECT * FROM user WHERE username='$username'";
 $sql_e = "SELECT * FROM user WHERE email='$email'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db,$sql_e);
    if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken";
      echo '<script> if(window.confirm("Sorry Your Username has already taken.Please be carefull ! Thank you.")){window.location.href="signup.php?action=login"};</script>';
  	}else if(mysqli_num_rows($res_e) > 0){
  	    $email_error = "Sorry... email already taken";
          echo '<script> if(window.confirm("Your not Registered Email has already taken.please be carefull! Thank you.")){window.location.href="signup.php?action=login""};</script>';
  	}else{

				 $username = ($_POST["username"]);
				 $Message = "Administrator would like to request an account.";
				 $password = ($_POST["password"]);
			   $password = md5($password);
				 $email = ($_POST["email"]);
				 $address = ( $_POST["address"]);
				 $Phone = ($_POST["Phone1"]);
				 $validid = addslashes(file_get_contents($_FILES["fileToUploadacc"]['tmp_name']));
				 $fileToUpload = addslashes(file_get_contents($_FILES["fileToUpload"]['tmp_name']));
				 $query = "insert into requestuser (Username, Password, Email, Address ,Phone ,ValidID ,Photo ,Message,date) values ('$usern', '$password', '$email', '$address', '$Phone', '$validid', '$fileToUpload','$Message', CURRENT_TIMESTAMP)";

				 if(performQuery($query))
				 {
							echo '<script> if(window.confirm("Your account request is now pending for approval. Please wait for confirmation. Thank you.")){window.location.href="login.php"};</script>';

          }else{
            echo '<script> if(window.confirm("Your not Registered Please be Carefull. Thank you.")){window.location.href="login.php"};</script>';
				 }
       }

		}
?>
