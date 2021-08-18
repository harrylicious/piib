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

													<!-- List -->
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
														<li class="nav-item">
															<a class="nav-link" href="<?= base_url('peserta/security'); ?>"><i class="fe fe-lock nav-icon"></i>Keamanan</a>
														</li>
														<!-- Nav item -->
														<li class="nav-item active">
															<a class="nav-link" href="<?= base_url('peserta/social'); ?>"><i class="fe fe-refresh-cw nav-icon"></i>Akun Sosial Media</a>
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
													<form  class="form" action="<?= base_url(); ?>peserta/update_social" method="post">
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
																<!-- <button class="btn btn-primary" type="submit">Simpan</button> -->
																<a href="#!" id="ChangePassword" class="btn btn-primary mt-2"
																data-template="ChangePassword"
																data-toggle="modal"
																data-target="#ChangePasswordModal"
																>Simpan</a>	
															</div>
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
																							<h5 class="mb-0">Apakah anda yakin ingin <font color="green">menyimpan</font> link sosial media anda ?</h5>
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
								<br>



