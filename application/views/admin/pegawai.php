<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Pegawai
			<small> </small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Data tables</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary btnTambahPegawai" data-toggle="modal" data-target="#staticBackdrop">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Pegawai</th>
									<th>Username</th>
									<th>Password</th>
									<th>Level</th>
									<th style="text-align: center;">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($pegawai as $peg) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $peg->nama_pegawai ?>
										<td><?= $peg->username ?>
										<td><?= $peg->password ?>
										<td><?= $peg->level ?>
										</td>
										<td style="text-align: center;">
											<a class="btn btn-success btn-xs btnEditPegawai" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $peg->id_pegawai; ?>"><i class="fa fa-edit"></i></a>&nbsp;
											<a onclick="return confirm('Apakah anda yakin untuk menghapus?')" href="<?= base_url() ?>/Pegawai/hapus/<?= $peg->id_pegawai; ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->

	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Pegawai</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Pegawai/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_pegawai" name="id_pegawai" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Pegawai</label>
							<input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" id="username" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" id="password" name="password" class="form-control">
						</div>
						<div class="form-group">
							<label>Level</label>
							<select name="level" id="level" class="form-control">
								<option value="guru_bk">Guru BK</option>
								<option value="wali_kelas">Wali Kelas</option>
								<option value="staff_tu">Staff TU</option>
							</select>
						</div>
						<div class="modal-footer">
							<button type="close" class="btn btn-danger" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->
