
<!--===========================START PHP INCLUDE =================================================-->
<?php include('include/sessionfunction/sessionhead.php');?>
<?php include('include/sessionfunction/sessionnav.php');?>
<?php    require_once("../ctmls.io"); ?>
<head>
	<style>
		tbody tr td{
			padding: 10px !important;
			font-size: 13px;
		}
	</style>
</head>
<!--End Include pogi -->
<!--===============================================================================================-->
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header" style="padding: 20px">
			<h3 class="mb-2">Sales Dashboard  </h3>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
						<li class="breadcrumb-item active" aria-current="page">Product Hot Sales  </li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>


<!-- ============================================================== -->
<!-- Process php  -->
<?php    require_once("process/items.php"); ?>
<?php    require_once("process/requestusers.php"); ?>
<?php    require_once("process/numbers of users.php"); ?>
<!-- ============================================================== -->
<div class="row" style="padding: 30px;">

	<!-- metric -->
	<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 div-box-shadow">
		<div class="card">
			<div class="card-body">
				<h5 class="text-muted">Items Delivered</h5>
				<div class="metric-value d-inline-block">
					<h1 class="mb-1 text-primary"><?php echo $resultdelivery; ?> </h1>
				</div>
				<div class="metric-label d-inline-block float-right text-success">
				</div>
			</div>
			<div id="sparkline-1"></div>
		</div>
	</div>

	<!-- /. metric -->
	<!-- metric -->
	<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="text-muted">Users Request</h5>
				<div class="metric-value d-inline-block">
					<h1 class="mb-1 text-primary"><?php	echo "$pdoRowCountRequestuser";?> </h1>
				</div>
				<div class="metric-label d-inline-block float-right text-danger">
				</div>
			</div>
			<div id="sparkline-2"></div>
		</div>
	</div>
	<!-- /. metric -->
	<!-- metric -->
	<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="text-muted">Numbers of users</h5>
				<div class="metric-value d-inline-block">
					<h1 class="mb-1 text-primary"><?php	echo "$pdoRowCountuser";?></h1>
				</div>
				<div class="metric-label d-inline-block float-right text-danger">
				</div>
			</div>
			<div id="sparkline-3">
			</div>
		</div>
	</div>
	<!-- /. metric -->
	<!-- metric -->
	<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="text-muted">Numbers of Products</h5>
				<div class="metric-value d-inline-block">
					<h1 class="mb-1 text-primary"><?php	echo "$pdoRowCount";?> </h1>
				</div>
				<div class="metric-label d-inline-block float-right text-success">
				</div>
			</div>
			<div id="sparkline-4"></div>
		</div>
	</div>
