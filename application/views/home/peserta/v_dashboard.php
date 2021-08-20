						
						
			
							<!-- Page Content -->
							<div class="pt-5">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-xl-12 col-lg-12 col-md-12 col-12">
											<!-- Bg -->
											<div class=" pt-16 rounded-top " style="
											background: url(<?= base_url();?>assets/images/background/profile-bg.jpg) no-repeat;
											background-size: cover;">
										</div>
										<div
										class="d-flex align-items-end justify-content-between bg-white px-4  pt-2 pb-4 rounded-bottom shadow-sm ">
										<div class="d-flex align-items-center">
											<div class="mr-2 position-relative d-flex justify-content-end align-items-end mt-n5">
												<img src="<?= base_url('assets/images/users/'.$data['foto']); ?>" class="avatar-xl rounded-circle border-width-4 border-white"
												alt="">
											</div>
											<div class="lh-1">
												<h2 class="mb-0">
												<?= $data['nama_lengkap']; ?>
												</h2>

												<p class="mb-0 d-block">@<?= $data['username']; ?></p>
										</div>
									</div>
									<div>
										<a href="<?= base_url();?>peserta/profile" class="btn btn-primary btn-sm d-none d-md-block">Profil saya</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Content -->
				<div class="pb-5 py-md-5">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<!-- Side Navbar -->
								<ul class="nav nav-lb-tab mb-6" id="tab" role="tablist">
									<li class="nav-item ml-0" role="presentation">
										<a class="nav-link active " id="kwu-tab" data-toggle="pill" href="#kwu" role="tab"
										aria-controls="kwu" aria-selected="true">Home </a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="gld-tab" data-toggle="pill" href="#gld" role="tab"
										aria-controls="gld" aria-selected="false">Produk</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="startupacademy-tab" data-toggle="pill" href="#startupacademy" role="tab" aria-controls="startupacademy"
										aria-selected="false">
									Info Tim</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="prainkkubasikompetisi-tab" data-toggle="pill" href="#prainkkubasikompetisi" role="tab" aria-controls="prainkkubasikompetisi"
									aria-selected="false">
									Riwayat Perkuliahan</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="inkkubasi-tab" data-toggle="pill" href="#inkubasi" role="tab" aria-controls="inkubasi"
								aria-selected="false">
							Agenda Event</a>
						</li>
					</ul>
					<!-- Tab content -->

				<!-- Tab content -->
				<div class="tab-content" id="tabContent">
					<!-- Path -->
					<div class="tab-pane fade" id="path" role="tabpanel" aria-labelledby="path-tab">
					<div class="row  d-flex justify-content-center text-center">
						<div class="col-xl-5 col-lg-5 col-md-12 col-12">
						<div class="py-6">
							<img src="../assets/images/svg/path-img.svg" alt="" class="img-fluid">
							<div class="mt-4 ">
							<h2 class="display-4 font-weight-bold">Coming Soon</h2>
							<p class="mb-5">The designer working on our design so for now we schedule it
								to come soon.
								we release it soon for you. Thank you for watching.</p>
							<a href="../index.html" class="btn btn-primary">
								Back To Dashboard
							</a>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>

					<div class="tab-content" id="tabContent">
						<!-- content 1 -->
						<div class="tab-pane fade show active" id="kwu" role="tabpanel" aria-labelledby="kwu-tab">

						
						<div class="col-lg-12 col-md-12 col-12">
													<div class="row">
														<div class="col-lg-3 col-md-3 col-12">
															<!-- Card -->
															<div class="card mb-3">
																<div class="p-4">
																	<span class="font-size-xs text-uppercase font-weight-semi-bold">Nama Tim</span>
																	<h2 class="mt-4 font-weight-bold mb-1 d-flex align-items-center h1 lh-1">
																		Farm IOT
																	</h2>
																	<span class="d-flex justify-content-between align-items-center">
																		<span>Status</span>
																		<span class="badge badge-success ml-2">Terverifikasi</span>
																	</span>
																</div>
															</div>
														</div>

														<div class="col-lg-3 col-md-3 col-12">
															<!-- Card -->
															<div class="card mb-3">
																<div class="p-4">
																	<span class="font-size-xs text-uppercase font-weight-semi-bold">Produk</span>
																	<h2 class="mt-4 font-weight-bold mb-1 d-flex align-items-center h1 lh-1">
																		Farm IOT
																	</h2>
																	<span class="d-flex justify-content-between align-items-center">
																		<span>Status</span>
																		<span class="badge badge-warning ml-2">Menunggu Moderasi</span>
																	</span>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-12">
															<!-- Card -->
															<div class="card mb-3">
																<div class="p-4">
																	<span class="font-size-xs text-uppercase font-weight-semi-bold">Perkuliahan</span>
																	<h2 class="mt-4 font-weight-bold mb-1 d-flex align-items-center h1 lh-1">
																		3
																	</h2>
																	<span class="d-flex justify-content-between align-items-center">
																		<span class="small">Status perkuliahan</span>
																		<span class="badge badge-danger ml-2">Belum selesai</span>
																	</span>
																</div>
															</div>
														</div>

														<div class="col-lg-3 col-md-3 col-12">
															<!-- Card -->
															<div class="card mb-3">
																<div class="p-4">
																	<span class="font-size-xs text-uppercase font-weight-semi-bold">Kegiatan</span>
																	<h2 class="mt-4 font-weight-bold mb-1 d-flex align-items-center h1 lh-1">
																		3
																	</h2>
																	<span class="d-flex justify-content-between align-items-center">
																		<span>Status kegiatan</span>
																		<span class="badge badge-danger ml-2">Belum selesai</span>
																	</span>
																</div>
															</div>
														</div>

													</div>



													<div class="card mb-4">
														<!-- Card header -->
														<div class="card-header border-bottom-0">
															<h3 class="h4 mb-0">Daftar Kegiatan Mendatang</h3>
														</div>
														<!-- Table -->
														<div class="table-responsive ">
															<table class="table mb-0">
																<!-- Table head -->
																<thead class="thead-light">
																	<tr>
																		<th scope="col" class="border-bottom-0">TANGGAL</th>
																		<th scope="col" class="border-bottom-0">NAMA EVENT</th>
																		<th scope="col" class="border-bottom-0">STATUS</th>
																	</tr>
																</thead>
																<!-- Table body -->
																<tbody>

																	<?php foreach ($data_event_mendatang as $row) 
																		{
																	?>
																	<tr>

																		<td class="align-middle"><?= tgl_dan_hari(tgl_default($row->tgl_event)).", ".tgl_default($row->tgl_event).", "; ?><span class="badge badge-danger"><?= $row->hari ?> lagi</span></td>
																		<td class="align-middle">
																			<a href="#!">

																				<h5 class="align-items-center text-primary-hover">
																					<?= $row->nama_event; ?>
																				</h5>

																			</a>
																		</td>
																		<td> <a class="badge badge-success p-2" href="<?= base_url('event/detail_event/'.$row->id_event); ?>">Lihat Detail</a></td>
						
																	</tr>

																	<?php } ?>
																	
																</tbody>
															</table>
														</div>
													</div>
												</div>

						</div>
						<!-- content 2 -->
						<div class="tab-pane fade" id="gld" role="tabpanel" aria-labelledby="gld-tab">
						
						<div class="col-lg-12 col-md-12 col-12">
							<!-- Card -->
							<!-- Card body -->
							<div class="card mb-4">
								<!-- Card header -->
								<div class="card-header d-flex justify-content-between">
									<h4 class="mb-0">Detail Produk</h4>
									<!-- Dropdown -->
									<div class="dropdown">
										<a class="text-muted text-decoration-none" href="#!" role="button" id="paymentDropdown"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fe fe-more-vertical"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="paymentDropdown">
											<span class="dropdown-header">Setting </span>
											<a class="dropdown-item" href="#!">30 Days</a>
											<a class="dropdown-item" href="#!">2 Months</a>
										</div>
									</div>
								</div>
								<!-- Card body -->
								<div class="card-body">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-12 col-12 mb-3 mb-lg-0">
											<div>
												<img src="<?= base_url('assets/images/users/'.$data['foto']); ?>" alt="">
												<hr class="my-4" />
												<div class="row">
													<!-- Total earning chart -->
													<div class="col pl-0">
														<div id="totalEarning" class="apex-charts mt-n4 mb-n3"></div>
													</div>
													<div class="col-auto">
														<span class="badge badge-success"><i class="fe fe-trending-up font-size-xs mr-2"></i>32%</span>
													</div>
												</div>
											</div>
										</div>
										<!-- Earning chart -->
										<div class="col-xl-9 col-lg-8 col-md-12 col-12">
											<!-- Card header -->
											<div class="card-header">
												<h3 class="mb-0"><?= $data_produk['nama']; ?></h3>
												<p class="mb-0">
													<?= $data_produk['deskripsi']; ?>
												</p>
											</div>
											<!-- Card body -->
											<div class="card-body">
												<div class="row">
													<div class="col-lg-3 col-md-4 col-12">
														<h5>Website</h5>
													</div>
													<div class="col-lg-9 col-md-8 col-12">
														<input type="text" class="form-control mb-1" placeholder="Twitter Profile Name" />
													</div>
												</div>
												<div class="row">
													<div class="col-lg-3 col-md-4 col-12">
														<h5>Link Video</h5>
													</div>
													<div class="col-lg-9 col-md-8 col-12">
														<input type="text" class="form-control mb-1" placeholder="Facebook Profile Name" />
													</div>
												</div>
												<div class="row">
													<div class="col-lg-3 col-md-4 col-12">
														<h5>Link Playstore</h5>
													</div>
													<div class="col-lg-9 col-md-8 col-12">
														<input type="text" class="form-control mb-1" placeholder="Instagram Profile Name" />
													</div>
												</div>
													<!-- Instagram -->
												<div class="row">
													<div class="col-lg-3 col-md-4 col-12">
														<h5>Link App Store</h5>
													</div>
													<div class="col-lg-9 col-md-8 col-12">
														<input type="text" class="form-control mb-1" placeholder="Instagram Profile Name" />
													</div>
												</div>
											</div>
											

										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-12 col-12">
									<!-- Card -->
									<div class="card mb-4">
										<!-- Card body -->
										<div class="p-4">
											<span class="icon-shape icon-sm bg-light-primary text-dark-primary rounded-lg"><i
													class="fe fe-folder"></i></span>
											<h2 class="h1 font-weight-bold mb-0 mt-4 lh-1"><?= strtoupper($data_produk['jenis']); ?></h2>
											<p>Bentuk akhir produk bisnis.</p>
											<div class="progress bg-light-primary" style="height: 2px">
												<div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-12">
									<!-- Card body -->
									<div class="card mb-4">
										<!-- Card body -->
										<div class="p-4">
											<span class="icon-shape icon-sm bg-light-info text-dark-info rounded-lg"><i class="fe fe-file-text"></i></span>
											<span class="icon-shape icon-sm bg-light-warning text-dark-warning rounded-lg"><i class="fe fe-book-open"></i></span>
											<span class="icon-shape icon-sm bg-light-danger text-dark-danger rounded-lg"><i class="fe fe-file"></i></span>
											<h2 class="h1 font-weight-bold mb-0 mt-4 lh-1">
												DOKUMEN IDE
											</h2>
											<p>Belum di upload</p>
											<div class="progress bg-light-danger" style="height: 2px">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45"
													aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-12">
									<!-- Card body -->
									<div class="card mb-4">
										<!-- Card body -->
										<div class="p-4">
											<span class="icon-shape icon-sm bg-light-warning text-dark-warning rounded-lg"><i class="fe fe-youtube"></i></span>
											<h2 class="h1 font-weight-bold mb-0 mt-4 lh-1">
												LINK VIDEO
											</h2>
											<p>Belum ada video.</p>
											<div class="progress bg-light-warning" style="height: 2px">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35"
													aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Card -->
							<div class="card mb-4">
								<div class="card-header border-bottom-0">
									<h3 class="mb-0 h4">Riwayat Pengajuan Ide Bisnis</h3>
								</div>
								<!-- Table -->
								<div class="table-responsive ">
									<table class="table mb-0 text-nowrap">
										<thead class="thead-light">
											<tr>
												<th scope="col" class="border-bottom-0">TANGGAL PENGAJUAN</th>
												<th scope="col" class="border-bottom-0">NAMA</th>
												<th scope="col" class="border-bottom-0">DESKRIPSI</th>
												<th scope="col" class="border-bottom-0"></th>
											</tr>
										</thead>
										<tbody>
										<?php foreach ($data_riwayat_pengajuan_produk as $row) 
											{
										?>

											<tr>
												<td class="align-middle"><?= tgl_dan_hari(tgl_default($row->created_at)).", ".tgl_default($row->created_at); ?></td>
												<td class="align-middle">
													<a href="#!">
														<div class="d-lg-flex">
															<h5 class="mb-0 ml-lg-3 mt-lg-0 mt-2 text-primary-hover">
																<?= $row->nama; ?>
															</h5>
														</div>
													</a>
												</td>
												<td class="align-middle"><?= $row->deskripsi; ?></td>
												<td class="text-muted align-middle">
													<span class="dropdown">
														<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown1"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fe fe-more-vertical"></i>
														</a>
														<span class="dropdown-menu" aria-labelledby="courseDropdown1">
															<span class="dropdown-header">Setting </span>
															<a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
															<a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
														</span>
													</span>
												</td>
											</tr>

											<?php 
											}
										?>
									
										</tbody>
									</table>
								</div>
							</div>
						</div>

						</div>
						<!-- conten 3 -->
						<div class="tab-pane fade" id="startupacademy" role="tabpanel" aria-labelledby="startupacademy-tab">

							
							<div class="col-lg-12 col-md-12 col-12">
								<!-- Card -->
								<div class="card mb-4">
									<!-- Card body -->
									<div class="p-4 d-flex justify-content-between align-items-center">
										<div>
											<h3 class="mb-0">Kelompok <?= $data_array_anggota_tim['nama_grub']; ?></h3>
											<span>Daftar Anggota Tim </span>
										</div>
										<!-- Nav -->
											<div class="nav btn-group flex-nowrap" role="tablist">
												<button class="btn btn-outline-white active" data-toggle="tab" data-target="#tabPaneGrid" role="tab"
													aria-controls="tabPaneGrid" aria-selected="true">
													<span class="fe fe-grid"></span>
												</button>
												<button class="btn btn-outline-white" data-toggle="tab" data-target="#tabPaneList" role="tab"
													aria-controls="tabPaneList" aria-selected="false">
													<span class="fe fe-list"></span>
												</button>
											</div>
									</div>
								</div>
								<!-- Tab content -->
								<div class="tab-content">
									<div class="tab-pane fade show active pb-4" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
										<div class="row">

										<?php foreach ($data_anggota_tim as $row) 
										{
											?>

												<div class="col-lg-4 col-md-6 col-12">
													<!-- Card -->
													<div class="card mb-4">
														<!-- Card body -->
														<div class="card-body">
															<div class="text-center">
																<img src="<?= base_url('assets/images/users/').$row->foto; ?>" class="rounded-circle avatar-xl mb-3" alt="" />
																<h4 class="mb-1"><?= $row->nama_lengkap; ?></h4>
																<p class="mb-0 font-size-xs">
																	<i class="fe fe-map-pin mr-1"></i><?= $row->jurusan; ?>
																</p>
																<a href="#!" class="btn btn-sm btn-outline-white mt-3"><i class="fe fe-phone"> </i>  <?= $row->telpon; ?></a>
															</div>
															<div class="d-flex justify-content-between border-bottom py-2 mt-4 font-size-xs">
																<span>Terdaftar</span>
																<span class="text-dark"> <?= tgl_dan_hari(tgl_default($row->created_at)).", ".tgl_default($row->created_at); ?></span>
															</div>
															<div class="d-flex justify-content-between pt-2 font-size-xs">
																<span>Progress</span>
																<span class="text-success"> 0% </span>
															</div>
														</div>
													</div>
												</div>

										<?php
										}
										?>
							
										</div>
									</div>
									<!-- Tab pane -->
									<div class="tab-pane fade" id="tabPaneList" role="tabpanel" aria-labelledby="tabPaneList">
										<div class="card">
											<div class="card-header border-bottom-0">
												<div class="row">
													<div class="col pr-0">
														<form>
															<input type="search" class="form-control" placeholder="Search by Name" />
														</form>
													</div>
												</div>
											</div>
											<!-- Table -->
											<div class="table-responsive">
												<table class="table">
													<thead class="thead-light">
														<tr>
															<th scope="col" class="border-bottom-0">Nama</th>
															<th scope="col" class="border-bottom-0">Terdaftar</th>
															<th scope="col" class="border-bottom-0">Telpon</th>
															<th scope="col" class="border-bottom-0">Alamat</th>
															<th scope="col" class="border-bottom-0">Aksi</th>
														</tr>
													</thead>
													<tbody>
													<?php foreach ($data_anggota_tim as $row) 
													{
														?>
														<tr>
															<td class="align-middle">
																<div class="d-flex align-items-center">
																	<img src="<?= base_url('assets/images/users/').$row->foto; ?>" alt="" class="rounded-circle avatar-md mr-2" />
																	<h5 class="mb-0"><?= $row->nama_lengkap; ?></h5>
																</div>
															</td>
															<td class="align-middle"><?= $row->created_at; ?></td>
															<td class="align-middle"><?= $row->telpon; ?></td>
															<td class="align-middle">
																<span class="font-size-xs"><i class="fe fe-map-pin mr-1"></i><?= $row->alamat; ?></span>
															</td>
															<td class="pr-0 align-middle">
																<a href="#!" class="btn btn-outline-white btn-sm">Lihat Profil</a>
															</td>
														</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<!-- conten 4 -->
						<div class="tab-pane fade" id="prainkkubasikompetisi" role="tabpanel" aria-labelledby="prainkkubasikompetisi-tab">

						<div class="table-responsive">
							<table class="table mb-0 text-nowrap">
								<thead class="thead-light">
									<tr>
										<th scope="col" class="border-bottom-0">Materi</th>
										<th scope="col" class="border-bottom-0">Pengisi</th>
										<th scope="col" class="border-bottom-0">Kategori</th>
										<th scope="col" class="border-bottom-0">Status</th>
										<th scope="col" class="border-bottom-0"></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data_riwayat_perkuliahan as $row) 
									{
										?>
										<tr>
											<td>
												<div class="d-lg-flex">
													<div>
														<a href="#!">
															<img src="<?= base_url('assets/images/course/'.$row->photo);?>" alt="" class="rounded img-4by3-lg" /></a>
													</div>
													<div class="ml-lg-3 mt-2 mt-lg-0">
														<h4 class="mb-1 h5">
															<a href="#!" class="text-inherit">
																<?= $row->deskripsi; ?>
															</a>
														</h4>
														<ul class="list-inline font-size-xs mb-0">
															<li class="list-inline-item">
																<i class="far fa-clock mr-1"></i><?= $row->tgl_pelaksanaan; ?>
															</li>
															<li class="list-inline-item">
																<svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
																	xmlns="http://www.w3.org/2000/svg">
																	<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
																	<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
																	<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
																</svg><?= $row->kategori; ?>
															</li>
														</ul>
													</div>
												</div>
											</td>
											<td><?= $row->nama_pengisi; ?></td>
											<td>
												<?= $row->kategori; ?>
											</td>
											<td>
												<span class="badge badge-success">Live</span>
											</td>
											<td class="text-muted ">
												<span class="dropdown">
													<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown"
														data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fe fe-more-vertical"></i>
													</a>
													<span class="dropdown-menu" aria-labelledby="courseDropdown">
														<span class="dropdown-header">Setting </span>
														<a class="dropdown-item" href="#!"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
														<a class="dropdown-item" href="#!"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
													</span>
												</span>
											</td>
									</tr>

										<?php 
										} 
									?>
							</tbody>
							</table>
						</div>

						</div>

							<!-- conten 5 -->
							<div class="tab-pane fade" id="inkubasi" role="tabpanel" aria-labelledby="inkubasi-tab">

								<div class="row">

									<?php foreach ($data_event as $row) 
													{
														?>
														<div class="col-lg-3 col-md-6 col-12">
															<!-- Card -->
																<div class="card  mb-4 card-hover">
																	<a href="#!" class="card-img-top"><img src="../assets/images/course/course-graphql.jpg" alt=""
																		class="card-img-top rounded-top"></a>
																	<!-- Card body -->
																	<div class="card-body">
																	<h3 class="h4 mb-2 text-truncate-line-2 "><a href="#!" class="text-inherit"><?= $row->nama_event; ?></a></h3>
																		<!-- List inline -->
																	<ul class="mb-3 list-inline">
																		<li class="list-inline-item"><i class="far fa-clock mr-1"></i><?= tgl_dan_hari(tgl_default($row->tgl_event)).", ".tgl_default($row->tgl_event); ?>
																		</li>
																		<li class="list-inline-item"><svg class="mr-1 mt-n1" width="16" height="16" viewBox="0 0 16 16"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
																			</rect>
																			<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE">
																			</rect>
																			<rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE">
																			</rect>
																		</svg><?= $row->scope; ?> </li>
																	</ul>
																	</div>
																	<!-- Card footer -->
																	<div class="card-footer">
																	<div class="row align-items-center no-gutters">
																		<div class="col-auto">
																		<img src="<?= base_url('assets/images/avatar/avatar-2.jpg'); ?>" class="rounded-circle avatar-xs" alt="">
																		</div>
																		<div class="col ml-2">
																		<span>Admin</span>
																		</div>
																		<div class="col-auto">
																		<a href="#!" class="removeBookmark">
																			<i class="fas fa-bookmark"></i>
																		</a>
																		</div>
																	</div>
																	</div>
																</div>
															</div>


														<?php
													}
									?>
								
								
							
								</div>
							</div>
						</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>



