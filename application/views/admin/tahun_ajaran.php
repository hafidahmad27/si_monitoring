<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Manage Tahun Ajaran</h1>
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
					<button type="button" class="btn btn-primary btnTambahTahunAjaran" data-toggle="modal" data-target="#staticBackdrop">
						<i class="fa fa-plus"></i> Tambah
					</button>
					<div class="card mt-1">
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Tahun Ajaran</th>
										<th>Status</th>
										<th style="text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($tahun_ajaran as $thn_ajaran) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $thn_ajaran->nama_tahun_ajaran; ?></td>
											<td><?= $thn_ajaran->status == '0' ? 'Tidak Aktif' : 'Aktif' ?>
											</td>
											<td style="text-align: center;">
												<!-- <a class="btn <?= $thn_ajaran->status == 0 ? 'btn-success' : 'btn-warning disabled' ?> btn-xs" href="<?= base_url() ?>/Tahun_Ajaran/ubah_status/<?= $thn_ajaran->id_tahun_ajaran; ?>" <?php if ($thn_ajaran->status == 0) : ?> onclick="return confirm('Yakin ingin MENGAKTIFKAN Tahun Ajaran ini?')" <?php else : ?> onclick="return confirm('Yakin ingin MENONAKTIFKAN Tahun Ajaran ini?')" <?php endif; ?> <?php if ($thn_ajaran->status == 0) : ?> <i class="nav-icon fas fa-check"></i> Aktifkan
												<?php else : ?> <i class="nav-icon fas fa-times">
													</i> Nonaktifkan
												<?php endif; ?>
												</a> -->
												<a class="btn btn-success btn-xs btnEditTahunAjaran" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $thn_ajaran->id_tahun_ajaran; ?>"><i class="fa fa-edit"></i></a>&nbsp;
												<a onclick="return confirm('Apakah anda yakin untuk menghapus?')" href="<?= base_url() ?>/Tahun_Ajaran/hapus/<?= $thn_ajaran->id_tahun_ajaran; ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Tahun Ajaran</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>Tahun_Ajaran/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_tahun_ajaran" name="id_tahun_ajaran" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Tahun Ajaran</label>
							<input type="text" id="nama_tahun_ajaran" name="nama_tahun_ajaran" maxlength="16" class="form-control">
						</div>
						<div class="form-group">
							<label>Status</label>
							<select name="status" id="status" class="form-control">
								<option value="0">Tidak Aktif</option>
								<option value="1">Aktif</option>
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
