<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Pegawai
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
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
							<i class="fa fa-plus"></i> Tambah
						</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama Pegawai</th>
									<th>Username</th>
									<th>Password</th>
									<th>Level</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Mister Tukul
									</td>
									<td>tukul</td>
									<td>tkl234axz</td>
									<td>Staff TU</td>
									<td>Edit | Delete</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Jeremy Teti
									</td>
									<td>jeremy</td>
									<td>12345</td>
									<td>Guru BK</td>
									<td>Edit | Delete</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Kevin Volland
									</td>
									<td>kevoll34</td>
									<td>and123xyz</td>
									<td>Wali Kelas</td>
									<td>Edit | Delete</td>
								</tr>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Pegawai</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" id="" name="id_pegawai" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label>Nama Pegawai</label>
						<input type="text" id="" name="nama_pegawai" class="form-control">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" id="" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" id="" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label>Level</label>
						<select name="level" id="" class="form-control">
							<option>Admin</option>
							<option>Guru BK</option>
							<option>Wali Kelas</option>
							<option>Staff TU</option>
						</select>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->
