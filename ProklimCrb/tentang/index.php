<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Dinas Lingkungan Hidup Kota Cirebon</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">PROKLIM CIREBON KOTA</h1>
		<h3 class="deskripsi">DATA PROGRAM IKLIM CIREBON KOTA</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=adaptasi">ADAPTASI</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=mitigasi">MITIGASI</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'adaptasi':
				include "halaman/adaptasi.php";
				break;	
			case 'mitigasi':
				include "halaman/mitigasi.php";
				break;	
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>