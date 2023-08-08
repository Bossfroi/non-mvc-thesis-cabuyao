<!--===========================START PHP INCLUDE SESSION   ========================================-->
<?php include('../include/sessionfunction/sessionhead.php');?>
<?php include('../include/sessionfunction/sessionnav.php');?>
<?php    require_once("../ctmls.io"); ?>
<!--End Include pogi -->
<!--===============================================================================================-->
<html lang="en">
<div class="hero-wrap hero-bread" style="background-image: url('../assets/images/landscape.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Checkout</span></p> <h1 class="mb-0 bread">Checkout</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-5 ftco-animate">
				<form action="#" class="billing-form">
					<h3 class="mb-2 billing-heading">Billing Details</h3>
					<div class="row align-items-end">
						<div class="col-md-5">
							<div class="form-group">
								<label for="firstname">Firt Name</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="lastname">Last Name</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="country">State / Country</label>
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="" class="form-control">
										<option value="">France</option>
										<option value="">Italy</option>
										<option value="">Philippines</option>
										<option value="">South Korea</option>
										<option value="">Hongkong</option>
										<option value="">Japan</option>
									</select>
								</div>
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="streetaddress">Street Address</label>
								<input type="text" class="form-control" placeholder="House number and street name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="towncity">Town / City</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="postcodezip">Postcode / ZIP *</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="emailaddress">Email Address</label>
								<input type="text" class="form-control" placeholder="">
							</div>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<div class="form-group mt-4">
								<div class="radio">
									<a href="cart.php"class="btn btn-primary py-3 px-4">Back To Cart</a>
									<a href="update.php"class="btn btn-primary py-3 px-4"> Update Details</a>
									<hr>
								</div>
							</div>
						</div>
					</div>
				</form><!-- END -->
			</div>

			<div class="col-xl-5">
				<div class="row mt-5 pt-3">
					<div class="col-md-12 d-flex mb-5">
						<div class="cart-detail cart-total p-3 p-md-4">
							<h2 class="billing-heading mb-1" style="color: #82AE46">Your Order </h2>
							<p>Total cart <?php echo "$cartcount";?> Products</p>
							<?php
							$total = 0;
							$query = "SELECT * FROM `cart` where UsernameCart = '".($_SESSION['username'])."'";
							if(count(fetchAll($query))>0){
								foreach(fetchAll($query) as $row){
									$id=$row['id'];
									?>
									<?php ($q=$row['quantity']) ?>
									<?php ($k=$row['KG']) ?>
									<?php $totalkg = $q*$k?>
									<hr>

									<div class="col-md-12 row">
										<div class="col-md-6">
											<h6 class="mt-1">Product </h6>
											<a href="shoppost.php?id=<?php echo $row['ITEMID'] ?>"><?php echo'<img src="data:image/jpeg;base64,'.$row['Photo']; ?>
											<a >
											</div>
											<div class="col-md-6">
												<input type="text"   style="background: transparent; border:none "disabled name="" value="<?php echo $row["product_name"]; ?>">
											</div>
											<div class="col-md-6">
												<h6 class="mt-1">Quantity :</h6>
											</div>
											<div class="col-md-6">
												<input type="" style="background: transparent;"name="" disabled  value="<?php echo $row["quantity"]; ?>"></div>
												<div class="col-md-6"><h6 class="mt-1">Kilo/s :</h6></div>
												<div class="col-md-6"><input type="text" style="background: transparent; border:none " name="" disabled value="<?php echo $row["KG"]; ?>kg  |  TotalKG:<?php echo "$totalkg"; ?>"></div>
												<div class="col-md-6"><input type="text"  style="background: transparent; border:none "name="" disabled value="Price : ₱ <?php echo $row["Price"]; ?>"></div>
												<div class="col-md-6">
													<?php ($quantity=$row['quantity']) ?>
													<?php  ($price=$row['Price']) ?>
													<hr>
													<dl>
														<a>Total Price</a><br>
														<h4> ₱<?php echo $check = number_format($quantity*$price);
														?></h4></dl>
													</div>
												</div>
												<a href="Process/addcheckoutquantity.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Increase Quantity<a>
													<a href="Process/minuscheckoutquantity.php?id=<?php echo $row['id'] ?>"class="btn  btn-info" style=" float: right;">Decrease Quantity</a>
													<hr>
													<a href="Process/cartdelete.php?id=<?php echo $row['id'] ?>">
														<p class="btn btn-primary">Remove Items</p></a>
														<hr>
														<?php
														$Discount = 0.2 * 100/2;
														$Delivery = 0.01 * 100/1;

														$total = ( $total + $row['Price'] * $row['quantity']);
													}}
													?>
													<div class="col-md-12" style="background: lightgray; padding: 10px; color: #333">
														<p class="d-flex">
															<span>Subtotal</span>
															<span><?php echo "" ?></span>
														</p>
														<p class="d-flex">
															<span>Delivery</span>
															<span><?php echo "" ?></span>
														</p>
														<p class="d-flex">
															<span>Discount</span>
															<span>$3.00</span>
														</p>
														<hr>
														<p class="d-flex">
															<span>Total Price Of Your Cart:</a></span>
															<span><?php echo "₱".$total ?></span>
														</p>
													</div>

												</div>
											</div>
											<div class="col-md-12">
												<div class="cart-detail p-3 p-md-4">
													<h3 class="billing-heading mb-4">Confirmation</h3>
													<div class="form-group">
														<div class="col-md-12">
															<div class="radio">
																<label><input type="radio" name="optradio" class="mr-2" checked> Cash on Delivery</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<div class="checkbox">
																<label><input type="checkbox" name="helloThere" id="helloThere" value="on" class="mr-2 "checked> I have read and accept the terms and conditions</label>
															</div>
														</div>
													</div>
													<p><a href="Process/buyproceed.php"class="btn btn-primary py-3 px-4">BUY NOW</a></p>
												</div>
											</div>
										</div>
									</div> <!-- .col-md-8 -->
								</div>
							</div>
						</section> <!-- .section -->
						<?php include ('../include/footer.php');?>


						<!-- loader -->
						<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
						<?php include('../include/sessionfunction/sessionscript.php');?>

						<script>
							$(document).ready(function(){

								var quantitiy=0;
								$('.quantity-right-plus').click(function(e){

						// Stop acting like a button
						e.preventDefault();
						// Get the field name
						var quantity = parseInt($('#quantity').val());

						// If is not undefined

						$('#quantity').val(quantity + 1);


								// Increment

							});

								$('.quantity-left-minus').click(function(e){
						// Stop acting like a button
						e.preventDefault();
						// Get the field name
						var quantity = parseInt($('#quantity').val());

						// If is not undefined

								// Increment
								if(quantity>0){
									$('#quantity').val(quantity - 1);
								}
							});

							});
						</script>

					</body>
					</html>
