<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Manage Absensi Siswa</h1>
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
					<button type="button" class="btn btn-primary btnTambahAbsensi" data-toggle="modal" data-target="#staticBackdrop">
						<i class="fa fa-plus"></i> Tambah
					</button>
					<div class="card mt-1">
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 10%; text-align: center;">Tahun Ajaran</th>
										<th style="width: 1%; text-align: center;">Tanggal</th>
										<th style="width: 1%; text-align: center;">No Induk</th>
										<th style="width: 17%; text-align: center;">Nama Lengkap</th>
										<th style="width: 1%; text-align: center;">Kelas</th>
										<th style="text-align: center; width: 1%;">Alasan</th>
										<th style="text-align: center; width: 14%;">Keterangan</th>
										<th style="width: 1%; text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($absensi as $absen) : ?>
										<tr>
											<!-- <td><?= $no++ ?></td> -->
											<td><?= $absen->nama_tahun_ajaran ?></td>
											<td><?= date('d-m-Y', strtotime($absen->tanggal_absensi)) ?></td>
											<td style="text-align: center;"><?= $absen->no_induk ?>
											<td><?= $absen->nama_lengkap ?>
											<td><?= $absen->nama_kelas ?>
											<td style="text-align: center;"><?= $absen->alasan ?>
											<td><?= $absen->keterangan ?>
											</td>
											<td style="text-align: center;">
												<a class="btn btn-success btn-xs btnEditAbsensi" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $absen->id_absensi; ?>"><i class="fa fa-edit"></i></a>&nbsp;
												<a onclick="return confirm('Apakah anda yakin untuk menghapus?')" href="<?= base_url() ?>/Absensi/hapus/<?= $absen->id_absensi; ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Absensi Siswa</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Absensi/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_absensi" name="id_absensi" class="form-control" readonly>
						</div>
						<div class="form-group ta">
							<label>Tahun Ajaran</label>
							<input type="text" id="id_tahun_ajaran" name="id_tahun_ajaran" value="<?= $this->session->userdata('id_tahun_ajaran'); ?>" class="form-control" readonly>
							<input type="text" id="nama_ajr" name="" value="<?= $this->session->userdata('nama_tahun_ajaran'); ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input type="hidden" id="tanggal_absensi" name="tanggal_absensi" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
							<input type="text" id="tagal" name="" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label><br>
							<select name="id_siswa" id="id_siswa" class="form-control" style="width: 100%;" required>
								<?php if ($this->session->userdata('level') == 'admin') : ?>
									<option value="">--Silahkan Pilih--</option>
									<?php foreach ($siswa as $sisw) : ?>
										<option value="<?= $sisw->id_siswa ?>"><?= $sisw->nama_lengkap ?></option>
									<?php endforeach; ?>
								<?php endif; ?>
								<?php if ($this->session->userdata('level') == 'wali_kelas') : ?>
									<option value="">--Silahkan Pilih--</option>
									<?php foreach ($siswaByKelas as $sisw) : ?>
										<option value="<?= $sisw->id_siswa ?>"><?= $sisw->nama_lengkap ?></option>
									<?php endforeach; ?>
								<?php endif; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Alasan</label>
							<div class="form-group">
								<div class="radio-inline">
									<label style="font-weight: normal;">
										<input type="hidden" name="alasan" id="alasan" value="">
										<input type="radio" name="alasan" id="alasan" value="Sakit">
										Sakit
									</label>
									&nbsp;
									&nbsp;
									<label style="font-weight: normal;">
										<input type="radio" name="alasan" id="alasan" value="Izin">
										Izin
									</label>
									&nbsp;
									&nbsp;
									<label style="font-weight: normal;">
										<input type="radio" name="alasan" id="alasan" value="Alpa">
										Alpa
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<input type="text" id="keterangan" name="keterangan" maxlength="100" class="form-control">
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
