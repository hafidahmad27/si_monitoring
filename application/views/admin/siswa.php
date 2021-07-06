<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Siswa
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
						<button type="button" class="btn btn-primary btnTambahSiswa" data-toggle="modal" data-target="#staticBackdrop">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<!-- <th>No</th> -->
									<th>No Induk</th>
									<th>Nama Lengkap</th>
									<th>Kelas</th>
									<th>Jenis Kelamin</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th style="width: 30%;">Alamat</th>
									<th>No. Telp</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($siswa as $sisw) : ?>
									<tr>
										<!-- <td><?= $no++ ?></td> -->
										<td><?= $sisw->no_induk ?></td>
										<td><?= $sisw->nama_lengkap ?>
										<td><?= $sisw->nama_kelas ?>
										<td><?= $sisw->jenis_kelamin ?>
										<td><?= $sisw->tempat_lahir ?>
										<td><?= $sisw->tanggal_lahir ?>
										<td><?= $sisw->alamat ?>
										<td><?= $sisw->no_telp ?>
										</td>
										<td style="text-align: center;">
											<a class="btn btn-success btn-sm btnEditSiswa" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $sisw->id_siswa; ?>"><i class="fa fa-edit"></i></a>
											<a onclick="return confirm('Apakah anda yakin untuk menghapus?')" href="<?= base_url() ?>/Siswa/hapus/<?= $sisw->id_siswa; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Siswa</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Siswa/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_siswa" name="id_siswa" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>No. Induk</label>
							<input type="number" id="no_induk" name="no_induk" class="form-control">
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control">
						</div>
						<div class="form-group">
							<label>Kelas</label>
							<select name="id_kelas" id="id_kelas" class="form-control">
								<?php foreach ($kelas as $kls) : ?>
									<option value="<?= $kls->id_kelas ?>"><?= $kls->nama_kelas ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
								<option>Laki-Laki</option>
								<option>Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control">
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea id="alamat" name="alamat" cols="" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>No. Telp</label>
							<input type="number" id="no_telp" name="no_telp" min="0" class="form-control">
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
