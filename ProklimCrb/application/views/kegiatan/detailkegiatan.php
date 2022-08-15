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

          
          <div class="col-md-12 card mb-4 py-3 border-bottom-warning">
             <h3>Detail Informasi</h3>
              <table>
                <tr>
                  <th>Nomor Akun</th>
                  <td> :<?=$data->id?></td>
                </tr>
                <tr>
                  <th>Judul Kegiatan</th>
                  <td> :<?=$data->judul_kegiatan?></td>
                </tr>
                <tr>
                  <th>Tanggal</th>
                  <td> :<?=$data->tanggal?></td>
                </tr>
                <tr>
                  <th>Durasi</th>
                  <td> :<?=$data->durasi?></td>
                </tr>
                <tr>
                  <th>Jenis Kegiatan</th>
                  <td> :<?=$data->jenis_kegiatan?></td>
                </tr>                
                <tr>
                  <th>Tujuan Umum</th>
                  <td> :<?=$data->tujuan_umum?></td>
                </tr>
                <tr>
                  <th>Tujuan Khusus</th>
                  <td> :<?=$data->tujuan_khusus?></td>
                </tr>                
                <tr>
                  <th>Aksi</th>
                  <td> :<?=$data->aksi?></td>
                </tr>                
                <tr>
                  <th>Sektor</th>
                  <td> :<?=$data->sektor?></td>
                </tr>                
                <tr>
                  <th>Skema</th>
                  <td> :<?=$data->skema?></td>
                </tr>                
                <tr>
                  <th>Pelaku</th>
                  <td> :<?=$data->pelaku?></td>
                </tr>                
                <tr>
                  <th>keterkaitan program</th>
                  <td> :<?=$data->keterkaitan_program?></td>
                </tr>                
                <tr>
                  <th>alih tekhnologi</th>
                  <td> :<?=$data->alih_tekhnologi?></td>
                </tr>                
                <tr>
                  <th>peningkatan kapasitas</th>
                  <td> :<?=$data->peningkatan_kapasitas?></td>
                </tr>
                <tr>
                  <th>Status Pendanaan</th>
                  <td> :<?=$data->status_pendanaan?></td>
                </tr>                
                <tr>
                  <th>Tenaga Ahli</th>
                  <td> :<?=$data->tenaga_ahli?></td>
                </tr>
              </table>
          </div>
             <div class="col-md-12 card mb-4 py-3 border-bottom-warning"> 
              <h3>Dokumen Pendukung</h3>
               <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pendukung</h6>
              <a href="<?=base_url()?>index.php/dokumenpendukung/tambah" class="btn btn-success">Tambah data pendukung</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul </th>
                      <th>Keterangan</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                      <?php $no =1; 
                        foreach ($datadokumen as $datak): 
                        
                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td class="text-center"><?php echo $datak->judul?></td>
                            <td class="text-center"><?php echo $datak->keterangan?></td>
                            <td class="text-center"><img src="<?=base_url()?>assets/picture/<?=$datak->foto?>" alt="foto" style="width: 120px;"></td>
                            <td>  <a href="<?=base_url()?>index.php/dokumenpendukung/edit/<?=$datak->id?>" class="btn btn-success btn-sm">
                                <i class=""></i> Edit
                              </a> 
                               <a href="<?=base_url()?>index.php/dokumenpendukung/deletedata/<?=$datak->id;?>" class=" btn btn-danger delete-link">Delete</a>
                            </td>
                          </tr>
                        </tbody>
                      <?php endforeach; ?>
                      </table>
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

    