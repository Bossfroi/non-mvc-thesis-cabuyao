<head>
  	<?php  require("process/carting.php"); ?>
  <title>Agriculture of Cabuyao</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body class="goto-here">
<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+63928372782</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">Agricabuyao@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">2-3 Business days delivery &amp; Legitimate</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="main.php">Agriculture</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <?php

        echo '<a>Welcome - '.$_SESSION["username"].'<a>';
        ?>

        <div class="collapse navbar-collapse" id="ftco">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="main.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="blog.php" class="nav-link">Forum</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="postproduct.php">Sell your prodcuts</a>
                <a class="dropdown-item" href="cart.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
                  <a class="dropdown-item" href="Successfullybuy.php">Your Order</a>
                  <a class="dropdown-item" href="itemproductrequest.php">Farmer Request</a>

              </div>
            </li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php
            echo '<li class="nav-item" ><a href="logout.php"class="nav-link">Logout</a></li>';

            ?>
            <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[<?php	echo "$cartcount";?>]</a></li>

          </ul>
        </div>
      </div>
    </nav>
    </nav>
