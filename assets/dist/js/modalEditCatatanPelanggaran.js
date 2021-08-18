$(function ()
{
	$(".btnTambahCatatanPelanggaran").on("click", function() {
        $("#staticBackdropLabel").html("Form Transaksi Catatan Pelanggaran");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Catatan_Pelanggaran/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditCatatanPelanggaran").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Transaksi Catatan Pelanggaran");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Catatan_Pelanggaran/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Catatan_Pelanggaran/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_catatan_pelanggaran").val(data.id_catatan_pelanggaran);
				$("#id_tahun_ajaran").val(data.id_tahun_ajaran);
				$("#id_siswa").val(data.id_siswa);
				$("#id_pelanggaran_tatib").val(data.id_pelanggaran_tatib);
				$("#id_tindakan").val(data.id_tindakan);
				$("#tanggal").val(data.tanggal);
			},
		});
	});
});
