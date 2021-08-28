$(function ()
{
	$(".btnTambahPelanggaranTatib").on("click", function() {
        $("#staticBackdropLabel").html("Form Input Pelanggaran Tata Tertib");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Pelanggaran_Tatib/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditPelanggaranTatib").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Pelanggaran Tata Tertib");
		$(".modal-footer button[type=submit]").html("Update");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Pelanggaran_Tatib/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Pelanggaran_Tatib/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_pelanggaran_tatib").val(data.id_pelanggaran_tatib);
				$("#bentuk_pelanggaran").val(data.bentuk_pelanggaran);
				$("#poin").val(data.poin);
			},
		});
	});
});
