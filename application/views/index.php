<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>SI Monitoring Siswa SMK IKIP Sby</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="<?= base_url() ?>assets/landing_page/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?= base_url() ?>assets/landing_page/images/apple-touch-icon.png">

<!-- Font Awesome -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/landing_page/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/landing_page/style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/landing_page/css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/landing_page/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?= base_url() ?>assets/landing_page/css/custom.css">

<!-- Modernizer for Portfolio -->
<!-- <script src="<?= base_url() ?>assets/landing_page/js/modernizer.js"></script> -->

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header tit-up">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Customer Login</h4>
				</div>
				<div class="modal-body customer-box">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
						<li><a href="#Registration" data-toggle="tab">Registration</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Login">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="email1" placeholder="Name" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-10">
										<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
											Submit
										</button>
										<a class="for-pwd" href="javascript:;">Forgot your password?</a>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="Registration">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" placeholder="Name" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="email" placeholder="Email" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="mobile" placeholder="Mobile" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="password" placeholder="Password" type="password">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-10">
										<button type="button" class="btn btn-light btn-radius btn-brd grd1">
											Save &amp; Continue
										</button>
										<button type="button" class="btn btn-light btn-radius btn-brd grd1">
											Cancel</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?= base_url() ?>">
					<img src="<?= base_url() ?>assets/landing_page/images/logo.png" alt="" />
				</a>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#overviews">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="#futer">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('<?= base_url() ?>assets/dist/img/smkikipsby.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>MonitoringSYSTEM </strong> SMK IKIP SBY</h2>
										<p class="lead">Website untuk memonitoring siswa/siswi SMK IKIP Surabaya</p>
										<a href="<?= base_url() ?>Admin" target="_blank" class="hover-btn-new"><span>Login Pegawai Sekolah</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="<?= base_url() ?>Wali_Murid/profil_siswa" target="_blank" class="hover-btn-new"><span>Login Wali Murid</span></a>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">
					<h3>About</h3>
					<p class="lead" style="text-align: justify;">SMK IKIP Surabaya adalah sekolah menengah kejuruan IKIP dibawah naungan yayasan pembina Universitas Negeri Surabaya yang terletak di jalan Kawung no.9 Surabaya, sebelum menjadi sekolah gedung SMK IKIP Surabaya adalah kampus Institut Keguruan dan Ilmu Pendidikan Negeri (IKIP) Fakultas Pendidikan Olahraga dan Kesehatan (FPOK). Sekolah ini berdiri pada tahun 1999 dan hanya membuka satu Program keahlian, yaitu Perdagangan. SMK IKIP Surabaya mulai pertama kali berdiri di kepalai oleh Ibu Dra. Martini 1998 s/d 1999, kemudian Bapak Jusuf Djunaidi, S.Pd 1999, Bapak Teguh Tjahjono, S.Pd 1999-2006, kemudian pada tahun 2006 berganti ke Ibu Dian Widyastuti, S.Pd sampai saat ini. </p>
				</div>
			</div><!-- end title -->


		</div><!-- end container -->
	</div><!-- end section -->

	<footer id="futer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Follow Me</h3>
						</div>
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://www.facebook.com/smklabschoolunesa1"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/smklabschoolunesa1/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://t.me/smkikipsby"><i class="fab fa-telegram"></i></a></li>
								<li><a href="https://wa.me/6282229020803"><i class="fab fa-whatsapp"></i></a></li>
								<li><a href="https://www.tiktok.com/@smklabschoolunesa1"><i class="fab fa-tiktok"></i></a></li>
							</ul><!-- end links -->
						</div>
					</div><!-- end clearfix -->
				</div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
					<div class="widget clearfix">
						<div class="widget-title">
							<h3>Contact Details</h3>
						</div>

						<ul class="footer-links">
							<li><a href="mailto:smkikipsby@gmail.com">smkikipsby@gmail.com</a></li>
							<li><a href="https://smkikipsby.sch.id/" target="_blank">www.smkikipsby.sch.id</a></li>
							<li>Kode pos 60131</li>
							<li>03199445639 / <a href="https://wa.me/6282229020803">082229020803 (WA)</a> </li>
						</ul><!-- end links -->
					</div><!-- end clearfix -->
				</div><!-- end col -->

			</div><!-- end row -->
		</div><!-- end container -->
	</footer><!-- end footer -->

	<div class="copyrights">
		<div class="container">
			<div class="footer-distributed">
				<div class="footer-center">
					<p class="footer-company-name">All Rights Reserved. &copy; 2021 </p>
				</div>
			</div>
		</div><!-- end container -->
	</div><!-- end copyrights -->

	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="<?= base_url() ?>assets/landing_page/js/all.js"></script>
	<!-- ALL PLUGINS -->
	<script src="<?= base_url() ?>assets/landing_page/js/custom.js"></script>
	<script src="<?= base_url() ?>assets/landing_page/js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>

</html>
