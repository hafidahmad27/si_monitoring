<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Catatan Pelanggaran Siswa
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
						<button type="button" class="btn btn-primary btnTambahCatatanPelanggaran" data-toggle="modal" data-target="#staticBackdrop">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th style="width: 1%; text-align: center;">Tanggal</th>
									<th style="width: 7.8%; text-align: center;">No Induk</th>
									<th style="width: 18%; text-align: center;">Nama Lengkap</th>
									<th style="width: 3.6%; text-align: center;">Kelas</th>
									<th style="width: 21.6%; text-align: center;">Bentuk Pelanggaran</th>
									<th style="width: 1%; text-align: center;">Poin</th>
									<!-- <th>Kategori</th> -->
									<th style="width: 16%; text-align: center;">Nama Tindakan</th>
									<th style="width: 3.7%; text-align: center;">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($catatan_pelanggaran as $catatplg) : ?>
									<tr>
										<td><?= $catatplg->tanggal ?></td>
										<td style="text-align: center;"><?= $catatplg->no_induk ?></td>
										<td><?= $catatplg->nama_lengkap ?>
										<td><?= $catatplg->nama_kelas ?>
										<td><?= $catatplg->bentuk_pelanggaran ?>
										<td style="float: right;"><?= $catatplg->poin ?>
										<td><?= $catatplg->nama_tindakan ?>
										</td>
										<td style="text-align: center;">
											<a class="btn btn-success btn-xs btnEditCatatanPelanggaran" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $catatplg->id_catatan_pelanggaran; ?>"><i class="fa fa-edit"></i></a>&nbsp;
											<a onclick="return confirm('Apakah anda yakin untuk menghapus?')" href="<?= base_url() ?>/Catatan_Pelanggaran/hapus/<?= $catatplg->id_catatan_pelanggaran; ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Transaksi Catatan Pelanggaran Siswa</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Catatan_Pelanggaran/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_catatan_pelanggaran" name="id_catatan_pelanggaran" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input type="text" id="tanggal" name="tanggal" value="<?= date('d/m/Y') ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label><br>
							<select name="id_siswa" id="id_siswa" class="form-control select2" style="width: 100%;">
								<?php foreach ($siswa as $sisw) : ?>
									<option value="<?= $sisw->id_siswa ?>"><?= $sisw->nama_lengkap ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Bentuk Pelanggaran</label>
							<select name="id_pelanggaran_tatib" id="id_pelanggaran_tatib" class="form-control">
								<?php foreach ($pelanggaran_tatib as $plg) : ?>
									<option value="<?= $plg->id_pelanggaran_tatib ?>"><?= $plg->bentuk_pelanggaran ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Tindakan</label>
							<select name="id_tindakan" id="id_tindakan" class="form-control">
								<?php foreach ($tindakan as $tnd) : ?>
									<option value="<?= $tnd->id_tindakan ?>"><?= $tnd->nama_tindakan ?></option>
								<?php endforeach; ?>
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
