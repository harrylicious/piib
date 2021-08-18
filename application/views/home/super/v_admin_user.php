<?php 
/* sesi fokus aktif tab */
$tab_session=$this->session->tempdata('tab');
$active=$tab_session;
if ($active==1|$active<1) {
	$tab1="btn btn-outline-white active";
	$tab2="btn btn-outline-white";
}elseif ($active==2) {
	$tab1="btn btn-outline-white";
	$tab2="btn btn-outline-white active";
}
?>
<!-- Container fluid -->
<div class="container-fluid p-4">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-12">
			<!-- Page Header -->
			<div class="border-bottom pb-4 mb-4 d-flex justify-content-between align-items-center">
				<div class="mb-2 mb-lg-0">
					<h1 class="mb-1 h2 font-weight-bold">
						Admin

						<span class="font-size-sm text-muted">( <?= $hitung ?> )</span>
					</h1>

					<!-- Breadcrumb  -->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="<?= base_url() ?>admin">Beranda</a>
							</li>
							<li class="breadcrumb-item"><a href="#!">Pengguna</a></li>
							<li class="breadcrumb-item active" aria-current="page">
								Admin
							</li>
						</ol>
					</nav>
				</div>
				<div class="nav btn-group" role="tablist">
					<button class="<?= $tab1 ?>" data-toggle="tab" data-target="#tabPaneGrid" role="tab" aria-controls="tabPaneGrid" aria-selected="true">
						<span class="fe fe-grid"></span>
					</button>
					<button class="<?= $tab2 ?>" data-toggle="tab" data-target="#tabPaneList" role="tab" aria-controls="tabPaneList" aria-selected="false">
						<span class="fe fe-list"></span>
					</button>
					<a href="#!" id="AddAdmin" class="btn btn-outline-success btn-sm"
					data-template="AddAdmin"
					data-toggle="modal"
					data-target="#AddAdminModal"
					>+ <i class="nav-icon fe fe-users mr-2"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div>
		<input type="text" id="myInput" class="form-control" placeholder="Cari Admin" /><br>
	</div>
	<div class="row">

		<div class="col-lg-12 col-md-12 col-12">
			<!-- Tab -->
			<div class="tab-content">
				<!-- Tab Pane -->
				<div class="tab-pane fade show active" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
					<div class="mb-4">



					</div>
					<div class="row">

						<!-- user tab -->
						<?php 
						$no=0;
						foreach ($data_user->result_array() as $key ) {
							$foto=$key['foto'];
							$nip=$key['nip'];
							$nama_lengkap=$key['nama_lengkap'];
							$jenis_kelamin=$key['jenis_kelamin'];
							$alamat=$key['alamat'];
							$desa=$key['desa'];
							$kecamatan=$key['kecamatan'];
							$created_at=$key['created_at'];
							$kabupaten=$key['kabupaten'];
							$provinsi=$key['provinsi'];
							$tempat_lahir=$key['tempat_lahir'];
							$tanggal_lahir=$key['tanggal_lahir'];
							$semester=$key['semester'];
							$telpon=$key['telpon'];
							$id_user=$key['id_user'];
							$username=$key['username'];
							$password=$key['password'];
							$email=$key['email'];
							$no++;
							?>


							<div class="col-xl-3 col-lg-6 col-md-6 col-12" id="myDIV">

								<!-- Card -->
								<div class="card mb-4">
									<font style="text-align: center; font-size: 15px;">
										<?php echo "NO ".	 $no ?>
									</font>
									<!-- Card body -->
									<div class="card-body">
										<div class="text-center">
											<div class="position-relative">
												<a href="admin_user_profile/<?= $id_user ?>">
													<img src="<?= base_url() ?>assets/images/users/<?= $foto ?>" class="rounded-circle avatar-xl mb-3" alt="" />
												</a>
												<a href="#!" class="position-absolute mt-10 ml-n5">
													<span class="status bg-success"></span>
												</a>
											</div>
											<h4 class="mb-0"><?= $nama_lengkap ?></h4>
											<p class="mb-0">
												<i class="fe fe-map-pin mr-1 font-size-xs"></i><?= $alamat ?>
											</p>
										</div>
										<div class="d-flex justify-content-between border-bottom py-2 mt-6">
											<span>Username</span>
											<span class="text-dark"><?= $username ?></span>
										</div>
										<div class="d-flex justify-content-between pt-2">
											<span>Email</span>
											<span class="text-dark"> <?= $email ?> </span>
										</div>
										<div class="d-flex justify-content-between border-bottom py-2">
											<span>Terdaftar</span>
											<span> <?= $created_at ?> </span>
										</div>
									</div>
								</div>

							</div>

							<!-- end tab user  -->

						<?php } ?>

						<div class="col-lg-12 col-md-12 col-12">
							<!-- Pagination -->
							<nav>
								<ul class="pagination justify-content-center mb-0">
									<li class="page-item disabled">
										<a class="page-link mx-1 rounded" href="#!" tabindex="-1" aria-disabled="true"><i
											class="mdi mdi-chevron-left"></i></a>
										</li>
										<li class="page-item active">
											<a class="page-link mx-1 rounded" href="#!">1</a>
										</li>
										<li class="page-item">
											<a class="page-link mx-1 rounded" href="#!">2</a>
										</li>
										<li class="page-item">
											<a class="page-link mx-1 rounded" href="#!">3</a>
										</li>
										<li class="page-item">
											<a class="page-link mx-1 rounded" href="#!"><i class="mdi mdi-chevron-right"></i></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!-- Tab Pane -->
					<div class="tab-pane fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
						<!-- Card -->
						<div class="card">
							<!-- Card Header -->
							<div class="card-header">



							</div>
							<!-- Table -->
							<div class="table-responsive">
								<table id="example" class="table is-striped" style="width:100%">
									<thead class="thead-light">
										<tr>
											<th scope="col" class="border-top-0 border-bottom-0">No</th>
											<th scope="col" class="border-top-0 border-bottom-0">Nama</th>
											<th scope="col" class="border-top-0 border-bottom-0">Username</th>
											<th scope="col" class="border-top-0 border-bottom-0">Terdaftar</th>
											<th scope="col" class="border-top-0 border-bottom-0">
												email
											</th>
											<th scope="col" class="border-top-0 border-bottom-0">Alamat</th>
											<th scope="col" class="border-top-0 border-bottom-0"></th>
											<th scope="col" class="border-top-0 border-bottom-0"></th>
											<th scope="col" class="border-top-0 border-bottom-0"></th>
										</tr>
									</thead>
									<?php 
									$no=0;
									foreach ($data_user->result_array() as $key ) {
										$foto=$key['foto'];
										$nip=$key['nip'];
										$nama_lengkap=$key['nama_lengkap'];
										$created_at=$key['created_at'];
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
										$id_user=$key['id_user'];
										$username=$key['username'];
										$password=$key['password'];
										$email=$key['email'];
										$no++;

										?>
										<tbody id="myTable">
											<tr>
												<td class="align-middle">
													<?= $no ?>
												</td>
												<td class="align-middle">
													<div class="d-flex align-items-center">
														<div class="position-relative">
															<a href="admin_user_profile/<?= $id_user ?>">
																<img src="<?= base_url() ?>assets/images/users/<?= $foto ?>" alt="" class="rounded-circle avatar-md mr-2" />
															</a>
															<a href="#!" class="position-absolute mt-5 ml-n4">
																<span class="status bg-success"></span>
															</a>
														</div>
														<h5 class="mb-0"><?= $nama_lengkap ?></h5>
													</div>
												</td>
												<td class="align-middle">
													<?= $username ?>
												</td>
												<td class="align-middle">
													<?= $created_at ?>
												</td>
												<td class="align-middle"><?= $email ?></td>
												<td class="align-middle">
													<?= $alamat ?>
												</td>
												<td class="align-middle">
													<a href="#Message<?= $id_user ?> " 
														data-toggle="modal" data-target="#Message<?= $id_user ?>" class="text-muted" data-placement="top" title="Hapus"><i class="fe fe-mail"></i></a>
													</td>
													<td class="align-middle">
														<a href="#DeleteUserModal<?= $id_user ?> " 
															data-toggle="modal" data-target="#DeleteUserModal<?= $id_user ?>" class="text-muted" data-placement="top" title="Hapus"><i class="fe fe-trash"></i></a>
														</td>
														<td class="text-muted px-4 py-3 align-middle">
															<span class="dropdown">
																<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown"
																data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<i class="fe fe-more-vertical"></i>
															</a>
															<span class="dropdown-menu" aria-labelledby="courseDropdown">
																<span class="dropdown-header">Settings</span>
																<a class="dropdown-item" href="#!"><i
																	class="fe fe-edit dropdown-item-icon"></i>Edit</a>
																	<a class="dropdown-item" href="#!"><i
																		class="fe fe-trash dropdown-item-icon"></i>Remove</a>
																	</span>
																</span>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
											<!-- list -->
											<nav>
												<ul class="pagination justify-content-center pb-3 pt-4">
													<li class="page-item disabled">
														<a class="page-link mx-1 rounded" href="#!" tabindex="-1" aria-disabled="true"><i
															class="mdi mdi-chevron-left"></i></a>
														</li>
														<li class="page-item active">
															<a class="page-link mx-1 rounded" href="#!">1</a>
														</li>
														<li class="page-item">
															<a class="page-link mx-1 rounded" href="#!">2</a>
														</li>
														<li class="page-item">
															<a class="page-link mx-1 rounded" href="#!">3</a>
														</li>
														<li class="page-item">
															<a class="page-link mx-1 rounded" href="#!"><i class="mdi mdi-chevron-right"></i></a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



					<!-- Modal tambah pengguna -->
					<div class="modal fade" id="AddAdminModal" tabindex="-1" role="dialog" aria-labelledby="AddAdminModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header align-items-center">
									<h4 class="mb-0" id="AddAdminModalLabel">Tambah Admin</h4>
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
														<div>
															<!-- Form -->
															<form class="form-row" method="post" action="<?= base_url();?>super/tambah_admin">
																<!-- NIM -->
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="nip">NIP</label>
																	<input name="nip" type="text" id="nip" class="form-control" placeholder="NIP" />
																</div>
																<!-- Nama Lengkap -->
																<div class="form-group col-12 col-md-6">
																	<label for="nama_lengkap" class="form-label" for="nama_lengkap">Nama lengkap<font color="red">*</font> </label>
																	<input name="nama_lengkap" type="text" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required />
																</div>
																<div class="form-group col-12 col-md-6">
																	<label for="username" class="form-label" for="username">Username<font color="red">*</font> </label>
																	<input name="username" type="text" id="username" class="form-control" placeholder="Username" required />
																</div>
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="email">email<font color="red">*</font></label>
																	<input name="email" type="text" id="email" class="form-control" placeholder="Email" required />
																</div>
																<!-- Jenis Kelamin -->
																<div class="form-group col-12 col-md-6">
																	<label for="jenis_kelamin" class="form-label">Jenis Kelamin<font color="red">*</font></label>
																	<!-- <input id="jenis_kelamin" name="jenis_kelamin"  type="text" id="jenis_kelamin" class="form-control" placeholder="Jenis kelamin" required /> -->
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
																	<input id="alamat" name="alamat" type="text" id="alamat" class="form-control" placeholder="Alamat" required />
																</div>
																<!-- Desa-->
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="desa">Desa<font color="red">*</font></label>
																	<input name="desa" type="text" id="desa" class="form-control" placeholder="Desa" required />
																</div>
																<!-- Kecamatan-->
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="kecamatan">Kecamatan<font color="red">*</font></label>
																	<input name="kecamatan"  type="text" id="kecamatan" class="form-control" placeholder="Kecamatan" required />
																</div>
																<!-- Kabupaten-->
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="kabupaten">Kabupaten<font color="red">*</font></label>
																	<input name="kabupaten"  type="text" id="kabupaten" class="form-control" placeholder="Kabupaten" required />
																</div>
																<!-- Provinsi -->
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="provinsi">Provinsi<font color="red">*</font></label>
																	<input  name="provinsi" type="text" id="provinsi" class="form-control" placeholder="Provinsi" required />
																</div>
																<!-- Tempat Lahir -->
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="tempat_lahir">Tempat lahir<font color="red">*</font></label>
																	<input name="tempat_lahir"  type="text" id="tempat_lahir" class="form-control" placeholder="Tempat lahir" required />
																</div>
																<!-- Tanggal Lahir -->
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="tanggal_lahir">Tanggal lahir<font color="red">*</font></label>
																	<input name="tanggal_lahir" type="date" id="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" required />
																</div>
																<!-- Semester -->
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="semester">Semester</label>
																	<input name="semester" type="text" id="semester" class="form-control" placeholder="Semester" required />
																</div>
																<!-- jurusan -->
																<div class="form-group col-12 col-md-6">
																	<label class="form-label" for="jurusan">Jurusan<font color="red">*</font></label>
																	<input name="jurusan"  type="text" id="jurusan" class="form-control" placeholder="Jurusan" required />
																</div>
																<!-- Telepon -->
																<div class="form-group col-12 col-md-6">
																	<label for="telpon" class="form-label" for="telpon">Telepon<font color="red">*</font></label>
																	<input id="telpon" name="telpon"  type="text" id="telepon" class="form-control" placeholder="Telepon" required />
																</div>



																<div class="col-12">
																	<!-- Button -->
															<!-- <button class="btn btn-primary" type="submit" class="btn btn-outline-danger btn-sm">
																Simpan
															</button> -->
															<button class="btn btn-primary">Simpan</button>
														</div>

													</form>
												</div>
											</center>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>


			<!-- modal pesan -->
			<?php 

			foreach ($data_user->result_array() as $key ) {
				$id_user=$key['id_user'];

				?>
				<form action="<?= base_url(); ?>super/message_admin/<?= $id_user ?> ">
					<div class="modal fade" id="Message<?= $id_user?>" tabindex="-1" role="dialog" aria-labelledby="MessageLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header align-items-center">
									<h4 class="mb-0" id="MessageLabel">Kirim pesan</h4>
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
														<input type="text" value="<?= $id_user ?>" hidden >
														<h5 class="mb-0">Silahkan isikan <font color="blue">pesan anda !</font></h5><br>
														<textarea name="pesan" id="pesan" cols="30" rows="10"></textarea>
														<br><br>
														<button type="submit" class="btn-sm btn-primary">
															Kirm
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
			<?php } ?>

			<!-- modal hapus -->
			<?php 

			foreach ($data_user->result_array() as $key ) {
				$id_user=$key['id_user'];

				?>
				<form action="<?= base_url(); ?>super/delete_admin/<?= $id_user ?> ">
					<div class="modal fade" id="DeleteUserModal<?= $id_user?>" tabindex="-1" role="dialog" aria-labelledby="DeleteUserModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header align-items-center">
									<h4 class="mb-0" id="DeleteUserModalLabel">Konfirmasi</h4>
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
														<input type="text" value="<?= $id_user ?>" hidden>
														<h5 class="mb-0">Apakah anda yakin ingin <font color="red">menghapus</font> akun ?</h5>
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
			<?php } ?>


			<script>
				$(document).ready(function(){
					$("#myInput").on("keyup", function() {
						var value = $(this).val().toLowerCase();
						$("#myTable tr").filter(function() {
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
				});
			</script>
			<script>
				$(document).ready(function(){
					$("#myInput").on("keyup", function() {
						var value = $(this).val().toLowerCase();
						$("#myDIV*").filter(function() {
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
				});
			</script>
			<script>
				$(document).ready(function(){
					$("#myInput").on("keyup", function() {
						var value = $(this).val().toLowerCase();
						$("#myList li").filter(function() {
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
				});
			</script>
