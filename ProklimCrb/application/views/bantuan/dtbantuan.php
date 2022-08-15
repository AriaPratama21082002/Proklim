<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?? "" ;?></title>

  <link href="<?=base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

  <link href="<?=base_url('assets/');?>datatable/dataTables.bootstrap4.min.css" rel="stylesheet">


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
          <span>Dashboard</span></a>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $datap->name; ?></span>
                <img class="img-profile rounded-circle" src="<?=base_url('assets/');?>img/undraw_profile.svg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url('index.php/Profilakun/edit/<?=$data->id;?>'); ?>">
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

        <div class="container-fluid">
       
          <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Bantuan</h1>
              </div>
            </div>
          </div>
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pertanyaan yang Sering Diajukan</h6>
              <!-- <a href="<?=base_url()?>index.php/Kegiatan/tambah" class="btn btn-success">Tambah Data Kegiatan</a> -->
            </div>
            <div class="card-body">
              <h3>Apakah Sistem Registri Nasional</h3>
              <p align="justify">Sistem Registri Nasional merupakan sistem pendataan dan pelaporan mobilisasi dukungan dan atau aksi pengendalian perubahan iklim yang konsisten dengan unsur-unsur data aksi pengendalian perubahan iklim yang terukur. Dengan ketersediaan dan sinergi dari data-data tersebut maka Sistem Registri Nasional dapat menjadi alat pemantau pencapaian komitmen penurunan emisi yang dikomitmenkan oleh Pemerintah Indonesia. Sistem Registri Nasional dikembangkan untuk mengelola data dan informasi berbagai tema aksi dan mobilisasi dukungan pengendalian perubahan iklim di Indonesia sehingga setiap aksi dan mobilisasi dukungan dapat ditelusuri dan terukur kinerja pencapaiannya. Dalam pengembangannya, Sistem Registri Nasional dirancang sebagai rumah tumbuh yang dapat terus sesuai dengan dinamika prasyarat dan kebutuhan dari negoisasi iklim yang masih berjalan. </p>
          </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pertanyaan yang Sering Diajukan</h6>
              <!-- <a href="<?=base_url()?>index.php/Kegiatan/tambah" class="btn btn-success">Tambah Data Kegiatan</a> -->
            </div>
            <div class="card-body">
              <h3>Bagaimana Sistem Registri Bekerja</h3>
              <p align="justify">Sistem Registri Nasional bekerja dengan sinergi dan pelibatan aktif dari masing-masing aktor pelaksana kegiatan pengendalian perubahan iklim dalam menyediakan dan melakukan pengisian data terkait profil dari masing-masing kegiatan maupun mobilisasi dukungan yang dimiliki ke dalam Sistem Registri Nasional. Setiap pelaksana, selanjutnya disebut penanggung jawab kegiatan secara sukarela didorong untuk mendaftarkan kegiatannya dalam Sistem Registri Nasional. Hal serupa juga dilakukan oleh para mitra pembangunan yang memiliki kapasitas mobilisasi dukungan seperti alih teknologi, pengembangan kapasitas dan pendanaan dalam aksi pengendalian perubahan iklim di Indonesia. Integrasi dari basis data dan proses analisa yang meliputi penelusuran, validasi dan verifikasi data dan atau informasi tersebut menghasilkan indikator kinerja yang dapat menunjukkan level capaian dari komitmen penurunan emisi gas rumah kaca Indonesia.  </p>
          </div>
        </div>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pertanyaan yang Sering Diajukan</h6>
              <!-- <a href="<?=base_url()?>index.php/Kegiatan/tambah" class="btn btn-success">Tambah Data Kegiatan</a> -->
            </div>
            <div class="card-body">
              <h3>Apakah Manfaat dari Sistem Registri Nasional</h3>
              <p align="justify">Kompleksitas upaya penanganan perubahan iklim memerlukan pendekatan aksi pengendalian perubahan iklim yang terukur. Dalam tataran ini kebutuhan basis data terkait aksi pengendalian perubahan iklim menjadi penting. Sistem Registri Nasional yang menjadi wadah dalam pengelolaan data dan informasi terkait aksi pengendalian perubahan iklim di Indonesia didesain untuk dapat memunculkan kondisi kinerja setiap sektor di lapangan dan status pencapaian target penurunan emisi sesuai yang dikomitmenkan. Dengan demikian, SRN memungkinkan penggunanya untuk memantau kemajuan dari pencapaian target penurunan emisi sesuai dengan komitmen yang diniatkan. SRN dirancang untuk memungkinkan inisiatif lokal dapat terekognisi sebagai bagian dari aksi nasional pengendalian perubahan iklim. Dengan ini komitmen penurunan emisi tidak hanya berdasarkan dari data aksi iklim pemerintah namun secara komprehensif telah mencakup upaya-upaya lokal yang diinisiasi secara mandiri oleh masyarakat. </p>
          </div>
        </div>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pertanyaan yang Sering Diajukan</h6>
              <!-- <a href="<?=base_url()?>index.php/Kegiatan/tambah" class="btn btn-success">Tambah Data Kegiatan</a> -->
            </div>
            <div class="card-body">
              <h3>Siapakah yang dapat memanfaatkan sistem registri nasional</h3>
              <p align="justify">Sistem Registri Nasional terbuka untuk para pelaksana kegiatan pengendalian perubahan iklim baik dari kelompok masyarakat seperti kelompok petani ramah iklim, Lembaga Swadaya Masyarakat (LSM) pendamping masyarakat, aparatur pemerintah baik tingkat nasional maupun provinsi dan kabupaten/kota hingga sektor swasta yang ingin mendaftarkan kegiatan maupun dukungan pengendalian perubahan iklim yang diinisiasinya. Sistem Registri Nasional memberikan akses terbuka bagi publik sebagai bagian dari prinsip akuntabilitas dan transparansi data. Dengan ini publik dapat turut memantau capaian kinerja aksi perubahan iklim sesuai dengan target pemenuhan komitmen penurunan emisi gas rumah kaca baik oleh pemerintah tingkat nasional maupun daerah. Selain itu pengguna dapat membandingkan profil dari aksi iklim per sektor dan profil emisi per provinsi sehingga akan meningkatkan pemahaman akan kondisi lingkungan di Indonesia. SRN merupakan platform komunikasi data aksi pengendalian perubahan iklim di Indonesia.  </p>
          </div>
        </div>    
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pertanyaan yang Sering Diajukan</h6>
              <!-- <a href="<?=base_url()?>index.php/Kegiatan/tambah" class="btn btn-success">Tambah Data Kegiatan</a> -->
            </div>
            <div class="card-body">
              <h3>Apakah Produk dari sistem Registri Nasional</h3>
              <p align="justify">Melalui serangkaian proses pengecekan, validasi dan verifikasi data dan informasi yang dilakukan sesuai dengan metode yang ditentukan maka akan dihasilkan data penurunan emisi yang dapat menggambarkan target capaian aksi pengendalian perubahan iklim secara nasional dan sub-nasional. Seluruh aksi yang dilaporkan dalam Sistem Registri Nasional akan dikelompokkan sesuai dengan status Registri dari masing-masing aksi terlapor. Dengan demikian setiap aksi dapat diketahui status pelaksanaan dan pemenuhan target penurunan emisinya. Pada tahap pengembangan, diidentifikasi tiga kategori status aksi yaitu kegiatan terdaftar, kegiatan teregist er dan kegiatan terverifikasi.  </p>
          </div>
        </div>    
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pertanyaan yang Sering Diajukan</h6>
              <!-- <a href="<?=base_url()?>index.php/Kegiatan/tambah" class="btn btn-success">Tambah Data Kegiatan</a> -->
            </div>
            <div class="card-body">
              <h3>Bagaimana kriteria dari kegiatan terdaftar, kegiatan teregister dan terverifikasi</h3>
              <p align="justify">SRN mengaplikasikasikan pendekatan pemeriksaan berjenjang pada aliran data yang masuk ke dalam SRN. Dengan pendekatan ini, digunakan tiga kriteria kegiatan yaitu kegiatan terdaftar, kegiatan teregister dan kegiatan terverifikasi. Kegiatan terdaftar adalah kegiatan yang telah masuk dalam SRN dan telah mendapatkan Nomor Akun. Nomor Akun merupakan elemen identitas atau penanda yang melekat pada suatu kegiatan yang didaftarkan ke dalam SRN. Nomor Akun diberikan setelah data umum tervalidasi oleh Tim Sekretariat SRN. Kegiatan teregister adalah kegiatan yang telah masuk ke dalam SRN dan menyelesaikan proses pengisian data teknis (langkah III). Setelah data divalidasi kelengkapan dan kebenarannya, Tim Sekretariat SRN akan memberikan Nomor Registri pada aksi terdaftar. Dengan atribut Nomor Registri ini, aksi tersebut menjadi kegiatan teregister. Kegiatan terverifikasi adalah kegiatan teregister yang telah diperiksa capaian penurunan emisi yang dilaporkan dan atau penggunaan sumber daya untuk penurunan emisi yang dilaporkan. Kegiatan terverifikasi merupakan kegiatan yang telah menyelesaikan langkah IV. Dengan ini, Tim Sekretariat SRN akan memberikan apresiasi berupa Nomor Verifikasi </p>
          </div>
        </div>    
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pertanyaan yang Sering Diajukan</h6>
              <!-- <a href="<?=base_url()?>index.php/Kegiatan/tambah" class="btn btn-success">Tambah Data Kegiatan</a> -->
            </div>
            <div class="card-body">
              <h3>Apa yang dimaksud dengan Nomor Pendaftaran?</h3>
              <p align="justify">Nomer Pendaftaran adalah nomor yang diberikan sebagai bentuk apresiasi dan alat identifikasi setelah penanggung jawab berhasil melalui tahap pendaftaran dalam SRN (isian dari formulir pendaftaran telah divalidasi oleh admin DJPPI).</p>

              <p align="center">Komponen: ZZZ-BBB-CCCC-DDDD</p>
              <p align="justify">Variabel ZZZ menunjukkan jenis lembaga yang dipilih penanggung jawab saat mengisi formulir pendaftaran.
              Variabel ZZZ akan menunjukkan (1) 001 untuk jenis Kementerian/Lembaga, (2) 002 untuk Pemerintah Provinsi, (3) 003 untuk Pemerintah Desa , (4) 004 untuk Lembaga Swadaya Masyarakat (LSM), (5) 005 untuk Dunia Usaha, (6) 006 untuk Masyarakat Umum/Lembaga Adat, (7) 007 untuk Lembaga Mitra, (8) 008 untuk Perguruan Tinggi, (10) 010 untuk Pemerintah Kota, (11) 011 untuk Pmerintah Kabupaten, dan (12) 012 untuk Lain-lain.
              Variabel BBB menunjukkan bulan dimana penanggung jawab divalidasi pendaftarannya dalam bentuk angka romawi. Sesuai urutan bulan, BBB akan menunjukkan angka romawi I untuk Januari, hingga XII untuk Desember.
              Variabel CCCC menunjukkan tahun dimana penanggung jawab divalidasi pendaftarannya. Angka yang keluar akan menyesuaikan dengan tahun tersebut.
              Variabel DDDD menunjukkan nomor urut pendaftaran dari penanggung jawab. Variabel DDDD akan menunjukkan angka 0001 untuk pendaftar nomor urut 1 dan 9999 untuk pendaftar nomor urut 9999. </p>
          </div>
        </div>    
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pertanyaan yang Sering Diajukan</h6>
              <!-- <a href="<?=base_url()?>index.php/Kegiatan/tambah" class="btn btn-success">Tambah Data Kegiatan</a> -->
            </div>
            <div class="card-body">
              <h3>Apa yang dimaksud dengan Nomor Akun?</h3>
              <p align="justify">Nomor Akun adalah nomor yang melekat pada satu kegiatan pada penanggung jawab kegiatan dan akan diberikan sebagai apresiasi dan alat identifikasi kegiatan setelah penanggung jawab divalidasi isian data umum kegiatan meraka (langkah 2).</p>

              <p align="center">Komponen: XY-AA-BBB-CCCC-DDDD</p>
              <p align="justify">Variabel X menunjukkan apakah kegiatan penanggung jawab mengandung jenis kegiatan “Aksi”. Jika iya, maka X akan menunjukkan angka 1; jika tidak, maka X akan menunjukkan angka 0
              Variabel Y menunjukkan apakah kegiatan penanggung jawab mengandung jenis kegiatan “Sumber Daya”. Jika iya, maka Y akan menunjukkan angka 1; jika tidak, maka Y akan menunjukkan angka 0.
              Variabel AA menunjukkan jenis skema/pelaku yang dipilih penanggung jawab dalam kegiatannya. Variabel AA akan menunjukkan (1) RE untuk skema/pelaku REDD+, (2) RA untuk Pemerintah (Kementerian) dan Provinsi, (3) PR untuk Dunia Usaha, (4) IN untuk Inisiatif Lain, (5) PK untuk Proklim, dan (6) API untuk API.
              Variabel BBB menunjukkan bulan dimana kegiatan penanggung jawab didaftarkan dalam bentuk angka romawi. Sesuai urutan bulan, BBB akan menunjukkan angka romawi I untuk Januari, hingga XII untuk Desember.
              Variabel CCCC menunjukkan tahun dimana kegiatan penanggung jawab didaftarkan. Angka yang keluar akan menyesuaikan dengan tahun tersebut.
              Variabel DDDD menunjukkan nomor urut pendaftaran dari kegiatan tersebut. Variabel DDDD akan menunjukkan angka 0001 untuk pendaftar nomor urut 1 dan 9999 untuk pendaftar nomor urut 9999.
 </p>
          </div>
        </div>
          <?php $this->load->view('template/footer'); ?>

            <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
            


<script>
        jQuery(document).ready(function($){
            $('.delete-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: 'Alert',
                        text: 'Hapus Data?',
                        html: true,
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>

    