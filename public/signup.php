<head>
	<title>AGRICULTURE OF CABUYAO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico">

<!--===============================================================================================-->
<!--===============================================================================================-->
<?php include('include/head.php');?>
		<?php include('include/navbar.php');?>
		<?php include('include/script.php');?>

		<!--End Include pogi -->
<!--===============================================================================================-->
</head>

<body>
	<div class="limiter" >
	<div class="container-login100" >
	<div  class="wrap-login100 p-t-50 p-b-90" >
	 <div  class="login100-form validate-form flex-sb flex-w">
		 <h1>Register</h1>
       <form action="signup-process.php" method="post" enctype="multipart/form-data">
            <label>Enter Username</label>
            <input class="wrap-input100 validate-input m-b-16" type="text" name="username" class="a" required autofocus />
						<div class="form_error"  <?php if (isset($name_error)): ?><?php endif ?> >
						<?php if (isset($name_error)): ?>
	        	<span><?php echo $name_error; ?></span>
	          <?php endif ?>
						</div>
            <br />
            <label>Enter Password</label>
            <input class="wrap-input100 validate-input m-b-16" type="password" name="password" class="a" required autofocus />
            <br />
             <label>Enter Email</label>
            <input class="wrap-input100 validate-input m-b-16" type="email" name="email" class="a" required autofocus />
						<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
						<?php if (isset($email_error)): ?>
			      <span><?php echo $email_error; ?></span>
		        <?php endif ?>
						</div>
            <br />
             <label>Address</label>
            <input class="wrap-input100 validate-input m-b-16" type="address" name="address" class="a" required autofocus />
            <br />
             <label>Phone#</label>
            <input class="wrap-input100 validate-input m-b-16"type="text" name="Phone1" class="a" required autofocus />
            <br />

            <label>ValidID</label>
            <input class="wrap-input100 validate-input m-b-16" type="file" name="fileToUploadacc" id="fileToUploadacc" class="c" required="" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png">

            <label>Photo</label>
        <input class="wrap-input100 validate-input m-b-16" type="file" name="fileToUpload" id="fileToUpload" class="c" required="" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png">
           <div class="container-login100-form-btn m-t-17">
			  <button class="login100-form-btn" type="submit" name="register" value="register" id="register" class="btn btn-info" />Register </button>
            <br />
						   </form>
            <p align="right"> <a href="login.php">Login an Account</a></p>
    </div>
    </body>


<html>
<script>
 $(document).ready(function(){
      $('#register').click(function(){
           var image_name = $('#fileToUploadacc').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#fileToUploadacc').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#fileToUploadacc').val('');
                     return false;
                }
           }
      });
 });

 $(document).ready(function(){
 		 $('#register').click(function(){
 					var image_name = $('#fileToUpload').val();
 					if(image_name == '')
 					{
 							 alert("Please Select Image");
 							 return false;
 					}
 					else
 					{
 							 var extension = $('#fileToUpload').val().split('.').pop().toLowerCase();
 							 if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
 							 {
 										alert('Invalid Image File');
 										$('#fileToUpload').val('');
 										return false;
 							 }
 					}
 		 });
 });
 </script>
