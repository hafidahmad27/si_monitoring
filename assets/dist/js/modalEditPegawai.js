$(function ()
{
	$(".btnTambahPegawai").on("click", function() {
        $("#staticBackdropLabel").html("Form Input Pegawai");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Pegawai/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditPegawai").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Pegawai");
		$(".modal-footer button[type=submit]").html("Update");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/pegawai/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/pegawai/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_pegawai").val(data.id_pegawai);
				$("#nama_pegawai").val(data.nama_pegawai);
				$("#telepon").val(data.telepon);
			},
		});
	});
});
