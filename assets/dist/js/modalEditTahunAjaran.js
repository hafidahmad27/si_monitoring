$(function ()
{
	$(".btnTambahTahunAjaran").on("click", function() {
        $("#staticBackdropLabel").html("Form Input Tahun Ajaran");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Tahun_Ajaran/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditTahunAjaran").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Tahun Ajaran");
		$(".modal-footer button[type=submit]").html("Update");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Tahun_Ajaran/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Tahun_Ajaran/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_tahun_ajaran").val(data.id_tahun_ajaran);
				$("#nama_tahun_ajaran").val(data.nama_tahun_ajaran);
				$("#status").val(data.status);
			},
		});
	});
});
