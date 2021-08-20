<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- Favicon icon-->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/images/favicon/favicon.svg">


	<!-- Libs CSS -->

	<link href="<?= base_url();?>assets/fonts/feather/feather.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/libs/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script src="<?= base_url();?>assets/libs/jquery/dist/jquery.min.js"></script> <!-- fitur pencarian -->
	
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= base_url();?>assets/css/theme.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
	<title><?= $judul ?></title>
</head>

<body>
	<!-- Wrapper -->
	<div id="db-wrapper">
		<!-- navbar vertical -->
		<!-- navbar vertical -->
		<nav class="navbar-vertical navbar">
			<div class="nav-scroller">
				<!-- Brand logo -->

				<a class="navbar-brand" href="<?= base_url() ?>admin">
					<img src="<?= base_url() ?>assets/images/piib/logo-tulisan-samping.png" alt="" />
				</a>
				<!-- Navbar nav -->
				<ul class="navbar-nav flex-column" id="sideNavbar">
					<li class="nav-item">
						<a class="nav-link  " href="<?= base_url() ?>admin"  data-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
							<i class="nav-icon fe fe-home mr-2"></i> Beranda
						</a>       
				<!-- 		<a class="nav-link  " href="#!" data-toggle="collapse" data-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
							<i class="nav-icon fe fe-home mr-2"></i> Beranda
						</a> -->
             <!--    <div id="navDashboard" class="collapse  show " data-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link  active " href="<?= base_url() ?>pages/dashboard/admin-dashboard.html">
                                    Overview
                                </a>
                            </li> -->
                            <!-- Nav item -->
