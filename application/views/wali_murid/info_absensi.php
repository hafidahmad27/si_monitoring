<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-10">
					<h1 class="m-0">Daftar Absensi Siswa</h1>
				</div><!-- /.col -->
				<!-- <div class="col-sm-6"> -->
				<!-- <ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard v1</li>
					</ol> -->
				<!-- </div> -->
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
					<div class="card card-secondary card-outline">
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 1%;">No</th>
										<th style="width: 7.5%;">Tahun Ajaran</th>
										<th style="width: 10%; text-align: center;">Tanggal</th>
										<th style="width: 10%; text-align: center;">Alasan</th>
										<th style="width: 30%; text-align: center;">Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($info_absensi as $absen) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $absen->nama_tahun_ajaran ?></td>
											<td align="center"><?= date('d-m-Y', strtotime($absen->tanggal_absensi)) ?></td>
											<td style="text-align: center; width: 10%;"><?= $absen->alasan ?>
											<td><?= $absen->keterangan ?>
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
					<div class="form-group">
						<label>Tanggal</label>
						<input type="text" id="tanggal_absensi" name="tanggal_absensi" value="<?= date('d/m/Y') ?>" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label><br>
						<select name="id_siswa" id="id_siswa" class="form-control" style="width: 100%;">
							<?php if ($this->session->userdata('level') == 'admin') : ?>
								<?php foreach ($siswa as $sisw) : ?>
									<option value="<?= $sisw->id_siswa ?>"><?= $sisw->nama_lengkap ?></option>
								<?php endforeach; ?>
							<?php endif; ?>
							<?php if ($this->session->userdata('level') == 'wali_kelas') : ?>
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
<!-- /.content-wrapper -->
