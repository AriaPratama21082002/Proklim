<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?? "" ;?></title>

	<!-- Custom fonts for this template-->
	<link href="<?=base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">


  <!-- Custom styles for this page -->
  <link href="<?=base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('dashboard');?>">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Proklim</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="<?=base_url('dashboard');?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Beranda</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<?php $this->load->view('template/menu'); ?>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $email; ?></span>
								<img class="img-profile rounded-circle" src="<?=base_url('assets/');?>img/undraw_profile.svg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
						  <div class="card mb-4 py-3 border-left-primary">
				            <div class="card-body">
				              <div class="d-sm-flex align-items-center justify-content-between mb-4">
				                <h1 class="h3 mb-0 text-gray-800">Selamat Datang Pendaftaran calon lokasi kampung iklim kota cirebon </h1>
				              </div>
				            </div>
				          </div>
				         <div class="row">
                  <div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-12">
									<h1 align="center">01</h1>
									<i>Formulir Pendaftaran</i>
									<br>
									<i>Validasi alamat Surat elektronik</i>
									<br>
									<i>Pengecekan Pendaftar</i>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
							</div>
									<a href="">
										<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nomor Pendaftaran</div>
									</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-12">
									<h1 align="center">02</h1>
									<i>Formulir Data Umum</i>
									<p>Disimpan Sebagai Berikut</p>
									<p>Dikirimkan</p>
									<br>
									<i>Aproval Data Umum</i>
									<br>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
							</div>
									<a href="">
										<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nomor Akun</div>
									</a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-12">
									<h1 align="center">03</h1>
									<i>Formulir Data Teknis</i>
									<p>Adaptasi</p>
									<p>Mitigasi</p>
									<p>Joint Adaptasi & mitigasi</p>
									<p>Kegiatan terkait lainnya</p>
									<br>
									<i>Valudasi Data Teknis</i>
									<br>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
								
							</div>
									<a href="">
										<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nomor Registri</div>
									</a>
						</div>
					</div>
				</div>
								<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-12">
									<h1 align="center">04</h1>
									<i>Formulir Data verifikasi</i>
									<p>Adaptasi</p>
									<p>Mitigasi</p>
									<p>Joint Adaptasi & mitigasi</p>
									<p>Kegiatan terkait lainnya</p>
									<br>
									<i>Valudasi Aksi dan sumberdaya</i>
									<br>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
							</div>
									<a href="">
										<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Terverifikasi</div>
									</a>
						</div>
					</div>
				</div>
</div>

<div class="row">
									<div class="col-xl-12 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<i class="text-uppercase">Tata Cara Penggunaan Sistem Registri Nasional (SRN)</i>
							<hr>
							<div class="row no-gutters align-items-center">
								<div class="col mr-12">
									<h1 class="text-uppercase font-weight-bold">Langkah I</h1>
									<div class="text-gray-800">
										<ol type="1">
    <li>Penanggung jawab kegiatan mengisi formulir pendaftaran dengan mengisi isian data yang terdiri dari tiga tahap yaitu data
       penanggung jawab kegiatan pengendaliaan perubahan iklim, narahubung dan akun penanggungjawab kegiatan. </li>
    <li>Penanggung jawab kegiatan mendapatkan validasi pendaftaran melalui surat elektronik. Penanggung jawab kegiatan melakukan konfirmasi akun dengan meng-klik tautan yang dikirim melalui surat elektronik tersebut. </li>
    <li> Penanggung jawab aksi akan mendapatkan email notifikasi sebagai pemberitahuan pendaftarannya telah diterima. </li>
    <li> Tim Sekretariat melakukan pengecekan data pendaftar. </li>
    <li> Sistem Registri Nasional mengirimkan nomor pendaftaran via surat elektronik. Dengan ini penanggung jawab kegiatan dapat melakukan Login dengan menggunakan username dan password yang didaftarkan.</li>
</ol>
									</div>
									<br>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
													<div class="col-xl-12 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-12">
									<h1 class="text-uppercase font-weight-bold">Langkah II</h1>
									<div class="text-gray-800">
										<ol type ="1">
    <li>Penanggung jawab kegiatan melakukan pengisian formulir data umum. Pengisian dapat dilakukan secara bertahap dan penanggung jawab kegiatan menyimpannya sebagai draft ataupun langsung dikirim. </li>
    <li>Tim Sekretariat SRN melakukan pengecekan isian data umum. </li>
    <li>Tim Sekretariat SRN melakukan approval data umum. </li>
   <li> Sistem Registri Nasional memberikan nomor akun kepada penanggung jawab kegiatan melalui surat elektronik. </li>
</ol>
									</div>
									<br>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

													<div class="col-xl-12 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-12">
									<h1 class="text-uppercase font-weight-bold">Langkah III</h1>
									<div class="text-gray-800">
									<ol type ="1">	
    <li>Penanggung jawab kegiatan mengisi formulir data teknis sesuai dengan kriteria kegiatan yang didaftarkan yaitu kegiatan adaptasi, mitigasi, joint adaptasi dan mitigasi serta kegiatan terkait lainnya. </li>
    <li>Tim Sekretariat SRN melakukan validasi data teknis. Jika terdapat data yang tidak lengkap maka Tim Sekretariat SRN akan mengembalikan formulir data teknis tersebut kepada penanggung jawab kegiatan untuk dilengkapi. </li>
    <li>Sistem Registri Nasional memberikan nomor registri kepada penanggungjawab kegiatan melalui surat elektronik. </li>
</ol>
									</div>
									<br>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
													<div class="col-xl-12 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-12">
									<h1 class="text-uppercase font-weight-bold">Langkah IV</h1>
									<div class="text-gray-800">
									<ol type ="1">	
    <li>Tim Sekretariat SRN mengisi formulir data verifikasi untuk masing-masing komponen data teknis kegiatan.</li>
    <li>Tim Sekretariat SRN melakukan verifikasi penurunan emisi dari aksi dan penggunaan sumberdaya yang dilaporkan. Jika terdapat data yang kurang lengkap, Tim Sekretariat SRN akan mengembalikan formulir tersebut kepada penanggung jawab kegiatan </li>
    <li>Kegiatan yang telah diverifikasi diberikan status terverifikasi. </li>
    								</ol>
									</div>
									<br>
									<div class="h5 mb-0 font-weight-bold text-gray-800"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>


				<?php $this->load->view('template/footer'); ?>
