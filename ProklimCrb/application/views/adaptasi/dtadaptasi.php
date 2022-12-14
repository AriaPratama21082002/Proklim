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
                <h1 class="h3 mb-0 text-gray-800">Informasi Kegiatan</h1>
              </div>
            </div>
          </div>
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Kegiatan Program Kampung Iklim Kota Cirebon</h6>
              <hr>
              <h6 class="m-0 font-weight-bold text-primary">Data Adaptasi Program Kampung Iklim Kota Cirebon</h6>
              <br>

              <a href="<?=base_url()?>index.php/adaptasi/tambahdataadaptasi" class="btn btn-success">Tambah Data Kegiatan</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Komponen</th>
                            <th class="text-center">jenis kegiatan</th>
                            <th class="text-center">satuan</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center" style="font-size: 23px;">Aksi</th>
                          </tr>
                        </thead>
                      <?php $no =1; 
                        foreach ($data as $data): 
                        
                        ?>
                        <tbody>
                          <tr>
                            <td align="center"><?php echo $no++; ?></td>
                            <td class="text-center"><?php echo $data->komponen?></td>
                            <td class="text-center"><?php echo $data->jenis_kegiatan?></td>
                            <td class="text-center"><?php echo $data->satuan?></td>
                            <td class="text-center"><?php echo $data->jumlah?></td>
                            
                            <td>  <a href="<?=base_url()?>index.php/Kegiatan/edit/<?=$data->id?>" class="btn btn-success btn-sm">
                                <i class=""></i> Edit
                              </a> 
                               <a href="<?=base_url()?>index.php/Kegiatan/deletedata/<?=$data->id;?>" class=" btn btn-danger delete-link">Delete</a>
                              <a href="<?=base_url()?>index.php/Kegiatan/detailkegiatan/<?=$data->id;?>" class=" btn btn-primary">Detail</a>
                            </td>
                          </tr>
                        </tbody>
                      <?php endforeach; ?>
                      </table>
                      <table border="1" class="table table-bordered">
    <tbody>
        <tr>
            <td style="text-align:center"><strong>No</strong></td>
            <td style="text-align:center"><strong>Peraturan</strong></td>
            <td style="text-align:center"><strong>Tentang</strong></td>
            <td style="text-align:center"><strong>Link</strong></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Silahkan Download File Yang Sudah di Sediakan Oleh Kami</td>
            <td>Dinas Lingkungan Hidup Kota Cirebon</td>
            <td>
            <p><a href="https://docs.google.com/spreadsheets/d/1X3SkCnXxDa6ep7sFCtwkrX5_QBozic9A/edit?usp=sharing&ouid=103169240852731162971&rtpof=true&sd=true" target="_blank"><img alt="" height="40" src="https://www.stouffvilletoyota.com/wp-content/uploads/2019/08/download-logo-png-image-77292.png" width="40"></a></p>
            </td>
        </tr>
    </tbody>
</table>
                    </div>
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