<!--                         <li class="nav-item ">
                            <a class="nav-link " href="<?= base_url() ?>pages/dashboard/dashboard-analytics.html">
                                    Analytics

                                </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <li class="nav-item">
            	<a class="nav-link   collapsed " href="<?= base_url() ?>admin/profile" data-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
            		<i class="nav-icon fe fe-user mr-2"></i> Profil
            	</a>
            	
            </li>
            <li class="nav-item">
            	<a class="nav-link  collapsed " href="#!" data-toggle="collapse" data-target="#navCourses" aria-expanded="false" aria-controls="navCourses">
            		<i class="nav-icon fe fe-book mr-2"></i> Kegiatan
            	</a>
            	<div id="navCourses"  class="collapse "  data-parent="#sideNavbar">
            		<ul class="nav flex-column">
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>admin/gld">
            					Grand Launching Day
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>admin/startup_academy">
            					Startup Academy
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>admin/praincubation">
            					Prainkubasi Kompetisi
            				</a>
            			</li>	
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>admin/incubation">
            					Inkubasi
            				</a>
            			</li>
            		</ul>
            	</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
            	<a class="nav-link   collapsed " href="#!" data-toggle="collapse" data-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
            		<i class="nav-icon fe fe-user mr-2"></i> Pengguna
            	</a>
            	<div id="navProfile" class="collapse " data-parent="#sideNavbar">
            		<ul class="nav flex-column">
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>admin/peserta_user">
            					Peserta
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>admin/mentor_user">Mentor</a
            					>
            				</li>
            			</ul>
            		</div>
            	</li>

            	<!-- Nav item -->
            	<li class="nav-item ">
            		<a
            		class="nav-link   collapsed  "
            		href="<?= base_url() ?>admin/material"
         
            		>
            		<i class="nav-icon fe fe-book-open mr-2"></i> Materi
            	</a>
      <!--       	<div id="navCMS" class="collapse  " data-parent="#sideNavbar">
            		<ul class="nav flex-column">
            			<li class="nav-item">
            				<a class="nav-link   active  " href="<?= base_url() ?>pages/dashboard/admin-cms-overview.html">
            					Sharing session
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link  " href="<?= base_url() ?>pages/dashboard/admin-cms-post.html">
            					All Post
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/admin-cms-post-new.html">
            					New Post
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/admin-cms-post-category.html">
            					Category
            				</a>
            			</li>
            		</ul>
            	</div>
            </li> -->
            <!-- Nav item -->
    <!--          <li class="nav-item">
            	<a class="nav-link  collapsed " href="<?= base_url() ?>admin/auth" data-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
            		<i class="nav-icon fe fe-lock mr-2"></i> Autentikasi
            	</a>	
          	<a class="nav-link  collapsed " href="#!" data-toggle="collapse" data-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
            		<i class="nav-icon fe fe-lock mr-2"></i> Autentikasi
            	</a> -->
            	<!-- <div id="navAuthentication" class="collapse " data-parent="#sideNavbar">
            		<ul class="nav flex-column">
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/sign-in.html">Sign In</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link  " href="<?= base_url() ?>pages/sign-up.html">Sign Up</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/forget-password.html">
            					Forget Password
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link  " href="<?= base_url() ?>pages/dashboard/notification-history.html">
            					Notifications
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link  " href="<?= base_url() ?>pages/404-error.html"> 404 Error</a>
            			</li>
            		</ul>
            	</div>
            </li> -->
            <!-- Nav item -->
            <li class="nav-item">
            	<div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
            	<div class="navbar-heading">Apps</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
            	<a class="nav-link " href="<?= base_url() ?>admin/notification">
            		<i class="nav-icon fe fe-message-square mr-2"></i> Notifikasi

            	</a>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
            	<a class="nav-link " href="<?= base_url() ?>admin/task">
            		<i class="nav-icon mdi mdi-trello mr-2"></i>
            		Tugas
            		<!-- <span class="badge badge-warning ml-2">New</span> -->
            	</a>
            </li>
            <li class="nav-item">
            	<div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
            	<div class="navbar-heading">Components</div>
            </li>
            <!-- Nav item -->
           <!--  <li class="nav-item">
            	<a class="nav-link  collapsed " href="#!" data-toggle="collapse" data-target="#navTables" aria-expanded="false" aria-controls="navTables">
            		<i class="nav-icon fe fe-database mr-2"></i> Tables<span class="badge badge-warning ml-2">New</span>
            	</a>
            	<div id="navTables" class="collapse " data-parent="#sideNavbar">
            		<ul class="nav flex-column">
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/basic-table.html">
            					Basic
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/datatables.html">
            					Data Tables
            				</a>
            			</li>

            		</ul>
            	</div>
            </li> -->
            <!-- Nav item -->
            <!-- Nav item -->
           <!--  <li class="nav-item">
            	<a class="nav-link " href="#!">
            		<i class="nav-icon fe fe-help-circle mr-2"></i> Help Center
            		<span class="badge badge-success ml-2">Pro</span>
            	</a>
            </li> -->
            <!-- Nav item -->
            <li class="nav-item">
            	<a class="nav-link  collapsed " href="#!" data-toggle="collapse" data-target="#navSiteSetting" aria-expanded="false" aria-controls="navSiteSetting">
            		<i class="nav-icon fe fe-settings mr-2"></i> Pengaturan website
            	</a>
            	<div id="navSiteSetting" class="collapse " data-parent="#sideNavbar">
            		<ul class="nav flex-column">
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/setting-general.html">
            					Umum
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/setting-google.html">
            					Google
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/setting-social.html">
            					Sosial Media
            				</a>
            			</li>
            		<!-- 	<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/setting-social-login.html">
            					Social Login
            				</a>
            			</li> -->
            			<!-- <li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/setting-payment.html">
            					Payment
            				</a>
            			</li> -->
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url() ?>pages/dashboard/setting-smpt.html">
            					SMPT
            				</a>
            			</li>
            		</ul>
            	</div>
            </li>
            <!-- Nav item -->
          <!--   <li class="nav-item">
            	<a class="nav-link  collapsed " href="#!" data-toggle="collapse" data-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
            		<i class="nav-icon fe fe-corner-left-down mr-2"></i> Menu Level
            	</a>
            	<div id="navMenuLevel" class="collapse " data-parent="#sideNavbar">
            		<ul class="nav flex-column">
            			<li class="nav-item">
            				<a class="nav-link " href="#!" data-toggle="collapse" data-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
            					Two Level
            				</a>
            				<div id="navMenuLevelSecond" class="collapse" data-parent="#navMenuLevel">
            					<ul class="nav flex-column">
            						<li class="nav-item">
            							<a class="nav-link " href="#!">NavItem 1</a>
            						</li>
            						<li class="nav-item">
            							<a class="nav-link " href="#!">NavItem 2</a>
            						</li>
            					</ul>
            				</div>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link  collapsed  " href="#!" data-toggle="collapse" data-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
            					Three Level
            				</a>
            				<div id="navMenuLevelThree" class="collapse " data-parent="#navMenuLevel">
            					<ul class="nav flex-column">
            						<li class="nav-item">
            							<a class="nav-link  collapsed " href="#!" data-toggle="collapse" data-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">
            								NavItem 1
            							</a>
            							<div id="navMenuLevelThreeOne" class="collapse collapse " data-parent="#navMenuLevelThree">
            								<ul class="nav flex-column">
            									<li class="nav-item">
            										<a class="nav-link " href="#!">
            											NavChild Item 1
            										</a>
            									</li>
            								</ul>
            							</div>
            						</li>
            						<li class="nav-item">
            							<a class="nav-link " href="#!">Nav Item 2</a>
            						</li>
            					</ul>
            				</div>
            			</li>
            		</ul>
            	</div>
            </li> -->
            <!-- Nav item -->
            <li class="nav-item">
            	<div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
            	<div class="navbar-heading">Documentation</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
            	<a class="nav-link" href="<?= base_url() ?>docs/index.html">
            		<i class="nav-icon fe fe-clipboard mr-2"></i> Dokumentasi
            	</a>
            </li>
            <!-- Nav item -->
           <!--  <li class="nav-item">
            	<a class="nav-link" href="<?= base_url() ?>docs/changelog.html">
            		<i class="nav-icon fe fe-git-pull-request mr-2"></i> Changelog
            		<span class="badge badge-primary ml-2">1.0.3</span>
            	</a>
            </li>
        </ul> -->
        <!-- Card -->
      <!--   <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
        	<div class="card-body py-6">
        		<img src="<?= base_url() ?>assets/images/background/giftbox.png" alt="" />
        		<div class="mt-4">
        			<h5 class="text-white">Unlimited Access</h5>
        			<p class="text-white-50 font-size-xs">
        				Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now
        			</p>
        			<a href="#!" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
        		</div>
        	</div>
        </div> -->
    </div>
