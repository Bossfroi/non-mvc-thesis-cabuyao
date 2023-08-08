<!--===========================START PHP INCLUDE SESSION   ========================================-->
<?php include('../include/sessionfunction/sessionhead.php');?>
		<?php include('../include/sessionfunction/sessionnav.php');?>
		<!--End Include pogi -->

<!--===============================================================================================-->
<html lang="en">
    <div class="hero-wrap hero-bread" style="background-image: url('../assets/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>
		<div class="row">
			<div class="col-md-8 ftco-animate" style="padding: 20px; margin:0 auto;">

		<section class="ftco-section">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 mb-5 text-center">
						<ul class="product-category">
							<li><a href="shop.php">All</a></li>
							<li><a href="shopVegetables.php" name="Vegetables">Vegetables</a></li>
							<li><a href="shopfruits.php" name="Fruits">Fruits</a></li>
							<li><a href="shopfish.php" class="active" name="Fish">Fish</a></li>
							<li><a href="shopmeats.php"  name="Meat">Meat</a></li>
						</ul>
					</div>
					<!--===============================================================================================-->
					<?php
					require_once '../ctmls.io';
					     $query = "SELECT * FROM `sellaproduct` where Category='Fish';";
					     if(count(fetchAll($query))>0){
					         foreach(fetchAll($query) as $row){
					             ?>
					             <div class="col-md-3 ftco-animate mb-5 text-center">
					               <div class="product">
					                 <a href="shoppost.php?id=<?php echo $row['id'];?>"  img class="img-fluid">
					                     <?php echo'<center><img src="data:image/jpeg;base64,' .base64_encode($row['Photo']).'"
					                                 height="150" width="200"/></center>';?>
					                     <span class="status"> 30%</span>
					                     <div class="overlay"></div>
					                 </a>
					                 <div class="text py-3 px-3 text-center">
					                     <h3><a href="#" style="color: #82AE46; font-size:16px; font-weight:600; text-transform:capitalize">
					                       <?php echo $row['product_name']?></a></h3>
					                     <div class="d-flex">
					                       <div class="pricing">
					                         <h3><?php echo $row['KG']?>kg</H3>
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
					                   echo "<center><h1>No Products</h1></center>";
					               }

					             ?>
					             </div>
					             </div>
					             <!--===============================================================================================-->

				 <!--===============================================================================================-->

	<?php include ('../include/footer.php');?>
       <?php include('../include/sessionfunction/sessionscript.php');?>



    </footer>

  <!-- loader -->

  </body>
</html>
