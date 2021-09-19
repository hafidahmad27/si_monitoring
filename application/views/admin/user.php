<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Manage User</h1>
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
					<button type="button" class="btn btn-primary btnTambahUser" data-toggle="modal" data-target="#staticBackdrop">
						<i class="fa fa-plus"></i> Tambah
					</button>
					<div class="card mt-1">
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Pegawai</th>
										<th>Username</th>
										<th>Password</th>
										<th>Level</th>
										<th style="text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($user as $usr) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $usr->nama_pegawai ?>
											<td><?= $usr->username ?>
											<td><?= $usr->password ?>
											<td><?= $usr->level ?>
											</td>
											<td style="text-align: center;">
												<a class="btn btn-primary btn-xs btnEditUser" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $usr->id_user; ?>"><i class="fa fa-edit"></i></a>&nbsp;
												<a href="<?= base_url() ?>/user/hapus/<?= $usr->id_user; ?>" class="btn btn-danger btn-xs swalDefaultError"><i class="fas fa-trash"></i></a>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input User</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>User/tambah_aksi" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_user" name="id_user" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Pegawai</label>
							<select name="id_pegawai" id="id_pegawai" class="form-control" style="width: 100%;" required>
								<option value="">--Silahkan Pilih--</option>
								<?php foreach ($pegawai as $peg) : ?>
									<option value="<?= $peg->id_pegawai ?>"><?= $peg->nama_pegawai ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" id="username" name="username" maxlength="15" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" id="password" name="password" maxlength="15" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Level</label>
							<select name="level" id="level" class="form-control" required>
								<option value="">--Silahkan Pilih--</option>
								<option value="guru_bk">Guru BK</option>
								<option value="wali_kelas">Wali Kelas</option>
								<option value="staff_tu">Staff TU</option>
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
