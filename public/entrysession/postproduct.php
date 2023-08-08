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
				<!--===========================START PHP INCLUDE SESSION   ========================================-->
				<?php include('../include/sessionfunction/sessionhead.php');?>
				<?php include('../include/sessionfunction/sessionnav.php');?>
				<!--End Include pogi -->

				<!--===============================================================================================-->
				<html lang="en">
				<div class="hero-wrap hero-bread" style="background-image: url('../assets/images/landscape.jpg');">
					<div class="container">
						<div class="row no-gutters slider-text align-items-center justify-content-center">
							<div class="col-md-9 ftco-animate text-center">
								<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
								<h1 class="mb-0 bread">Products</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row " style="padding: 30px;">
					<div class="col-md-4 row" style="padding:10px;">

						<h3>Product <br><small style="font-size:12px;">You can post your product here</small></h3>

						<form action="#" method="post" enctype="multipart/form-data" class="div-box-shadow" style="padding: 20px; border-radius: 5px;">
							<div id="forums_content">
								<label for="listbox1" class="col-md-5">Barangay:</label>
								<select id="listbox1" name="location" class="text custom-selects">
									<option selected>Mamatid</option>
									<option>Pulo</option>
									<option>Bigaa</option>
									<option>Niugan</option>
									<option>Gulod</option>
									<option>Marinig</option>
									<option>Sala</option>
									<option>Casile</option>
									<option>Pittland</option>
									<option>San Isidro</option>
									<option>Baclaran</option>
									<option>Banlic</option>
									<option>Banay-banay</option>
									<option>Butong</option>
									<option>Pob Uno</option>
									<option>Pob Dos</option>
									<option>Pob Tres</option>
									<option>Diezmo</option>
								</select><br><small style="margin-left: 220px;" class="text-dark"><i>Select barangay where product came from</i></small><br><br>
								<label for="listbox1" class="col-md-5">Category:</label>
								<select id="listbox1" name="cat" class="text custom-selects">
									<option selected>Vegetables</option>
									<option>Fruits</option>
									<option>Fish</option>
									<option>Meats</option>
								</select>
								<label class="col-md-5">Product Name</label>
								<input type="text" name="Productname" required autofocus placeholder="ex. Fresh Strawberry"  class="form-control:-ms-input-placeholder"/><br>

								<label class="col-md-5">Description</label>
								<textarea style="resize: none" name="description" id="txt_forum" placeholder="Description"></textarea><br>

								<label class="col-md-5">Price</label>
								<input type="text" id="control" name="price" required autofocus placeholder="00.00" maxlength="9" onkeyup="enterNumber()" class="form-control:-ms-input-placeholder"><br>


								<label class="col-md-5">Product Address</label>
								<input type="text" name="address" required autofocus   placeholder="location" class="form-control:-ms-input-placeholder"><br>

								<label class="col-md-5">Phone No.</label>
								<input type="text" name="contact" id="controlphone" required autofocus maxlength="12" onkeyup="enterphone()" placeholder="0900-000-0000"> <br>
								<label class="col-md-5">Kilogram</label>
								<input type="text" id="controlkg" name="KG" required autofocus placeholder="KG/min" maxlength="5" onkeyup="enterkg()" /><br>
								<input type="text" name="created"  hidden  value="<?php	echo $_SESSION["username"]?>"/> <br>

								<input type="text" name="userid" class="input10" hidden value="ako lang"/>

								<input type="file" name="picture" id="picture" class="btn btn-sm"  accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" required autofocus><br>
								<small><i>Upload image of your product</i></small>
								<button type="submit" name="submit" class="btn btn-primary btn-sm" id="btn_postForum" style=" float:right">Post Product</button>
								<!--===================================javascript========================================================-->
								<script type="text/javascript">

									function enterNumber(){

										var e = document.getElementById('control');

										if (!/^[0-9.+,]+$/.test(e.value))
										{
											alert("Please enter only number.");
											e.value = e.value.substring(0,e.value.length-10000);
										}
									}

								</script>
								<script type="text/javascript">

									function enterkg(){

										var e = document.getElementById('controlkg');

										if (!/^[0-9.+]+$/.test(e.value))
										{
											alert("Please enter only number.");
											e.value = e.value.substring(0,e.value.length-10000);
										}
									}

								</script>
								<script type="text/javascript">

									function enterphone(){

										var e = document.getElementById('controlphone');

										if (!/^[0-9.+,]+$/.test(e.value))
										{
											alert("Please enter only number.");
											e.value = e.value.substring(0,e.value.length-10000);
										}
									}

								</script>
								<!--===============================================================================================-->
								<!--=======================================php===================================================-->
								<?php
								require_once '../ctmls.io';
								if(isset($_SESSION["username"]))
								{
								}
								if(isset($_POST['submit']))
								{
									if(empty($_POST["price"]))
									{
										echo '<script>alert("Both Fields are required")</script>';

									}
									else
									{
									}
									$location = ($_POST["location"]);
									$cacc = ($_POST["cat"]);
									$productname = ($_POST["Productname"]);
									$address = ($_POST["address"]);
									$post = ($_POST["description"]);
									$contact = ($_POST["contact"]);
									$pics = addslashes(file_get_contents($_FILES["picture"]['tmp_name']));
									$price = ($_POST["price"]);
									$create = ($_POST["created"]);
									$Userid = ($_POST["userid"]);
									$kg = ($_POST["KG"]);
									//modify Total Kilo//
									$query = "insert into sellaproduct (Location ,Category ,product_name ,address ,post ,contact ,Photo ,Price ,Usernameseller ,UsernameID ,KG ,date) values ('$location','$cacc','$productname', '$address','$post','$contact','$pics','$price','$create','$Userid','$kg', CURRENT_TIMESTAMP)";

									if(performQuery($query))
									{
										echo '<script> if(window.confirm("Successfully")){window.location.href="shop.php"};</script>';


									}else{
										echo"fail";
									}

								}
								?>
								<br>
							</div>
						</form>
					</div>

								<section class="ftco" style="padding: 10px; margin-left: 10px; width: 68%">
										<h3>Status <br> <small style="font-size: 12px; margin-top:15px;">All Status of the product is listed here</small></h3>

										<div class="div-box-shadow" style="padding: 20px;">
										<table class="  table-sm table-striped	 ">
											<thead>
												<tr>
													<th> Your Products </th>
													<th> Buyer </th>
													<th> Quantity</th>
													<th> Price </th>
													<th> Date </th>
													<th> Status </th>
													<th> Admin actions </th>
												</tr>
											</thead>
											<?php
											$rev = 0; $net =0;
											require_once '../ctmls.io';
											$query = "SELECT * FROM `buyproduct` where Usernameseller = '".($_SESSION['username'])."' order by id desc ";
											if(count(fetchAll($query))>0){
												foreach(fetchAll($query) as $row){
													?>
													<tr>
														<td class="text-center"><a href="shoppost.php?id=<?php echo $row['ITEMID'] ?>"> <?php echo $row['product_name'] ?></td>
															<td class="text-center"><?php echo $row['UsernameBuyer'] ?> </td>
															<td  class="text-center"> <?php echo $row['quantity'] ?> </td>
															<td class="text-center" style="color:maroon">₱<?php echo number_format ($row['Price'])."\n"?> </td>
															<td class="text-center"><?php echo $row['date']?> </td>
															<td class="order-lg-1">
																<div class="container-fluid">
																	<section class="section">
																		<div class="container">
																			<ul class="progressbar">
																				<li class="active" > Processing </li>
																				<?php if (($row['Orderstatus']) && $row['Orderstatus'] == 2): ?>
																					<li class="active"> Shipped </li>
																					<li> Delivered </li>
																					<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] == 3): ?>
																						<li class="active"> Shipped </li>
																						<li class="active"> Delivered </li>
																						<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] == 4): ?>
																							<li class="active"> Shipped </li>
																							<li class="active"> Delivered </li>
																							<?php else: ?>
																								<li> Shipped </li>
																								<li> Delivered </li>
																							<?php endif; ?>
																							<?php if (($row['Orderstatus']) && $row['Orderstatus'] == 1): ?>
																								<td>
																									<?php  $net + $net = ($row['Price'] + $net); ?>
																									<p style="color:#214465;">Admin Confirmation<br>Process</p>
																								</td>
																								<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] == 2): ?>
																									<?php  $net + $net = ($row['Price'] + $net); ?>
																									<td><p style="color:#0078D7;">SHIPPED</p></a> </td>
																									<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] ==3): ?>
																										<td><p style="color:#FCC21B;">Wait to confirm user</p></td>
																											<?php $rev=$row['Price']+$rev ?>
																										<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] ==4): ?>
																											<td><p style="color:green;">Recieved</p></td>
																											<?php $rev=$row['Price']+$rev ?>
																											<?php else: ?>
																												<td><p style="color:red;">Cancelled</p> </td>
																											<?php endif; ?>
																											<?php
																										}
																									}
																									?>
																								</ul>
																							</div>
																						</div></td> <!-- Status -->
																						<p style="color:green;margin-left:auto; padding: 1.001px; margin:0 auto;">Total revenue:<a>₱<?php echo number_format("$rev")."\n" ?><a></p>
																							<p style="color:red;margin-left:auto;padding:0.001px; margin:0 auto;">Total Net amount:<a>₱<?php echo number_format("$net")."\n" ?></a></p>
																							<hr>
																						</tr>
																					</table>
																				</section>
																				<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<br>
				<section class="ftco" style="width: 100%">
					<div class="div-box-shadow" style="padding: 20px">
						<h3 class="text-center">All Products <br>

							<small>All products are listed here</small></h>
						<table class=" table-sm table-striped " style="padding: 20px;">
							<thead>
								<tr>
									<th> Your Products </th>
									<th> Price </th>
									<th> KG</th>
									<th> Category </th>
									<th> Date </th>
								</tr>
							</thead>
							<?php
							require_once '../ctmls.io';
							$query = "SELECT * FROM `sellaproduct` where Usernameseller = '".($_SESSION['username'])."' order by id desc ";
							if(count(fetchAll($query))>0){
								foreach(fetchAll($query) as $row){
									?>

									<tr>
										<td class="text-center"><a href="shoppost.php?id=<?php echo $row['id'] ?>"> <?php echo $row['product_name'] ?></td>
											<td class="text-center" style="color:maroon">₱<?php echo number_format ($row['Price'])."\n"?> </td>
											<td  class="text-center"> <?php echo $row['KG'] ?> </td>
											<td  class="text-center"> <?php echo $row['Category'] ?> </td>
											<td class="text-center"><?php echo $row['date']?> </td>
																<?php
															}
														}
														?> <!-- Status -->
										</tr>
									</table>
								</section>
							</body>
							<br>
							<br>
						</div>
						</html>
						<!--===============================================================================================-->
						<?php include ('../include/footer.php');?>
						<?php include('../include/sessionfunction/sessionscript.php');?>
