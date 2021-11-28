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
		<h3 style="font-size: 12pt; line-height: 20px;">LAPORAN TUNGGAKAN PEMBAYARAN TAHUN AJARAN
			<?php if ($status == 1) : ?>
				<?php foreach ($r_tahun_ajaran as $t) : ?>
					<?= $t->nama_tahun_ajaran ?>
				<?php endforeach; ?>
			<?php else : ?>
				<?= $r_tahun_ajaran ?>
			<?php endif; ?>
		</h3>
	</center>
	<div class="row">
		<?php
		$no = 1;
		foreach ($identitas as $i) : ?>
			<div class="col-sm-5">
				<div class="form-group">
					<label>Kelas : </label>
					<label><?= $i->nama_kelas ?></label>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<label style="font-weight: bold;"></label>
	<table border="1" cellspacing="0" cellpadding="5" width="100%" style="margin-top: 1%;">
		<thead>
			<tr>
				<th>Nama Lengkap</th>
				<th>Jenis Pembayaran</th>
				<th>Bulan</th>
				<th>Tahun</th>
				<th>Nominal</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($report_tunggakan_pmbyrn as $tunggakan) : ?>
				<tr>
					<td> <?= $tunggakan->nama_lengkap ?> </td>
					<td> <?= $tunggakan->jenis_pembayaran ?>
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
					<td style="text-align: right;"><?= number_format($tunggakan->biaya_pembayaran, 0, ',', '.') ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<h5 style="font-weight: normal;">Dicetak pada tanggal : <?= date('d M Y') ?>, Pukul : <?= date('H:i:s') ?></h5>
</body>

</html>
