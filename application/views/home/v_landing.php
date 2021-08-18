	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-default">
			<div class="container-fluid px-0">
				<a class="navbar-brand" href="<?= base_url();?>">
					<img src="<?= base_url();?>assets/images/piib/Piib_logo.png" width="90px" weight="40px" alt=""/>
				</a>
				<!-- Mobile view nav wrap -->

				<!-- Button -->
				<button
				class="navbar-toggler collapsed"
				type="button"
				data-toggle="collapse"
				data-target="#navbar-default"
				aria-controls="navbar-default"
				aria-expanded="false"
				aria-label="Toggle navigation"
				>
				<span class="icon-bar top-bar mt-0"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
			</button>
			<!-- Collapse -->
			<div class="collapse navbar-collapse" id="navbar-default">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a 
						class="nav-link mr-2" href="<?= base_url();?>" id="navbarBrowse">
						Beranda
					</a>
				</li>
				<li class="nav-item dropdown">
					<a
					class="nav-link dropdown-toggle"
					href="<?= base_url(); ?>"
					id="navbarBrowse"
					data-toggle="dropdown"
					aria-haspopup="true"
					aria-expanded="false"
					data-display="static"
					>
					Program
				</a>
				<ul
				class="dropdown-menu dropdown-menu-arrow"
				aria-labelledby="navbarBrowse"
				>	
				<li>
					<a
					href="<?= base_url();?>pages/course-category.html"
					class="dropdown-item"
					>
					Grand Launching Day (GLD)
				</a>
			</li>
			<li>
				<a
				href="<?= base_url();?>pages/course-category.html"
				class="dropdown-item"
				>
				Start Up Academy
			</a>
		</li>
		<li>
			<a
			href="<?= base_url();?>pages/course-category.html"
			class="dropdown-item"
			>
			Pra Inkubasi Kompetisi
		</a>
	</li>					
	<li class="dropdown-submenu dropright">
		<a
		class="dropdown-item dropdown-list-group-item dropdown-toggle"
		href="#!"
		>
		Inkubasi
	</a>
	<ul class="dropdown-menu">
		<li>
			<a
			class="dropdown-item"
			href="<?= base_url();?>pages/course-category.html"
			>
			Daftar Produk Peserta</a
			>
		</li>
		<li>
			<a
			class="dropdown-item"
			href="<?= base_url();?>pages/course-category.html"
			>
			Lorem</a
			>
		</li>
		<li>
			<a
			class="dropdown-item"
			href="<?= base_url();?>pages/course-category.html"
			>
			Lorem</a
			>
		</li>

	</ul>
</li>                        												
</ul>                    
</li>
<li class="nav-item dropdown">
	<a 
	class="nav-link mr-2"
	href="#!"
	id="navbarBrowse"
	data-toggle="dropdown"
	aria-haspopup="true"
	aria-expanded="false"
	data-display="static"
	>
	Galeri
</a>
</li>
<li class="nav-item dropdown">
	<a
	class="nav-link dropdown-toggle"
	href="#!"
	id="navbarBrowse"
	data-toggle="dropdown"
	aria-haspopup="true"
	aria-expanded="false"
	data-display="static"
	>
	Materi
</a>
<ul
class="dropdown-menu dropdown-menu-arrow"
aria-labelledby="navbarBrowse"
>	
<?php 
foreach ($data->result_array() as $key) {
	$id_event=$key['id_event'];
	$nama_event=$key['nama_event'];
	$deskripsi=$key['deskripsi'];
	$scope=$key['scope'];
	$status=$key['status'];
	// $created_at=$key['created_at'];
	// $updated_at=$key['updated_at'];
	?>
	<li>
		<a
		href="<?= base_url("home/");?>event/<?= $id_event ?>"
		class="dropdown-item"
		>
		<?= $nama_event ?>
	</a>
</li>
<?php } ?>               

</ul>     
</li>

<li class="nav-item dropdown">
	<a
	class="nav-link dropdown-toggle"
	href="#!"
	id="navbarBrowse"
	data-toggle="dropdown"
	aria-haspopup="true"
	aria-expanded="false"
	data-display="static"
	>
	Tentang
</a>
<ul
class="dropdown-menu dropdown-menu-arrow"
aria-labelledby="navbarBrowse"
>	
<li>
	<a
	href="<?= base_url();?>pages/course-category.html"
	class="dropdown-item"
	>
	Kegiatan PIIB
