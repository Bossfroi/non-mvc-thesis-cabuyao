<style>
		.process{
			text-align:center;
			text-transform: capitalize;
			margin: 20px 0px 30px 0px;
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
			font-size: 11px;
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
			padding:3px;

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
			color:#fff;
			opacity: 0.8;
		}

		td .accept{
			color:#fff;
			background:#82AE46;
			padding: 6px;
			border-radius: 2rem;
			border:none;
			outline: none !important;
			font-size: 13px;
			padding:7px;
			width: 150px;
		}
		td .reject{
			color:#fff;
			background:gray;
			padding: 6px;
				border-radius: 2rem;
			border:none;
			outline: none !important;
			font-size: 13px;
			padding:7px;
			width: 150px;
		}

		thead{
			text-transform:capitalize;
			padding:20px;
		}
</style>
<!--===========================START PHP INCLUDE =================================================-->
<?php include('include/sessionfunction/sessionhead.php');?>
		<?php include('include/sessionfunction/sessionnav.php');?>
<?php    require_once("../ctmls.io"); ?>
		<!--End Include pogi -->
<!--===============================================================================================-->

<section class="ftco-">
  <div class="container">
    <h2 class="process">USER ORDER STATUS </h2>
    <table class="  table-sm table-striped	 ">
      <thead>
        <tr>
          <th> Products </th>
          <th> KG </th>
					<th> Buyer </th>
					<th> Seller </th>
           <th> Quantity</th>
           <th> Price </th>
					 <th> Location </th>
           <th> Date </th>
           <th> Order Status </th>
           <th> Action </th>

        </tr>
      </thead>

  <?php
  require_once '../ctmls.io';
       $query = "SELECT * FROM `buyproduct`  order by id desc ";
       if(count(fetchAll($query))>0){
           foreach(fetchAll($query) as $row){
               ?>
          <tr>
                <td class="text-center"><?php echo $row['product_name'] ?></td>
                <td class="text-center"><?php echo $row['KG'] ?> </td>
								<td class="text-center"><?php echo $row['UsernameBuyer'] ?> </td>
								<td class="text-center"><?php echo $row['Usernameseller'] ?> </td>
                <td  class="text-center"> <?php echo $row['quantity'] ?> </td>
                <td class="text-center">₱<?php echo $row['Price']?> </td>
								<td class="text-center"><?php echo $row['Location']?> </td>
                <td class="text-center"><?php echo $row['date']?> </td>
                <td class="order-lg-1">
                  <div class="container-fluid">
										<section class="section">
										<div class="container">
										<ul class="progressbar">
                      <li class="active"> Processing </li>
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
													<td><a class="accept" href="Process/acceptorder.php?id=<?php echo $row['id'] ?>">Accept</a>
													<a class="reject" href="Process/cancelorder.php?id=<?php echo $row['id'] ?>">Reject</a> </td>
												<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] == 2): ?>
														 <td><a class="accept" href="Process/Deliveryorder.php?id=<?php echo $row['id'] ?>">Ready to delivered</a>
													<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] ==3): ?>
														<td><a href="Process/confirmationr.php?id=<?php echo $row['id'] ?>" class="btn text-light" style="background-color:yellow">Comfirmation User</a> </td>
													<?php elseif (($row['Orderstatus']) && $row['Orderstatus'] ==4): ?>
															<td><p style="color:#82AE46;">Recieved</p></td>
														<?php else: ?>
															<td style="display:flex;align-items: center; justify-content: center;padding:20px;">
																<a href="Process/canceldelete.php?id=<?php echo $row['id'] ?>" style="color:#C71915;margin-right:10px; margin-top:5px;">Cancelled</a>
															<a href="Process/UndoOrder.php?id=<?php echo $row['id'] ?>" style="color:green;">Undo</a> </p></td>

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
<footer>
</footer>
</html>
<?php include('include/sessionfunction/sessionscript.php');?>
    <?php include('include/footer.php');?>
