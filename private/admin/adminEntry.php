
<!--===========================START PHP INCLUDE =================================================-->
<?php include('include/sessionfunction/sessionhead.php');?>
		<?php include('include/sessionfunction/sessionnav.php');?>
		<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="page-header">
								<br>
								<h3 class="mb-2">Sales Dashboard  </h3>

								<p class="pageheader-text">Agriculture of cabuyao laguna items sales and production Graph Dashboard.</p>
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
		<!-- pagehader  -->
		<!-- ============================================================== -->
		<div class="row">
				<!-- metric -->
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="card">
								<div class="card-body">
										<h5 class="text-muted">Items Delivered</h5>
										<div class="metric-value d-inline-block">
												<h1 class="mb-1 text-primary">32,100 </h1>
										</div>
										<div class="metric-label d-inline-block float-right text-success">
												<i class="fa fa-fw fa-caret-up"></i><span>5.27%</span>
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
												<h1 class="mb-1 text-primary">4,200 </h1>
										</div>
										<div class="metric-label d-inline-block float-right text-danger">
												<i class="fa fa-fw fa-caret-down"></i><span>1.08%</span>
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
										<h5 class="text-muted">Users Reject</h5>
										<div class="metric-value d-inline-block">
												<h1 class="mb-1 text-primary">5,656</h1>
										</div>
										<div class="metric-label d-inline-block float-right text-danger">
												<i class="fa fa-fw fa-caret-down"></i><span>7.00%</span>
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
												<h1 class="mb-1 text-primary">1,656 </h1>
										</div>
										<div class="metric-label d-inline-block float-right text-success">
												<i class="fa fa-fw fa-caret-up"></i><span>4.87%</span>
										</div>
								</div>
								<div id="sparkline-4"></div>
						</div>
				</div>
				<!-- /. metric -->
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
																		<th class="border-0">Order Time</th>
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
																		<td>1 SAKO</td>
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
				<!-- end top selling products  -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- revenue locations  -->
				<!-- ============================================================== -->
				<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="card">
								<h5 class="card-header">Revenue by Location</h5>
								<div class="card-body">
										<div id="locationmap" style="width:100%; height:200px"></div>
								</div>
								<div class="card-body border-top">
										<div class="row">
												<div class="col-xl-6">
														<div class="sell-ratio">
																<h5 class="mb-1 mt-0 font-weight-normal">Mamatid</h5>
																<div class="progress-w-percent">
																		<span class="progress-value">72k </span>
																		<div class="progress progress-sm">
																				<div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																</div>
														</div>
												</div>
												<div class="col-xl-6">
														<div class="sell-ratio">
																<h5 class="mb-1 mt-0 font-weight-normal">PULO</h5>
																<div class="progress-w-percent">
																		<span class="progress-value">39k</span>
																		<div class="progress progress-sm">
																				<div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																</div>
														</div>
												</div>
												<div class="col-xl-6">
														<div class="sell-ratio">
																<h5 class="mb-1 mt-0 font-weight-normal">MARINIG</h5>
																<div class="progress-w-percent">
																		<span class="progress-value">25k </span>
																		<div class="progress progress-sm">
																				<div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
																		</div>
																</div>
														</div>
												</div>
												<div class="col-xl-6">
														<div class="sell-ratio">
																<h5 class="mb-1 mt-0 font-weight-normal">SALA</h5>
																<div class="progress-w-percent mb-0">
																		<span class="progress-value">61k </span>
																		<div class="progress progress-sm">
																				<div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>

														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
				<!-- ============================================================== -->
				<!-- end revenue locations  -->
		<!-- ============================================================== -->
		<!-- revenue  -->
		<!-- ============================================================== -->
		<div class="row">
				<div class="col-xl-8 col-lg-12 col-md-8 col-sm-12 col-12">
						<div class="card">
								<h5 class="card-header">Product Graph</h5>
								<div class="card-body">
										<canvas id="revenue" width="400" height="150"></canvas>
								</div>
								<div class="card-body border-top">
										<div class="row">
												<div class="offset-xl-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 p-3">
														<h4> Today</h4>
														<p>Suspendisse potenti. Done csit amet rutrum.
														</p>
												</div>
												<div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
														<h2 class="font-weight-normal mb-3"><span>P68,325</span>                                                    </h2>
														<div class="mb-0 mt-3 legend-item">
																<span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
																<span class="legend-text">Current Week</span></div>
												</div>
												<div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
														<h2 class="font-weight-normal mb-3">

																						<span>P85,000</span>
																				</h2>
														<div class="text-muted mb-0 mt-3 legend-item"> <span class="fa-xs text-secondary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Previous Week</span></div>
												</div>
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
								<h5 class="card-header">Total Sale</h5>
								<div class="card-body">
										<canvas id="total-sale" width="220" height="155"></canvas>
										<div class="chart-widget-list">
												<p>
														<span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">MAMATID</span>
														<span class="float-right">P300.56</span>
												</p>
												<p>
														<span class="fa-xs text-secondary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span>
														<span class="legend-text">PULO</span>
														<span class="float-right">P135.18</span>
												</p>
												<p>
														<span class="fa-xs text-brand mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span> <span class="legend-text">Marinig</span>
														<span class="float-right">P48.96</span>
												</p>
												<p class="mb-0">
														<span class="fa-xs text-info mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span> <span class="legend-text"> Sala</span>
														<span class="float-right">P154.02</span>
												</p>
										</div>
								</div>
						</div>
				</div>
				<!-- ============================================================== -->
				<!-- end total sale  -->
				<!-- ============================================================== -->
		</div>

				<!-- ============================================================== -->
		</div>
		<div class="row">
				<div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
						<!-- ============================================================== -->
						<!-- social source  -->
						<!-- ============================================================== -->
						<div class="card">
								<h5 class="card-header"> Sales By Social Source</h5>
								<div class="card-body p-0">
										<ul class="social-sales list-group list-group-flush">
												<li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><i class="fab fa-facebook-f"></i></span><span class="social-sales-name">Facebook</span><span class="social-sales-count text-dark">120 Sales</span>
												</li>
												<li class="list-group-item social-sales-content"><span class="social-sales-icon-circle twitter-bgcolor mr-2"><i class="fab fa-twitter"></i></span><span class="social-sales-name">Twitter</span><span class="social-sales-count text-dark">99 Sales</span>
												</li>
												<li class="list-group-item social-sales-content"><span class="social-sales-icon-circle instagram-bgcolor mr-2"><i class="fab fa-instagram"></i></span><span class="social-sales-name">Instagram</span><span class="social-sales-count text-dark">76 Sales</span>
												</li>
												<li class="list-group-item social-sales-content"><span class="social-sales-icon-circle pinterest-bgcolor mr-2"><i class="fab fa-pinterest-p"></i></span><span class="social-sales-name">Pinterest</span><span class="social-sales-count text-dark">56 Sales</span>
												</li>
												<li class="list-group-item social-sales-content"><span class="social-sales-icon-circle googleplus-bgcolor mr-2"><i class="fab fa-google-plus-g"></i></span><span class="social-sales-name">Google Plus</span><span class="social-sales-count text-dark">36 Sales</span>
												</li>
										</ul>
								</div>
								<div class="card-footer text-center">
										<a href="#" class="btn-primary-link">View Details</a>
								</div>
						</div>
						<!-- ============================================================== -->
						<!-- end social source  -->
						<!-- ============================================================== -->
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
						<!-- ============================================================== -->
						<!-- sales traffice source  -->
						<!-- ============================================================== -->
						<div class="card">
								<h5 class="card-header"> Sales By Traffic Source</h5>
								<div class="card-body p-0">
										<ul class="traffic-sales list-group list-group-flush">
												<li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Direct</span><span class="traffic-sales-amount">$4000.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
												</li>
												<li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Search<span class="traffic-sales-amount">$3123.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
														</span>
												</li>
												<li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Social<span class="traffic-sales-amount ">$3099.00  <span class="icon-circle-small icon-box-xs text-success ml-4 bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1 text-success">5.86%</span></span>
														</span>
												</li>
												<li class="traffic-sales-content list-group-item"><span class="traffic-sales-name">Referrals<span class="traffic-sales-amount ">$2220.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">4.02%</span></span>
														</span>
												</li>
												<li class="traffic-sales-content list-group-item "><span class="traffic-sales-name">Email<span class="traffic-sales-amount">$1567.00   <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1 text-danger">3.86%</span></span>
														</span>
												</li>
										</ul>
								</div>
								<div class="card-footer text-center">
										<a href="#" class="btn-primary-link">View Details</a>
								</div>
						</div>
				</div>
				<!-- ============================================================== -->
				<!-- end sales traffice source  -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- sales traffic country source  -->
				<!-- ============================================================== -->
				<div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
						<div class="card">
								<h5 class="card-header">Sales By Country Traffic Source</h5>
								<div class="card-body p-0">
										<ul class="country-sales list-group list-group-flush">
												<li class="country-sales-content list-group-item"><span class="mr-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> </span>
														<span class="">United States</span><span class="float-right text-dark">78%</span>
												</li>
												<li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i></span><span class="">Canada</span><span class="float-right text-dark">7%</span>
												</li>
												<li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i></span><span class="">Russia</span><span class="float-right text-dark">4%</span>
												</li>
												<li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-in" title="in" id="in"></i></span><span class="">India</span><span class="float-right text-dark">12%</span>
												</li>
												<li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i></span><span class="">France</span><span class="float-right text-dark">16%</span>
												</li>
										</ul>
								</div>
								<div class="card-footer text-center">
										<a href="#" class="btn-primary-link">View Details</a>
								</div>
						</div>
				</div>
		<!--End Include pogi -->
<!--===============================================================================================-->

		<?php include('include/sessionfunction/sessionscript.php');?>

<?php include('include/footer.php');?>