</div>
<div class="row">
		<!-- ============================================================== -->
		<!-- top selling products  -->
		<!-- ============================================================== -->
		<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="card">
						<h5 class="card-header">Top Selling Products</h5>
						<div class="card-body p-0">
								<div class="table-responsive">
										<table class="table">
												<thead class="bg-light">
														<tr class="border-0">
																<th class="border-0">#</th>
																<th class="border-0">Image</th>
																<th class="border-0"> TOP SELLING</th>
																<th class="border-0">Product NAME</th>
																<th class="border-0">Quantity</th>
																<th class="border-0">Price</th>
																<th class="border-0">date released</th>
																<th class="border-0">Customer</th>
														</tr>
												</thead>
												<tbody>
														<tr>
																<td>1</td>
																<td>
																		<div class="m-r-10"><img src="assets/images/image_2.jpg" alt="user" class="rounded" width="45"></div>
																</td>
																<td>#1 </td>
																<td>MAIS</td>
																<td>1 SAKO</td>
																<td>P280.00</td>
																<td>27-08-2018 01:22:12</td>
																<td>Patricia J. King </td>
														</tr>
														<tr>
																<td>2</td>
																<td>
																		<div class="m-r-10"><img src="assets/images/image_3.jpg" alt="user" class="rounded" width="45"></div>
																</td>
																<td>#2 </td>
																<td>PALAY </td>
																<td>80kG</td>
																<td>P880.00</td>
																<td>25-08-2018 21:12:56</td>
																<td>Rachel J. Wicker </td>
														</tr>
														<tr>
																<td>3</td>
																<td>
																		<div class="m-r-10"><img src="assets/images/image_4.jpg" alt="user" class="rounded" width="45"></div>
																</td>
																<td> #3 </td>
																<td>BANGUS </td>
																<td>100KG</td>
																<td>P5820.00</td>
																<td>24-08-2018 14:12:77</td>
																<td>Michael K. Ledford </td>
														</tr>
														<tr>
																<td>4</td>
																<td>
																		<div class="m-r-10"><img src="assets/images/image_5.jpg" alt="user" class="rounded" width="45"></div>
																</td>
																<td>#4 </td>
																<td>KAMATIS </td>
																<td>250KG</td>
																<td>P440.00</td>
																<td>23-08-2018 09:12:35</td>
																<td>Michael K. Ledford </td>
														</tr>
														<tr>
																<td colspan="8"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
														</tr>
												</tbody>
										</table>
								</div>
						</div>
				</div>
		</div>
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- revenue locations  -->
	<?php    require_once("process/mamatid.php"); ?>
	<?php    require_once("process/Total Revenue per barrangay.php"); ?>
	<!-- ============================================================== -->

	<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5>Total Sale Revenue</h5><h6>Per Barrangay<p></p></h6>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Bigaa</span>
							<span class="float-right">₱<?php echo $Bigaa; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Butong</span>
							<span class="float-right">₱<?php echo $Butong; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Marinig</span>
							<span class="float-right">₱<?php echo $marinig; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Gulod</span>
							<span class="float-right">₱<?php echo $gulod; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Baclaran</span>
							<span class="float-right">₱<?php echo $baclaran; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Mamatid</span>
							<span class="float-right">₱<?php echo $mamatid; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Banlic</span>
							<span class="float-right">₱<?php echo $banlic; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">San Isidro</span>
							<span class="float-right">₱<?php echo $sanisidro; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Casile</span>
							<span class="float-right">₱<?php echo $casile; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Pittland</span>
							<span class="float-right">₱<?php echo $pitland; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Diezmo</span>
							<span class="float-right">₱<?php echo $diezmo; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Pulo</span>
							<span class="float-right">₱<?php echo $pulo; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Banay-Banay</span>
							<span class="float-right">₱<?php echo $banaybanay; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Niugan</span>
							<span class="float-right">₱<?php echo $niugan; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Sala</span>
							<span class="float-right">₱<?php echo $sala; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Pob Uno</span>
							<span class="float-right">₱<?php echo $pobuno; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Pob Dos</span>
							<span class="float-right">₱<?php echo $pubdos; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Pob Tres</span>
							<span class="float-right">₱<?php echo $pubtres; ?></span>
						</p>
						<p>
							<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">TOTAL:</span>
							<span class="float-right">₱<?php echo number_format("$total")."\n" ?></span>
						</p>

					</div>
				</div>
			</div>
				<!-- ============================================================== -->
			<!-- end revenue locations  -->
			<!-- ============================================================== -->
			<!-- revenue  -->
			<!-- ============================================================== -->
			<div class="row" hidden>
				<div class="col-xl-8 col-lg-12 col-md-8 col-sm-12 col-12">
					<div class="card">
						<div class="card-body">
							<canvas  id="revenue" width="400" height="150"></canvas>
						</div>
						<div class="card-body border-top">
							<div class="row">
								</div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end reveune  -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- total sale  -->
					<!-- ============================================================== -->
					<div class="col-xl-4 col-lg-12 col-md-4 col-sm-12 col-12">
						<div class="card">

						</div>
					</div>
					<!-- ============================================================== -->
					<!-- end total sale  -->
					<!-- ============================================================== -->
				</div>

				<!-- ============================================================== -->
			</div>

	</div>
</div>
<!-- ============================================================== -->
<!-- end sales traffice source  -->
<!-- ============================================================== -->

<!--End Include pogi -->
<!--===============================================================================================-->

<?php include('include/sessionfunction/sessionscript.php');?>

<?php include('include/footer.php');?>