</a>
</li>
<li>
	<a
	href="<?= base_url();?>pages/course-category.html"
	class="dropdown-item"
	>
	Profile Tim
</a>
</li>
<li>
	<a
	href="<?= base_url();?>pages/course-category.html"
	class="dropdown-item"
	>
	Rekam Jejak
</a>
</li>                   												
</ul>                    
</li>		


</ul>
<form class="mt-3 mt-lg-0 ml-lg-3 d-flex align-items-center">
	<!-- <span class="position-absolute pl-3 search-icon">
		<i class="fe fe-search"></i>
	</span>
	<input
	type="search"
	class="form-control pl-6"
	placeholder="Cari"
	/> -->
	<a href="<?= base_url('auth/') ?>"><button type="button" class="btn btn-info ml-3">Masuk</button></a>
	<a href="<?= base_url('auth/'); ?>register"><button type="button" class="btn btn-info ml-3">Daftar</button> </a>               
</form> 
</div>
</div>
</nav>

<!-- Page Content -->
<div class="bg-primary">
	<div class="container">
		<!-- Hero Section -->
		<div class="row align-items-center no-gutters">
			<div class="col-xl-5 col-lg-6 col-md-12">
				<div class="py-5 py-lg-0">
					<h2 class="text-white display-4 font-weight-bold">Pusat Inovasi & Inkubator Bisnis
					</h2>                        
					<p class="text-white mb-4 lead text-justify">
						Selamat datang di website Sistem Informasi Pusat Inovasi & Inkubator Bisnis (SIM-PIIB).
					</p>                        
				</div>
			</div>
			<div class=" col-xl-7 col-lg-6 col-md-12 text-lg-right text-center">
				<img src="<?= base_url() ?>assets/images/hero/model_2.png" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</div>    
<!-- Content -->
<div class="pt-lg-12 pb-lg-3 pt-8 pb-6">
	<div class="container">
		<div class="row mb-4">
			<div class="col">
				<h1 class="mb-0 text-center">Terkini</h1>
			</div>
		</div>
		<div class="position-relative">
			<ul class="controls " id="sliderFirstControls">
				<li class="prev">
					<i class="fe fe-chevron-left"></i>
				</li>
				<li class="next">
					<i class="fe fe-chevron-right"></i>
				</li>
			</ul>
			<div class="sliderFirst">

				<div class="item">
					<!-- Card -->
					<div class="card  mb-4 card-hover">								
						<!-- Card Body -->
						<div class="card-body">
							<h4 class="mb-2 text-truncate-line-3"><a href="pages/course-single.html" class="text-inherit">
								Start Up Academy Dilaksanakan di Aranka Tempasan Yang di Hadiri Oleh 10 Kelompok Terbaik Kewirausahaan Lintas Prodi Angkatan 2020-2021.
							</a></h4>
							<!-- Price -->
							<div class="lh-1 mt-3">										
								<span class="font-size-xs text-muted">2021-08-14</span>
							</div>
						</div>

					</div>
				</div>

				<div class="item">
					<!-- Card -->
					<div class="card  mb-4 card-hover">								
						<!-- Card Body -->
						<div class="card-body">
							<h4 class="mb-2 text-truncate-line-3"><a href="pages/course-single.html" class="text-inherit">
								Pelaksanaan GLD (Grand Launching Day) Pada 18 Juli 2021 yang di Hadiri Oleh Seluruh Peserta Kewirausahaan Lintas Prodi.
							</a></h4>
							<!-- Price -->
							<div class="lh-1 mt-3">										
								<span class="font-size-xs text-muted">2021-07-01</span>
							</div>
						</div>

					</div>
				</div>

				<div class="item">
					<!-- Card -->
					<div class="card  mb-4 card-hover">								
						<!-- Card Body -->
						<div class="card-body">
							<h4 class="mb-2 text-truncate-line-3"><a href="pages/course-single.html" class="text-inherit">
								Start Up Academy Dilaksanakan di Aranka Tempasan Yang di Hadiri Oleh 10 Kelompok Terbaik Kewirausahaan Lintas Prodi Angkatan 2020-2021.
							</a></h4>
							<!-- Price -->
							<div class="lh-1 mt-3">										
								<span class="font-size-xs text-muted">2021-08-14</span>
							</div>
						</div>

					</div>
				</div>

				<div class="item">
					<!-- Card -->
					<div class="card  mb-4 card-hover">								
						<!-- Card Body -->
						<div class="card-body">
							<h4 class="mb-2 text-truncate-line-3"><a href="pages/course-single.html" class="text-inherit">
								Pelaksanaan GLD (Grand Launching Day) Pada 18 Juli 2021 yang di Hadiri Oleh Seluruh Peserta Kewirausahaan Lintas Prodi.
							</a></h4>
							<!-- Price -->
							<div class="lh-1 mt-3">										
								<span class="font-size-xs text-muted">2021-07-01</span>
							</div>
						</div>

					</div>
				</div>

				<div class="item">
					<!-- Card -->
					<div class="card  mb-4 card-hover">								
						<!-- Card Body -->
						<div class="card-body">
							<h4 class="mb-2 text-truncate-line-3"><a href="pages/course-single.html" class="text-inherit">
								Pelaksanaan GLD (Grand Launching Day) Pada 18 Juli 2021 yang di Hadiri Oleh Seluruh Peserta Kewirausahaan Lintas Prodi.
							</a></h4>
							<!-- Price -->
							<div class="lh-1 mt-3">										
								<span class="font-size-xs text-muted">2021-07-01</span>
							</div>
						</div>

					</div>
				</div>


			</div>
		</div>
	</div>
