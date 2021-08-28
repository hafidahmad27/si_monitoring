<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-10">
					<h1 class="m-0">Daftar Tunggakan Pembayaran Siswa</h1>
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
										<th>No</th>
										<th>Tahun Ajaran</th>
										<th>Jenis Pembayaran</th>
										<th>Bulan</th>
										<th width="1">Tahun</th>
										<th style="text-align: center;">Nominal</th>
										<!-- <th>Total Tunggakan</th> -->
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($info_tunggakan_pembayaran as $tunggakan) : ?>
										<tr>
											<td> <?= $no++ ?></td>
											<td> <?= $tunggakan->nama_tahun_ajaran ?> </td>
											<td> <?= $tunggakan->jenis_pembayaran ?> </td>
											<td> <?php if ($tunggakan->bulan == 1) {
														echo 'Januari';
													}
													if ($tunggakan->bulan == 2) {
														echo 'Februari';
													} elseif ($tunggakan->bulan == 3) {
														echo 'Maret';
													} elseif ($tunggakan->bulan == 4) {
														echo 'April';
													} elseif ($tunggakan->bulan == 5) {
														echo 'Mei';
													} elseif ($tunggakan->bulan == 6) {
														echo 'Juni';
													} elseif ($tunggakan->bulan == 7) {
														echo 'Juli';
													} elseif ($tunggakan->bulan == 8) {
														echo 'Agustus';
													} elseif ($tunggakan->bulan == 9) {
														echo 'September';
													} elseif ($tunggakan->bulan == 10) {
														echo 'Oktober';
													} elseif ($tunggakan->bulan == 11) {
														echo 'November';
													} elseif ($tunggakan->bulan == 12) {
														echo 'Desember';
													} ?>
											</td>
											<td> <?= $tunggakan->tahun ?> </td>
											<td align="right"> <?= number_format($tunggakan->biaya_pembayaran, 0, ',', '.') ?> </td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<?php
									$no = 1;
									foreach ($get_total_tunggakan as $tot) : ?>
										<tr>
											<td colspan="5" align="right"><strong>Total Tunggakan = </strong></td>
											<td colspan="6" align="right">
												<strong><?= number_format($tot->tot_biaya, 0, ',', '.') ?></strong>
											</td>
										</tr>
									<?php endforeach; ?>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row (main row) -->
	</section>
</div><!-- /.container-fluid -->
<!-- /.content -->
