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
        </div>
              <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            </form>

          </div>
      
        <?php $this->load->view('template/footer'); ?>
