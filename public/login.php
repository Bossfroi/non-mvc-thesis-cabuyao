<!--===========================START PHP INCLUDE =================================================-->
<?php include('include/head.php');?>
		<?php include('include/navbar.php');?>

		<!--End Include pogi -->
<!--===============================================================================================-->


<html lang="en">
<head>
	<title>AGRICULTURE OF CABUYAO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<body>
	<div class="limiter" >
	<div class="container-login100" >
	<div  class="wrap-login100 p-t-50 p-b-90" >
	 <div  class="login100-form validate-form flex-sb flex-w">
		<span class="login100-form-title p-b-51">Welcome
			</span>

    <form action="processindex.php" method="post">
		<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
				<input class="input100" type="text" name="username" placeholder="Username">
			</div>
			<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
				<input class="input100" type="password" name="password" placeholder="Password">
			</div>

			<div class="flex-sb-m w-full p-t-3 p-b-24">
				<div class="contact100-form-checkbox">
					<a href="admin/index.php" class="nav-link">Admin?</a></li>
					</label>
				</div>

				<div>
					<a href="index.php" class="txt1">
						Forgot?
					</a>
				</div>
			</div>

			<div class="container-login100-form-btn m-t-17">
				<button class="login100-form-btn" name="login">
					Login
				</button>
				  <p align="right"> <a href="signup.php">Singup an account?</a></p>
					|    <p align="center"> <a href="index.php">Go back to the page</a></p>
    </div>
	</form>
</body>
		<?php include('include/script.php');?>
</html>
