<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<table width="100%">
		<tr>
			<td width="14%" align="left"><img src="<?= base_url() ?>assets/dist/img/logo-smk-ikip.png" style="width: 100%;"></td>
			<td width="85%" align="center">
				<h2 style="font-size: 18pt; line-height: 8px;">SMK LABSCHOOL UNESA</h2>
				<h3 style="font-size: 13pt; line-height: 4px;">(SMK IKIP SURABAYA)</h3>
				<h3 style="font-weight: normal; font-size: 10pt; line-height: 5px;">Jl. Teratai No.4, Tambaksari, Kec. Tambaksari, Surabaya, Jawa Timur 60131 Telp. 03199445639</h3>
			</td>
		</tr>
	</table>

	<hr>

	<center>
		<h3 style="font-size: 12pt; line-height: 20px;">LAPORAN MONITORING SISWA TAHUN AJARAN
			<?php
			foreach ($r_tahun_ajaran as $t) : ?>
				<?= $t->nama_tahun_ajaran ?>
			<?php endforeach; ?>
		</h3>
	</center>
	<div class="row">
		<?php
		$no = 1;
		foreach ($identitas as $i) : ?>

			<div class="col-sm-5">
				<div class="form-group">
					<label>Nama Siswa : </label>
					<label><?= $i->nama_lengkap ?></label>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="form-group">
					<label>No. Induk : </label>
					<label><?= $i->no_induk ?></label>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="form-group">
					<label>Kelas : </label>
					<label><?= $i->nama_kelas ?></label>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<br>
	<label style="font-weight: bold;">A. Info Pelanggaran</label>
	<table border="1" cellspacing="0" cellpadding="5" width="100%" style="margin-top: 1%;">
		<thead>
			<tr>
				<th style="width: 5%;">No.</th>
				<th style="width: 15%;">Tanggal</th>
				<th style="width: 40%;">Bentuk Pelanggaran</th>
				<!-- <th>Poin</th> -->
				<th style="width: 40%;">Tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($report_catatan_plg as $lap) : ?>
				<tr>
					<td align="right"><?= $no++ ?></td>
					<td align="center"><?= date('d-m-Y', strtotime($lap->tanggal)) ?></td>
					<td><?= $lap->bentuk_pelanggaran ?></td>
					<!-- <td align="right"><?= $lap->poin ?></td> -->
					<td><?= $lap->nama_tindakan ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<!-- <tfoot>
			<?php
			$no = 1;
			foreach ($get_rtotal_poin as $tot) : ?>
				<tr>
					<td colspan="4" align="right">
						<strong>Total Poin = &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $tot->total_poin; ?></strong>
					</td>
					<td></td>
				</tr>
			<?php endforeach; ?>
		</tfoot> -->
	</table>
	<br>
	<label style="font-weight: bold;">B. Info Absensi</label>
	<table border="1" cellspacing="0" cellpadding="5" width="100%" style="margin-top: 1%;">
		<thead>
			<tr>
				<th style="width: 5%;">No.</th>
				<th align="center" style="width: 15%;">Tanggal</th>
				<th style="width: 20%;">Alasan</th>
				<th style="width: 60%;">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($report_absensi as $lap) : ?>
				<tr>
					<td align="right"><?= $no++ ?></td>
					<td align="center"><?= date('d-m-Y', strtotime($lap->tanggal_absensi)) ?></td>
					<td align="center"><?= $lap->alasan ?></td>
					<td align="left"><?= $lap->keterangan ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
		</tfoot>
	</table>
	<br>
	<label style="font-weight: bold;">C. Info Tunggakan Pembayaran</label>
	<table border="1" cellspacing="0" cellpadding="5" width="100%" style="margin-top: 1%;">
		<thead>
			<tr>
				<th style="width: 5%;">No</th>
				<th style="width: 55%;">Jenis Pembayaran</th>
				<th style="width: 10%;">Bulan</th>
				<th style="width: 5%;">Tahun</th>
				<th style="width: 25%;">Nominal</th>
				<th style="width: 25%;">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($report_tunggakan_pmbyrn as $lap) : ?>
				<tr>
					<td align="right"><?= $no++ ?></td>
					<td><?= $lap->jenis_pembayaran ?></td>
					<td><?php if ($lap->bulan == 1) {
							echo 'Januari';
						}
						if ($lap->bulan == 2) {
							echo 'Februari';
						} elseif ($lap->bulan == 3) {
							echo 'Maret';
						} elseif ($lap->bulan == 4) {
							echo 'April';
						} elseif ($lap->bulan == 5) {
							echo 'Mei';
						} elseif ($lap->bulan == 6) {
							echo 'Juni';
						} elseif ($lap->bulan == 7) {
							echo 'Juli';
						} elseif ($lap->bulan == 8) {
							echo 'Agustus';
						} elseif ($lap->bulan == 9) {
							echo 'September';
						} elseif ($lap->bulan == 10) {
							echo 'Oktober';
						} elseif ($lap->bulan == 11) {
							echo 'November';
						} elseif ($lap->bulan == 12) {
							echo 'Desember';
						} ?>
					</td>
					<td><?= $lap->tahun ?></td>
					<td align="right"><?= number_format($lap->biaya_pembayaran, 0, ',', '.') ?></td>
					<td><?= $lap->keterangan ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		<!-- <tfoot>
			<?php
			$no = 1;
			foreach ($get_rtotal_tunggakan as $tot) : ?>
				<tr>
					<td colspan="4" align="right"><strong>Total Tunggakan = </strong></td>
					<td colspan="5" align="right">
						<strong><?= number_format($tot->tot_biaya, 0, ',', '.') ?></strong>
					</td>
				</tr>
			<?php endforeach; ?>
		</tfoot> -->
	</table>
	<h5 style="font-weight: normal;">Dicetak pada tanggal : <?= date('d M Y') ?>, Pukul : <?= date('H:i:s') ?></h5>
</body>

</html>
