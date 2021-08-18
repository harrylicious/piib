<body>
	<!-- Page content -->
	<div class="container d-flex flex-column">
		<div class="row align-items-center justify-content-center no-gutters min-vh-100">
			<div class="col-lg-5 col-md-8 py-8 py-xl-0">
				<!-- Card -->
				<div class="card shadow">
					<!-- Card body -->
					<div class="card-body p-6">
						<div class="mb-4">
							<a href="<?= base_url();?>"><img src="<?= base_url();?>/assets/images/piib/logo-tulisan-samping.png" width="350" weight="150" class="mb-4" alt="logo" /></a>
							<h1 class="mb-1 font-weight-bold"><?= $label ?></h1>							
						</div>
						<!-- Form -->
						<center><?php echo $this->session->tempdata('msg');?></center>
						<form  id="form" action="<?= base_url('auth/register_process_mentor') ?>" method="post">
							<!-- Nama Lengkap -->
							<div class="form-group">
								<label for="nama_lengkap" class="form-label">Nama lengkap</label>
								<input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap" placeholder="Nama lengkap"
								required />
							</div>
							<?= form_error('nama_lengkap','<small class="text-danger">','</small>'); ?>
							<!-- Email -->
							<div class="form-group">
								<label for="email" class="form-label">Email</label>
								<input type="email" id="email" class="form-control" name="email" placeholder="Email"
								required />
							</div>
							<?= form_error('email','<small class="text-danger">','</small>'); ?>
							<!-- Username -->
							<div class="form-group">
								<label for="username" class="form-label">Username</label>
								<input type="text" id="username" class="form-control" name="username" placeholder="Username"
								required />
							</div>
							<?= form_error('username','<small class="text-danger">','</small>'); ?>
							<!-- Password -->
							<div class="form-group">
								<label for="password" class="form-label">Kata Sandi</label>
								<input type="password" id="password" class="form-control" name="password" placeholder="**************"
								required />
							</div>
							<?= form_error('password','<small class="text-danger">','</small>'); ?>
							<!-- Re Type Password -->
							<div class="form-group">
								<label for="password" class="form-label">Ulangi Kata Sandi</label>
								<input type="password" id="password2" class="form-control" name="password2" placeholder="**************"
								required />
							</div>
							<?= form_error('password2','<small class="text-danger">','</small>'); ?>
							<div>
								<!-- Button -->
								<button type="submit" class="btn btn-primary btn-block">
									Daftar
								</button>
								<div class="mt-5" align="center">
									<span>Sudah Punya Akun?
										<a href="<?= base_url('auth/');?>login_mentor" class="ml-1">Masuk</a></span>
									</div>
								</div>							
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>