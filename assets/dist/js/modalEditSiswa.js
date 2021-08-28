$(function ()
{
	$(".btnTambahSiswa").on("click", function() {
        $("#staticBackdropLabel").html("Form Input Siswa");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Siswa/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditSiswa").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Siswa");
		$(".modal-footer button[type=submit]").html("Update");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/Siswa/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/Siswa/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_siswa").val(data.id_siswa);
				$("#no_induk").val(data.no_induk);
				$("#nama_lengkap").val(data.nama_lengkap);
				$("#id_kelas").val(data.id_kelas);
				$("#jenis_kelamin").val(data.jenis_kelamin);
				$("#tempat_lahir").val(data.tempat_lahir);
				$("#tanggal_lahir").val(data.tanggal_lahir);
				$("#alamat").val(data.alamat);
				$("#no_telp").val(data.no_telp);
			},
		});
	});
});
