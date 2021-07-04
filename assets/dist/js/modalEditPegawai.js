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
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Pegawai/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Pegawai/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_pegawai").val(data.id_pegawai);
				$("#nama_pegawai").val(data.nama_pegawai);
				$("#username").val(data.username);
				$("#password").val(data.password);
				$("#level").val(data.level);
			},
		});
	});
});
