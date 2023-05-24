<?php @include('header.php');?>
 
<body>
	<?php @include('loader.php');?>
	<?php @include('topbar.php');?>
	
	<div class="page-wrapper">
		<div class="container-fluid">
			<div class="row">				
				<?php @include('sidebar.php');?>
				<div class="col-xl-9 col-lg-8 col-md-12">					
				<?php @include('pagebar.php');?>




					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
							<div class="card dash-widget ctm-border-radius shadow-sm grow">
								<div class="card-body">
									<div class="card-icon bg-primary">
										<i aria-hidden="true" class="fa fa-users"></i>
									</div>
									<div class="card-right">
										<h4 class="card-title">Employees</h4>
										<p class="card-text">700</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6 col-12">
							<div class="card dash-widget ctm-border-radius shadow-sm grow">
								<div class="card-body">
									<div class="card-icon bg-warning">
										<i class="fa fa-building-o"></i>
									</div>
									<div class="card-right">
										<h4 class="card-title">Companies</h4>
										<p class="card-text">30</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6 col-12">
							<div class="card dash-widget ctm-border-radius shadow-sm grow">
								<div class="card-body">
									<div class="card-icon bg-danger">
										<i aria-hidden="true" class="fa fa-suitcase"></i>
									</div>
									<div class="card-right">
										<h4 class="card-title">Leaves</h4>
										<p class="card-text">3</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-sm-6 col-12">
							<div class="card dash-widget ctm-border-radius shadow-sm grow">
								<div class="card-body">
									<div class="card-icon bg-success">
										<i aria-hidden="true" class="fa fa-money"></i>
									</div>
									<div class="card-right">
										<h4 class="card-title">Salary</h4>
										<p class="card-text">$5.8M</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 d-flex">
							<div class="card ctm-border-radius shadow-sm flex-fill grow">
								<div class="card-header">
									<h4 class="card-title mb-0">Total Employees</h4>
								</div>
								<div class="card-body">
									<canvas id="pieChart"></canvas>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex">
							<div class="card ctm-border-radius shadow-sm flex-fill grow">
								<div class="card-header">
									<h4 class="card-title mb-0">Total Salary By Unit</h4>
								</div>
								<div class="card-body">
									<canvas id="lineChart"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="card ctm-border-radius shadow-sm grow">
								<div class="card-header">
									<h4 class="card-title mb-0 d-inline-block">Today</h4><a class="d-inline-block float-right text-primary" href="javascript:void(0)"><i class="lnr lnr-sync"></i></a>
								</div>
								<div class="card-body recent-activ">
									<div class="recent-comment">
										<a class="dash-card text-dark" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon text-primary">
												<i aria-hidden="true" class="fa fa-birthday-cake"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">No Birthdays Today</h6>
											</div>
										</div></a>
										<hr>
										<a class="dash-card text-dark" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon text-warning">
												<i aria-hidden="true" class="fa fa-bed"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">Ralph Baker is off sick today</h6>
											</div>
											<div class="dash-card-avatars">
												<div class="e-avatar"><img alt="Avatar" class="img-fluid" src="assets/img/profiles/img-9.jpg"></div>
											</div>
										</div></a>
										<hr>
										<a class="dash-card text-dark" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon text-success">
												<i aria-hidden="true" class="fa fa-child"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">Ralph Baker is parenting leave today</h6>
											</div>
											<div class="dash-card-avatars">
												<div class="e-avatar"><img alt="Avatar" class="img-fluid" src="assets/img/profiles/img-9.jpg"></div>
											</div>
										</div></a>
										<hr>
										<a class="dash-card text-dark" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon text-danger">
												<i class="fa fa-suitcase"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">Danny ward is away today</h6>
											</div>
											<div class="dash-card-avatars">
												<div class="e-avatar"><img alt="Avatar" class="img-fluid" src="assets/img/profiles/img-5.jpg"></div>
											</div>
										</div></a>
										<hr>
										<a class="dash-card text-dark" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon text-pink">
												<i aria-hidden="true" class="fa fa-home"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">You are working from home today</h6>
											</div>
											<div class="dash-card-avatars">
												<div class="e-avatar"><img alt="Maria Cotton" class="img-fluid" src="assets/img/profiles/img-6.jpg"></div>
											</div>
										</div></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 d-flex">
							<div class="card flex-fill team-lead shadow-sm grow">
								<div class="card-header">
									<h4 class="card-title mb-0 d-inline-block">Team Leads</h4><a class="dash-card float-right mb-0 text-primary" href="employees.html">Manage Team</a>
								</div>
								<div class="card-body">
									<div class="media mb-3">
										<div class="e-avatar avatar-online mr-3"><img alt="Maria Cotton" class="img-fluid" src="assets/img/profiles/img-6.jpg"></div>
										<div class="media-body">
											<h6 class="m-0">Maria Cotton</h6>
											<p class="mb-0 ctm-text-sm">PHP</p>
										</div>
									</div>
									<hr>
									<div class="media mb-3">
										<div class="e-avatar avatar-online mr-3"><img alt="Linda Craver" class="img-fluid" src="assets/img/profiles/img-5.jpg"></div>
										<div class="media-body">
											<h6 class="m-0">Danny Ward</h6>
											<p class="mb-0 ctm-text-sm">Design</p>
										</div>
									</div>
									<hr>
									<div class="media mb-3">
										<div class="e-avatar avatar-online mr-3"><img alt="Linda Craver" class="img-fluid" src="assets/img/profiles/img-4.jpg"></div>
										<div class="media-body">
											<h6 class="m-0">Linda Craver</h6>
											<p class="mb-0 ctm-text-sm">IOS</p>
										</div>
									</div>
									<hr>
									<div class="media mb-3">
										<div class="e-avatar avatar-online mr-3"><img alt="Linda Craver" class="img-fluid" src="assets/img/profiles/img-3.jpg"></div>
										<div class="media-body">
											<h6 class="m-0">Jenni Sims</h6>
											<p class="mb-0 ctm-text-sm">Android</p>
										</div>
									</div>
									<hr>
									<div class="media">
										<div class="e-avatar avatar-offline mr-3"><img alt="Linda Craver" class="img-fluid" src="assets/img/profiles/img-2.jpg"></div>
										<div class="media-body">
											<h6 class="m-0">John Gibbs</h6>
											<p class="mb-0 ctm-text-sm">Business</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 d-flex">
							<div class="card recent-acti flex-fill shadow-sm grow">
								<div class="card-header">
									<h4 class="card-title mb-0 d-inline-block">Recent Activities</h4><a class="d-inline-block float-right text-primary" href="javascript:void(0)"><i class="lnr lnr-sync"></i></a>
								</div>
								<div class="card-body recent-activ admin-activ">
									<div class="recent-comment">
										<div class="notice-board">
											<div class="table-img">
												<div class="e-avatar mr-3"><img alt="Danny Ward" class="img-fluid" src="assets/img/profiles/img-5.jpg"></div>
											</div>
											<div class="notice-body">
												<h6 class="mb-0">Lorem ipsum dolor sit amet, id id quo eruditi eloquentiam.</h6><span class="ctm-text-sm">Danny Ward | 1 hour ago</span>
											</div>
										</div>
										<hr>
										<div class="notice-board">
											<div class="table-img">
												<div class="e-avatar mr-3"><img alt="John Gibbs" class="img-fluid" src="assets/img/profiles/img-2.jpg"></div>
											</div>
											<div class="notice-body">
												<h6 class="mb-0">Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</h6><span class="ctm-text-sm">John Gibbs | 2 hour ago</span>
											</div>
										</div>
										<hr>
										<div class="notice-board">
											<div class="table-img">
												<div class="e-avatar mr-3"><img alt="Maria Cotton" class="img-fluid" src="assets/img/profiles/img-6.jpg"></div>
											</div>
											<div class="notice-body">
												<h6 class="mb-0">Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</h6><span class="ctm-text-sm">Maria Cotton | 4 hour ago</span>
											</div>
										</div>
										<hr>
										<div class="notice-board">
											<div class="table-img">
												<div class="e-avatar mr-3"><img alt="Linda Craver" class="img-fluid" src="assets/img/profiles/img-4.jpg"></div>
											</div>
											<div class="notice-body">
												<h6 class="mb-0">Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</h6><span class="ctm-text-sm">Linda Craver | 5 hour ago</span>
											</div>
										</div>
										<hr>
										<div class="notice-board">
											<div class="table-img">
												<div class="e-avatar mr-3"><img alt="Jenni Sims" class="img-fluid" src="assets/img/profiles/img-3.jpg"></div>
											</div>
											<div class="notice-body">
												<h6 class="mb-0">Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</h6><span class="ctm-text-sm">Jenni Sims | 6 hour ago</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 d-flex">
							<div class="card flex-fill today-list shadow-sm grow">
								<div class="card-header">
									<h4 class="card-title mb-0 d-inline-block">Your Upcoming Leave</h4><a class="d-inline-block float-right text-primary" href="leave.html"><i class="fa fa-suitcase"></i></a>
								</div>
								<div class="card-body recent-activ">
									<div class="recent-comment">
										<a class="dash-card text-danger" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon">
												<i class="fa fa-suitcase"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">Mon, 16 Dec 2019</h6>
											</div>
										</div></a>
										<hr>
										<a class="dash-card text-primary" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon">
												<i class="fa fa-suitcase"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">Fri, 20 Dec 2019</h6>
											</div>
										</div></a>
										<hr>
										<a class="dash-card text-primary" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon">
												<i class="fa fa-suitcase"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">Wed, 25 Dec 2019</h6>
											</div>
										</div></a>
										<hr>
										<a class="dash-card text-primary" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon">
												<i class="fa fa-suitcase"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">Fri, 27 Dec 2019</h6>
											</div>
										</div></a>
										<hr>
										<a class="dash-card text-primary" href="javascript:void(0)">
										<div class="dash-card-container">
											<div class="dash-card-icon">
												<i class="fa fa-suitcase"></i>
											</div>
											<div class="dash-card-content">
												<h6 class="mb-0">Tue, 31 Dec 2019</h6>
											</div>
										</div></a>
									</div>
								</div>
							</div>
						</div>
					</div>






				</div>
			</div>
		</div>
	</div><?php @include('footer.php');?>
</body>
</html>