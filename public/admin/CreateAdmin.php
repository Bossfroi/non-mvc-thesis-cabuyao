<!--===========================START PHP INCLUDE =================================================-->
<?php include('include/sessionfunction/sessionhead.php');?>
		<?php include('include/sessionfunction/sessionnav.php');?>

		<!--End Include pogi -->
<!--===============================================================================================-->

<head>
	<style>
		form{
			 width:35%; border-radius: 5px; margin:0 auto;
				padding: 20px;
				font-weight: 300;
		}
		form input[type="text"], input[type="password"]{
			padding:5px;
			outline: none !important;
			background: transparent;
			border-left: none;
			border-right: none;
			border-top: none;
			border-bottom: 1px solid lightgray;

		}
		.div-box-shadow{
      -webkit-box-shadow: 0px 0px 41px -20px rgba(0,0,0,1);
-moz-box-shadow: 0px 0px 41px -20px rgba(0,0,0,1);
box-shadow: 0px 0px 41px -20px rgba(0,0,0,1);
    }
	</style>
</head>
<body>
  <div class= "login-box">
		

<form action="Create-Process.php" method="post" class="div-box-shadow">
	<h6 align="center">Create An Administration Account <br>	 <small  style="color: #82AE46; font-size: 12px;">All fields are required</small><h6><br><br><br>	

		 <label class="col-md-5">Enter Username</label>
		 <input type="text" name="username" required="" placeholder="Username..." class="input10" style="size: 15px; letter-spacing: 0.5px ;"/>
		 <br />
		 <label class="col-md-5">Enter Password</label>
		 <input type="password" class="input10" name="password" required="" placeholder="Password..." style="size: 15px; letter-spacing: 0.5px;"/>
		 <br />
		 <label class="col-md-5">Createdby</label>
		 <input type="text" name="created" class="input10"  readonly="readonly"  value="<?php	echo $_SESSION["username"]?>"/>
		 <br/>
		 <br>
		 <input type="submit" name="register" class="btn btn-success btn-sm" style=" size: 15px; letter-spacing: 0.5px ; float: right" />
		 <br /><br>	
		  </form>
	</body>
  		<?php include('include/sessionfunction/sessionscript.php');?>
<html>
 		