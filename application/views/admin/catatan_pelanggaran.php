<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Manage Catatan Pelanggaran Siswa</h1>
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
					<button type="button" class="btn btn-primary btnTambahCatatanPelanggaran" data-toggle="modal" data-target="#staticBackdrop">
						<i class="fa fa-plus"></i> Tambah
					</button>
					<div class="card mt-1">
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 1%; text-align: center;">Tahun Ajaran</th>
										<th style="width: 1%; text-align: center;">Tanggal</th>
										<th style="width: 1%; text-align: center;">No Induk</th>
										<th style="width: 17.9%; text-align: center;">Nama Lengkap</th>
										<th style="width: 1%; text-align: center;">Kelas</th>
										<th style="width: 17.6%; text-align: center;">Bentuk Pelanggaran</th>
										<th style="width: 1%; text-align: center;">Poin</th>
										<th style="width: 13.3%; text-align: center;">Tindakan</th>
										<th style="width: 7.2%; text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($catatan_pelanggaran as $catatplg) : ?>
										<tr>
											<td><?= $catatplg->nama_tahun_ajaran ?></td>
											<td><?= date('d-m-Y', strtotime($catatplg->tanggal)) ?></td>
											<td style="text-align: center;"><?= $catatplg->no_induk ?></td>
											<td><?= $catatplg->nama_lengkap ?> </td>
											<td><?= $catatplg->nama_kelas ?> </td>
											<td><?= $catatplg->bentuk_pelanggaran ?> </td>
											<td style="float: right;"><?= $catatplg->poin ?> </td>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Catatan Pelanggaran Siswa</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Catatan_Pelanggaran/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_catatan_pelanggaran" name="id_catatan_pelanggaran" class="form-control" readonly>
						</div>
						<div class="form-group ta">
							<label>Tahun Ajaran</label>
							<input type="text" id="id_tahun_ajaran" name="id_tahun_ajaran" value="<?= $this->session->userdata('id_tahun_ajaran'); ?>" class="form-control" readonly>
							<input type="text" id="nama_ajr" name="" value="<?= $this->session->userdata('nama_tahun_ajaran'); ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input type="hidden" id="tanggal" name="tanggal" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
							<input type="text" id="tagal" name="" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label><br>
							<select name="id_siswa" id="id_siswa" class="form-control" style="width: 100%;" required>
								<option value="">--Silahkan Pilih--</option>
								<?php foreach ($siswa as $sisw) : ?>
									<option value="<?= $sisw->id_siswa ?>"><?= $sisw->nama_lengkap ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Bentuk Pelanggaran</label>
							<select name="id_pelanggaran_tatib" id="id_pelanggaran_tatib" class="form-control" required>
								<option value="">--Silahkan Pilih--</option>
								<?php foreach ($pelanggaran_tatib as $plg) : ?>
									<option value="<?= $plg->id_pelanggaran_tatib ?>"><?= $plg->bentuk_pelanggaran ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Tindakan</label>
							<select name="id_tindakan" id="id_tindakan" class="form-control" required>
								<option value="">--Silahkan Pilih--</option>
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
</div>
<!-- /.content-wrapper -->
