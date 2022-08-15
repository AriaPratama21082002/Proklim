			<!-- Heading -->
			<div class="sidebar-heading">
				Main Menu
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('index.php/kegiatan'); ?>">
					<i class="fas fa-fw fa-list"></i>
					<span>Daftar Kampung Iklim</span>
				</a>
			</li>

			<li class="nav-item active">
				<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
					<i class="fas fa-fw fa-folder"></i>
					<span>Pengisian data lokasi Kampung iklim</span>
				</a>
				<div id="collapsePages" class="collapse Heading" aria-labelledby="headingPages" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Data Kegiatan :</h6>
						<a class="collapse-item" href="<?php echo base_url('index.php/datadasar'); ?>">Data Dasar </a>
						<a class="collapse-item" href="<?php echo base_url('index.php/kegiatan'); ?>">Data Adaptasi </a>
						<a class="collapse-item" href="<?php echo base_url('index.php/kegiatan'); ?>">Data mitigasi</a>
						<a class="collapse-item" href="<?php echo base_url('index.php/kegiatan'); ?>">Data Kelembagaan</a>
					</div>
				</div>
			</li> 

			<!-- 
			<li class="nav-item">
				<a class="nav-link" href="">
					<i class="fas fa-fw fa-list"></i>
					<span>Kegiatan</span>
				</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('index.php/pemanenanairhujan'); ?>">
					<i class="fas fa-fw fa-folder"></i>
					<span>Pengendalian Kekeringan,Banjir dan Longsor</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('index.php/bantuan'); ?>">
					<i class="fas fa-fw fa-cog"></i>
					<span>Bantuan</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('index.php/Profilakun/edit/<?=$data->id;?>'); ?>">
					<i class="fas fa-user "></i>
					<span>Profil Akun</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('index.php/Profilakun'); ?>">
					<i class="fas fa-user"></i>
					<span>Ubah Password</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('index.php/logout'); ?>">
					<i class="fas fa-sign-out-alt"></i>
					<span>Logout</span>
				</a>
			</li>
		<!-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header"> Data Menu</h6>
              <a class="collapse-item" href="<?php echo base_url('Menu'); ?>">Menu Restaurant</a>
              <a class="collapse-item" href="<?php echo base_url('Pemesanan'); ?>">Pemesanan Menu</a> -->

              <!-- <div class="collapse-divider"></div>
              <h6 class="collapse-header">Data Angsuran :</h6>
              <a class="collapse-item" href="404.html">Angsuran</a> -->
<!--             </div>
          </div>
        </li> -->