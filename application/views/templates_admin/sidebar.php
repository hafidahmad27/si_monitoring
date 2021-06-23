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
				<p>Alexander Pierce</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<?php $uri = $this->uri->segment(1) ?>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="<?php echo $uri == 'admin' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li class="header">MASTER DATA</li>
			<li class="treeview <?php echo $uri == 'kelas' || $uri == 'siswa' || $uri == 'pelanggaran_tatib' || $uri == 'tindakan' || $uri == 'jenis_pembayaran' || $uri == 'pegawai' ? 'active' : 'no' ?>">
				<a href="#">
					<i class="fa fa-table"></i> <span>Master Data</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo $uri == 'kelas' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>kelas"><i class="fa fa-circle-o"></i> Kelas</a></li>
					<li class="<?php echo $uri == 'siswa' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>siswa"><i class="fa fa-circle-o"></i> Siswa</a></li>
					<li class="<?php echo $uri == 'pelanggaran_tatib' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>pelanggaran_tatib"><i class="fa fa-circle-o"></i> Pelanggaran Tatib</a></li>
					<li class="<?php echo $uri == 'tindakan' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>tindakan"><i class="fa fa-circle-o"></i> Tindakan</a></li>
					<li class="<?php echo $uri == 'jenis_pembayaran' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>jenis_pembayaran"><i class="fa fa-circle-o"></i> Jenis Pembayaran</a></li>
					<li class="<?php echo $uri == 'pegawai' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>pegawai"><i class="fa fa-circle-o"></i> Pegawai</a></li>
				</ul>
			</li>
			<li class="header">TRANSAKSI</li>
			<li class="treeview <?php echo $uri == 'catatan_pelanggaran' || $uri == 'absensi' || $uri == 'tunggakan_pembayaran' ? 'active' : 'no' ?>">
				<a href="#">
					<i class="fa fa-edit"></i> <span>Transaksi</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo $uri == 'catatan_pelanggaran' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>catatan_pelanggaran"><i class="fa fa-circle-o"></i> Catatan Pelanggaran</a></li>
					<li class="<?php echo $uri == 'absensi' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>absensi"><i class="fa fa-circle-o"></i> Absensi</a></li>
					<li class="<?php echo $uri == 'tunggakan_pembayaran' ? 'active' : 'no' ?>"><a href="<?= base_url() ?>tunggakan_pembayaran"><i class="fa fa-circle-o"></i> Tunggakan Pembayaran</a></li>
				</ul>
			</li>
			<!-- <li class="header">LABELS</li>
			<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li> -->
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
