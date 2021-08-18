<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- Favicon icon-->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/images/favicon/favicon.svg">


	<!-- Libs CSS -->

	<link href="<?= base_url();?>assets/fonts/feather/feather.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
	<link href="<?= base_url();?>assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/libs/@yaireo/tagify/dist/tagify.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet">





	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= base_url();?>assets/css/theme.min.css">
	<title><?= $judul ?></title>
</head>


	<body>
		<nav class="navbar navbar-expand-lg navbar-default">
			<div class="container-fluid px-0">
				<a class="navbar-brand" href="<?= base_url();?>peserta"
					><img src="<?= base_url();?>assets/images/piib/Piib_logo.png" width="90px" weight="40px" alt=""
					/></a>
					<!-- Mobile view nav wrap -->
					<ul
					class="navbar-nav navbar-right-wrap ml-auto d-lg-none d-flex nav-top-wrap"
					>
					<li class="dropdown stopevent">
						<a
						class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary"
						href="#!"
						role="button"
						id="dropdownNotification"
						data-toggle="dropdown"
						aria-haspopup="true"
						aria-expanded="false"
						>
						<i class="fe fe-bell"> </i>
					</a>
					<div
					class="dropdown-menu dropdown-menu-right shadow"
					aria-labelledby="dropdownNotification"
					>
					<div>
						<div
						class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center"
						>
						<span class="h5 mb-0">Notifications</span>
						<a href="# " class="text-muted"
						><span class="align-middle"
						><i class="fe fe-settings mr-1"></i></span
						></a>
					</div>
					<ul class="list-group list-group-flush notification-list-scroll">
						<li class="list-group-item bg-light">
							<div class="row">
								<div class="col">
									<div class="d-flex">
										<img
										src="<?= base_url();?>assets/images/avatar/avatar-1.jpg"
										alt=""
										class="avatar-md rounded-circle"
										/>
										<div class="ml-3">
											<h5 class="font-weight-bold mb-1">Kristin Watson:</h5>
											<p class="mb-3">
												Krisitn Watsan like your comment on course Javascript
												Introduction!
											</p>
											<span class="font-size-xs text-muted">
												<span
												><span
												class="fe fe-thumbs-up text-success mr-1"
												></span
												>2 hours ago,</span
												>
												<span class="ml-1">2:19 PM</span>
											</span>
										</div>
									</div>
									<a class="stretched-link" href="#!"></a>
								</div>
								<div class="col-auto text-center">
									<a
									href="#!"
									class="badge-dot badge-info"
									data-toggle="tooltip"
									data-placement="top"
									title=""
									data-original-title="Mark as read"
									>
								</a>
								<div>
									<a
									href="#!"
									data-toggle="tooltip"
									data-placement="top"
									title=""
									data-original-title="Remove"
									>
									<i class="fe fe-x text-muted"></i>
								</a>
							</div>
						</div>
					</div>
				</li>

			</ul>
			<div class="border-top px-3 pt-3 pb-0">
				<a
				href="<?= base_url();?>pages/notification-history.html"
				class="text-link font-weight-semi-bold"
				>See all Notifications</a
				>
			</div>
		</div>
	</div>
</li>
<li class="dropdown ml-2">
	<a
	class="rounded-circle"
	href="#!"
	role="button"
	id="dropdownUser"
	data-toggle="dropdown"
	aria-haspopup="true"
	aria-expanded="false"
	>
	<div class="avatar avatar-md avatar-indicators avatar-online">
		<img
		alt="avatar"
		src="<?= base_url('assets/images/users/'.$data['foto']);?>"
		class="rounded-circle"
		/>
	</div>
</a>
<div
class="dropdown-menu dropdown-menu-right shadow"
aria-labelledby="dropdownUser"
>
<div class="dropdown-item">
	<div class="d-flex">
		<div class="avatar avatar-md avatar-indicators avatar-online">
			<img
			alt="avatar"
			src="<?= base_url('assets/images/users/'.$data['foto']);?>"
			class="rounded-circle"
			/>
		</div>
		<div class="ml-3 lh-1">
			<h5 class="mb-1"><?= $data['nama_lengkap'] ?></h5>
			<p class="mb-0 text-muted"><?= $data['email'] ?></p>
		</div>
	</div>
</div>
<div class="dropdown-divider"></div>
<ul class="list-unstyled">

	<li>
		<a class="dropdown-item" href="<?= base_url();?>peserta/profile">
			<i class="fe fe-user mr-2"></i>Profil
		</a>
	</li>
	<li>
		<a class="dropdown-item" href="<?= base_url();?>peserta/edit_profile">
			<i class="fe fe-settings mr-2"></i>Pengaturan
		</a>
	</li>
</ul>
<div class="dropdown-divider"></div>
<ul class="list-unstyled">
	<li>
		<a class="dropdown-item" href="<?= base_url();?>auth/logout">
			<i class="fe fe-power mr-2"></i>Keluar
		</a>
	</li>
</ul>
</div>
</li>
</ul>
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

	<div class="collapse navbar-collapse" id="navbar-default">
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a 
				class="nav-link mr-2"
				href="<?= base_url();?>peserta"
				id="navbarBrowse"
				>
				Beranda
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
<li>
	<a
	href="<?= base_url();?>pages/course-category.html"
	class="dropdown-item"
	>
	Tata Cara Pendaftaran
