<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Jenis Pembayaran
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
						<button type="button" class="btn btn-primary btnTambahJenisPembayaran" data-toggle="modal" data-target="#staticBackdrop">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Jenis Pembayaran</th>
									<th>Aksi</th>
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
											<a class="btn btn-success btn-sm btnEditJenisPembayaran" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $jpem->id_jenis_pembayaran; ?>"><i class="fa fa-edit"></i></a>
											<a onclick="return confirm('Apakah anda yakin untuk menghapus?')" href="<?= base_url() ?>/Jenis_Pembayaran/hapus/<?= $jpem->id_jenis_pembayaran; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
							<input type="text" id="jenis_pembayaran" name="jenis_pembayaran" class="form-control">
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
