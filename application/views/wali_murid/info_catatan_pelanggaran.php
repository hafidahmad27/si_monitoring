<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-10">
					<h1 class="m-0">Daftar Catatan Pelanggaran Siswa</h1>
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
										<th style="width: 11.8%;">Tahun Ajaran</th>
										<th style="width: 1%;">Tanggal</th>
										<th style="width: 25%;">Bentuk Pelanggaran</th>
										<!-- <th style="width: 1%;">Poin</th> -->
										<th style="width: 20%;">Nama Tindakan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($catatan_pelanggaran as $catatplg) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $catatplg->nama_tahun_ajaran ?></td>
											<td><?= date('d-m-Y', strtotime($catatplg->tanggal)) ?></td>
											<td><?= $catatplg->bentuk_pelanggaran ?>
												<!-- <td align="right"><?= $catatplg->poin ?> -->
											<td><?= $catatplg->nama_tindakan ?>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<!-- <tfoot>
									<?php
									$no = 1;
									foreach ($get_total_poin as $tot) : ?>
										<tr>
											<td colspan="5" align="right">
												<strong>Total Poin = &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $tot->total_poin; ?></strong>
											</td>
											<td></td>
										</tr>
									<?php endforeach; ?>
								</tfoot> -->
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
</div>
<!-- /.content-wrapper -->
