<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-10">
					<h1 class="m-0">Daftar Absensi Siswa</h1>
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
										<th style="width: 7.5%;">Tahun Ajaran</th>
										<th style="width: 10%; text-align: center;">Tanggal</th>
										<th style="width: 10%; text-align: center;">Alasan</th>
										<th style="width: 30%; text-align: center;">Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($info_absensi as $absen) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $absen->nama_tahun_ajaran ?></td>
											<td align="center"><?= date('d-m-Y', strtotime($absen->tanggal_absensi)) ?></td>
											<td style="text-align: center; width: 10%;"><?= $absen->alasan ?>
											<td><?= $absen->keterangan ?>
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
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row (main row) -->
	</section>
</div><!-- /.container-fluid -->
<!-- /.content -->
