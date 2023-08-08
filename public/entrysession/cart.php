<!--===========================START PHP INCLUDE SESSION   ========================================-->
<?php include('../include/sessionfunction/sessionhead.php');?>
<?php include('../include/sessionfunction/sessionnav.php');?>
<?php    require_once("../ctmls.io"); ?>
<!--End Include pogi -->
<!--===============================================================================================-->
<div class="hero-wrap hero-bread" style="background-image: url('../assets/images/landscape.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
				<h1 class="mb-0 bread">My Cart</h1>
			</div>
		</div>
	</div>
</div>
<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table class="table table-responsive" id="table_cart">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>Product name</th>
								<th>Location</th>
								<th>Price</th>
								<th>KG</th>
								<th>Quantity</th>
								<th><i class="fa fa-check"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$query = "SELECT * FROM `cart` ORDER BY `id` DESC";
							if(count(fetchAll($query))>0){
								foreach(fetchAll($query) as $row){
									?>
									<form>
										<?php
										$_SESSION["username"];
										if (($row['UsernameCart']) && $_SESSION['username'] == $row['UsernameCart']): ?>
											<tr class="text-center">
												<td class="product-remove">
													<a href="Process/cartdelete.php?id=<?php echo $row['id'] ?>">
														<span class="ion-ios-close col-md-5"></span></a>
													</td>
													<td>
														<?php
														$selectquery="SELECT * FROM sellaproduct ORDER BY id DESC LIMIT 1";
														$result = $conn->query($selectquery);
														$rowss = $result->fetch_assoc();
														$idcart = $rowss['id']; ?>

														<a href="shoppost.php?id=<?php echo $row['ITEMID'] ?>"><?php echo'<img src="data:image/jpeg;base64,'.$row['Photo']; ?>
													</td>
													<td class="product-name">
														<h3><?php echo $row['product_name'] ?></h3>
														<p><?php echo $row['post'] ?></p>
														<h6>Contact: <?php echo $row['Contact'] ?></h6>
													</td>
													<td class="Location">
														<h5><?php echo $row['Location'] ?></h5>
														</td>
														<td class="price">PHP<?php echo $row['Price'] ?></td>
														<td class="KG"><?php echo $row['KG'] ?>kg</td>
														<td class="quantity">
															<div class="input-group mb-3">
																<input type="" disabled name="quantity" id="control" value="<?php echo $row['quantity'] ?>"  onkeyup="enterNumber()" class="quantity form-control input-number" value="1" min="1" max="100">
															</div>
															<?php endif;  ?>
															<?php
														}
													}
													?>
															</tr>
														</form>

														<!-- END TR-->
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<center>
							<a href="checkout.php" id="Button2" class="btn btn-primary">Place an order</a>
						</div>
					</section>
				</center>
				<!-- JS-->
				<script type="text/javascript">
					function enterNumber(){
						var e = document.getElementById('control');
						if (!/^[0-9.+,]+$/.test(e.value))
						{
							e.value = e.value.substring(0,e.value.length-10000);
						}
					}
					var form = document.getElementsByName("myForm")[0];
					var checkBox = document.getElementById("business");

					checkBox.onchange = function(){
						if(this.checked){
							form.action = "giveEmTheBusiness.php";
						}else{
							form.action = "invoiceCreate.php";
						}
						console.log(form.action);
					};
				</script>

				<?php include('../include/footer.php'); ?>

			</div>
		</div>
	</div>
</footer>




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

		$('#btn_check_array').on('click',function() {
			var items = [];
			$.each($("input[name='item']:checked"), function(){
				items.push($(this).val());
			});
			alert("Selected items are", items);



		});

	});
</script>
<?php include('../include/sessionfunction/sessionscript.php');?>
</body>
</html>
