<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Manage Laporan</h1>
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
					<div class="card card-warning">
						<div class="card-header">
							<h3 class="card-title">Laporan per tahun ajaran berdasarkan siswa</h3>
						</div>
						<div class="card-body">
							<form action="<?= base_url() ?>laporan/print_pdf" method="POST" id="">
								<div class="row">
									<div class="col-sm-5">
										<div class="form-group">
											<label>Nama Siswa</label>
											<select name="no_induk" class="form-control" style="width: 100%;">
												<?php foreach ($pilih_no_induk as $pns) : ?>
													<option value="<?= $pns->no_induk ?>"><?= $pns->nama_lengkap ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group">
											<label>Tahun Ajaran</label>
											<select name="nama_tahun_ajaran" class="form-control" style="width: 100%;">
												<?php foreach ($pilih_tahun_ajaran as $pta) : ?>
													<option value="<?= $pta->nama_tahun_ajaran ?>"><?= $pta->nama_tahun_ajaran ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<!-- <div class="col-sm-3">
										<div class="form-group">
											<label>Select</label>
											<select class="form-control">
												<option>option 1</option>
												<option>option 2</option>
											</select>
										</div>
									</div> -->
									<div class="col-sm-2">
										<div class="form-group"><br>
											<button type="submit" class="btn btn-primary form-control mt-2" formtarget="blank"><i class="fa fa-file-pdf"></i> Cetak</button>
											<!-- <a href="<?= base_url() . 'laporan/print_pdf/?no_induk=' . set_value('no_induk') . '&nama_tahun_ajaran=' . set_value('nama_tahun_ajaran') ?> " class="btn btn-primary form-control mt-2" target="blank"><i class="fa fa-file-pdf"></i> Cetak</a> -->
										</div>
									</div>
								</div>
							</form>
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