</div>

<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid bg-primary">
	<div class="container">
		<div class="row mb-4">
			<div class="col-md-6 col-xs-6 text-white">
				<h1 class="text-white display-4 font-weight-bold">Apa Itu PIIB ?</h1>
				<h2 class="text-white mb-4 lead text-justify">
					PIIB adalah sebuah website yang menyediakan pelatihan bagi para calon entrepreneur 
					millenial guna mengembangkan minat dan usaha yang akan digeluti demi tercapainya ekonomi 
					kreatif serta berperan dalam peningkatan perekonomian dalam negeri.						
				</h2>
				<h2 class="text-white mb-4 lead text-justify">
					PIIB merupakan bagian dari kebijakan oleh PIIB, Kebudayaan, Riset, dan Teknologi Republik 
					Indonesia yang memberikan kesempaatan bagi mahasiswa/i untuk mengasah kemampuan sesuai 
					bakat dan minat dengan terjun langsung ke dunia kerja sebagai persiapan karier masa depan.
				</h2>
			</div>
			<div class="col-md-6 col-xs-6">
				<img src="<?= base_url() ?>assets/images/piib/pib-1.png" alt="">
			</div>
		</div>
		<!-- bawah -->
		<h1 class="text-white display-6 font-weight-bold text-center">Kenapa kamu harus mengikuti program-program PIIB?</h1>
		<div class="row mt-5">
			<div class="col-md-3 col-6">
				<div class="circle-50-34 centering-44">
					<img class="image-0-0-521" src="<?= base_url() ?>assets/images/piib/icon/1.png" alt="">
				</div>											
				<h4 class="text-white">Kegiatan praktik lapangan akan dikonversi menjadi SKS</h4>  
			</div>
			<div class="col-md-3 col-6">
				<div class="circle-50-34 centering-44">
					<img class="image-0-0-521" src="<?= base_url() ?>assets/images/piib/icon/2.png" alt="">
				</div>
				<h4 class="text-white">Eksplorasi pengetahuan dan kemampuan di lapangan selama lebih dari satu semester</h4>  
			</div>
			<div class="col-md-3 col-6">
				<div class="circle-50-34 centering-44">
					<img class="image-0-0-521" src="<?= base_url() ?>assets/images/piib/icon/3.png" alt="">
				</div>
				<h4 class="text-white">Belajar dan memperluas jaringan di luar program studi atau kampus asal</h4>  
			</div>
			<div class="col-md-3 col-6">
				<div class="circle-50-34 centering-44">
					<img class="image-0-0-521" src="<?= base_url() ?>assets/images/piib/icon/4.png" alt="">
				</div>
				<h4 class="text-white">Menimba ilmu secara langsung dari mitra berkualitas dan terkemuka</h4>  
			</div>
		</div>				
	</div>						
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<!-- end jumbotron -->
<!-- End Content -->