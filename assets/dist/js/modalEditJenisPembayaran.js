$(function ()
{
	$(".btnTambahJenisPembayaran").on("click", function() {
        $("#staticBackdropLabel").html("Form Input Jenis Pembayaran");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Jenis_Pembayaran/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditJenisPembayaran").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Jenis Pembayaran");
		$(".modal-footer button[type=submit]").html("Update");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Jenis_Pembayaran/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Jenis_Pembayaran/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_jenis_pembayaran").val(data.id_jenis_pembayaran);
				$("#jenis_pembayaran").val(data.jenis_pembayaran);
			},
		});
	});
});
