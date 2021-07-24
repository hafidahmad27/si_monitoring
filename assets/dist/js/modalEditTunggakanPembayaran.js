$(function ()
{
	$(".btnTambahTunggakanPembayaran").on("click", function() {
        $("#staticBackdropLabel").html("Form Transaksi Tunggakan Pembayaran Siswa");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Tunggakan_Pembayaran/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditTunggakanPembayaran").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Transaksi Tunggakan Pembayaran Siswa");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Tunggakan_Pembayaran/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Tunggakan_Pembayaran/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_tunggakan_pembayaran").val(data.id_tunggakan_pembayaran);
				$("#id_siswa").val(data.id_siswa);
				$("#id_jenis_pembayaran").val(data.id_jenis_pembayaran);
				$("#bulan").val(data.bulan);
				$("#tahun").val(data.tahun);
				$("#biaya_pembayaran").val(data.biaya_pembayaran);
			},
		});
	});
});
