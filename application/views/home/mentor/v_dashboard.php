									<?php foreach ($data->result_array() as $key ) {
										$foto=$key['foto'];
										$username=$key['username'];
										$nama_lengkap=$key['nama_lengkap'];
										?>
										<div class="pt-5 pb-5">
											<div class="container">
												<!-- User info -->
												<div class="row align-items-center">
													<div class="col-xl-12 col-lg-12 col-md-12 col-12">
														<!-- Bg -->
														<div class="pt-16 rounded-top" style="
														background: url(<?= base_url();?>assets/images/background/profile-bg.jpg) no-repeat;
														background-size: cover;
														"></div>
														<div
														class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom shadow-sm">
														<div class="d-flex align-items-center">
															<div class="mr-2 position-relative d-flex justify-content-end align-items-end mt-n5">
																<img src="<?= base_url('assets/images/users/'.$foto);?>" class="avatar-xl rounded-circle border-width-4 border-white"
																alt="" />
															</div>
															<div class="lh-1">
																<h2 class="mb-0">

																	<?= $nama_lengkap ?>

																</h2>

																<p class="mb-0 d-block">@<?= $username ?></p>
															<?php } ?>
														</div>
													</div>
													<div>
														<a href="add-course.html" class="btn btn-primary btn-sm d-none d-md-block">Buat Kelas Baru</a>
													</div>
												</div>
											</div>
										</div>
										<!-- Content -->

										<div class="row mt-0 mt-md-4">
											<div class="col-lg-3 col-md-4 col-12">
												<!-- User profile -->
												<nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
													<!-- Menu -->
													<a class="d-xl-none d-lg-none d-md-none text-inherit font-weight-bold" href="#!">Menu</a>
													<!-- Button -->
													<button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
													data-toggle="collapse" data-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
													aria-label="Toggle navigation">
													<span class="fe fe-menu"></span>
												</button>
												<!-- Collapse -->
												<div class="collapse navbar-collapse" id="sidenav">
													<div class="navbar-nav flex-column">
														<span class="navbar-header">Beranda</span>
														<ul class="list-unstyled ml-n2 mb-4">
															<!-- Nav item -->
															<li class="nav-item active">
																<a class="nav-link" href="dashboard-instructor.html"><i class="fe fe-home nav-icon"></i>Beranda</a>
															</li>
															<!-- Nav item -->
															<li class="nav-item">
																<a class="nav-link" href="instructor-courses.html"><i class="fe fe-book nav-icon"></i>Kelas</a>
															</li>
															<!-- Nav item -->
															<li class="nav-item">
																<a class="nav-link" href="instructor-students.html"><i class="fe fe-users nav-icon"></i>Mahasiswa</a>
															</li>				
															<li class="nav-item">
																<a class="nav-link" href="instructor-students.html"><i class="fe fe-users nav-icon"></i>Umum</a>
															</li>									
														</ul>
														<!-- Navbar header -->
														<span class="navbar-header">Pengaturan Akun</span>
														<ul class="list-unstyled ml-n2 mb-0">
															<!-- Nav item -->
															<li class="nav-item">
																<a class="nav-link" href="<?= base_url();?>mentor/profile"><i class="fe fe-user nav-icon"></i>Profil</a>
															</li>
															<!-- Nav item -->
															<li class="nav-item">
																<a class="nav-link" href="<?= base_url();?>mentor/edit_profile"><i class="fe fe-settings nav-icon"></i>Ubah Profil</a>
															</li>
															<!-- Nav item -->
															<li class="nav-item">
																<a class="nav-link" href="<?= base_url();?>mentor/security"><i class="fe fe-lock nav-icon"></i>Keamanan</a>
															</li>
															<!-- Nav item -->
					<!-- <li class="nav-item">
						<a class="nav-link" href="<?= base_url();?>mentor/social"><i class="fe fe-refresh-cw nav-icon"></i>Akun Sosial Media</a>
					</li> -->
					<!-- Nav item -->
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url(); ?>auth/logout"><i class="fe fe-power nav-icon"></i>Keluar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="col-lg-9 col-md-8 col-12">
	<div class="row">
						<!-- <div class="col-lg-4 col-md-12 col-12">
							
							<div class="card mb-4">
								<div class="p-4">
									<span class="font-size-xs text-uppercase font-weight-semi-bold">Revenue</span>
									<h2 class="mt-4 font-weight-bold mb-1 d-flex align-items-center h1 lh-1">
										$467.34
									</h2>
									<span class="d-flex justify-content-between align-items-center">
										<span>Earning this month</span>
										<span class="badge badge-success ml-2">$203.23</span>
									</span>
								</div>
							</div>
						</div> -->

						<div class="col-lg-4 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<div class="p-4">
									<span class="font-size-xs text-uppercase font-weight-semi-bold">Pendaftaran Peserta</span>
									<h2 class="mt-4 font-weight-bold mb-1 d-flex align-items-center h1 lh-1">
										531
									</h2>
									<span class="d-flex justify-content-between align-items-center">
										<span>Baru di Bulan Ini</span>
										<span class="badge badge-info ml-2">120+</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<div class="p-4">
									<span class="font-size-xs text-uppercase font-weight-semi-bold">Jumlah Kelas</span>
									<h2 class="mt-4 font-weight-bold mb-1 d-flex align-items-center h1 lh-1">
										4
									</h2>
									<span class="d-flex justify-content-between align-items-center">
										<span>Kelas bulan ini</span>										
										<span class="badge badge-warning ml-2">1+</span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Card -->
					<div class="card mb-4">
						<!-- Card header -->
						<div class="card-header">
							<h3 class="h4 mb-0">Mahasiswa Aktif</h3>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<div id="earning" class="apex-charts"></div>
						</div>
					</div>
					<!-- Card -->
					<div class="card mb-4">
						<!-- Card header -->
						<div class="card-header">
							<h3 class="h4 mb-0">Mahasiswa Aktif</h3>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<div id="orderColumn" class="apex-charts"></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>