</nav>
<!-- navbar vertical -->
<!-- Page Content -->
<div id="page-content">
	<div class="header">
		<!-- navbar -->
		<nav class="navbar-default navbar navbar-expand-lg">
			<a id="nav-toggle" href="#!">
				<i class="fe fe-menu"></i>
			</a>
			<div class="ml-lg-3 d-none d-md-none d-lg-block">
				<!-- Form -->
			<!-- 	<form class="d-flex align-items-center">
					<span class="position-absolute pl-3 search-icon">
						<i class="fe fe-search"></i>
					</span>
					<input type="search" class="form-control form-control-sm pl-6" placeholder="Search Entire Dashboard" />
				</form> -->
			</div>
			<!--Navbar nav -->
			<ul class="navbar-nav navbar-right-wrap ml-auto d-flex nav-top-wrap">
				<li class="dropdown stopevent">
					<a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#!" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fe fe-bell"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg" aria-labelledby="dropdownNotification">
						<div>
							<div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
								<span class="h4 mb-0">Notifikasi</span>
								<a href="# " class="text-muted">
									<span class="align-middle">
										<i class="fe fe-settings mr-1"></i>
									</span>
								</a>
							</div>
							<!-- List group -->
							<ul class="list-group list-group-flush notification-list-scroll">
								<!-- List group item -->
								<li class="list-group-item bg-light">
									<div class="row">
										<div class="col">
											<div class="d-flex">
												<img src="<?= base_url() ?>assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
												<div class="ml-3">
													<h5 class="font-weight-bold mb-1">
														Kristin Watson:
													</h5>
													<p class="mb-3">
														Krisitn Watsan like your comment on course Javascript Introduction!
													</p>
													<span class="font-size-xs text-muted">
														<span>
															<span
															class="fe fe-thumbs-up text-success mr-1"
															></span
															>2 hours ago,</span
															>
															<span class="ml-1">2:19 PM</span>
														</span>
													</div>
												</div>
												<a class="stretched-link" href="#!"></a>
											</div>
											<div class="col-auto text-center">
												<a href="#!" class="badge-dot badge-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as read"></a>
												<div>
													<a href="#!" class="bg-transparent" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
														<i class="fe fe-x text-muted"></i>
													</a>
												</div>
											</div>
										</div>
									</li>
									<!-- List group item -->
							<!-- 		<li class="list-group-item">
										<div class="row">
											<div class="col">
												<div class="d-flex">
													<img src="<?= base_url() ?>assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
													<div class="ml-3">
														<h5 class="font-weight-bold mb-1">
															Brooklyn Simmons
														</h5>
														<p class="mb-3">
															Just launched a new Courses React for Beginner.
														</p>
														<span class="font-size-xs text-muted">
															<span>
																<span
																class="fe fe-thumbs-up text-success mr-1"
																></span> Oct 9,
															</span>
															<span class="ml-1">1:20 PM</span>
														</span>
													</div>
												</div>
												<a class="stretched-link" href="#!"></a>
											</div>
											<div class="col-auto text-center">
												<a href="#!" class="badge-dot badge-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as unread"></a>
											</div>
										</div>
									</li> -->
									<!-- List group item -->
								<!-- 	<li class="list-group-item">
										<div class="row">
											<div class="col">
												<div class="d-flex">
													<img src="<?= base_url() ?>assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
													<div class="ml-3">
														<h5 class="font-weight-bold mb-1">
															Jenny Wilson
														</h5>
														<p class="mb-3">
															Krisitn Watsan like your comment on course Javascript Introduction!
														</p>
														<span class="font-size-xs text-muted">
															<span>
																<span
																class="fe fe-thumbs-up text-info mr-1"
																></span> Oct 9,
															</span>
															<span class="ml-1">1:56 PM</span>
														</span>
													</div>
												</div>
												<a class="stretched-link" href="#!"></a>
											</div>
											<div class="col-auto text-center">
												<a href="#!" class="badge-dot badge-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as unread"></a>
											</div>
										</div>
									</li> -->
									<!-- List group item -->
									<!-- <li class="list-group-item">
										<div class="row">
											<div class="col">
												<div class="d-flex">
													<img src="<?= base_url() ?>assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
													<div class="ml-3">
														<h5 class="font-weight-bold mb-1">Sina Ray</h5>
														<p class="mb-3">
															You earn new certificate for complete the Javascript Beginner course.
														</p>
														<span class="font-size-xs text-muted">
															<span>
																<span
																class="fe fe-award text-warning mr-1"
																></span> Oct 9,
															</span>
															<span class="ml-1">1:56 PM</span>
														</span>
													</div>
												</div>
												<a class="stretched-link" href="#!"></a>
											</div>
											<div class="col-auto text-center">
												<a href="#!" class="badge-dot badge-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as unread"></a>
											</div>
										</div>
									</li> -->
								</ul>
								<div class="border-top px-3 pt-3 pb-0">
									<a href="<?= base_url() ?>pages/notification-history.html" class="text-link font-weight-semi-bold">
										Lihat semua notifikasi
									</a>
								</div>
							</div>
						</div>
					</li>
					<!-- List -->
					<li class="dropdown ml-2">
						<a class="rounded-circle" href="#!" role="button" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="avatar avatar-md avatar-indicators avatar-online">
								<img alt="avatar" src="<?= base_url('assets/images/users/').$data['foto'] ?>"<?= base_url('assets/images/users/').$data['foto'] ?> class="rounded-circle" />
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUser">
							<div class="dropdown-item">
								<div class="d-flex">
									<div class="avatar avatar-md avatar-indicators avatar-online">
										<img alt="avatar" src="<?= base_url('assets/images/users/').$data['foto'] ?>" class="rounded-circle" />
									</div>
									<div class="ml-3 lh-1">
										<h5 class="mb-1"><?= $data['username'] ?></h5>
										<p class="mb-0 text-muted"><?= $data['email'] ?></p>
									</div>
								</div>
							</div>
							<div class="dropdown-divider"></div>
							<ul class="list-unstyled">
								<!-- <li class="dropdown-submenu dropleft-lg">
									<a class="dropdown-item dropdown-toggle" href="#!">
										<i class="fe fe-circle mr-2"></i> Status
									</a>
									<ul class="dropdown-menu">
										<li>
											<a class="dropdown-item" href="#!">
												<span class="badge-dot bg-success mr-2"></span> Online
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="#!">
												<span class="badge-dot bg-secondary mr-2"></span> Offline
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="#!">
												<span class="badge-dot bg-warning mr-2"></span> Away
											</a>
										</li>
										<li>
											<a class="dropdown-item" href="#!">
												<span class="badge-dot bg-danger mr-2"></span> Busy
											</a>
										</li>
									</ul>
								</li> -->
								<li>
									<a class="dropdown-item" href="<?= base_url() ?>admin/profile">
										<i class="fe fe-user mr-2"></i> Profil
									</a>
								</li>
								<!-- <li>
									<a class="dropdown-item" href="<?= base_url() ?>pages/student-subscriptions.html">
										<i class="fe fe-star mr-2"></i> Subscription
									</a>
								</li> -->
								<li>
									<a class="dropdown-item" href="<?= base_url() ?>admin/profile">
										<i class="fe fe-settings mr-2"></i> Pengaturan
									</a>
								</li>
							</ul>
							<div class="dropdown-divider"></div>
							<ul class="list-unstyled">
								<li>
									<a class="dropdown-item" href="<?= base_url() ?>auth/logout">
										<i class="fe fe-power mr-2"></i> Keluar
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
