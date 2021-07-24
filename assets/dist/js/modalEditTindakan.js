$(function ()
{
	$(".btnTambahTindakan").on("click", function() {
        $("#staticBackdropLabel").html("Form Input Tindakan");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Tindakan/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditTindakan").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Tindakan");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Tindakan/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Tindakan/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_tindakan").val(data.id_tindakan);
				$("#nama_tindakan").val(data.nama_tindakan);
			},
		});
	});
});
