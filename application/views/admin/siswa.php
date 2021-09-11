<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Manage Siswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<!-- <ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard v1</li>
					</ol> -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-12">
					<button type="button" class="btn btn-primary btnTambahSiswa" data-toggle="modal" data-target="#staticBackdrop">
						<i class="fa fa-plus"></i> Tambah
					</button>
					<div class="card mt-1">
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<!-- <th>No</th> -->
										<th style="width: 1%;">No Ind</th>
										<th style="width: 29%; text-align: center;">Nama Lengkap</th>
										<th style="width: 11.3%;">Kelas</th>
										<th style="width: 1%;">Jenis Kelamin</th>
										<th style="width: 1%;">Tempat Lahir</th>
										<th style="width: 9.7%;">Tanggal Lahir</th>
										<th style="width: 20%; text-align: center;">Alamat</th>
										<th style="width: 1%; text-align: center;">No Telp</th>
										<th style="width: 8.2%; text-align: center;">Aksi</th>
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
												<a class="btn btn-primary btn-xs btnEditSiswa" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $sisw->id_siswa; ?>"><i class="fa fa-edit"></i></a>&nbsp;
												<button type="button" class="btn btn-danger btn-xs swalErrorFK" data-id="<?= $sisw->id_siswa; ?>" data-url="<?= base_url() ?>Siswa/hapus/"><i class="fas fa-trash"></i></button>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row (main row) -->
		</div><!-- /.container-fluid -->
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
							<label>No Induk</label>
							<input type="number" id="no_induk" name="no_induk" min="0" max="9999999999" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" id="nama_lengkap" name="nama_lengkap" maxlength="50" class="form-control" required>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Kelas</label><br>
									<select name="id_kelas" id="id_kelas" class="form-control" style="width: 100%;">
										<option>--Silahkan Pilih--</option>
										<?php foreach ($kelas as $kls) : ?>
											<option value="<?= $kls->id_kelas ?>"><?= $kls->nama_kelas ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<div class="radio-inline">
										<label style="font-weight: normal;">
											<input type="hidden" name="jenis_kelamin" id="jenis_kelamin" value="">
											<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki">
											Laki-Laki
										</label>
										&nbsp;
										<label style="font-weight: normal;">
											<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
											Perempuan
										</label>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" id="tempat_lahir" name="tempat_lahir" maxlength="30" class="form-control">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea id="alamat" name="alamat" cols="" rows="4" maxlength="100" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>No Telp</label>
							<input type="number" id="no_telp" name="no_telp" min="0" max="9999999999999" class="form-control">
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
</div>
<!-- /.content-wrapper -->
