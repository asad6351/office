<header class="header">
		<div class="top-header-section">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-3 col-sm-3 col-6">
						<div class="logo my-3 my-sm-0">
							<a href="index.html"><img alt="logo image" class="img-fluid" src="assets/img/logo.png" width="100"></a>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-6 text-right">
						<div class="user-block d-none d-lg-block">
							<div class="row align-items-center">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="user-notification-block align-right d-inline-block">
										<div class="top-nav-search">
											<form>
												<input class="form-control" placeholder="Search here" type="text"> <button class="btn" type="submit"><i class="fa fa-search"></i></button>
											</form>
										</div>
									</div>
									<div class="user-notification-block align-right d-inline-block">
										<ul class="list-inline m-0">
											<li class="list-inline-item" data-original-title="Apply Leave" data-placement="top" data-toggle="tooltip" title="">
												<a class="font-23 menu-style text-white align-middle" href="leave.html"><span class="lnr lnr-briefcase position-relative"></span></a>
											</li>
										</ul>
									</div>
									<div class="user-info align-right dropdown d-inline-block header-dropdown">
										<a class=" menu-style dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
										<div class="user-avatar d-inline-block"><img alt="user avatar" class="rounded-circle img-fluid" src="assets/img/profiles/img-6.jpg" width="55"></div></a>
										<div class="dropdown-menu notification-dropdown-menu shadow-lg border-0 p-3 m-0 dropdown-menu-right">
											<a class="dropdown-item p-2" href="employment.html"><span class="media align-items-center"><span class="lnr lnr-user mr-3"></span> <span class="media-body text-truncate"><span class="text-truncate"><?php echo $_SESSION['email'];?></span></span></span></a> <a class="dropdown-item p-2" href="settings.html"><span class="media align-items-center"><span class="lnr lnr-cog mr-3"></span> <span class="media-body text-truncate"><span class="text-truncate">Settings</span></span></span></a> <a class="dropdown-item p-2" href="login.html"><span class="media align-items-center"><span class="lnr lnr-power-switch mr-3"></span> <span class="media-body text-truncate"><span class="text-truncate">Logout</span></span></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-block d-lg-none">
							<a href="javascript:void(0)"><span class="lnr lnr-user d-block display-5 text-white" id="open_navSidebar"></span></a>
							<div class="offcanvas-menu" id="offcanvas_menu">
								<span class="lnr lnr-cross float-left display-6 position-absolute t-1 l-1 text-white" id="close_navSidebar"></span>
								<div class="user-info align-center bg-theme text-center">
									<a class="d-block menu-style text-white" href="javascript:void(0)">
									<div class="user-avatar d-inline-block mr-3"><img alt="user avatar" class="rounded-circle img-fluid" src="assets/img/profiles/img-6.jpg" width="55"></div></a>
								</div>
								<div class="user-notification-block align-center">
									<div class="top-nav-search">
										<form>
											<input class="form-control" placeholder="Search here" type="text"> <button class="btn" type="submit"><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
								<hr>
								<div class="user-menu-items px-3 m-0">
									<a class="px-0 pb-2 pt-0" href="index.html"><span class="media align-items-center"><span class="lnr lnr-home mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Dashboard</span></span></span></a> <a class="p-2" href="employees.html"><span class="media align-items-center"><span class="lnr lnr-users mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Employees</span></span></span></a> <a class="p-2" href="company.html"><span class="media align-items-center"><span class="lnr lnr-apartment mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Company</span></span></span></a> <a class="p-2" href="calendar.html"><span class="media align-items-center"><span class="lnr lnr-calendar-full mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Calendar</span></span></span></a> <a class="p-2" href="leave.html"><span class="media align-items-center"><span class="lnr lnr-briefcase mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Leave</span></span></span></a> <a class="p-2" href="reviews.html"><span class="media align-items-center"><span class="lnr lnr-star mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Reviews</span></span></span></a> <a class="p-2" href="reports.html"><span class="media align-items-center"><span class="lnr lnr-rocket mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Reports</span></span></span></a> <a class="p-2" href="manage.html"><span class="media align-items-center"><span class="lnr lnr-sync mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Manage</span></span></span></a> <a class="p-2" href="settings.html"><span class="media align-items-center"><span class="lnr lnr-cog mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Settings</span></span></span></a> <a class="p-2" href="employment.html"><span class="media align-items-center"><span class="lnr lnr-user mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Profile</span></span></span></a> <a class="p-2" href="login.html"><span class="media align-items-center"><span class="lnr lnr-power-switch mr-3"></span> <span class="media-body text-truncate text-left"><span class="text-truncate text-left">Logout</span></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>