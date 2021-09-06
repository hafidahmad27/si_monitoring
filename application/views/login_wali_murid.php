<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login - Wali Murid</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" background="<?= base_url() ?>assets/dist/img/smkikipsby.jpg" style="background-size: 100% 210%; background-repeat: no-repeat;">

	<!-- <div class="login-box">
        <div class="row">
            <div class="jumbotron jumbotron-fluid bg-primary">
                <div class="container">
                    <h1 class="display-4">Fluid jumbotron</h1>
                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Login untuk masuk</p>
                    <div class="alert alert-danger d-none"></div>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-9 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-light">
								<div class="jumbotron jumbotron-fluid bg-light">
									<div class="container">
										<div class="text-center">
											<h4>Sistem Informasi Monitoring Siswa</h4>
											<h3>SMK IKIP Surabaya</h3>
											<p class="lead">Jl. Teratai No. 4, Kec. Tambaksari, Surabaya</p>
											<img src="<?= base_url() ?>assets/dist/img/logo-smk-ikip.png" style="width: 50%;" class="rounded-circle">
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center mt-3">
										<h2>Form Login</h2>
										<hr>
										<p class="mt-4">Silahkan masukkan No. Induk dan Password anda untuk menggunakan aplikasi ini</p>
									</div>
									<div class="alert alert-danger d-none"></div>
									<form action="<?= base_url() ?>Login/prosesLogin" method="post">

										<span class="badge badge-danger"><?php $info = $this->session->flashdata('info');
																			if (!empty($info)) {
																				echo $info;
																			}
																			?></span>
										<div class="input-group mb-3">
											<input type="number" class="form-control" name="no_induk" placeholder="No. Induk" required>
											<div class="input-group-append">
												<div class="input-group-text">
													<span class="fas fa-user"></span>
												</div>
											</div>
										</div>
										<div class="input-group mb-3">
											<input type="password" class="form-control" name="tanggal_lahir" placeholder="Password (Tgl Lahir YYYY-MM-DD)" required>
											<div class="input-group-append">
												<div class="input-group-text">
													<span class="fas fa-lock"></span>
												</div>
											</div>
										</div>
										<!-- <a href="#" class="badge badge-primary float-right" data-toggle="modal" data-target="#exampleModal">
											Lupa Password?
										</a><br><br> -->
										<div class="form-group">
											<button type="submit" name="login" value="LOGIN" class="btn btn-block btn-dark">Login</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Anda Lupa Password?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Jika Anda lupa password silahkan konfirmasi ke sekolah dengan menghubungi:
						<ul>
							<li>Nomor Telepon : 031234567</li>
							<b>Atau</b>
							<li>Email : smkikipsby@gmail.com</li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
		<script src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
</body>

</html>
