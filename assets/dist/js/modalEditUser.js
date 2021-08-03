$(function ()
{
	$(".btnTambahUser").on("click", function() {
        $("#staticBackdropLabel").html("Form Input User");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/User/tambah_aksi"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditUser").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit User");
		$(".modal-footer button[type=submit]").html("Edit");
		$(".modal-body form").attr(
			"action",
			"http://localhost/si_monitoring/User/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/si_monitoring/User/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
				console.log(data);
				$("#id_user").val(data.id_user);
				$("#id_pegawai").val(data.id_pegawai);
				$("#username").val(data.username);
				$("#password").val(data.password);
				$("#level").val(data.level);
			},
		});
	});
});
