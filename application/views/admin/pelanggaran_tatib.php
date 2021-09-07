<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Manage Pelanggaran Tata Tertib</h1>
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
					<button type="button" class="btn btn-primary btnTambahPelanggaranTatib" data-toggle="modal" data-target="#staticBackdrop">
						<i class="fa fa-plus"></i> Tambah
					</button>
					<div class="card mt-1">
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th style="text-align: center;">Bentuk Pelanggaran</th>
										<th>Poin</th>
										<th style="width: 8%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($pelanggaran_tatib as $plg_tatib) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $plg_tatib->bentuk_pelanggaran ?>
											<td><?= $plg_tatib->poin ?>
											</td>
											<td style="text-align: center;">
												<a class="btn btn-success btn-xs btnEditPelanggaranTatib" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $plg_tatib->id_pelanggaran_tatib; ?>"><i class="fa fa-edit"></i></a>&nbsp;
												<button type="button" class="btn btn-danger btn-xs swalErrorFK" data-id="<?= $plg_tatib->id_pelanggaran_tatib; ?>" data-url="<?= base_url() ?>/Pelanggaran_Tatib/hapus/"><i class="fas fa-trash"></i></button>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Pelanggaran Tata Tertib</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Pelanggaran_Tatib/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_pelanggaran_tatib" name="id_pelanggaran_tatib" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Bentuk Pelanggaran</label>
							<textarea id="bentuk_pelanggaran" name="bentuk_pelanggaran" cols="" rows="3" maxlength="150" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Poin</label>
							<input type="number" id="poin" name="poin" min="10" max="9999" class="form-control" required>
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
