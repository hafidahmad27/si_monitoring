<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login - Pegawai Sekolah</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" background="<?= base_url() ?>assets/dist/img/ruang.png" style="background-size: 100% 100%; background-repeat: no-repeat;">
	<div class="login-box">
		<!-- /.login-logo -->
		<div class="card bg-primary">
			<div class="login-logo">
				<a href="#" class="text-white"><b>Monitoring</b>System</a>
			</div>
			<div class="card-body login-card-body">
				<p class="login-box-msg">Login Pegawai Sekolah</p>

				<form action="<?= base_url() ?>Admin/prosesLogin" method="post">
					<span class="badge badge-danger"><?php $info = $this->session->flashdata('info');
														if (!empty($info)) {
															echo $info;
														}
														?></span>
					<div class="input-group mb-3">
						<input type="text" name="username" class="form-control" placeholder="Masukkan username...">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" name="password" class="form-control" placeholder="Masukkan password...">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- /.col -->
						<div class="col-12">
							<button type="submit" name="login" value="LOGIN" class="btn btn-primary btn-block">Log In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>
