$(function ()
{
	$(".btnTambahKelas").on("click", function() {
        $("#staticBackdropLabel").html("Form Input Kelas");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Kelas/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditKelas").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Kelas");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Kelas/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Kelas/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_kelas").val(data.id_kelas);
				$("#nama_kelas").val(data.nama_kelas);
			},
		});
	});
});
