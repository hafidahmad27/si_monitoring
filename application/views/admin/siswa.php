<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Siswa
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
									<th>No. Induk</th>
									<th>Nama Lengkap</th>
									<th>Kelas</th>
									<th>Jenis Kelamin</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th style="width: 30%;">Alamat</th>
									<th>No. Telp</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1234</td>
									<td>Joshua Suherman
									</td>
									<td>XI TKR-1</td>
									<td>Laki-Laki</td>
									<td>Sidoarjo</td>
									<td>28-04-2002</td>
									<td>JL. Merpati Indah No. 34, Kec. Wonokromo, Kel. Karang Rejo, Surabaya</td>
									<td>087843457878</td>
									<td>Edit | Delete</td>
								</tr>
								<tr>
									<td>1234</td>
									<td>Joshua Suherman
									</td>
									<td>XI TKR-1</td>
									<td>Laki-Laki</td>
									<td>Sidoarjo</td>
									<td>28-04-2002</td>
									<td>JL. Merpati Indah No. 34, Kec. Wonokromo, Kel. Karang Rejo, Surabaya</td>
									<td>087843457878</td>
									<td>Edit | Delete</td>
								</tr>
								<tr>
									<td>1234</td>
									<td>Joshua Suherman
									</td>
									<td>XI TKR-1</td>
									<td>Laki-Laki</td>
									<td>Sidoarjo</td>
									<td>28-04-2002</td>
									<td>JL. Merpati Indah No. 34, Kec. Wonokromo, Kel. Karang Rejo, Surabaya</td>
									<td>087843457878</td>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Input Siswa</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" id="" name="id_siswa" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label>No. Induk</label>
						<input type="number" id="" name="no_induk" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" id="" name="nama_lengkap" class="form-control">
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<select name="id_kelas" id="" class="form-control">
							<option>X TKR-1</option>
							<option>XI MM-2</option>
							<option>XII PMSR-3</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select name="jenis_kelamin" id="" class="form-control">
							<option>Laki-Laki</option>
							<option>Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input type="text" id="" name="tempat_lahir" class="form-control">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" id="" name="tanggal_lahir" class="form-control">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="" id="" name="alamat" cols="" rows="4" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>No. Telp</label>
						<input type="number" id="" name="no_telp" class="form-control">
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
