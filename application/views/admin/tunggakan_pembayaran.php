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
										<th style="width: 1%;">No Induk</th>
										<th style="width: 18%; text-align: center;">Nama Lengkap</th>
										<th style="width: 7.5%; text-align: center;">Kelas</th>
										<th style="width: 18%; text-align: center;">Jenis Pembayaran</th>
										<th style="width: 1%; text-align: center;">Bulan</th>
										<th style="width: 1%; text-align: center;">Tahun</th>
										<th style="width: 10%; text-align: center;">Biaya Pembayaran</th>
										<!-- <th>Total Tunggakan</th> -->
										<th style="width: 4%; text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($tunggakan_pembayaran as $tunggakan) : ?>
										<tr>
											<td><?= $tunggakan->no_induk ?></td>
											<td><?= $tunggakan->nama_lengkap ?>
											<td><?= $tunggakan->nama_kelas ?>
											<td><?= $tunggakan->jenis_pembayaran ?>
											<td style="text-align: center;"><?= $tunggakan->bulan ?>
											<td style="text-align: center;"><?= $tunggakan->tahun ?>
											<td style="text-align: right;"><?= number_format($tunggakan->biaya_pembayaran, 0, ',', '.') ?></td>
											<!-- <td style="text-align: right;"><?= number_format($tunggakan->total_tunggakan, 0, ',', '.') ?></td> -->
											<td style="text-align: center; width: 7%;">
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
						<div class="form-group">
							<label>Nama Lengkap</label>
							<select name="id_siswa" id="id_siswa" class="form-control">
								<?php foreach ($siswa as $sisw) : ?>
									<option value="<?= $sisw->id_siswa ?>"><?= $sisw->nama_lengkap ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Jenis Pembayaran</label>
							<select name="id_jenis_pembayaran" id="id_jenis_pembayaran" class="form-control">
								<?php foreach ($jenis_pembayaran as $jp) : ?>
									<option value="<?= $jp->id_jenis_pembayaran ?>"><?= $jp->jenis_pembayaran ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-5">
									<label>Bulan</label>
									<input type="number" id="bulan" name="bulan" min="1" max="12" class="form-control">
								</div>
								<div class="col-md-7">
									<label>Tahun</label>
									<input type="number" id="tahun" name="tahun" min="2015" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Biaya Pembayaran</label>
							<input type="text" id="biaya_pembayaran" name="biaya_pembayaran" maxlength="11" class="form-control">
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
