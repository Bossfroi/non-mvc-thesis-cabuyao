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
			font-size: 12px;
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
			/*a{
				word-spacing: 25px;
			}*/
			.hero{
			}
</style>
<!--===============================================================================================-->
<?php include('../include/sessionfunction/sessionhead.php');?>
		<?php include('../include/sessionfunction/sessionnav.php');?>
<!--===============================================================================================-->
<head>
		  <body class="goto-here">
		    <div class="hero-wrap hero-bread" style="background-image: linear-gradient(rgba(0, 0 , 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/landscape 2.jpg');">
		      <div class="container">
		        <div class="row no-gutters slider-text align-items-center justify-content-center">

		        </div>
		      </div>
		    </div>
		    <section class="ftco-">
		    	<div class="container">
  					<h2 class="process"> ORDER STATUS </h2>
						<table class="  table-sm table-striped	 ">
							<thead>
								<tr>
									<th> Your ordered </th>
									<th> Product Description </th>
									 <th> Quantity</th>
									 <th> Price </th>
									 <th> Date </th>
									 <th> Status </th>
									 <th> REQUEST </th>
								</tr>
							</thead>
					<?php
					require_once '../ctmls.io';
							 $query = "SELECT * FROM `buyproduct` where Usernamebuyer = '".($_SESSION['username'])."' order by id desc ";
							 if(count(fetchAll($query))>0){
									 foreach(fetchAll($query) as $row){
											 ?>
								  <tr>
								   		 	<td class="text-center"><a href="shoppost.php?id=<?php echo $row['ITEMID'] ?>"> <?php echo $row['product_name'] ?></td>
								    	 	<td class="text-center"><?php echo $row['post'] ?> </td>
								    		<td  class="text-center"> <?php echo $row['quantity'] ?> </td>
											  <td class="text-center">₱<?php echo $row['Price']?> </td>
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
																	<td><a href="Process/cancelorder.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger text-light">cancel</a> </td>
																<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] == 2): ?>
																		<td><p style="color:#0078D7;">Processsing</p> </a> </td>
																	<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] ==3): ?>
																		<td><a href="Process/confirmationr.php?id=<?php echo $row['id'] ?>" class="btn text-light" style="background-color:yellow">Comfirmation Recieved</a> </td>
																	<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] ==4): ?>
																			<td><p style="color:#82AE46;">Recieved</p></td>
																		<?php else: ?>
												             	<td><p style="color:#C71915;">Cancelled</p> </td>
												<?php endif; ?>

													 <!-- Status -->
																</ul>
															</div>
														</div></td> <!-- Status -->
								  </tr>


								<?php

							}
						}
						?>
							</table>
								<br>
								<br>
    </section>
  </body>
</html>
<?php include('../include/sessionfunction/sessionscript.php');?>
<?php include('../include/footer.php');?>
