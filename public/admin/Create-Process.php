<?php
$connect = mysqli_connect("localhost", "root", "", "agriculture");
session_start();
if(isset($_SESSION["username"]))
{

}
if(isset($_POST["register"]))
{
		if(empty($_POST["username"]) && empty($_POST["password"]) && empty($_POST["created"]))
		{
				 echo '<script>alert("Both Fields are required")</script>';
		}
		else
		{
				 $username = mysqli_real_escape_string($connect, $_POST["username"]);
				 $username = base64_encode($username);
				 $password = mysqli_real_escape_string($connect, $_POST["password"]);
				 $createdBy = mysqli_real_escape_string($connect, $_POST["created"]);
				 $password = md5($password);
				 $query = "INSERT INTO admin (Username, Password, createdBy) VALUES ('$username', '$password', '$createdBy')";
				 if(mysqli_query($connect, $query))

				 {
							echo '<script> if(window.confirm("Admin has been Created")){window.location.href="adminEntry.php"};</script>';
				 }
		}
}
?>
