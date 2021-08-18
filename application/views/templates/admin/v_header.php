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
				<a class="navbar-brand" href="<?= base_url();?>admin">
					<img src="<?= base_url();?>assets/images/piib/Piib_logo.png" width="120px" weight="90px" alt="" />
				</a>
				<!-- Navbar nav -->
				<ul class="navbar-nav flex-column" id="sideNavbar">
					<li class="nav-item">
						<a class="nav-link  " href="<?= base_url()?>admin" data-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
							<i class="nav-icon fe fe-home mr-2"></i> Beranda
						</a>                
					</li>
					<li class="nav-item">
						<a class="nav-link  " href="<?= base_url() ?>admin/profile" data-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
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
									<a class="nav-link " href="<?= base_url();?>pages/dashboard/admin-course-overview.html">
										Semua Kegiatan
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="<?= base_url();?>pages/dashboard/admin-course-category.html">
										Courses Category
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="<?= base_url();?>pages/dashboard/admin-course-category-single.html">
										Category Single
									</a>
								</li>
							</ul>
						</div>
					</li>
					<!-- Nav item -->
					<li class="nav-item">
						<a class="nav-link   collapsed " href="#!" data-toggle="collapse" data-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
							<i class="nav-icon fe fe-users mr-2"></i> Pengguna
						</a>
						<div id="navProfile" class="collapse " data-parent="#sideNavbar">
							<ul class="nav flex-column">
								<li class="nav-item">
									<a class="nav-link " href="<?= base_url();?>admin/mentor_user">Mentor</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="<?= base_url();?>admin/peserta_user">Peserta</a
										>
									</li>
								</ul>
							</div>
						</li>

						<!-- Nav item -->
                   <!--  <li class="nav-item ">
                        <a
                        class="nav-link   collapsed  "
                        href="#!"
                        data-toggle="collapse"
                        data-target="#navCMS"
                        aria-expanded="false"
                        aria-controls="navCMS"
                        >
                        <i class="nav-icon fe fe-book-open mr-2"></i> CMS
                    </a>
                    <div id="navCMS" class="collapse  " data-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link   " href="<?= base_url();?>pages/dashboard/admin-cms-overview.html">
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="<?= base_url();?>pages/dashboard/admin-cms-post.html">
                                    All Post
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="<?= base_url();?>pages/dashboard/admin-cms-post-new.html">
                                    New Post
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="<?= base_url();?>pages/dashboard/admin-cms-post-category.html">
                                    Category
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            -->
            <!-- Nav item -->

            <li class="nav-item">
            	<div class="nav-divider"></div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
            	<div class="navbar-heading">Components</div>
            </li>
            <!-- Nav item -->
            <li class="nav-item">
            	<a class="nav-link  collapsed " href="#!" data-toggle="collapse" data-target="#navTables" aria-expanded="false" aria-controls="navTables">
            		<i class="nav-icon fe fe-database mr-2"></i> Tabel
            	</a>
            	<div id="navTables" class="collapse " data-parent="#sideNavbar">
            		<ul class="nav flex-column">
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url();?>pages/dashboard/basic-table.html">
            					Basic
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url();?>pages/dashboard/datatables.html">
            					Data Tables
            				</a>
            			</li>

            		</ul>
            	</div>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
            	<a class="nav-link  collapsed " href="#!" data-toggle="collapse" data-target="#navSiteSetting" aria-expanded="false" aria-controls="navSiteSetting">
            		<i class="nav-icon fe fe-settings mr-2"></i>Pengaturan website
            	</a>
            	<div id="navSiteSetting" class="collapse " data-parent="#sideNavbar">
            		<ul class="nav flex-column">
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url();?>pages/dashboard/setting-general.html">
            					General
            				</a>
            			</li>                                    
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url();?>pages/dashboard/setting-social.html">
            					Social
            				</a>
            			</li>
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url();?>pages/dashboard/setting-social-login.html">
            					Social Login
            				</a>
            			</li>                                    
            			<li class="nav-item">
            				<a class="nav-link " href="<?= base_url();?>pages/dashboard/setting-smpt.html">
            					SMPT
            				</a>
            			</li>
            		</ul>
            	</div>
            </li>                        
            <!-- Nav item -->
            <li class="nav-item">
            	<div class="nav-divider"></div>
            </li>

        </ul>

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
				<form class="d-flex align-items-center">
					<span class="position-absolute pl-3 search-icon">
						<i class="fe fe-search"></i>
					</span>
					<input type="search" class="form-control form-control-sm pl-6" placeholder="Search Entire Dashboard" />
				</form>
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
								<span class="h4 mb-0">Pemberitahuan</span>
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
												<img src="<?= base_url();?>assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
												<div class="ml-3">
													<h5 class="font-weight-bold mb-1">
														Shneect:
													</h5>
													<p class="mb-3">
														Pesan Test !
													</p>
													<span class="font-size-xs text-muted">
														<span>
															<span
															class="fe fe-thumbs-up text-success mr-1"
															></span
															>2 jam lalu,</span
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

								</ul>
								<div class="border-top px-3 pt-3 pb-0">
									<a href="<?= base_url();?>pages/notification-history.html" class="text-link font-weight-semi-bold">
										Lihat Semua Notifikasi
									</a>
								</div>
							</div>
						</div>
					</li>
					<?php foreach ($data->result_array() as $key ) {
						$foto=$key['foto'];
						$email=$key['email'];
						$nama_lengkap=$key['nama_lengkap'];
					}?>
					<!-- List -->
					<li class="dropdown ml-2">
						<a class="rounded-circle" href="#!" role="button" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="avatar avatar-md avatar-indicators avatar-online">
								<img alt="avatar" src="<?= base_url();?>assets/images/users/<?= $foto?>" class="rounded-circle" />
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUser">
							<div class="dropdown-item">
								<div class="d-flex">
									<div class="avatar avatar-md avatar-indicators avatar-online">
										<img alt="avatar" src="<?= base_url();?>assets/images/users/<?= $foto?>" class="rounded-circle" />
									</div>
									<div class="ml-3 lh-1">
										<h5 class="mb-1"><?= $nama_lengkap; ?></h5>
										<?= ' '.$email.' ' ?>
										<!-- <p class="mb-0 text-muted">annette@geeksui.com</p> -->
									</div>
								</div>
							</div>
							<div class="dropdown-divider"></div>
							<ul class="list-unstyled">                       
								<li>
									<a class="dropdown-item" href="<?= base_url();?>admin/profile">
										<i class="fe fe-user mr-2"></i> Profil
									</a>
								</li>                        
								<li>
									<a class="dropdown-item" href="<?= base_url();?>admin/profile">
										<i class="fe fe-settings mr-2"></i> Pengaturan
									</a>
								</li>
							</ul>
							<div class="dropdown-divider"></div>
							<ul class="list-unstyled">
								<li>
									<a class="dropdown-item" href="<?= base_url();?>auth/logout">
										<i class="fe fe-power mr-2"></i> Keluar
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>

