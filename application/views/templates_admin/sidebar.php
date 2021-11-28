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
				<a href="#" class="d-block"><?= $this->session->userdata('nama_user'); ?> (<?= $this->session->userdata('level'); ?>)</a>
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
						<a href="<?= base_url() ?>Admin/dashboard" class="nav-link <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Dashboard
							</p>
						</a>
					</li>
				<?php endif; ?>

				<li id="nav-master" class="nav-header">MASTER DATA</li>
				<?php if ($this->session->userdata('level') == 'admin') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>Tahun_Ajaran" class="nav-link <?php echo $uri == 'Tahun_Ajaran' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-calendar-week"></i>
							<p>
								Tahun Ajaran
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url() ?>Kelas" class="nav-link <?php echo $uri == 'Kelas' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-door-open"></i>
							<p>
								Kelas
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url() ?>Siswa" class="nav-link <?php echo $uri == 'Siswa' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-id-card"></i>
							<p>
								Siswa
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'guru_bk') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>Pelanggaran_Tatib" class="nav-link <?php echo $uri == 'Pelanggaran_Tatib' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-book-open"></i>
							<p>
								Pelanggaran Tata Tertib
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url() ?>Tindakan" class="nav-link <?php echo $uri == 'Tindakan' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-gavel"></i>
							<p>
								Tindakan
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'staff_tu') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>Jenis_Pembayaran" class="nav-link <?php echo $uri == 'Jenis_Pembayaran' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-funnel-dollar"></i>
							<p>
								Jenis Pembayaran
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>User" class="nav-link <?php echo $uri == 'User' ? 'active' : 'no' ?>">
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
						<a href="<?= base_url() ?>Catatan_Pelanggaran" class="nav-link <?php echo $uri == 'Catatan_Pelanggaran' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-user-edit"></i>
							<p>
								Catatan Pelanggaran
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin' ||  $this->session->userdata('level') == 'guru_bk') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>Absensi" class="nav-link <?php echo $uri == 'Absensi' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-clipboard-list"></i>
							<p>
								Absensi
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'staff_tu') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>Tunggakan_Pembayaran" class="nav-link <?php echo $uri == 'Tunggakan_Pembayaran' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-file-invoice-dollar"></i>
							<p>
								Tunggakan Pembayaran
							</p>
						</a>
					</li>
				<?php endif; ?>

				<li class="nav-header">LAPORAN</li>
				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'guru_bk') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>Laporan_Pelanggaran_Absensi" class="nav-link <?php echo $uri == 'Laporan_Pelanggaran_Absensi' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-file-alt"></i>
							<p>
								Lap. Pelanggaran & &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Absensi
							</p>
						</a>
					</li>
				<?php endif; ?>

				<?php if ($this->session->userdata('level') == 'admin' || $this->session->userdata('level') == 'staff_tu') : ?>
					<li class="nav-item">
						<a href="<?= base_url() ?>Laporan_Tunggakan" class="nav-link <?php echo $uri == 'Laporan_Tunggakan' ? 'active' : 'no' ?>">
							<i class="nav-icon fas fa-file-alt"></i>
							<p>
								Lap. Tunggakan
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
