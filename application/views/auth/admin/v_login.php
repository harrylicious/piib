<body>
	<!-- Page content -->
	<div class="container d-flex flex-column">
		<div class="row align-items-center justify-content-center no-gutters min-vh-100">
			<div class="col-lg-5 col-md-8 py-8 py-xl-0">
				<!-- Card -->
				<div class="card shadow ">
					<!-- Card body -->
					<div class="card-body p-6">
						<div class="mb-4">
							<a href="<?= base_url();?>"><img src="<?= base_url();?>/assets/images/piib/logo-tulisan-samping.png" width="350" weight="150" class="mb-4" alt="logo" /></a>
							<h1 class="mb-1 font-weight-bold"><?= $label ?></h1>              
						</div>
						<center><?php echo $this->session->tempdata('msg');?></center>    
						<!-- Form -->
						<form  id="form" action="<?= base_url('auth/login_process_admin') ?>" method="post">
							<!-- Username -->
							<div class="form-group">
								<label for="username" class="form-label">Username</label>
								<input type="username" id="username" class="form-control" name="username" placeholder="Username"
								required>
							</div>
							<?= form_error('username','<small class="text-danger">','</small>'); ?>    
							<!-- Password -->
							<div class="form-group">
								<label for="password" class="form-label">Password</label>
								<input type="password" id="password" class="form-control" name="password" placeholder="**************"
								required>
							</div>     
							<?= form_error('password','<small class="text-danger">','</small>'); ?>             
							<!-- Checkbox -->
							<div class="d-lg-flex justify-content-between align-items-center mb-4">
								<!-- <div class="custom-control custom-checkbox"> -->
									<!-- <input type="checkbox" class="custom-control-input" id="rememberme"> -->
									<!-- <label class="custom-control-label " for="rememberme">Remember me</label> -->
									<!-- </div> -->
								</div>              
								<div>
									<!-- Button -->
									<button type="submit" class="btn btn-primary btn-block">Masuk</button>
								</div>
								<!-- <hr class="my-4"> -->
								
								<div class="mt-5" align="center">
									<a href="<?= base_url('auth/');?>forgot_peserta">Lupa password?</a>
									<div>                    
									</div>                
								</div>                  
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>