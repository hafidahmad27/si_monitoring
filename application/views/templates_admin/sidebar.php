<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/cctv.png" alt="AdminLTE Logo" class="brand-image" style="width: 18%;">
		<span class="brand-text font-weight-light">Monitoring <i>System</i></span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $this->session->userdata('username'); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<?php $uri = $this->uri->segment(1) ?>
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<?php if ($this->session->userdata('level') == 'admin') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>dashboard" class="nav-link <?php echo $uri == 'dashboard' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Dashboard
							</p>
						</a>
					</li>
				<?php endif; ?>

				<li class="nav-header">MASTER DATA</li>
				<?php if ($this->session->userdata('level') == 'admin') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>kelas" class="nav-link <?php echo $uri == 'kelas' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-door-open"></i>
							<p>
								Kelas
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url() ?>siswa" class="nav-link <?php echo $uri == 'siswa' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-id-card"></i>
							<p>
								Siswa
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'guru_bk') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>pelanggaran_tatib" class="nav-link <?php echo $uri == 'pelanggaran_tatib' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-book-open"></i>
							<p>
								Pelanggaran Tata Tertib
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url() ?>tindakan" class="nav-link <?php echo $uri == 'tindakan' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-gavel"></i>
							<p>
								Tindakan
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'staff_tu') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>jenis_pembayaran" class="nav-link <?php echo $uri == 'jenis_pembayaran' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-funnel-dollar"></i>
							<p>
								Jenis Pembayaran
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>pegawai" class="nav-link <?php echo $uri == 'pegawai' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-user-tie"></i>
							<p>
								Pegawai
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>user" class="nav-link <?php echo $uri == 'user' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-user-lock"></i>
							<p>
								User
							</p>
						</a>
					</li>
				<?php endif; ?>

				<li class="nav-header">TRANSAKSI</li>
				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'guru_bk') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>catatan_pelanggaran" class="nav-link <?php echo $uri == 'catatan_pelanggaran' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-user-edit"></i>
							<p>
								Catatan Pelanggaran
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'wali_kelas') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>absensi" class="nav-link <?php echo $uri == 'absensi' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-clipboard-list"></i>
							<p>
								Absensi
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'staff_tu') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>tunggakan_pembayaran" class="nav-link <?php echo $uri == 'tunggakan_pembayaran' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-file-invoice-dollar"></i>
							<p>
								Tunggakan Pembayaran
							</p>
						</a>
					</li>
				<?php endif; ?>
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
