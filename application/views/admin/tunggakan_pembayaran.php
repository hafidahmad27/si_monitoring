<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tunggakan Pembayaran Siswa
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
						<button type="button" class="btn btn-primary btnTambahTunggakanPembayaran" data-toggle="modal" data-target="#staticBackdrop">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No. Induk</th>
									<th>Nama Lengkap</th>
									<th>Kelas</th>
									<th>Jenis Pembayaran</th>
									<th>Bulan</th>
									<th>Tahun</th>
									<th>Biaya Pembayaran</th>
									<!-- <th>Total Tunggakan</th> -->
									<th>Aksi</th>
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
										<td><?= $tunggakan->bulan ?>
										<td><?= $tunggakan->tahun ?>
										<td style="text-align: right;"><?= number_format($tunggakan->biaya_pembayaran, 0, ',', '.') ?></td>
										<!-- <td style="text-align: right;"><?= number_format($tunggakan->total_tunggakan, 0, ',', '.') ?></td> -->
										<td style="text-align: center;">
											<a class="btn btn-success btn-sm btnEditTunggakanPembayaran" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $tunggakan->id_tunggakan_pembayaran; ?>"><i class="fa fa-edit"></i></a>
											<a onclick="return confirm('Apakah anda yakin untuk menghapus?')" href="<?= base_url() ?>/tunggakan_pembayaran/hapus/<?= $tunggakan->id_tunggakan_pembayaran; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Transaksi Tunggakan Pembayaran Siswa</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Tunggakan_Pembayaran/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="" name="id_tunggakan_pembayaran" class="form-control" readonly>
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
								<div class="col-xs-5">
									<label>Bulan</label>
									<input type="number" id="bulan" name="bulan" min="1" max="12" class="form-control">
								</div>
								<div class="col-xs-7">
									<label>Tahun</label>
									<input type="number" id="tahun" name="tahun" min="2015" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Biaya Pembayaran</label>
							<input type="number" id="biaya_pembayaran" name="biaya_pembayaran" min="0" class="form-control">
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
