<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Profil Siswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">

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
					<!-- Profile Image -->
					<div class="card card-secondary card-outline">
						<div class="card-body box-profile">
							<div class="text-center">
								<img class="rounded" style="border: 2px solid #6c757d; padding: 5px;" src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg">
							</div>
							<div class="card-body">
								<table class="table">
									<tbody>
										<tr>
											<td>No. Induk : </td>
											<td><?= $this->session->userdata('no_induk'); ?></td>
										</tr>
										<tr>
											<td>Nama Lengkap : </td>
											<td><?= $this->session->userdata('nama_lengkap'); ?></td>
										</tr>
										<tr>
											<td>Kelas : </td>
											<td><?= $this->session->userdata('nama_kelas'); ?></td>
										</tr>
										<tr>
											<td>Jenis Kelamin : </td>
											<td><?= $this->session->userdata('jenis_kelamin'); ?></td>
										</tr>
										<tr>
											<td>Tempat, Tanggal Lahir : </td>
											<td><?= $this->session->userdata('tempat_lahir'); ?>, <?= date('d-m-Y', strtotime($this->session->userdata('tanggal_lahir'))); ?></td>
										</tr>
										<tr>
											<td>Alamat : </td>
											<td><?= $this->session->userdata('alamat'); ?></td>
										</tr>
										<tr>
											<td>No. Telepon : </td>
											<td><?= $this->session->userdata('no_telp'); ?></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
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