</a>
</li>
<li>
	<a
	href="<?= base_url();?>pages/course-category.html"
	class="dropdown-item"
	>
	Tutorial
</a>
</li>
<li>
	<a
	href="<?= base_url();?>pages/course-category.html"
	class="dropdown-item"
	>
	Belajar Keriwausahaan
</a>
</li>
<li>
	<a
	href="<?= base_url();?>pages/course-category.html"
	class="dropdown-item"
	>
	How To Be An Enterpreneur
</a>
</li>
<li>
	<a
	href="<?= base_url();?>pages/course-category.html"
	class="dropdown-item"
	>
	Kiat Kiat Usaha
</a>
</li>					

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
	<span class="position-absolute pl-3 search-icon">
		<i class="fe fe-search"></i>
	</span>
	<input
	type="search"
	class="form-control pl-6"
	placeholder="Cari"
	/>
</form>
<ul class="navbar-nav navbar-right-wrap ml-auto d-none d-lg-block">
	<li class="dropdown d-inline-block stopevent">
		<a
		class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary"
		href="#!"
		role="button"
		id="dropdownNotificationSecond"
		data-toggle="dropdown"
		aria-haspopup="true"
		aria-expanded="false"
		>
		<i class="fe fe-bell"> </i>
	</a>
	<div
	class="dropdown-menu dropdown-menu-xl dropdown-menu-right"
	aria-labelledby="dropdownNotificationSecond"
	>
	<div>
		<div
		class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center"
		>
		<span class="h5 mb-0">Notifikasi</span>
		<a href="# " class="text-muted"
		><span class="align-middle"
		><i class="fe fe-settings mr-1"></i></span
		></a>
	</div>
	<ul class="list-group list-group-flush notification-list-scroll">
		<li class="list-group-item bg-light">
			<div class="row">
				<div class="col">
					<div class="d-flex">
						<img
						src="<?= base_url();?>assets/images/avatar/avatar-1.jpg"
						alt=""
						class="avatar-md rounded-circle"
						/>
						<div class="ml-3">
							<h5 class="font-weight-bold mb-1">Kristin Watson:</h5>
							<p class="mb-3">
								Krisitn Watsan like your comment on course
								Javascript Introduction!
							</p>
							<span class="font-size-xs text-muted">
								<span
								><span
								class="fe fe-thumbs-up text-success mr-1"
								></span
								>2 hours ago,</span
								>
								<span class="ml-1">2:19 PM</span>
							</span>
						</div>
					</div>
					<a class="stretched-link" href="#!"></a>
				</div>
				<div class="col-auto text-center">
					<a
					href="#!"
					class="badge-dot badge-info"
					data-toggle="tooltip"
					data-placement="top"
					title=""
					data-original-title="Mark as read"
					>
				</a>
				<div>
					<a
					href="#!"
					class="bg-transparent"
					data-toggle="tooltip"
					data-placement="top"
					title=""
					data-original-title="Remove"
					>
					<i class="fe fe-x text-muted"></i>
				</a>
			</div>
		</div>
	</div>
</li>

</ul>
<div class="border-top px-3 pt-3 pb-0">
	<a
	href="<?= base_url();?>pages/notification-history.html"
	class="text-link font-weight-semi-bold"
	>Lihat semua pemberitahuan</a
	>
</div>
</div>
</div>
</li>
<li class="dropdown ml-2 d-inline-block">
	<a
	class="rounded-circle"
	href="#!"
	role="button"
	id="dropdownUserProfile"
	data-toggle="dropdown"
	aria-haspopup="true"
	aria-expanded="false"
	>
	<div class="avatar avatar-md avatar-indicators avatar-online">
		<img
		alt="avatar"
		src="<?= base_url('assets/images/users/'.$data['foto']);?>"
		class="rounded-circle"
		/>
	</div>
</a>
<div
class="dropdown-menu dropdown-menu-right"
aria-labelledby="dropdownUserProfile"
>
<div class="dropdown-item">
	<div class="d-flex">
		<div class="avatar avatar-md avatar-indicators avatar-online">
			<img
			alt="avatar"
			src="<?= base_url('assets/images/users/'.$data['foto']);?>"
			class="rounded-circle"
			/>
		</div>
		<div class="ml-3 lh-1">
			<h5 class="mb-1"><?= $data['nama_lengkap']; ?></h5>
			<?= ' '.$data['email'].' ' ?>
			<!-- <p class="mb-0 text-muted">annette@geeksui.com</p> -->
		</div>
	</div>
</div>
<div class="dropdown-divider"></div>
<ul class="list-unstyled">

	<li>
		<a
		class="dropdown-item"
		href="<?= base_url();?>peserta/profile"
		>
		<i class="fe fe-user mr-2"></i>Profil
	</a>
</li>							
<li>
	<a class="dropdown-item" href="<?= base_url();?>peserta/edit_profile">
		<i class="fe fe-settings mr-2"></i>Pengaturan
	</a>
</li>
</ul>
<div class="dropdown-divider"></div>
<ul class="list-unstyled">
	<li>
		<a class="dropdown-item" href="<?= base_url();?>auth/logout">
			<i class="fe fe-power mr-2"></i>Keluar
		</a>
	</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>