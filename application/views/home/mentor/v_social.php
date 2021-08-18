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
							<img src="<?= base_url();?>assets/images/avatar/avatar-3.jpg" class="avatar-xl rounded-circle border-width-4 border-white"
							alt="" />
						</div>
						<div class="lh-1">
							<h2 class="mb-0">
								<?php foreach ($data->result_array() as $key ) {
									$username=$key['username'];
									$nama_lengkap=$key['nama_lengkap'];
									?>
									<?= $nama_lengkap ?>
									<a href="#!" class="text-decoration-none" data-toggle="tooltip" data-placement="top" title="Beginner">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
										</svg>
									</a>
								</h2>

								<p class="mb-0 d-block">@<?= $username ?></p>
							<?php } ?>
						</div>
					</div>
					<div>
						<a href="<?= base_url();?>mentor" class="btn btn-outline-primary btn-sm d-none d-md-block">Beranda</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Content -->
		<div class="row mt-0 mt-md-4">
			<div class="col-lg-3 col-md-4 col-12">
				<!-- Side navbar -->
				<nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
					<!-- Menu -->
					<a class="d-xl-none d-lg-none d-md-none text-inherit font-weight-bold" href="#!">Menu</a>
					<!-- Button -->
					<button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
					data-toggle="collapse" data-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fe fe-menu"></span>
				</button>
				<!-- Collapse navbar -->
				<div class="collapse navbar-collapse" id="sidenav">
					<div class="navbar-nav flex-column">

						<span class="navbar-header">Pengaturan Akun</span>
						<!-- List -->
						<ul class="list-unstyled ml-n2 mb-0">
							<!-- Nav item -->
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('mentor/profile'); ?>"><i class="fe fe-user nav-icon"></i>Profil</a>
							</li>	
							<!-- Nav item -->
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('mentor/edit_profile'); ?>"><i class="fe fe-settings nav-icon"></i>Ubah Profil</a>
							</li>
							<!-- Nav item -->
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('mentor/security'); ?>"><i class="fe fe-user nav-icon"></i>Keamanan</a>
							</li>
							<!-- Nav item -->
							<li class="nav-item active">
								<a class="nav-link" href="<?= base_url('mentor/social'); ?>"><i class="fe fe-refresh-cw nav-icon"></i>Akun Sosial Media</a>
							</li>
							<!-- Nav item -->
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url();?>auth/logout"><i class="fe fe-power nav-icon"></i>Keluar</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="col-lg-9 col-md-8 col-12">
			<!-- Card -->
			<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<center><?php echo $this->session->tempdata('msg');?></center> 
					<h3 class="mb-0">Akun Sosial Media</h3>
					<p class="mb-0">
						Tambah link akun sosial media anda dibawah ini. 
					</p>
				</div>
				<!-- Card body -->
				
				<?php foreach ($data->result_array() as $key ) {
					$link_portfolio=$key['link_portfolio'];
					$link_website=$key['link_website'];
					$link_linkedin=$key['link_linkedin'];
					$link_facebook=$key['link_facebook'];
					
					?>

					<!-- Card body -->
					<div class="card-body">
						<form  class="form" action="<?= base_url(); ?>mentor/update_social" method="post">
							<div class="row mb-5">
								<!-- Portfolio -->
								<div class="col-lg-3 col-md-4 col-12">
									<h5>Portfolio</h5>
								</div>
								<div class="col-lg-9 col-md-8 col-12">
									<input name="link_portfolio" value="<?= $link_portfolio ?>" type="text" class="form-control mb-1" placeholder="Link Portfolio Anda" />								
								</div>
							</div>
							<!-- website -->
							<div class="row mb-5">
								<div class="col-lg-3 col-md-4 col-12">
									<h5>Website</h5>
								</div>
								<div class="col-lg-9 col-md-8 col-12">
									<input name="link_website" value="<?= $link_website?>" type="text" class="form-control mb-1" placeholder="link Website Anda" />
								</div>
							</div>
							<!-- Linkedin -->
							<div class="row mb-5">
								<div class="col-lg-3 col-md-4 col-12">
									<h5>Linkedin</h5>
								</div>
								<div class="col-lg-9 col-md-8 col-12">
									<input name="link_linkedin" value="<?= $link_linkedin ?>" type="text" class="form-control mb-1" placeholder="Link Linkedin Anda" />
								</div>
							</div>
							<!-- Facebook -->
							<div class="row mb-5">
								<div class="col-lg-3 col-md-4 col-12">
									<h5>Facebook</h5>
								</div>
								<div class="col-lg-9 col-md-8 col-12">
									<input name="link_facebook" value="<?= $link_facebook ?>" type="text" class="form-control mb-1" placeholder="Link Facebook Anda " />
								</div>
							</div>

							<?php } ?> <!-- penutup foreach  -->

							<!-- Button -->
							<div class="row">
								<div class="offset-lg-3 col-lg-6 col-12">
									<button class="btn btn-primary" type="submit">Simpan</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<br>



