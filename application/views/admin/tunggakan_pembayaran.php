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
									<th>Jenis Pembayaran</th>
									<th>Bulan</th>
									<th>Tahun</th>
									<th>Biaya Pembayaran</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1476</td>
									<td>Andhika Pratama
									</td>
									<td>XII PMSR-2</td>
									<td>DOP</td>
									<td>01</td>
									<td>2021</td>
									<td style="text-align: right;"><?= number_format(5000000, 0, ',', '.') ?></td>
									<td>Edit | Delete</td>
								</tr>
								<tr>
									<td>1501</td>
									<td>Hendry Pratama
									</td>
									<td>X TKR-1</td>
									<td>SPP</td>
									<td>09</td>
									<td>2021</td>
									<td style="text-align: right;"><?= number_format(1000000, 0, ',', '.') ?></td>
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
					<h3 class="modal-title" id="staticBackdropLabel">Form Transaksi Tunggakan Pembayaran Siswa</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" id="" name="id_catatan_pelanggaran" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label>No. Induk</label>
						<input type="number" id="" name="no_induk" class="form-control">
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label>
						<select name="id_siswa" id="" class="form-control">
							<option>Andhika Pratama</option>
							<option>Joshua Suherman</option>
							<option>Hendry Pratama</option>
						</select>
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
						<label>Jenis Pembayaran</label>
						<select name="id_jenis_pembayaran" id="" class="form-control">
							<option>DOP</option>
							<option>SPP</option>
							<option>Lain-Lain</option>
						</select>
					</div>
					<div class="form-group">
						<label>Bulan</label>
						<input type="number" id="" name="bulan" class="form-control">
					</div>
					<div class="form-group">
						<label>Tahun</label>
						<input type="number" id="" name="tahun" class="form-control">
					</div>
					<div class="form-group">
						<label>Biaya Pembayaran</label>
						<input type="number" id="" name="biaya_pembayaran" class="form-control">
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
