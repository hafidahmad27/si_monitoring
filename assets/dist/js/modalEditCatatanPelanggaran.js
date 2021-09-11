$(function ()
{
	$(".btnTambahCatatanPelanggaran").on("click", function() {
        $("#staticBackdropLabel").html("Form Input Catatan Pelanggaran");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Catatan_Pelanggaran/tambah_aksi"
		);
    $(".ta").show();
    $("#id_tahun_ajaran").prop("type", "hidden")
    $("#nama_ajr").prop("type", "text")
    $("#tanggal").prop("type", "text");
    $("#tagal").hide();

		document.getElementById('formResetData').reset();
	});

	$(".btnEditCatatanPelanggaran").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Catatan Pelanggaran");
		$(".modal-footer button[type=submit]").html("Update");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Catatan_Pelanggaran/update"
    );
    $(".ta").hide();
    $("#id_tahun_ajaran").prop("type", "hidden")
    $("#nama_ajr").prop("type", "hidden")
    $("#tanggal").prop("type", "text");
    $("#tagal").hide();
    // $("#tagal").removeAttribute("value");
    document.getElementById("tagal").removeAttribute("value");

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
