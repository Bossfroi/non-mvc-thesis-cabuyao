<style>
	.process{
		text-align:center;
		color:#82AE46;
		font-weight: bold;
	}

	.container{
		width: 100%;
	}
	.progressbar{
		counter-reset:step;
	}
	.progressbar li{

		list-style-type: none;
		float:left;
		width: 33.33%;
		position:relative;
		text-align: center;
		font-size: 10px;
		text-transform: uppercase;
	}
	.progressbar li:before{

		content: counter(step);
		counter-increment:step;
		width: 30px;
		height: 30px;
		line-height: 30px;
		border: 1px solid #ddd;
		display: block;
		text-align: center;
		margin: 0 auto 10px auto;
		border-radius: 50%;
		background-color: white;
	}
	.progressbar li:after{

		content: ' ' ;
		position: absolute;
		width:100%;
		height: 1px;
		background: #ddd;
		top:15px;
		left: -50%;
		z-index:-1;
	}
	.progressbar li:first-child:after{
		content:none;
	}
	.progressbar li.active{
		color:#82AE46;
	}
	.progressbar li.active:before{
		background-color:#82AE46;
	}
	.progressbar li.active + li:after {
		background-color:#82AE46;
	}
	table{
		font-family: arial, san-serif;
		border-collapse: collapse;
		width: 100%;
		font-size: 13px;
		text-align: center;

	}
	td, th{
		text-align: center;
		padding: 10px;
		font-size: 13px;
	}
	.process{
		text-align: center;
		color: #0DA13A;
	}
	td a:hover{
		border:none;
		outline:none !important;
	}
	.custom-selects, input, textarea{
		background: none;
	}

	.custom-selects{
		border-left: none;
		border-right: none;
		border-top: none;
		border-bottom: 1px solid gray;
		outline: none !important;
		padding: 5px;
		width: 50%;
	}


	input[type="text"],  textarea{
		border-left: none;
		border-right: none;
		border-top: none;
		border-bottom: 1px solid gray;
		font-size: 16px;
		outline: none !important;
		margin-bottom: 10px;
		width: 50%;
	}

	input[type=text]:hover{
		border-bottom: 1px solid #82AE46;
		cursor: pointer;
	}
	form{
		color: #333;
	}

	.div-box-shadow{
		-webkit-box-shadow: 0px 0px 41px -20px rgba(0,0,0,1);
-moz-box-shadow: 0px 0px 41px -20px rgba(0,0,0,1);
box-shadow: 0px 0px 41px -20px rgba(0,0,0,1);
	}




			/*a{
				word-spacing: 25px;
				}*/
				.hero{
				}
			</style>
<!DOCTYPE html>
<html lang="en">
<!--===========================START PHP INCLUDE SESSION   ========================================-->
<?php include('../include/sessionfunction/sessionhead.php');?>
		<?php include('../include/sessionfunction/sessionnav.php');?>
		<?php INCLUDE('Process/Order-process.php') ?>

		<!--End Include pogi -->
<!--===============================================================================================-->

<head>
 	<style>

			.process{

				text-align: center;
				color: blue;
				bottom: 20%;
			body{


			}

 	</style>


</head>





  <body class="goto-here">
    <div class="hero-wrap hero-bread" style="background-size: cover; background-image: linear-gradient(rgba(0, 0 , 0, 0.1), rgba(0, 0, 0, 0.1)), url('../assets/images/landscape 2.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">

        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container-fluid">


    	<form method="POST">

    					<strong> <h1 style="color:green;"> ITEM REQUEST FORM</h1> </strong>

   <div class="limiter" >
	  <div class="container-login100" >
	 	 <div  class="wrap-login100 p-t-50 p-b-90" >
	   		<div  class="login100-form validate-form flex-sb flex-w">
					<label> Enter username: </label>
					<span> <input class="wrap-input100 validate-input m-b-16" value="<?php	echo $_SESSION["username"]?>" readonly type="text" name="name" required autofocus /> </span>

					<label> Enter address: </label>
					<span>	<input class="wrap-input100 validate-input m-b-16" type="text" name="address" required autofocus /> </span>

					<label> Enter mobile #: </label>
					<span>	<input class="wrap-input100 validate-input m-b-16" type="text" name="mobile" required autofocus /> </span>
          <select name="requestss">
					<label > Choose a product to request </label>
					<option selected  value="Fertilize"> Fertilizer </option>
					<option value="Equipment"> Equipment </option>
					<option value="tools"> tools </option>
					<option value="Pesticide"> Pesticide </option>
					<option value="insecticides"> insecticides </option>
					<option value="soils"> soils </option>
					<option value="Other"> Other </option>
					</select>
					<p> Please Specify
					<input class="" type="text" name="others"></p>
					<textarea class="form-control" name="message" value="Message"></textarea>
         	<label> Enter your reason </label>

					<input class="center" type="submit" class="btn btn-primay" name="submit">
				</input>
			</div>
		  </div>
	   </div>
	</div>


</form>


<section class="ftco" style="padding: 10px; margin-left: 10px; width: 68%">
		<h3>Status <br> <small style="font-size: 12px; margin-top:15px;">All Status your request to agriculture here</small></h3>

		<div class="div-box-shadow" style="padding: 20px;">
		<table class="  table-sm table-striped	 ">
			<thead>
				<tr>
					<th> Address </th>
					<th> phone# </th>
					<th> Request</th>
					<th> Specify </th>
					<th> message </th>
					<th> Status </th>
				</tr>
			</thead>
			<?php
			$rev = 0; $net =0;
			require_once '../ctmls.io';
			$query = "SELECT * FROM `itemrequestform` where name = '".($_SESSION['username'])."' order by id desc ";
			if(count(fetchAll($query))>0){
				foreach(fetchAll($query) as $row){
					?>
					<tr>
						<td class="text-center"><?php echo $row['address'] ?> </td>
						<td class="text-center"><?php echo $row['mobile'] ?> </td>
						<td class="text-center"><?php echo $row['request'] ?> </td>'
						<td class="text-center"><?php echo $row['others'] ?> </td>'
						<td class="text-center"><?php echo $row['message'] ?> </td>
						<?php if (($row['stat']) && $row['stat'] == 1): ?>
						<td class="text-center"><p style="color:green;"> ACCEPTED</p> </td>
					<?php elseif (($row['stat']) && $row['stat'] == 2): ?>
          <td>  <p style="color:red;"> Rejected</p></td>
					<?php else:?>
					<td><p style="color:red;"> Rejected</p></td>
							<?php
						endif;
						 }}
							 ?>
							</ul>
							</div>
							</div></td> <!-- Status -->
							<hr>
							</tr>
							</table>

    			</div>
    		</div>
    </section>
		<?php include ('../include/footer.php');?>
	   <!-- loader -->
	 	<?php include('../include/sessionfunction/sessionscript.php');?>
  </body>
</html>
