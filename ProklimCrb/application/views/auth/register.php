<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?? ""; ?> | Register</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

	<div class="container">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-6 d-none d-lg-block">
						<img src="<?= base_url('assets/img/vb.png'); ?>"  width="1100" height="590">
					</div>
					<div class="col-lg-6">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Buat Akun Baru Disini</h1>
							</div>
							<form class="user" method="POST" action="">
								<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" id="name" placeholder="Full Name" name="name" value="<?= set_value('name'); ?>">
									<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-user" id="jabatan" placeholder="Jabatan" name="jabatan" value="<?= set_value('jabatan'); ?>">
									<?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								</div>
								<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" id="jalan_nomor_rt_rw" placeholder="Jalan Nomor Rt/Rw" name="jalan_nomor_rt_rw" value="<?= set_value('jalan_nomor_rt_rw'); ?>">
									<?= form_error('jalan_nomor_rt_rw', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-user" id="desa_kelurahan" placeholder="Desa Kelurahan" name="desa_kelurahan" value="<?= set_value('desa_kelurahan'); ?>">
									<?= form_error('desa_kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								</div>
								<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" id="kecamatan" placeholder="kecamatan" name="kecamatan" value="<?= set_value('kecamatan'); ?>">
									<?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>

								<div class="col-sm-6">
									<input type="text" class="form-control form-control-user" id="kota_kabupaten" placeholder="Kota Kabupaten" name="kota_kabupaten" value="<?= set_value('kota_kabupaten'); ?>">
									<?= form_error('kota_kabupaten', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								</div>
								<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" id="provinsi" placeholder="Provinsi" name="provinsi" value="<?= set_value('provinsi'); ?>">
									<?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="text" class="form-control form-control-user" id="no_telpn" placeholder="No Telpn" name="no_telpn" value="<?= set_value('no_telpn'); ?>">
									<?= form_error('no_telpn', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
									<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="col-sm-6">
										<input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="password2">
									</div>
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">
									Register Account
								</button>
							</form>
							<hr>
							<!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> -->
							<div class="text-center">
								<a class="small" href="<?= base_url('index.php/login'); ?>">Already have an account? Login!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
