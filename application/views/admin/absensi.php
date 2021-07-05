<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Absensi Siswa
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
						<button type="button" class="btn btn-primary btnTambahAbsensi" data-toggle="modal" data-target="#staticBackdrop">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>No. Induk</th>
									<th>Nama Lengkap</th>
									<th>Kelas</th>
									<th>Alasan</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($absensi as $absen) : ?>
									<tr>
										<!-- <td><?= $no++ ?></td> -->
										<td><?= $absen->tanggal_absensi ?></td>
										<td><?= $absen->no_induk ?>
										<td><?= $absen->nama_lengkap ?>
										<td><?= $absen->nama_kelas ?>
										<td><?= $absen->alasan ?>
										<td><?= $absen->keterangan ?>
										</td>
										<td style="text-align: center;">
											<a class="btn btn-success btn-sm btnEditAbsensi" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $absen->id_absensi; ?>"><i class="fa fa-edit"></i></a>
											<a onclick="return confirm('Apakah anda yakin untuk menghapus?')" href="<?= base_url() ?>/Absensi/hapus/<?= $absen->id_absensi; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Transaksi Absensi Siswa</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Absensi/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_absensi" name="id_absensi" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input type="text" id="tanggal_absensi" name="tanggal_absensi" value="<?= date('d/m/Y') ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<select name="id_siswa" id="id_siswa" class="form-control">
								<?php foreach ($siswa as $sisw) : ?>
									<option value="<?= $sisw->id_siswa ?>"><?= $sisw->nama_lengkap ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<div class="radio-inline">
								<label>
									<input type="hidden" name="alasan" id="alasan" value="">
									<input type="radio" name="alasan" id="alasan" value="Sakit">
									Sakit
								</label>
							</div>
							<div class="radio-inline">
								<label>
									<input type="radio" name="alasan" id="alasan" value="Izin">
									Izin
								</label>
							</div>
							<div class="radio-inline">
								<label>
									<input type="radio" name="alasan" id="alasan" value="Alpa">
									Alpa
								</label>
							</div>
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<input type="text" id="keterangan" name="keterangan" class="form-control">
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
