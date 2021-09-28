<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-light elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/cctv.png" alt="AdminLTE Logo" class="brand-image" style="width: 18%;">
		<span class="brand-text font-weight-light text-white">Monitoring <i>System</i></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
			</div>
			<div class="info" style="text-align: center;">
				<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="width: 50%; margin-bottom: 5%;">
				<a href="#" class="d-block text-white"><?= $this->session->userdata('nama_lengkap'); ?></a>
				<a href="#" class="d-block text-white">(<?= $this->session->userdata('nama_kelas'); ?>)</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<?php $uri = $this->uri->segment(2) ?>
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

				<li class="nav-item">
					<a href="<?= base_url() ?>Wali_Murid/profil_siswa" class="nav-link <?php echo $uri == 'profil_siswa' ? 'active' : 'no' ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Profil Siswa
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url() ?>Wali_Murid/info_catatan_pelanggaran" class="nav-link <?php echo $uri == 'info_catatan_pelanggaran' ? 'active' : 'no' ?>">
						<i class="nav-icon fas fa-user-edit"></i>
						<p>
							Info Pelanggaran
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url() ?>Wali_Murid/info_absensi" class="nav-link <?php echo $uri == 'info_absensi' ? 'active' : 'no' ?>">
						<i class="nav-icon fas fa-clipboard-list"></i>
						<p>
							Info Absensi
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url() ?>Wali_Murid/info_tunggakan_pembayaran" class="nav-link <?php echo $uri == 'info_tunggakan_pembayaran' ? 'active' : 'no' ?>">
						<i class="nav-icon fas fa-file-invoice-dollar"></i>
						<p>
							Info Tunggakan
						</p>
					</a>
				</li>

				<!-- dengan dropdown -->
				<!-- <li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="./index.html" class="nav-link active">
								<i class="far fa-circle nav-icon"></i>
								<p>Dashboard v1</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="./index2.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Dashboard v2</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="./index3.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Dashboard v3</p>
							</a>
						</li>
					</ul>
				</li> -->
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
