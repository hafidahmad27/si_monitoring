<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Admin</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<?php $uri = $this->uri->segment(1) ?>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header"></li>
			<li class="<?php echo $uri == 'admin' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li class="header">MASTER DATA</li>
			<li class="<?php echo $uri == 'kelas' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>kelas"><i class="fas fa-door-open"></i>&nbsp; <span> Kelas</span></a></li>
			<li class="<?php echo $uri == 'siswa' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>siswa"><i class="far fa-id-card"></i>&nbsp;&nbsp; <span>Siswa</span></a></li>
			<li class="<?php echo $uri == 'pelanggaran_tatib' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>pelanggaran_tatib"><i class="fas fa-book-open"></i>&nbsp;&nbsp; <span>Pelanggaran Tata Tertib</span></a></li>
			<li class="<?php echo $uri == 'tindakan' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>tindakan"><i class="fas fa-gavel"></i>&nbsp;&nbsp;&nbsp; <span>Tindakan</span></a></li>
			<li class="<?php echo $uri == 'jenis_pembayaran' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>jenis_pembayaran"><i class="fas fa-funnel-dollar"></i>&nbsp;&nbsp; <span>Jenis Pembayaran</span></a></li>
			<li class="<?php echo $uri == 'pegawai' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>pegawai"><i class="fas fa-user-lock"></i>&nbsp;&nbsp; <span>Pegawai</span></a></li>
			<li class="header">TRANSAKSI</li>
			<li class="<?php echo $uri == 'catatan_pelanggaran' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>catatan_pelanggaran"><i class="fas fa-user-edit"></i>&nbsp; <span>Catatan Pelanggaran</span></a></li>
			<li class="<?php echo $uri == 'absensi' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>absensi"><i class="fas fa-clipboard-list"></i>&nbsp;&nbsp;&nbsp; <span>Absensi</span></a></li>
			<li class="<?php echo $uri == 'tunggakan_pembayaran' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>tunggakan_pembayaran"><i class="fas fa-file-invoice-dollar"></i>&nbsp;&nbsp;&nbsp; <span>Tunggakan Pembayaran</span></a></li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
