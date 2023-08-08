<!--===========================START PHP INCLUDE =================================================-->
<?php include('include/sessionfunction/sessionhead.php');?>
		<?php include('include/sessionfunction/sessionnav.php');?>

		<!--End Include pogi -->
<!--===============================================================================================-->


<body>
  <div class= "login-box">
		<h6>Create An Administration Account<h6>

<form action="Create-Process.php" method="post">
	<br>
		 <label>Enter Username</label>
		 <input type="text" name="username" required="" class="input100" style="border:3px solid green !important;  size: 15px; letter-spacing: 0.5px ;"/>
		 <br />
		 <label>Enter Password</label>
		 <input type="password" class="input100" name="password" required="" style="border:3px solid green !important;  size: 15px; letter-spacing: 0.5px;"/>
		 <br />
		 <label>Createdby</label>
		 <input type="text" name="created" class="input10"  readonly="readonly"  value="<?php	echo $_SESSION["username"]?>"/>
		 <br/>
		 <input type="submit" name="register" class="btn btn-info" style="border:3px solid green !important;  size: 15px; letter-spacing: 0.5px ;" />
		 <br />
		  </form>
		 <p align="right"> <a href="logout.php">Lagout?</a></p>
	</body>
  		<?php include('include/sessionfunction/sessionscript.php');?>
<html>
