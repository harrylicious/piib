          		<?php foreach ($data_peserta->result_array() as $key ) {
          			$foto=$key['foto'];
          			$nim=$key['nim'];
          			$nama_lengkap=$key['nama_lengkap'];
          			$jenis_kelamin=$key['jenis_kelamin'];
          			$alamat=$key['alamat'];
          			$desa=$key['desa'];
          			$kecamatan=$key['kecamatan'];
          			$kabupaten=$key['kabupaten'];
          			$provinsi=$key['provinsi'];
          			$tempat_lahir=$key['tempat_lahir'];
          			$tanggal_lahir=$key['tanggal_lahir'];
          			$semester=$key['semester'];
          			$telpon=$key['telpon'];
          			$id_peserta=$key['id_peserta'];
          			$username=$key['username'];
          			$password=$key['password'];
          			$email=$key['email'];

          			?>

          			<?php 
          			/* sesi fokus aktif tab */
          			$tab_session=$this->session->tempdata('tab');
          			$active=$tab_session;
          			if ($active==1|$active<1) {
          				$link1="nav-link active";
          				$tab1="tab-pane fade show active";
          				$link2="nav-link";
          				$tab2="tab-pane fade";
          				$link3="nav-link";
          				$tab3="tab-pane fade";
          			}
          				// elseif ($active==2) {
          			// 	$link2="nav-link active";
          			// 	$tab2="tab-pane fade show active";
          			// 	$link3="nav-link";
          			// 	$tab3="tab-pane fade";
          			// 	$link1="nav-link";
          			// 	$tab1="tab-pane fade";
          			// }elseif ($active==3) {
          			// 	$link3="nav-link active";
          			// 	$tab3="tab-pane fade show active";
          			// 	$link1="nav-link";
          			// 	$tab1="tab-pane fade";
          			// 	$link2="nav-link";
          			// 	$tab2="tab-pane fade";
          			// }
          			?>

          			<!-- Container fluid -->
          			<div class="container-fluid p-4 ">

          				<!-- start content-->
          				<!-- Content -->
          				<div class="">
          					<div class="container">
          						<div class="row">
          							<div class="col-md-12">
          								<!-- Side Navbar -->
          								<ul class="nav nav-lb-tab mb-6" id="tab" role="tablist">
          									<li class="nav-item ml-0" role="presentation">
          										<a class="<?= $link1 ?> " id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="true"><i class="fe fe-user mr-2"></i>Profil peserta</a>
          									</li>
          									<!-- <li class="nav-item" role="presentation">
          										<a class="<?= $link3 ?>" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="true"><i class="fe fe-refresh-cw nav-icon mr-2"></i>Sosial media</a>
          									</li>   --> 		

          								</ul>

          								<!-- ///////////////////////////////////////////////////////////////// -->


          								<!-- Tab content -->
          								<div class="tab-content" id="tabContent">
          									<!-- content 1 -->
          									<div class="<?= $tab1 ?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">


          										<!-- Card -->
          										<div class="card">
          											<!-- Card header -->
          											<div class="card-header">
          												<center><?php echo $this->session->tempdata('msg');?></center> 

          												<img src="<?= base_url();?>assets/images/users/<?= $foto?>" id="img-uploaded" class="avatar-xl rounded-circle" alt="" />
          												<h3 class="mb-0 mt-5">Detail Profil Peserta : <?= $nama_lengkap ?></h3>
          													<!-- <p class="mb-0">
          														Berikut ini adalah detail informasi akun anda. 
          													</p> -->
          												</div>
          												<!-- Card body -->

          												<div class="card-body">	
          													<div>
          														<!-- Form -->
          														<form class="form-row">
          															<!-- nim -->
          															<div class="form-group col-12 col-md-6">
          																<label class="form-label" for="nim">NIM</label>
          																<input value="<?= $nim ?>" name="nim" type="text" id="nim" class="form-control" placeholder="NIM" disabled />
          															</div>
          															<!-- Nama Lengkap -->
          															<div class="form-group col-12 col-md-6">
          																<label for="nama_lengkap" class="form-label" for="nama_lengkap">Nama lengkap</label>
          																<input name="nama_lengkap" value="<?= $nama_lengkap ?>" type="text" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" disabled />
          															</div>		
          																	<!-- Username -->
          															<div class="form-group col-12 col-md-6">
          																<label for="username" class="form-label" for="username">Username</label>
          																<input name="username" value="<?= $username ?>" type="text" id="username" class="form-control" placeholder="Username" disabled />
          															</div>			
          															<!-- Email -->
          															<div class="form-group col-12 col-md-6">
          																<label for="email" class="form-label" for="email">Email</label>
          																<input name="email" value="<?= $email ?>" type="text" id="email" class="form-control" placeholder="Username" disabled />
          															</div>
          															<!-- Jenis Kelamin -->
          															<div class="form-group col-12 col-md-6">
          																<label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          																<input id="jenis_kelamin" name="jenis_kelamin" value="<?= $jenis_kelamin ?>" type="text" id="jenis_kelamin" class="form-control" placeholder="Jenis kelamin" disabled />

          															</div>
          															<!-- Alamat -->
          															<div class="form-group col-12 col-md-6">
          																<label for="alamat" class="form-label" for="alamt">Alamat</label>
          																<input id="alamat" name="alamat" value="<?= $alamat ?>" type="text" id="alamat" class="form-control" placeholder="Alamat" disabled />
          															</div>
          															<!-- Desa-->
          															<div class="form-group col-12 col-md-6">
          																<label class="form-label" for="desa">Desa</label>
          																<input name="desa" value="<?= $desa ?>" type="text" id="desa" class="form-control" placeholder="Desa" disabled />
          															</div>
          															<!-- Kecamatan-->
          															<div class="form-group col-12 col-md-6">
          																<label class="form-label" for="kecamatan">Kecamatan</label>
          																<input name="kecamatan" value="<?= $kecamatan ?>" type="text" id="kecamatan" class="form-control" placeholder="Kecamatan" disabled />
          															</div>
          															<!-- Kabupaten-->
          															<div class="form-group col-12 col-md-6">
          																<label class="form-label" for="kabupaten">Kabupaten</label>
          																<input name="kabupaten" value="<?= $kabupaten ?>" type="text" id="kabupaten" class="form-control" placeholder="Kabupaten" disabled />
          															</div>
          															<!-- Provinsi -->
          															<div class="form-group col-12 col-md-6">
          																<label class="form-label" for="provinsi">Provinsi</label>
          																<input value="<?= $provinsi ?>" name="provinsi" type="text" id="provinsi" class="form-control" placeholder="Provinsi" disabled />
          															</div>
          															<!-- Tempat Lahir -->
          															<div class="form-group col-12 col-md-6">
          																<label class="form-label" for="tempat_lahir">Tempat lahir</label>
          																<input name="tempat_lahir" value="<?= $tempat_lahir ?>" type="text" id="tempat_lahir" class="form-control" placeholder="Tempat lahir" disabled />
          															</div>
          															<!-- Tanggal Lahir -->
          															<div class="form-group col-12 col-md-6">
          																<label class="form-label" for="tanggal_lahir">Tanggal lahir</label>
          																<input name="tanggal_lahir" value="<?= $tanggal_lahir ?>" type="date" id="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" disabled />
          															</div>
          															<!-- Semester -->
          															<div class="form-group col-12 col-md-6">
          																<label class="form-label" for="semester">Semester</label>
          																<input name="semester" value="<?= $semester ?>" type="text" id="semester" class="form-control" placeholder="Semester" disabled />
          															</div>
          															<!-- jurusan -->
								<!-- <div class="form-group col-12 col-md-6">
									<label class="form-label" for="jurusan">Jurusan</label>
									<input name="jurusan" value="<?= $jurusan ?>" type="text" id="jurusan" class="form-control" placeholder="Jurusan" disabled />
								</div> -->
								<!-- Telepon -->
								<div class="form-group col-12 col-md-6">
									<label for="telpon" class="form-label" for="telpon">Telepon</label>
									<input id="telpon" name="telpon" value="<?= $telpon ?>" type="text" id="telepon" class="form-control" placeholder="Telepon" disabled />
								</div>

							</form>
						</div>
					</div>
				</div>



			</div> <!-- end content 1 -->

			<!-- content 2 -->
			<div class="<?= $tab2 ?>" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">


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
								<img src="<?= base_url();?>assets/images/users/<?= $foto?>" id="img-uploaded" class="avatar-xl rounded-circle" alt="" />
								<div class="ml-3">
									<h4 class="mb-0">Foto profil anda</h4>
									<p class="mb-0">
										PNG atau JPG tidak lebih dari 800px tinggi dan lebarnya.
									</p>
									<div class="custom-file">
										<?php echo form_open_multipart(base_url().'admin/update_foto');?>

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
					<form action="<?= base_url();?>admin/delete_foto" method="post">
						<!-- Modal hapus foto -->
						<input name="foto" value="<?= $foto ?>" type="text" hidden>

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
						<form class="form-row" method="post" action="<?= base_url('admin/');?>update_profile">
							<!-- nim -->
							<div class="form-group col-12 col-md-6">
								<label class="form-label" for="nim">NIM</label>
								<input value="<?= $nim ?>" name="nim" type="text" id="nim" class="form-control" placeholder="NIM"/>
							</div>
							<!-- Nama Lengkap -->
							<div class="form-group col-12 col-md-6">
								<label for="nama_lengkap" class="form-label" for="nama_lengkap">Nama lengkap<font color="red">*</font></label>
								<input name="nama_lengkap" value="<?= $nama_lengkap ?>" type="text" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required />
							</div>
							<!-- Jenis Kelamin -->
							<div class="form-group col-12 col-md-6">
								<label for="jenis_kelamin" class="form-label">Jenis Kelamin<font color="red">*</font></label>
								<!-- <input id="jenis_kelamin" name="jenis_kelamin" value="<?= $jenis_kelamin ?>" type="text" id="jenis_kelamin" class="form-control" placeholder="Jenis kelamin" required /> -->
								<select id="jenis_kelamin" name="jenis_kelamin" class="selectpicker" data-width="100%">
									<?php if ($jenis_kelamin == 'Laki-laki'){ ?>
										<option value="Laki-laki">Laki Laki</option>
										<option value="Perempuan">Perempuan</option>
									<?php } elseif ($jenis_kelamin == 'Perempuan') { ?>
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
								<input id="alamat" name="alamat" value="<?= $alamat ?>" type="text" id="alamat" class="form-control" placeholder="Alamat" required />
							</div>
							<!-- Desa-->
							<div class="form-group col-12 col-md-6">
								<label class="form-label" for="desa">Desa<font color="red">*</font></label>
								<input name="desa" value="<?= $desa ?>" type="text" id="desa" class="form-control" placeholder="Desa" required />
							</div>
							<!-- Kecamatan-->
							<div class="form-group col-12 col-md-6">
								<label class="form-label" for="kecamatan">Kecamatan<font color="red">*</font></label>
								<input name="kecamatan" value="<?= $kecamatan ?>" type="text" id="kecamatan" class="form-control" placeholder="Kecamatan" required />
							</div>
							<!-- Kabupaten-->
							<div class="form-group col-12 col-md-6">
								<label class="form-label" for="kabupaten">Kabupaten<font color="red">*</font></label>
								<input name="kabupaten" value="<?= $kabupaten ?>" type="text" id="kabupaten" class="form-control" placeholder="Kabupaten" required />
							</div>
							<!-- Provinsi -->
							<div class="form-group col-12 col-md-6">
								<label class="form-label" for="provinsi">Provinsi<font color="red">*</font></label>
								<input value="<?= $provinsi ?>" name="provinsi" type="text" id="provinsi" class="form-control" placeholder="Provinsi" required />
							</div>
							<!-- Tempat Lahir -->
							<div class="form-group col-12 col-md-6">
								<label class="form-label" for="tempat_lahir">Tempat lahir<font color="red">*</font></label>
								<input name="tempat_lahir" value="<?= $tempat_lahir ?>" type="text" id="tempat_lahir" class="form-control" type="date" placeholder="Tempat lahir" required />
							</div>

							<!-- Tanggal Lahir -->
							<div class="form-group col-12 col-md-6">
								<label class="form-label" for="tanggal_lahir">Tanggal lahir<font color="red">*</font></label>
								<input name="tanggal_lahir" value="<?= $tanggal_lahir ?>" type="date" id="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" required />
							</div>
				<!-- 		<div  class="form-group col-12 col-md-6">
							<label class="form-label" for="tanggal_lahir">Tanggal lahir</label>
							<input value="<?= $tanggal_lahir ?>" id="tanggal_lahir" class="form-control flatpickr" type="text" placeholder="<?= $tanggal_lahir ?>" aria-describedby="basic-addon2">
						</div> -->
						<!-- Semester -->
						<div class="form-group col-12 col-md-6">
							<label class="form-label" for="semester">Semester</label>
							<input name="semester" value="<?= $semester ?>" type="text" id="semester" class="form-control" placeholder="Semester" />
						</div>
						<!-- jurusan -->
					<!-- 	<div class="form-group col-12 col-md-6">
							<label class="form-label" for="jurusan">Jurusan</label>
							<input name="jurusan" value="<?= $jurusan ?>" type="text" id="jurusan" class="form-control" placeholder="Jurusan" required />
						</div> -->
						<!-- Telepon -->
						<div class="form-group col-12 col-md-6">
							<label for="telpon" class="form-label" for="telpon">Telepon</label>
							<input id="telpon" name="telpon" value="<?= $telpon ?>" type="text" id="telepon" class="form-control" placeholder="Telepon"  />
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



	</div> <!-- end Content 2 -->  

	<!-- content 3 -->
	
	<div class="<?= $tab3 ?>" id="security" role="tabpanel" aria-labelledby="security-tab">

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
			<!-- Card body -->
			<div class="card-body">
				<h4 class="mb-0">Alamat Email</h4>
				<p>
					Email anda saat ini
					<span class="text-success"><?= $email ?></span>
				</p>
				<form class="form-row" action="<?= base_url();?>admin/change_email" method="post">
					<div class="form-group col-lg-6 col-md-12 col-12">
						<input name="id_peserta" value="<?= $id_peserta ?>" type="text" hidden />
						<label class="form-label" for="email">Email baru<font color="red">*</font></label>
						<input id="email" type="email" name="email" class="form-control" placeholder="" required />
				<!-- 		<button type="submit" class="btn btn-primary mt-2">
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
					<form class="form-row" action="<?= base_url();?>admin/change_password" method="post">
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


	</div> <!-- end Content 3 -->

</div> <!-- end Tab content -->
</div>
</div>
</div>
</div>
</div>





<?php } ?>