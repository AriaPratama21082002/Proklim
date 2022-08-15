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

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h2>Tambah data kegiatan</h2>
          <div class="col-md-12 card mb-4 py-3 border-bottom-warning">
            <form action="<?=base_url()?>index.php/Kegiatan/insertdata" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label"> Nama Kegiatan </label>
              <input type="text" name="judul_kegiatan" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Tanggal </label>
              <input type="date" class="form-control"  style="background-color: white;" name="tanggal" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Durasi </label>
              <input type="text" class="form-control"  style="background-color: white;" name="durasi" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Jenis Kegiatan : </label>
                    <input type="checkbox" id="aksi" name="jenis_kegiatan" value="Aksi">
                <label for="vehicle1"> Aksi</label>
                <input type="checkbox" id="sumberdaya" name="jenis_kegiatan" value="Sumber Daya">
                <label for="vehicle2"> Sumber Daya</label><br>
            </div>
            <div class="form-group">
              <label class="control-label"> Tujuan Umum </label>
              <input type="text" class="form-control"  style="background-color: white;" name="tujuan_umum" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Tujuan Khusus </label>
              <input type="text" class="form-control"  style="background-color: white;" name="tujuan_khusus" required>
            </div>
            <hr>
           
           
            <div class="row">

            <div class="col-lg-6">
               <h1 class="text-gray">Informasi Skema</h1>
              <div class="form-group">
                  <label class="control-label"> Jenis Aksi </label>
                  <select class="form-control" name="aksi" required>
                      <option selected>---Pilih Jenis Aksi---</option>
                      <option value="mitigasi">Mitigasi</option>
                      <option value="adaptasi">Adaptasi</option>
                      <option value="adaptasi">Joint Adaptation Mitigation</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> Jenis Sektor </label>
                  <select class="form-control" name="sektor" required>
                      <option selected>---Pilih Jenis Sektor---</option>
                      <option value="Energi">Energi</option>
                      <option value="Pertanian">Pertanian</option>
                      <option value="Forestry and orther Land Use (FOLU)">Forestry and orther Land Use (FOLU)</option>
                      <option value="Proses Industri dan Penggunaan Produk(IPPU)">Proses Industri dan Penggunaan Produk(IPPU)</option>
                      <option value="Pengelolahan Limbah">Pengelolahan Limbah</option>
                      <hr>
                      <option value="ketahanan pangan">Ketahanan Pangan</option>
                      <option value="kemandirian energy">Kemandirian Energy</option>
                      <option value="ketahanan air">Ketahanan Air</option>
                      <option value="Kesehatan">Kesehatan</option>
                      <option value="Pemukiman Perkotaan dan Pendesaan">Pemukiman Perkotaan dan Pendesaan</option>
                      <option value="Infrastruktur">Infrastruktur</option>
                      <option value="Pesisir dan Pulau-Pulau Kecil">Pesisir dan Pulau-Pulau Kecil</option>
                      <option value="Ketahahan Ekosistem">Ketahahan Ekosistem</option>
                      <option value="Multi Bidang/Sektor">Multi Bidang/Sektor</option>

                      <option value="Agriculture and Forestry and Land Use(AFOLU)">Agriculture and Forestry and Land Use(AFOLU)</option>

                      <option value="Limbah">Limbah</option>
                      
                </select>
              </div>
              <div class="form-group">
                  <label class="control-label"> Jenis Skema </label>
                  <select class="form-control" name="skema" required>
                      <option selected>---Pilih Jenis Aksi---</option>
                      <option value="Mitigasi Energi">Mitigasi Energi</option>
                      <option value="Mitigasi Pertanian">Mitigasi Pertanian</option>
                      <option value="Redd++">Redd++</option>
                      <option value="Mitigasi Sektor Kehutanan">Mitigasi Sektor Kehutanan</option>
                      <option value="Mitigasi IPPU">Mitigasi IPPU</option>
                      <option value="Mitigasi Pengelolahan Limbah">Mitigasi Pengelolahan Limbah</option>
                      <option value="Adaptasi Perubahan Iklim(API)">Adaptasi Perubahan Iklim(API)</option>
                      <option value="Program Kampung Iklim(PROKLIM)">Program Kampung Iklim(PROKLIM)</option>
                      
                      
                </select>
              </div>

              <div class="form-group">
                  <label class="control-label"> Pelaku </label>
                  <select class="form-control" name="pelaku" required>
                      <option selected>---Pilih Jenis Pelaku---</option>
                      <option value="Pemerintah Pusat">Pemerintah Pusat</option>
                      <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                      <option value="Dunia Usaha">Dunia Usaha</option>
                      <option value="Intitusi/Lembag/Insiatif Lainnya">Intitusi/Lembag/Insiatif Lainnya</option>
                      
                </select>
              </div>
              <div class="form-group">
                  <label class="control-label"> Keterkaitan Program </label>
                  <select class="form-control" name="keterkaitan_program" required>
                      <option selected>---Pilih Jenis Program---</option>
                      <option value="Proper">Proper</option>
                      <option value="Green Building">Green Building</option>
                      <option value="Social Forestry">Social Forestry</option>
                      <option value="Adipura">Adipura</option>
                      <option value="Efisiensi Energy">Efisiensi Energy</option>
                      <option value="Pembangkit EBT-Panas Bumi">Pembangkit EBT-Panas Bumi</option>
                      <option value="Pembangkit EBT-PLTM">Pembangkit EBT-PLTM</option>
                      <option value="Pembangkit EBT-PLTMH">Pembangkit EBT-PLTMH</option>
                      <option value="Pembangkit EBT-Biomassa">Pembangkit EBT-Biomassa</option>
                      <option value="Pembangkit EBT-PLTH Hybird">Pembangkit EBT-PLTH Hybird</option>
                      <option value="Bioenergi">Bioenergi</option>
                      <option value="Jaringan Gas">Jaringan Gas</option>
                      <option value="Reklamasi Pasca Tambang">Reklamasi Pasca Tambang</option>
                      <option value="KetanagaListrikan">KetanagaListrikan</option>
                      <option value="Konversi Metan ke LPG">Konversi Metan ke LPG</option>
                      <option value="Pembangkit EBT-PLTS">Pembangkit EBT-PLTS</option>
                      <option value="Pembangkit EBT-PLT Bayu">Pembangkit EBT-PLT Bayu</option>
                      
                      
                </select>
              </div>
          </div>
            <div class="col-lg-6">
           <h1 class="text-gray">Sumber Daya</h1>
             <div class="form-group">
                  <label class="control-label"> Alih Tekhnologi </label>
                  <select class="form-control" name="alih_tekhnologi" required>
                      <option selected>---Pilih Jenis Alih Teknologi---</option>
                      <option value="Membutuhkan dan sudah memiliki">Membutuhkan dan sudah memiliki</option>
                      <option value="Membutuhkan dan belum memiliki">Membutuhkan dan belum memiliki</option>
                      <option value="Tidak Membutuhkan">Tidak Membutuhkan</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> Peningkatan Kapasitas </label>
                  <select class="form-control" name="peningkatan_kapasitas" required>
                      <option selected>---Pilih Jenis Peningkatan Kapasitas---</option>
                        <option value="Membutuhkan dan sudah memiliki">Membutuhkan dan sudah memiliki</option>
                      <option value="Membutuhkan dan belum memiliki">Membutuhkan dan belum memiliki</option>
                      <option value="Tidak Membutuhkan">Tidak Membutuhkan</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label">  Status Pendanaan </label>
                  <select class="form-control" name="status_pendanaan" required>
                      <option selected>---Pilih Jenis Status Pendanaan---</option>
                      <option value="mitigasi">Sudah Ada</option>
                      <option value="adaptasi">Belum Ada</option>
                      <option value="adaptasi">Partial(Sumber dana yang belum cukup)</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> Tenaga Ahli </label>
                  <select class="form-control" name="tenaga_ahli" required>
                      <option selected>---Pilih Jenis Tenaga Ahli---</option>
                      <option value="Membutuhkan dan sudah memiliki">Membutuhkan dan sudah memiliki</option>
                      <option value="Membutuhkan dan belum memiliki">Membutuhkan dan belum memiliki</option>
                      <option value="Tidak Membutuhkan">Tidak Membutuhkan</option>
                </select>
              </div>
          </div>
        <hr>

          <div class="form-group">
            <hr>
          <h2 align="center">Tambah data Data Dasar</h2>
          <div class="col-md-12 card mb-4 py-3 border-bottom-warning">
            <form action="<?=base_url()?>index.php/Kegiatan/insertdata" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label"> Luas Lokasi Proklim </label>
              <input type="text" name="luas_lokasi_proklim" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Jumlah Kepala Keluarga </label>
              <input type="text" class="form-control"  style="background-color: white;" name="jumlah_kepala_keluarga" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Jumlah Penduduk </label>
              <input type="text" class="form-control"  style="background-color: white;" name="jumlah_penduduk" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Ketinggian dari permukaan laut </label>
              <input type="text" class="form-control"  style="background-color: white;" name="ketinggian_dari_permukaan_laut" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Topografi Daerah : </label>
                
                <input type="checkbox" id="DataranRendah(<400mdpl)" name="topografi_daerah" value="DataranRendah(<400mdpl">
                <label for="vehicle1"> Dataran Rendah (<400 mdpl)</label>

                <input type="checkbox" id="DataranSedang(400-700mdpl)" name="topografi_daerah" value="DataranSedang(400-700mdpl)">
                <label for="vehicle2"> Dataran Sedang (400-700 mdpl)</label>

                <input type="checkbox" id="DataranTinggi(>700mdpl)" name="topografi_daerah" value="DataranTinggi(>700mdpl)">
                <label for="vehicle2"> Dataran Tinggi (>700 mdpl)</label>


                <br>
            </div>
            <div class="form-group">
              <label class="control-label"> Tipologi Lokasi</label>
                <form method="POST">
                  <select id="tipologi_lokasi" name="tipologi_lokasi">
                    <option >-----> pilih disini <----</option>
                    <option value="Pesisir">Pesisir</option>
                    <option value="Perkotaan">Perkotaan</option>
                    <option value="Perdesaan">Perdesaan</option>
                    <option value="tepihutan">Tepi Hutan</option>
                   </select>
                  </form>
                  <br>
                  <label class="control-label"> -----> Apa bila tidak ada Option di atas isi di bawah ini <------</label>
                  <input type="text" class="form-control"  style="background-color: white;" name="tipologi_lokasi" required>
            </div>

             <div class="form-group">
              <label class="control-label"> Ciri Khas Lokasi :</label>
                <form method="POST">
                  <select id="ciri_khas_lokasi" name="ciri_khas_lokasi">
                    <option >-----> pilih disini <----</option>
                    <option value="pemukimanpadat">Pemukiman Padat</option>
                    <option value="lumbungpangan">Lumbung Pangan</option>
                    <option value="kampungnelayan">Kampung Nelayan</option>
                    <option value="desawisata">Desa Wisata</option>
                    <option value="desaenergi">Desa Energi</option>
                    <option value="desaedukasi">Desa Edukasi</option>
                   </select>
                  </form>
                  <br>
                  <label class="control-label"> -----> Apa bila tidak ada Option di atas isi di bawah ini <------</label>
                  <input type="text" class="form-control"  style="background-color: white;" name="ciri_khas_lokasi" required>
            </div>
            <hr>
           
           
            <div class="row">

            <div class="col-lg-6">
               <h1 class="text-gray" align="center">Tiga Penggunaan Lahan Dominan</h1>
              <div class="form-group">
                  <label class="control-label">a. Jenis Lahan </label>
                  <select class="form-control" name="tiga_penggunaan_lahan" required>
                      <option selected>---Pilih Jenis Lahan---</option>
                      <option value="pertanian">Pertanian</option>
                      <option value="perkebunan">Perkebunan</option>
                      <option value="hutan">Hutan</option>
                      <option value="permukiman">permukiman</option>
                      <option value="industri">Industri</option>
                      <option value="perikanan">Perikanan</option>
                </select>
              </div>
               <label class="control-label"> -----> Persentase <------</label>
                <div class="input-group-append">
                  <input type="text" class="form-control"  style="background-color: white;" name="persentase" required>
                  <span class="input-group-text">%</span>
                </div>
                  <br>
            <div class="form-group">
                  <label class="control-label">b. Jenis Lahan  </label>
                  <select class="form-control" name="tiga_penggunaan_lahan1" required>
                      <option selected>---Pilih Jenis Lahan---</option>
                      <option value="pertanian">Pertanian</option>
                      <option value="perkebunan">Perkebunan</option>
                      <option value="hutan">Hutan</option>
                      <option value="permukiman">permukiman</option>
                      <option value="industri">Industri</option>
                      <option value="perikanan">Perikanan</option>
                </select>
                <br>
                  <label class="control-label"> -----> Persentase <------</label>
                    <div class="input-group-append">
                  <input type="text" class="form-control"  style="background-color: white;" name="persentase1" required>
                   <span class="input-group-text">%</span>
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label">c. Jenis Lahan </label>
                  <select class="form-control" name="tiga_penggunaan_lahan2" required>
                      <option selected>---Pilih Jenis Lahan---</option>
                      <option value="pertanian">Pertanian</option>
                      <option value="perkebunan">Perkebunan</option>
                      <option value="hutan">Hutan</option>
                      <option value="permukiman">permukiman</option>
                      <option value="industri">Industri</option>
                      <option value="perikanan">Perikanan</option>
                </select>
                <br>
                <label class="control-label"> -----> Persentase <------</label>
                  <div class="input-group-append">
                  <input type="text" class="form-control"  style="background-color: white;" name="persentase2" required>
                   <span class="input-group-text">%</span>
                </div>
              </div>
          </div>
            <div class="col-lg-6">
           <h1 class="text-gray" align="center">Tiga Sumber Penghasilan Utama Penduduk</h1>
             <div class="form-group">
                  <label class="control-label"> a. Sumber Penghasilan Utama </label>
                  <select class="form-control" name="tiga_sumber_penghasilan_utama" required>
                      <option selected>---Pilih Jenis Sumber Penghasilan Utama---</option>
                      <option value="Perikanan">Perikanan</option>
                      <option value="Peternakan">Peternakan</option>
                      <option value="Kehutanan">Kehutanan</option>
                      <option value="Buruh Pabrik">Buruh Pabrik</option>
                      <option value="Tambang/Galian">Tambang/Galian</option>
                      <option value="Pedagang">Pedagang</option>
                      <option value="Pegawai">Pegawai</option>
                      <option value="Industri">Industri</option>
                      <option value="Wirausaha">Wirausaha</option>
                      
                </select>
                <br>
                <label class="control-label"> -----> Persentase <------</label>
                  <div class="input-group-append">
                  <input type="text" class="form-control"  style="background-color: white;" name="persentase3" required>
                  <span class="input-group-text">%</span>
                </div>
              </div>
            <div class="form-group">
                  <label class="control-label"> b. Sumber Penghasilan Utama </label>
                  <select class="form-control" name="tiga_sumber_penghasilan_utama1" required>
                      <option selected>---Pilih Jenis Sumber Penghasilan utama---</option>
                      <option value="Perikanan">Perikanan</option>
                      <option value="Peternakan">Peternakan</option>
                      <option value="Kehutanan">Kehutanan</option>
                      <option value="Buruh Pabrik">Buruh Pabrik</option>
                      <option value="Tambang/Galian">Tambang/Galian</option>
                      <option value="Pedagang">Pedagang</option>
                      <option value="Pegawai">Pegawai</option>
                      <option value="Industri">Industri</option>
                      <option value="Wirausaha">Wirausaha</option>
                      
                </select>
                <br>
                <label class="control-label"> -----> Persentase <------</label>
                  <div class="input-group-append">
                  <input type="text" class="form-control"  style="background-color: white;" name="persentase4" required>
                  <span class="input-group-text">%</span>
                </div>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> c. Sumber Penghasilan Utama</label>
                  <select class="form-control" name="tiga_sumber_penghasilan_utama2" required>
                      <option selected>---Pilih Jenis Sumber Penghasilan utama---</option>
                      <option value="Perikanan">Perikanan</option>
                      <option value="Peternakan">Peternakan</option>
                      <option value="Kehutanan">Kehutanan</option>
                      <option value="Buruh Pabrik">Buruh Pabrik</option>
                      <option value="Tambang/Galian">Tambang/Galian</option>
                      <option value="Pedagang">Pedagang</option>
                      <option value="Pegawai">Pegawai</option>
                      <option value="Industri">Industri</option>
                      <option value="Wirausaha">Wirausaha</option>
                      
                </select>
                <br>
                <label class="control-label"> -----> Persentase <------</label>
                  <div class="input-group-append">
                  <input type="text" class="form-control"  style="background-color: white;" name="persentase5" required>
                  <span class="input-group-text">%</span>
                </div>
                </select>
              </div>
          </div>

        <hr>
        <div class="form-group">
          <hr>
          <h2 align="center">Tambah data Adaptasi</h2>
          <div class="col-md-12 card mb-4 py-3 border-bottom-warning">
            <form action="<?=base_url()?>index.php/Kegiatan/insertdata" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label"> Komponen </label>
              <input type="text" name="komponen" class="form-control" required>
            </div>
            <div class="form-group">
              <div class="form-group">
                  <label class="control-label"> Kegiatan Jenis Adaptasi </label>
                  <select class="form-control" name="pelaku" required>
                      <option selected>---Pilih Jenis Adaptasi---</option>
                      <option value="Embung / DAM / Waduk">Embung / DAM / Waduk</option>
                      <option value="Penampungan air hujan (PAH) / Instalasi Penampungan Air Hujan (IPAH) untuk kebutuhan air konsumsi *Total volume minimal 1000 liter / KK ">Penampungan air hujan (PAH) / Instalasi Penampungan Air Hujan (IPAH) untuk kebutuhan air konsumsi *Total volume minimal 1000 liter / KK</option>
                      <option value="Lubang Penampung Air *Misalnya: kolam, sumur tadah hujan">Lubang Penampung Air *Misalnya: kolam, sumur tadah hujan</option>
                      <option value="Intitusi/Lembag/Insiatif Lainnya">Intitusi/Lembag/Insiatif Lainnya</option>

                      <option value="Pembuatan struktur pelindung mata air">"Pembuatan struktur pelindung mata air"</option>
                      <option value="Penanaman vegetasi di sekitar lokasi mata air">Penanaman vegetasi di sekitar lokasi mata air</option>
                      <option value="Pembuatan aturan lokal yang menjamin mata air tetap hidup">Pembuatan aturan lokal yang menjamin mata air tetap hidup</option>
                      <option value="Penggunaan kembali air yang sudah dipakai untuk keperluan tertentu">Penggunaan kembali air yang sudah dipakai untuk keperluan tertentu</option>

                      <option value="Biopori">Biopori</option>
                      <option value="Sumur resapan ">Sumur resapan</option>
                      <option value="Rorak / jogangan">Rorak / jogangan</option>
                      <option value="Pembatasan penggunaan air">Pembatasan penggunaan air</option>

                      <option value='Bendungan / waduk banjir / cekdam / dam penahan / dam pengendali'>Bendungan / waduk banjir / cekdam / dam penahan / dam pengendali</option>
                      <option value="Penampungan air hujan (PAH) / Instalasi Penampungan Air Hujan (IPAH) untuk kebutuhan air konsumsi *Total volume minimal 1000 liter / KK ">Penampungan air hujan (PAH) / Instalasi Penampungan Air Hujan (IPAH) untuk kebutuhan air konsumsi *Total volume minimal 1000 liter / KK</option>
                      <option value="Lubang Penampung Air *Misalnya: kolam, sumur tadah hujan">Lubang Penampung Air *Misalnya: kolam, sumur tadah hujan</option>
                      <option value="Intitusi/Lembag/Insiatif Lainnya">Intitusi/Lembag/Insiatif Lainnya</option>

                      <option value="Embung / DAM / Waduk">Embung / DAM / Waduk</option>
                      <option value="Penampungan air hujan (PAH) / Instalasi Penampungan Air Hujan (IPAH) untuk kebutuhan air konsumsi *Total volume minimal 1000 liter / KK ">Penampungan air hujan (PAH) / Instalasi Penampungan Air Hujan (IPAH) untuk kebutuhan air konsumsi *Total volume minimal 1000 liter / KK</option>
                      <option value="Lubang Penampung Air *Misalnya: kolam, sumur tadah hujan">Lubang Penampung Air *Misalnya: kolam, sumur tadah hujan</option>
                      <option value="Intitusi/Lembag/Insiatif Lainnya">Intitusi/Lembag/Insiatif Lainnya</option>
                      
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label"> Satuan </label>
              <input type="text" class="form-control"  style="background-color: white;" name="satuan" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Jumlah </label>
              <input type="text" class="form-control"  style="background-color: white;" name="jumlah" required>
            </div>
            
          </div>
          
       <hr>

        <div class="container-fluid">

          <!-- Page Heading -->
          <h2 align="center">Tambah data Mitigasi</h2>
          <div class="col-md-12 card mb-4 py-3 border-bottom-warning">
            <form action="<?=base_url()?>index.php/Kegiatan/insertdata" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label"> Nama Kegiatan </label>
              <input type="text" name="judul_kegiatan" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Tanggal </label>
              <input type="date" class="form-control"  style="background-color: white;" name="tanggal" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Durasi </label>
              <input type="text" class="form-control"  style="background-color: white;" name="durasi" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Jenis Kegiatan : </label>
                    <input type="checkbox" id="aksi" name="jenis_kegiatan" value="Aksi">
                <label for="vehicle1"> Aksi</label>
                <input type="checkbox" id="sumberdaya" name="jenis_kegiatan" value="Sumber Daya">
                <label for="vehicle2"> Sumber Daya</label><br>
            </div>
            <div class="form-group">
              <label class="control-label"> Tujuan Umum </label>
              <input type="text" class="form-control"  style="background-color: white;" name="tujuan_umum" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Tujuan Khusus </label>
              <input type="text" class="form-control"  style="background-color: white;" name="tujuan_khusus" required>
            </div>
            <hr>
           
           
            <div class="row">

            <div class="col-lg-6">
               <h1 class="text-gray">Informasi Skema</h1>
              <div class="form-group">
                  <label class="control-label"> Jenis Aksi </label>
                  <select class="form-control" name="aksi" required>
                      <option selected>---Pilih Jenis Aksi---</option>
                      <option value="mitigasi">Mitigasi</option>
                      <option value="adaptasi">Adaptasi</option>
                      <option value="adaptasi">Joint Adaptation Mitigation</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> Jenis Sektor </label>
                  <select class="form-control" name="sektor" required>
                      <option selected>---Pilih Jenis Sektor---</option>
                      <option value="Energi">Energi</option>
                      <option value="Pertanian">Pertanian</option>
                      <option value="Forestry and orther Land Use (FOLU)">Forestry and orther Land Use (FOLU)</option>
                      <option value="Proses Industri dan Penggunaan Produk(IPPU)">Proses Industri dan Penggunaan Produk(IPPU)</option>
                      <option value="Pengelolahan Limbah">Pengelolahan Limbah</option>
                      <hr>
                      <option value="ketahanan pangan">Ketahanan Pangan</option>
                      <option value="kemandirian energy">Kemandirian Energy</option>
                      <option value="ketahanan air">Ketahanan Air</option>
                      <option value="Kesehatan">Kesehatan</option>
                      <option value="Pemukiman Perkotaan dan Pendesaan">Pemukiman Perkotaan dan Pendesaan</option>
                      <option value="Infrastruktur">Infrastruktur</option>
                      <option value="Pesisir dan Pulau-Pulau Kecil">Pesisir dan Pulau-Pulau Kecil</option>
                      <option value="Ketahahan Ekosistem">Ketahahan Ekosistem</option>
                      <option value="Multi Bidang/Sektor">Multi Bidang/Sektor</option>

                      <option value="Agriculture and Forestry and Land Use(AFOLU)">Agriculture and Forestry and Land Use(AFOLU)</option>

                      <option value="Limbah">Limbah</option>
                      
                </select>
              </div>
              <div class="form-group">
                  <label class="control-label"> Jenis Skema </label>
                  <select class="form-control" name="skema" required>
                      <option selected>---Pilih Jenis Aksi---</option>
                      <option value="Mitigasi Energi">Mitigasi Energi</option>
                      <option value="Mitigasi Pertanian">Mitigasi Pertanian</option>
                      <option value="Redd++">Redd++</option>
                      <option value="Mitigasi Sektor Kehutanan">Mitigasi Sektor Kehutanan</option>
                      <option value="Mitigasi IPPU">Mitigasi IPPU</option>
                      <option value="Mitigasi Pengelolahan Limbah">Mitigasi Pengelolahan Limbah</option>
                      <option value="Adaptasi Perubahan Iklim(API)">Adaptasi Perubahan Iklim(API)</option>
                      <option value="Program Kampung Iklim(PROKLIM)">Program Kampung Iklim(PROKLIM)</option>
                      
                      
                </select>
              </div>

              <div class="form-group">
                  <label class="control-label"> Pelaku </label>
                  <select class="form-control" name="pelaku" required>
                      <option selected>---Pilih Jenis Pelaku---</option>
                      <option value="Pemerintah Pusat">Pemerintah Pusat</option>
                      <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                      <option value="Dunia Usaha">Dunia Usaha</option>
                      <option value="Intitusi/Lembag/Insiatif Lainnya">Intitusi/Lembag/Insiatif Lainnya</option>
                      
                </select>
              </div>
              <div class="form-group">
                  <label class="control-label"> Keterkaitan Program </label>
                  <select class="form-control" name="keterkaitan_program" required>
                      <option selected>---Pilih Jenis Program---</option>
                      <option value="Proper">Proper</option>
                      <option value="Green Building">Green Building</option>
                      <option value="Social Forestry">Social Forestry</option>
                      <option value="Adipura">Adipura</option>
                      <option value="Efisiensi Energy">Efisiensi Energy</option>
                      <option value="Pembangkit EBT-Panas Bumi">Pembangkit EBT-Panas Bumi</option>
                      <option value="Pembangkit EBT-PLTM">Pembangkit EBT-PLTM</option>
                      <option value="Pembangkit EBT-PLTMH">Pembangkit EBT-PLTMH</option>
                      <option value="Pembangkit EBT-Biomassa">Pembangkit EBT-Biomassa</option>
                      <option value="Pembangkit EBT-PLTH Hybird">Pembangkit EBT-PLTH Hybird</option>
                      <option value="Bioenergi">Bioenergi</option>
                      <option value="Jaringan Gas">Jaringan Gas</option>
                      <option value="Reklamasi Pasca Tambang">Reklamasi Pasca Tambang</option>
                      <option value="KetanagaListrikan">KetanagaListrikan</option>
                      <option value="Konversi Metan ke LPG">Konversi Metan ke LPG</option>
                      <option value="Pembangkit EBT-PLTS">Pembangkit EBT-PLTS</option>
                      <option value="Pembangkit EBT-PLT Bayu">Pembangkit EBT-PLT Bayu</option>
                      
                      
                </select>
              </div>
          </div>
            <div class="col-lg-6">
           <h1 class="text-gray">Sumber Daya</h1>
             <div class="form-group">
                  <label class="control-label"> Alih Tekhnologi </label>
                  <select class="form-control" name="alih_tekhnologi" required>
                      <option selected>---Pilih Jenis Alih Teknologi---</option>
                      <option value="Membutuhkan dan sudah memiliki">Membutuhkan dan sudah memiliki</option>
                      <option value="Membutuhkan dan belum memiliki">Membutuhkan dan belum memiliki</option>
                      <option value="Tidak Membutuhkan">Tidak Membutuhkan</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> Peningkatan Kapasitas </label>
                  <select class="form-control" name="peningkatan_kapasitas" required>
                      <option selected>---Pilih Jenis Peningkatan Kapasitas---</option>
                        <option value="Membutuhkan dan sudah memiliki">Membutuhkan dan sudah memiliki</option>
                      <option value="Membutuhkan dan belum memiliki">Membutuhkan dan belum memiliki</option>
                      <option value="Tidak Membutuhkan">Tidak Membutuhkan</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label">  Status Pendanaan </label>
                  <select class="form-control" name="status_pendanaan" required>
                      <option selected>---Pilih Jenis Status Pendanaan---</option>
                      <option value="mitigasi">Sudah Ada</option>
                      <option value="adaptasi">Belum Ada</option>
                      <option value="adaptasi">Partial(Sumber dana yang belum cukup)</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> Tenaga Ahli </label>
                  <select class="form-control" name="tenaga_ahli" required>
                      <option selected>---Pilih Jenis Tenaga Ahli---</option>
                      <option value="Membutuhkan dan sudah memiliki">Membutuhkan dan sudah memiliki</option>
                      <option value="Membutuhkan dan belum memiliki">Membutuhkan dan belum memiliki</option>
                      <option value="Tidak Membutuhkan">Tidak Membutuhkan</option>
                </select>
              </div>
          </div>

       <hr>
          <!-- Page Heading -->
          <h2>Tambah data Kelembagaan Masyarakat</h2>
          <div class="col-md-12 card mb-4 py-3 border-bottom-warning">
            <form action="<?=base_url()?>index.php/Kegiatan/insertdata" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label"> Nama Kegiatan </label>
              <input type="text" name="judul_kegiatan" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Tanggal </label>
              <input type="date" class="form-control"  style="background-color: white;" name="tanggal" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Durasi </label>
              <input type="text" class="form-control"  style="background-color: white;" name="durasi" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Jenis Kegiatan : </label>
                    <input type="checkbox" id="aksi" name="jenis_kegiatan" value="Aksi">
                <label for="vehicle1"> Aksi</label>
                <input type="checkbox" id="sumberdaya" name="jenis_kegiatan" value="Sumber Daya">
                <label for="vehicle2"> Sumber Daya</label><br>
            </div>
            <div class="form-group">
              <label class="control-label"> Tujuan Umum </label>
              <input type="text" class="form-control"  style="background-color: white;" name="tujuan_umum" required>
            </div>
            <div class="form-group">
              <label class="control-label"> Tujuan Khusus </label>
              <input type="text" class="form-control"  style="background-color: white;" name="tujuan_khusus" required>
            </div>
            <hr>
           
           
            <div class="row">

            <div class="col-lg-6">
               <h1 class="text-gray">Informasi Skema</h1>
              <div class="form-group">
                  <label class="control-label"> Jenis Aksi </label>
                  <select class="form-control" name="aksi" required>
                      <option selected>---Pilih Jenis Aksi---</option>
                      <option value="mitigasi">Mitigasi</option>
                      <option value="adaptasi">Adaptasi</option>
                      <option value="adaptasi">Joint Adaptation Mitigation</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> Jenis Sektor </label>
                  <select class="form-control" name="sektor" required>
                      <option selected>---Pilih Jenis Sektor---</option>
                      <option value="Energi">Energi</option>
                      <option value="Pertanian">Pertanian</option>
                      <option value="Forestry and orther Land Use (FOLU)">Forestry and orther Land Use (FOLU)</option>
                      <option value="Proses Industri dan Penggunaan Produk(IPPU)">Proses Industri dan Penggunaan Produk(IPPU)</option>
                      <option value="Pengelolahan Limbah">Pengelolahan Limbah</option>
                      <hr>
                      <option value="ketahanan pangan">Ketahanan Pangan</option>
                      <option value="kemandirian energy">Kemandirian Energy</option>
                      <option value="ketahanan air">Ketahanan Air</option>
                      <option value="Kesehatan">Kesehatan</option>
                      <option value="Pemukiman Perkotaan dan Pendesaan">Pemukiman Perkotaan dan Pendesaan</option>
                      <option value="Infrastruktur">Infrastruktur</option>
                      <option value="Pesisir dan Pulau-Pulau Kecil">Pesisir dan Pulau-Pulau Kecil</option>
                      <option value="Ketahahan Ekosistem">Ketahahan Ekosistem</option>
                      <option value="Multi Bidang/Sektor">Multi Bidang/Sektor</option>

                      <option value="Agriculture and Forestry and Land Use(AFOLU)">Agriculture and Forestry and Land Use(AFOLU)</option>

                      <option value="Limbah">Limbah</option>
                      
                </select>
              </div>
              <div class="form-group">
                  <label class="control-label"> Jenis Skema </label>
                  <select class="form-control" name="skema" required>
                      <option selected>---Pilih Jenis Aksi---</option>
                      <option value="Mitigasi Energi">Mitigasi Energi</option>
                      <option value="Mitigasi Pertanian">Mitigasi Pertanian</option>
                      <option value="Redd++">Redd++</option>
                      <option value="Mitigasi Sektor Kehutanan">Mitigasi Sektor Kehutanan</option>
                      <option value="Mitigasi IPPU">Mitigasi IPPU</option>
                      <option value="Mitigasi Pengelolahan Limbah">Mitigasi Pengelolahan Limbah</option>
                      <option value="Adaptasi Perubahan Iklim(API)">Adaptasi Perubahan Iklim(API)</option>
                      <option value="Program Kampung Iklim(PROKLIM)">Program Kampung Iklim(PROKLIM)</option>
                      
                      
                </select>
              </div>

              <div class="form-group">
                  <label class="control-label"> Pelaku </label>
                  <select class="form-control" name="pelaku" required>
                      <option selected>---Pilih Jenis Pelaku---</option>
                      <option value="Pemerintah Pusat">Pemerintah Pusat</option>
                      <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                      <option value="Dunia Usaha">Dunia Usaha</option>
                      <option value="Intitusi/Lembag/Insiatif Lainnya">Intitusi/Lembag/Insiatif Lainnya</option>
                      
                </select>
              </div>
              <div class="form-group">
                  <label class="control-label"> Keterkaitan Program </label>
                  <select class="form-control" name="keterkaitan_program" required>
                      <option selected>---Pilih Jenis Program---</option>
                      <option value="Proper">Proper</option>
                      <option value="Green Building">Green Building</option>
                      <option value="Social Forestry">Social Forestry</option>
                      <option value="Adipura">Adipura</option>
                      <option value="Efisiensi Energy">Efisiensi Energy</option>
                      <option value="Pembangkit EBT-Panas Bumi">Pembangkit EBT-Panas Bumi</option>
                      <option value="Pembangkit EBT-PLTM">Pembangkit EBT-PLTM</option>
                      <option value="Pembangkit EBT-PLTMH">Pembangkit EBT-PLTMH</option>
                      <option value="Pembangkit EBT-Biomassa">Pembangkit EBT-Biomassa</option>
                      <option value="Pembangkit EBT-PLTH Hybird">Pembangkit EBT-PLTH Hybird</option>
                      <option value="Bioenergi">Bioenergi</option>
                      <option value="Jaringan Gas">Jaringan Gas</option>
                      <option value="Reklamasi Pasca Tambang">Reklamasi Pasca Tambang</option>
                      <option value="KetanagaListrikan">KetanagaListrikan</option>
                      <option value="Konversi Metan ke LPG">Konversi Metan ke LPG</option>
                      <option value="Pembangkit EBT-PLTS">Pembangkit EBT-PLTS</option>
                      <option value="Pembangkit EBT-PLT Bayu">Pembangkit EBT-PLT Bayu</option>
                      
                      
                </select>
              </div>
          </div>
            <div class="col-lg-6">
           <h1 class="text-gray">Sumber Daya</h1>
             <div class="form-group">
                  <label class="control-label"> Alih Tekhnologi </label>
                  <select class="form-control" name="alih_tekhnologi" required>
                      <option selected>---Pilih Jenis Alih Teknologi---</option>
                      <option value="Membutuhkan dan sudah memiliki">Membutuhkan dan sudah memiliki</option>
                      <option value="Membutuhkan dan belum memiliki">Membutuhkan dan belum memiliki</option>
                      <option value="Tidak Membutuhkan">Tidak Membutuhkan</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> Peningkatan Kapasitas </label>
                  <select class="form-control" name="peningkatan_kapasitas" required>
                      <option selected>---Pilih Jenis Peningkatan Kapasitas---</option>
                        <option value="Membutuhkan dan sudah memiliki">Membutuhkan dan sudah memiliki</option>
                      <option value="Membutuhkan dan belum memiliki">Membutuhkan dan belum memiliki</option>
                      <option value="Tidak Membutuhkan">Tidak Membutuhkan</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label">  Status Pendanaan </label>
                  <select class="form-control" name="status_pendanaan" required>
                      <option selected>---Pilih Jenis Status Pendanaan---</option>
                      <option value="mitigasi">Sudah Ada</option>
                      <option value="adaptasi">Belum Ada</option>
                      <option value="adaptasi">Partial(Sumber dana yang belum cukup)</option>
                </select>
              </div>
            <div class="form-group">
                  <label class="control-label"> Tenaga Ahli </label>
                  <select class="form-control" name="tenaga_ahli" required>
                      <option selected>---Pilih Jenis Tenaga Ahli---</option>
                      <option value="Membutuhkan dan sudah memiliki">Membutuhkan dan sudah memiliki</option>
                      <option value="Membutuhkan dan belum memiliki">Membutuhkan dan belum memiliki</option>
                      <option value="Tidak Membutuhkan">Tidak Membutuhkan</option>
                </select>
              </div>
          </div>
        </div>
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            </form>

          </div>
      
        <?php $this->load->view('template/footer'); ?>
