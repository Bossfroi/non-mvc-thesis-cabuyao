<!DOCTYPE html>
<html lang="en">
<!--===============================================================================================-->
<?php include('include/head.php');?>
		<?php include('include/navbar.php');?>
		<!--End Include pogi -->
<!--===============================================================================================-->
  <body class="goto-here">
    <div class="hero-wrap hero-bread" style="background-image: url('assets/images/landscape.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10 mb-5 text-center">
							<ul class="product-category">
								<li><a href="login.php" class="active">All</a></li>
								<li><a href="login.php">Vegetables</a></li>
								<li><a href="login.php">Fruits</a></li>
								<li><a href="login.php">Fish</a></li>
								<li><a href="login.php">Meat</a></li>
							</ul>
						</div>
				<!--===============================================================================================-->

				<?php
						require_once 'ctmls.io';
						 $query = "SELECT * FROM `sellaproduct` ORDER BY `id` ASC;";
						 if(count(fetchAll($query))>0){
								 foreach(fetchAll($query) as $row){
										 ?>
			 <!--===============================================================================================-->
							<div class="col-md-3 ftco-animate mb-5 text-center">

								<div class="product">
									<a href="login.php" class="img-prod" img class="img-fluid">
											<?php echo'<center><img src="data:image/jpeg;base64,' .base64_encode($row['Photo']).'"
																	height="150" width="200"/></center>';?>
											<span class="status"> 30%</span>
											<div class="overlay"></div>
									</a>

									<div class="text py-3 px-3 text-center">
											<h3><a href="login.php" style="color: #82AE46; font-size:16px; font-weight:600; text-transform:capitalize">
												<?php echo $row['product_name']?></a></h3>
											<div class="d-flex">
												<div class="pricing">
													<h3>5KG</H3>
													<p class="price">
														<span class="mr-2 price-dc">Sale</span>
														<span class="price-sale">₱<?php echo $row['Price']?></span></p>
												</div>
												<div class="bottom-area d-flex px-3">
													<div class="m-auto d-flex">
														<a href="shoppost.php?id=<?php echo $row['id']?>"
															class="add-to-cart d-flex justify-content-center align-items-center text-center">
															<span><i class="ion-ios-menu"></i></span>
														</a>
														<a href="cart.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
															<span><i class="ion-ios-cart"></i></span>
														</a>
														<a href="cart.php" class="heart d-flex justify-content-center align-items-center ">
															<span><i class="ion-ios-heart"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
			<!--===============================================================================================-->
						<?php

										}
								}else{
										echo "<center><h2>No Post.</h2></center>";
								}

						?>
				</div>
					</div>


  <!-- loader -->
<?php include('include/footer.php'); ?>
<?php include('include/script.php'); ?>
  </body>
</html>
