	
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
															<img src="<?= base_url('assets/images/users/'.$data['foto']);?>" class="avatar-xl rounded-circle border-width-4 border-white"
															alt="" />
														</div>
														<div class="lh-1">
															<h2 class="mb-0">
																<?= $data['nama_lengkap']; ?>
															</h2>

															<p class="mb-0 d-block">@<?= $data['username']; ?></p>
											
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
														<li class="nav-item active">
															<a class="nav-link" href="<?= base_url('peserta/edit_profile'); ?>"><i class="fe fe-settings nav-icon"></i>Ubah Profil</a>
														</li>
														<!-- Nav item -->
														<li class="nav-item">
															<a class="nav-link" href="<?= base_url('peserta/security'); ?>"><i class="fe fe-lock nav-icon"></i>Keamanan</a>
														</li>
														<!-- Nav item -->
														<li class="nav-item">
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
												<h3 class="mb-0">Ubah Detail Profil</h3>
												<p class="mb-0">
													Anda memiliki kontrol penuh untuk mengelola pengaturan akun Anda sendiri. 
												</p>
											</div>
											<!-- Card body -->


												<div class="card-body">
													<div class="d-lg-flex align-items-center justify-content-between">
														<div class="d-flex align-items-center mb-4 mb-lg-0">
															<img src="<?= base_url('assets/images/users/'.$data['foto'])?>" id="img-uploaded" class="avatar-xl rounded-circle" alt="" />
															<div class="ml-3">
																<h4 class="mb-0">Foto profil anda</h4>
																<p class="mb-0">
																	PNG atau JPG tidak lebih dari 800px tinggi dan lebarnya.
																</p>
																<div class="custom-file">
																	<?php echo form_open_multipart(base_url().'peserta/update_foto');?>

																	<label for="foto" class="form-control" ><input id="foto"  type="file" name="foto" size="20" /> </label>
																	<br>
																	<br>

																</div>
															</div>
														</div>
														<div>
															<a href="#!" id="UpdateFoto" class="btn btn-outline-success btn-sm"
															data-template="UpdateFoto"
															data-toggle="modal"
															data-target="#UpdateFotoModal"
															>Update</a>	


															<a href="#!" id="DeleteFoto" class="btn btn-outline-danger btn-sm"
															data-template="DeleteFoto"
															data-toggle="modal"
															data-target="#DeleteFotoModal"
															>Hapus</a>
														</div>
													</div>
													<!-- Modal update foto -->
													<div class="modal fade" id="UpdateFotoModal" tabindex="-1" role="dialog" aria-labelledby="UpdateFotoModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header align-items-center">
																	<h4 class="mb-0" id="UpdateFotoModalLabel">Konfirmasi </h4>
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
																						<h5 class="mb-0">Apakah anda yakin ingin  <font color="green">merubah</font> foto anda ?</h5>
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
												</form>
												<form action="<?= base_url();?>peserta/delete_foto" method="post">
													<!-- Modal hapus foto -->
													<input name="foto" value="<?= $data['foto']; ?>" type="text" hidden>

													<div class="modal fade" id="DeleteFotoModal" tabindex="-1" role="dialog" aria-labelledby="DeleteFotoModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header align-items-center">
																	<h4 class="mb-0" id="DeleteFotoModalLabel">Konfirmasi</h4>
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
																						<h5 class="mb-0">Apakah anda yakin ingin <font color="red">menghapus</font> foto anda ?</h5>
																						<br>
																						<button type="submit" class="btn-sm btn-danger">
																							Ya
																						</button>			
																						<button  type="button" class="btn-sm btn-success" data-dismiss="modal"aria-label="Close">
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

												</form>
												<hr class="my-5" />
												<div>
													<h4 class="mb-0">Detail Diri</h4>
													<p class="mb-4">
														Ubah informasi dan alamat anda.
													</p>
													<!-- Form -->
													<form class="form-row" method="post" action="<?= base_url('peserta/');?>update_profile">
														<!-- NIM -->
														<div class="form-group col-12 col-md-6">
															<label class="form-label" for="nim">NIM</label>
															<input value="<?= $data['nim']; ?>" name="nim" type="text" id="nim" class="form-control" placeholder="NIM" />
														</div>
														<!-- Nama Lengkap -->
														<div class="form-group col-12 col-md-6">
															<label for="nama_lengkap" class="form-label" for="nama_lengkap">Nama lengkap<font color="red">*</font> </label>
															<input name="nama_lengkap" value="<?= $data['nama_lengkap']; ?>" type="text" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required />
														</div>
														<!-- Jenis Kelamin -->
														<div class="form-group col-12 col-md-6">
															<label for="jenis_kelamin" class="form-label">Jenis Kelamin<font color="red">*</font></label>
															<!-- <input id="jenis_kelamin" name="jenis_kelamin" value="<?= $jenis_kelamin ?>" type="text" id="jenis_kelamin" class="form-control" placeholder="Jenis kelamin" required /> -->
															<select id="jenis_kelamin" name="jenis_kelamin" class="selectpicker" data-width="100%">
																<?php if ( $data['jenis_kelamin']  == 'Laki-laki'){ ?>
																	<option value="Laki-laki">Laki Laki</option>
																	<option value="Perempuan">Perempuan</option>
																<?php } elseif ($data['jenis_kelamin']  == 'Perempuan') { ?>
																	<option value="Perempuan">Perempuan</option>
																	<option value="Laki-laki">Laki Laki</option>
																<?php } else { ?>
																	<option value="">Pilih</option>
																	<option value="Laki-laki">Laki-laki</option>
																	<option value="Perempuan">Perempuan</option>
																<?php } ?>
															</select>
														</div>
														<!-- Alamat -->
														<div class="form-group col-12 col-md-6">
															<label for="alamat" class="form-label" for="alamt">Alamat<font color="red">*</font></label>
															<input id="alamat" name="alamat" value="<?= $data['alamat']; ?>" type="text" id="alamat" class="form-control" placeholder="Alamat" required />
														</div>
														<!-- Desa-->
														<div class="form-group col-12 col-md-6">
															<label class="form-label" for="desa">Desa<font color="red">*</font></label>
															<input name="desa" value="<?= $data['desa']; ?>" type="text" id="desa" class="form-control" placeholder="Desa" required />
														</div>
														<!-- Kecamatan-->
														<div class="form-group col-12 col-md-6">
															<label class="form-label" for="kecamatan">Kecamatan<font color="red">*</font></label>
															<input name="kecamatan" value="<?= $data['kecamatan']; ?>" type="text" id="kecamatan" class="form-control" placeholder="Kecamatan" required />
														</div>
														<!-- Kabupaten-->
														<div class="form-group col-12 col-md-6">
															<label class="form-label" for="kabupaten">Kabupaten<font color="red">*</font></label>
															<input name="kabupaten" value="<?= $data['kabupaten']; ?>" type="text" id="kabupaten" class="form-control" placeholder="Kabupaten" required />
														</div>
														<!-- Provinsi -->
														<div class="form-group col-12 col-md-6">
															<label class="form-label" for="provinsi">Provinsi<font color="red">*</font></label>
															<input value="<?= $data['provinsi']; ?>" name="provinsi" type="text" id="provinsi" class="form-control" placeholder="Provinsi" required />
														</div>
														<!-- Tempat Lahir -->
														<div class="form-group col-12 col-md-6">
															<label class="form-label" for="tempat_lahir">Tempat lahir<font color="red">*</font></label>
															<input name="tempat_lahir" value="<?= $data['tempat_lahir']; ?>" type="text" id="tempat_lahir" class="form-control" placeholder="Tempat lahir" required />
														</div>
														<!-- Tanggal Lahir -->
														<div class="form-group col-12 col-md-6">
															<label class="form-label" for="tanggal_lahir">Tanggal lahir<font color="red">*</font></label>
															<input name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>" type="date" id="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" required />
														</div>
														<!-- Semester -->
														<div class="form-group col-12 col-md-6">
															<label class="form-label" for="semester">Semester</label>
															<input name="semester" value="<?= $data['semester']; ?>" type="text" id="semester" class="form-control" placeholder="Semester" required />
														</div>
														<!-- jurusan -->
														<div class="form-group col-12 col-md-6">
															<label class="form-label" for="jurusan">Jurusan<font color="red">*</font></label>
															<input name="jurusan" value="<?= $data['jurusan']; ?>" type="text" id="jurusan" class="form-control" placeholder="Jurusan" required />
														</div>
														<!-- Telepon -->
														<div class="form-group col-12 col-md-6">
															<label for="telpon" class="form-label" for="telpon">Telepon<font color="red">*</font></label>
															<input id="telpon" name="telpon" value="<?= $data['telpon']; ?>" type="text" id="telepon" class="form-control" placeholder="Telepon" required />
														</div>

									

														<div class="col-12">
															<!-- Button -->
															<!-- <button class="btn btn-primary" type="submit" class="btn btn-outline-danger btn-sm">
																Simpan
															</button> -->
															<a href="#!" id="SaveProfile" class="btn btn-primary"
															data-template="SaveProfile"
															data-toggle="modal"
															data-target="#SaveProfileModal"
															>Simpan</a>	
														</div>
														<!-- Modal simpan profil -->
														<div class="modal fade" id="SaveProfileModal" tabindex="-1" role="dialog" aria-labelledby="SaveProfileModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
																<div class="modal-content">
																	<div class="modal-header align-items-center">
																		<h4 class="mb-0" id="SaveProfileModalLabel">Konfirmasi</h4>
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
																							<h5 class="mb-0">Apakah anda yakin ingin <font color="green">merubah</font> profil anda ?.</h5>
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




						<!-- popup modal -->

						<!-- Modal update foto -->
						<div class="modal fade" id="UpdateFotoModal" tabindex="-1" role="dialog" aria-labelledby="UpdateFotoModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header align-items-center">
										<h4 class="mb-0" id="UpdateFotoModalLabel">Konfirmasi </h4>
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
															<h5 class="mb-0">Apakah anda yakin ingin  <font color="green">merubah</font> foto anda ?</h5>
															<br>
															<a href="<?= base_url();?>peserta/update_foto" class="text-link contacts-link">
																<small class="btn-sm btn-success">Ya</small>
															</a>			
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

						<!-- Modal hapus foto -->
						<div class="modal fade" id="DeleteFotoModal" tabindex="-1" role="dialog" aria-labelledby="DeleteFotoModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header align-items-center">
										<h4 class="mb-0" id="DeleteFotoModalLabel">Konfirmasi</h4>
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
															<h5 class="mb-0">Apakah anda yakin ingin <font color="red">menghapus</font> foto anda ?</h5>
															<br>
															<a href="<?= base_url();?>peserta/delete_foto" class="text-link contacts-link">
																<small class="btn-sm btn-danger">Ya</small>
															</a>			
															<button  type="button" class="btn-sm btn-success" data-dismiss="modal"aria-label="Close">
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

