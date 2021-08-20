         <!-- Page Header -->
         <!-- Container fluid -->
         <div class="container-fluid p-4">
         	<div class="row">
         		<div class="col-lg-12 col-md-12 col-12">
         			<div class="border-bottom pb-4 mb-4 d-lg-flex justify-content-between align-items-center">
         				<div>
         					<h1 class="mb-0 h2 font-weight-bold">Materi</h1>
         				</div>
            <!--    <div class="d-flex">
                  <div class="input-group mr-3">
                    <input class="form-control flatpickr" type="text" placeholder="Select Date" aria-describedby="basic-addon2">
                    <div class="input-group-append input-button">
                      <span class="input-group-text text-muted" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                    </div>
                  </div>
                  <a href="#!" class="btn btn-primary">Pengaturan</a>
                </div> -->
              </div>
            </div>
          </div>
          <div class="row">
          	<div class="pb-16">
          		<div class="container">
          			<div class="row">
          				<div class="col-lg-12 col-md-12 col-12">
          					<div class="row">

          						<?php foreach ($data_event as $row ) {

          							?>
          							<div class=" col-lg-4 col-md-12 col-12">
          								<!-- Card -->
          								<div class="card mb-4  shadow-lg"> 
          									<a href="<?= base_url() ?>assets/images/materi/<?= $row['foto'] ?>" class="card-img-top">
          										<!-- Img  -->
          										<img src="<?= base_url() ?>assets/images/materi/<?= $row['foto'] ?>" class="card-img-top rounded-top" alt=""></a>
          										<!-- Card body -->
          										<div class="card-body">
          											<a href="#!" class="font-size-sm mb-2 font-weight-semi-bold d-block text-success"><?= $row['scope'] ?></a>
          											<h3><a href="<?= base_url() ?>assets/images/materi/<?= $row['id_event'] ?>" class="text-inherit">
          												<?= $row['nama_event'] ?>
          											</a>
          										</h3>
          										<p><?= $row['deskripsi'] ?></p>
          										<!-- Media content -->
          										<div class="row align-items-center no-gutters mt-4">
          									<!-- 		<div class="col-auto">
          												<img src="<?= base_url() ?>assets/images/materi/pak-ali.jpg" alt="" class="rounded-circle avatar-sm mr-2">
          											</div> -->
          											<div class="col lh-1">
          												<!-- <h5 class="mb-1">Muhammad Ali, M.Si</h5> -->
          												<p class="font-size-xs mb-0"><?= $row['tgl_event'] ?></p>
          											</div>
          									
          										</div>
          									</div>
          								</div>
          							</div>

          						<?php } ?>
          						<!-- Buttom -->
          				<!-- 			<div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-4">
          								<a href="#!" class="btn btn-primary">
          									<div class="spinner-border spinner-border-sm mr-2" role="status">
          										<span class="sr-only">Loading...</span>
          									</div>Load More
          								</a>
          							</div> -->
          						</div>
          					</div>

          			</div>
          		</div>
          	</div>

