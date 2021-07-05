$(function () 
{
	$(".btnTambahAbsensi").on("click", function() {
        $("#staticBackdropLabel").html("Form Transaksi Absensi");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Absensi/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});
	
	$(".btnEditAbsensi").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Transaksi Absensi");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Absensi/update"
		);

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
				$("#id_siswa").val(data.id_siswa);
				$("#alasan").val(data.alasan);
				$("#keterangan").val(data.keterangan);
				$("#tanggal_absensi").val(data.tanggal_absensi);
			},
		});
	});
});
