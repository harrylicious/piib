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
												<a href="<?= base_url();?>peserta" class="btn btn-outline-primary btn-sm d-none d-md-block">Beranda</a>
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
												<ul class="list-unstyled ml-n2 mb-4">
													<!-- Nav item -->
													<span class="navbar-header">Beranda</span>
													<li class="nav-item">
														<a class="nav-link" href="<?= base_url();?>peserta"><i class="fe fe-home nav-icon"></i>Beranda</a>
													</li>
												</ul>
												<span class="navbar-header">Pengaturan Akun</span>
												<ul class="list-unstyled ml-n2 mb-0">
													<!-- Nav item -->
													<li class="nav-item">
														<a class="nav-link" href="<?= base_url('peserta/profile'); ?>"><i class="fe fe-user nav-icon"></i>Profil</a>
													</li>	
													<!-- Nav item -->
													<li class="nav-item">
														<a class="nav-link" href="<?= base_url('peserta/edit_profile'); ?>"><i class="fe fe-settings nav-icon"></i>Ubah Profil</a>
													</li>
													<!-- Nav item -->
													<li class="nav-item active">
														<a class="nav-link" href="<?= base_url('peserta/security'); ?>"><i class="fe fe-lock nav-icon"></i>Keamanan</a>
													</li>
													<!-- Nav item -->
													<li class="nav-item">
														<a class="nav-link" href="<?= base_url('peserta/social'); ?>"><i class="fe fe-refresh-cw nav-icon"></i>Akun Sosial Media</a>
													</li>
													<!-- Nav item -->
													<li class="nav-item">
														<a class="nav-link" href="<?= base_url('auth/logout'); ?>"><i class="fe fe-power nav-icon"></i>Keluar</a>
													</li>
												</ul>
											</div>
										</div>
									</nav>
								</div>
								<!-- Content -->
								<div class="col-lg-9 col-md-8 col-12">
									<!-- Card -->
									<div class="card">
										<!-- Card header -->
										<div class="card-header">
											<center><?php echo $this->session->tempdata('msg');?></center> 
											<h3 class="mb-0">Keamanan</h3>
											<p class="mb-0">
												Ubah akun dan kata sandi anda di sini.
											</p>
										</div>
										<?php foreach ($data->result_array() as $key ) {
											$id_peserta=$key['id_peserta'];
											$username=$key['username'];
											$password=$key['password'];
											$email=$key['email'];
											?>
											<!-- Card body -->
											<div class="card-body">
												<h4 class="mb-0">Alamat Email</h4>
												<p>
													Email anda saat ini
													<span class="text-success"><?= $email ?></span>
												</p>
												<form class="form-row" action="<?= base_url();?>peserta/change_email" method="post">
													<div class="form-group col-lg-6 col-md-12 col-12">
														<input name="id_peserta" value="<?= $id_peserta ?>" type="text" hidden />
														<label class="form-label" for="email">Email baru<font color="red">*</font></label>
														<input id="email" type="email" name="email" class="form-control" placeholder="" required />
													<!-- 	<button type="submit" class="btn btn-primary mt-2">
															Update
														</button> -->
														<a href="#!" id="ChangeEmail" class="btn btn-primary mt-2"
														data-template="ChangeEmail"
														data-toggle="modal"
														data-target="#ChangeEmailModal"
														>Ubah alamat email</a>	
													</div>
													<!-- Modal update email -->
													<div class="modal fade" id="ChangeEmailModal" tabindex="-1" role="dialog" aria-labelledby="ChangeEmailModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header align-items-center">
																	<h4 class="mb-0" id="ChangeEmailModalLabel">Konfirmasi</h4>
																	<button type="button" class="btn-close" data-dismiss="modal"aria-label="Close">
																		<i class="fe fe-x-circle"></i>
																	</button>
																</div>
																<div class="modal-body px-0">
																	<!-- contact list -->
																	<ul class="list-unstyled contacts-list mb-0">
																		<!-- chat item -->
																		<li class="py-3 px-4 chat-item contacts-item">
																			<div class="d-flex justify-content-between align-items-center">
																				<!-- media body -->
																				<div class="media-body ml-2">
																					<center>
																						<h5 class="mb-0">Apakah anda yakin ingin <font color="green">merubah</font> alamat email anda ?</h5>
																						<br>
																						<button type="submit" class="btn-sm btn-success">
																							Ya
																						</button>
																						<button  type="button" class="btn-sm btn-danger" data-dismiss="modal"aria-label="Close">
																							Tidak
																						</button>					
																					</center>
																				</div>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<!--end modal  -->
												</form>
												<hr class="my-5" />
												<div>
													<h4 class="mb-0">Ganti kata sandi</h4>
													<p>
														Kami akan mengirimkan email konfirmasi kepada Anda saat mengubah
														kata sandi, jadi harap konfirmasi email itu setelah dikirimkan. 
													</p>
													<!-- Form -->
													<form class="form-row" action="<?= base_url();?>peserta/change_password" method="post">
														<div class="col-lg-6 col-md-12 col-12">
															<!-- Current password -->
															<div class="form-group">
																<label class="form-label" for="currentpassword">Kata sandi saat ini<font color="red">*</font></label>
																<input id="currentpassword" type="password" name="currentpassword" class="form-control"
																placeholder="" required />
															</div>

															<!-- New password -->
															<div class="form-group password-field">
																<label class="form-label" for="password">Kata sandi baru<font color="red">*</font></label>
																<input id="password" type="password" name="password" class="form-control mb-2"
																placeholder="" required />

																<div class="row align-items-center no-gutters">
																	<div class="col-6">
																		<span data-toggle="tooltip" data-placement="right"
																		title="Uji dengan mengetikkan kata sandi di bidang di bawah ini. Untuk mencapai kekuatan penuh, gunakan setidaknya 6 karakter, huruf kapital dan angka, mis. 'Tes01' ">Kekuatan kata sandi
																		<i class="fas fa-question-circle ml-1"></i></span>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<!-- Confirm new password -->
																<label class="form-label" for="password2">Ulangi kata sandi baru<font color="red">*</font></label>
																<input id="password2" type="password" name="password2" class="form-control mb-2"
																placeholder="" required />
															</div>		


															<?php } ?>	<!-- penutup foreach  -->

															<!-- Button -->
														<!-- 	<button type="submit" class="btn btn-primary">
																Simpan kata sandi
															</button> -->
															<a href="#!" id="ChangePassword" class="btn btn-primary mt-2"
															data-template="ChangePassword"
															data-toggle="modal"
															data-target="#ChangePasswordModal"
															>Ubah kata sandi</a>	

															<div class="col-6"></div>
														</div>
														<div class="col-12 mt-4">
															<p class="mb-0">
																Anda lupa kata sandi anda saat ini?
																<a href="#!">Reset kata sandi anda lewat email</a>
															</p>
														</div>

														<!-- Modal simpan kata sandi -->
														<div class="modal fade" id="ChangePasswordModal" tabindex="-1" role="dialog" aria-labelledby="ChangePasswordModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
																<div class="modal-content">
																	<div class="modal-header align-items-center">
																		<h4 class="mb-0" id="ChangePasswordModalLabel">Konfirmasi</h4>
																		<button type="button" class="btn-close" data-dismiss="modal"aria-label="Close">
																			<i class="fe fe-x-circle"></i>
																		</button>
																	</div>
																	<div class="modal-body px-0">
																		<!-- contact list -->
																		<ul class="list-unstyled contacts-list mb-0">
																			<!-- chat item -->
																			<li class="py-3 px-4 chat-item contacts-item">
																				<div class="d-flex justify-content-between align-items-center">
																					<!-- media body -->
																					<div class="media-body ml-2">
																						<center>
																							<h5 class="mb-0">Apakah anda yakin ingin <font color="green">merubah</font> kata sandi anda ?</h5>
																							<br>
																							<button type="submit" class="btn-sm btn-success">
																								Ya
																							</button>		
																							<button  type="button" class="btn-sm btn-danger" data-dismiss="modal"aria-label="Close">
																								Tidak
																							</button>			
																						</center>
																					</div>
																				</div>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
														<!--end modal  -->
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>