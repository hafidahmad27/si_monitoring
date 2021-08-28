$(function ()
{
	$(".btnTambahAbsensi").on("click", function() {
        $("#staticBackdropLabel").html("Form Transaksi Absensi");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Absensi/tambah_aksi"
		);
    $(".ta").show();
    $("#id_tahun_ajaran").prop("type", "hidden")
    $("#nama_ajr").prop("type", "text")
    $("#tanggal_absensi").prop("type", "text");
    $("#tagal").hide();

		document.getElementById('formResetData').reset();
	});

	$(".btnEditAbsensi").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Transaksi Absensi");
		$(".modal-footer button[type=submit]").html("Update");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Absensi/update"
		);
    $(".ta").hide();
    $("#id_tahun_ajaran").prop("type", "hidden")
    $("#nama_ajr").prop("type", "hidden")
    $("#tanggal_absensi").prop("type", "text");
    $("#tagal").hide();
    // $("#tagal").removeAttribute("value");
    document.getElementById("tagal").removeAttribute("value");

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Absensi/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_absensi").val(data.id_absensi);
				$("#id_tahun_ajaran").val(data.id_tahun_ajaran);
				$("#id_siswa").val(data.id_siswa);
				$("#alasan").val(data.alasan);
				$("#keterangan").val(data.keterangan);
				$("#tanggal_absensi").val(data.tanggal_absensi);
			},
		});
	});
});
