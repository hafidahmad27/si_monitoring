<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Manage Jenis Pembayaran</h1>
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
					<button type="button" class="btn btn-primary btnTambahJenisPembayaran" data-toggle="modal" data-target="#staticBackdrop">
						<i class="fa fa-plus"></i> Tambah
					</button>
					<div class="card mt-1">
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Jenis Pembayaran</th>
										<th style="text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($jenis_pembayaran as $jpem) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $jpem->jenis_pembayaran ?>
											</td>
											<td style="text-align: center;">
												<a class="btn btn-success btn-xs btnEditJenisPembayaran" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $jpem->id_jenis_pembayaran; ?>"><i class="fa fa-edit"></i></a>&nbsp;
												<button type="button" class="btn btn-danger btn-xs swalErrorFK" data-id="<?= $jpem->id_jenis_pembayaran; ?>" data-url="<?= base_url() ?>Jenis_Pembayaran/hapus/"><i class="fas fa-trash"></i></button>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Jenis Pembayaran</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Jenis_Pembayaran/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_jenis_pembayaran" name="id_jenis_pembayaran" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Jenis Pembayaran</label>
							<input type="text" id="jenis_pembayaran" name="jenis_pembayaran" maxlength="50" class="form-control" required>
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
