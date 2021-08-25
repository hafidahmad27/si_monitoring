<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-10">
					<h1 class="m-0">Daftar Catatan Pelanggaran Siswa</h1>
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
										<th style="width: 10%;">Tahun Ajaran</th>
										<th style="width: 1%;">Tanggal</th>
										<th style="width: 25%;">Bentuk Pelanggaran</th>
										<th style="width: 1%;">Poin</th>
										<th style="width: 20%;">Nama Tindakan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($catatan_pelanggaran as $catatplg) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $catatplg->nama_tahun_ajaran ?></td>
											<td><?= date('d-m-Y', strtotime($catatplg->tanggal)) ?></td>
											<td><?= $catatplg->bentuk_pelanggaran ?>
											<td align="right"><?= $catatplg->poin ?>
											<td><?= $catatplg->nama_tindakan ?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<?php
									$no = 1;
									foreach ($get_total_poin as $tot) : ?>
										<tr>
											<td colspan="5" align="right">
												<strong>Total Poin = &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $tot->total_poin; ?></strong>
											</td>
											<td></td>
										</tr>
									<?php endforeach; ?>
								</tfoot>
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
						<div class="form-group">
							<label>Tanggal</label>
							<input type="text" id="tanggal" name="tanggal" value="<?= date('d/m/Y') ?>" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label><br>
							<select name="id_siswa" id="id_siswa" class="form-control" style="width: 100%;">
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
