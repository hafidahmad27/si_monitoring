<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Manage Tunggakan Pembayaran Siswa</h1>
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
					<button type="button" class="btn btn-primary btnTambahTunggakanPembayaran" data-toggle="modal" data-target="#staticBackdrop">
						<i class="fa fa-plus"></i> Tambah
					</button>
					<div class="card mt-1">
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 1%; text-align: center;">Tahun Ajaran</th>
										<th style="width: 1%;">No Induk</th>
										<th style="width: 20%; text-align: center;">Nama Lengkap</th>
										<th style="width: 8.9%; text-align: center;">Kelas</th>
										<th style="width: 17.7%; text-align: center;">Jenis Pembayaran</th>
										<th style="width: 1%; text-align: center;">Bulan</th>
										<th style="width: 1%;">Tahun</th>
										<th style="width: 1%; text-align: center;">Nominal</th>
										<!-- <th>Total Tunggakan</th> -->
										<th style="width: 1%;"> Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($tunggakan_pembayaran as $tunggakan) : ?>
										<tr>
											<td> <?= $tunggakan->nama_tahun_ajaran ?> </td>
											<td align=" right"> <?= $tunggakan->no_induk ?> </td>
											<td> <?= $tunggakan->nama_lengkap ?> </td>
											<td> <?= $tunggakan->nama_kelas ?> </td>
											<td> <?= $tunggakan->jenis_pembayaran ?>
											<td> <?php if ($tunggakan->bulan == 1) {
														echo 'Januari';
													}
													if ($tunggakan->bulan == 2) {
														echo 'Februari';
													} elseif ($tunggakan->bulan == 3) {
														echo 'Maret';
													} elseif ($tunggakan->bulan == 4) {
														echo 'April';
													} elseif ($tunggakan->bulan == 5) {
														echo 'Mei';
													} elseif ($tunggakan->bulan == 6) {
														echo 'Juni';
													} elseif ($tunggakan->bulan == 7) {
														echo 'Juli';
													} elseif ($tunggakan->bulan == 8) {
														echo 'Agustus';
													} elseif ($tunggakan->bulan == 9) {
														echo 'September';
													} elseif ($tunggakan->bulan == 10) {
														echo 'Oktober';
													} elseif ($tunggakan->bulan == 11) {
														echo 'November';
													} elseif ($tunggakan->bulan == 12) {
														echo 'Desember';
													} ?>
											</td>
											<td> <?= $tunggakan->tahun ?> </td>
											<td style="text-align: right;"><?= number_format($tunggakan->biaya_pembayaran, 0, ',', '.') ?></td>
											<td style="text-align: center; width: 7.3%;">
												<a class="btn btn-success btn-xs btnEditTunggakanPembayaran" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $tunggakan->id_tunggakan_pembayaran; ?>"><i class="fa fa-edit"></i></a>&nbsp;
												<a onclick="return confirm('Apakah anda yakin untuk menghapus?')" href="<?= base_url() ?>/tunggakan_pembayaran/hapus/<?= $tunggakan->id_tunggakan_pembayaran; ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Tunggakan Pembayaran Siswa</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Tunggakan_Pembayaran/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_tunggakan_pembayaran" name="id_tunggakan_pembayaran" class="form-control" readonly>
						</div>
						<div class="form-group ta">
							<label>Tahun Ajaran</label>
							<input type="text" id="id_tahun_ajaran" name="id_tahun_ajaran" value="<?= $this->session->userdata('id_tahun_ajaran'); ?>" class="form-control" readonly>
							<input type="text" id="nama_ajr" name="" value="<?= $this->session->userdata('nama_tahun_ajaran'); ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<select name="id_siswa" id="id_siswa" class="form-control" required>
								<option value="">--Silahkan Pilih--</option>
								<?php foreach ($siswa as $sisw) : ?>
									<option value="<?= $sisw->id_siswa ?>"><?= $sisw->nama_lengkap ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Jenis Pembayaran</label>
							<select name="id_jenis_pembayaran" id="id_jenis_pembayaran" class="form-control" required>
								<option value="">--Silahkan Pilih--</option>
								<?php foreach ($jenis_pembayaran as $jp) : ?>
									<option value="<?= $jp->id_jenis_pembayaran ?>"><?= $jp->jenis_pembayaran ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-5">
									<label>Bulan</label>
									<!-- <input type="number" id="bulan" name="bulan" min="1" max="12" class="form-control"> -->
									<!-- <label>Level</label> -->
									<select name="bulan" id="bulan" class="form-control" required>
										<option value="">--Silahkan Pilih--</option>
										<option value="1">Januari</option>
										<option value="2">Februari</option>
										<option value="3">Maret</option>
										<option value="4">April</option>
										<option value="5">Mei</option>
										<option value="6">Juni</option>
										<option value="7">Juli</option>
										<option value="8">Agustus</option>
										<option value="9">September</option>
										<option value="10">Oktober</option>
										<option value="11">November</option>
										<option value="12">Desember</option>
									</select>
								</div>
								<div class="col-md-7">
									<label>Tahun</label>
									<input type="text" id="tahun" name="tahun" maxlength="4" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Nominal</label>
							<input type="text" id="biaya_pembayaran" name="biaya_pembayaran" maxlength="11" class="form-control" required>
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
