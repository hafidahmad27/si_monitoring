<footer class="main-footer">
	<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.1.0
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
<!-- load script -->
<script src="<?= base_url() ?>assets/dist/js/modalEditTahunAjaran.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditKelas.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditSiswa.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditPelanggaranTatib.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditTindakan.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditJenisPembayaran.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditPegawai.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditUser.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditCatatanPelanggaran.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditAbsensi.js"></script>
<script src="<?= base_url() ?>assets/dist/js/modalEditTunggakanPembayaran.js"></script>
<!-- Page specific script -->
<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"lengthChange": true,
			"autoWidth": false,
			// "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			"iDisplayLength": 100
		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
		$('.select2').select2()
	});
</script>
<script>
	var biaya_pembayaran = document.getElementById("biaya_pembayaran");
	biaya_pembayaran.addEventListener("keyup", function(e) {
		// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
		biaya_pembayaran.value = formatRupiah(this.value);
	});
	$("#tahun").keyup(function() {
		$("#tahun").val(this.value.match(/[0-9]*/));
	});

	/* Fungsi formatRupiah */
	function formatRupiah(angka, prefix) {
		var number_string = angka.replace(/[^,\d]/g, "").toString(),
			split = number_string.split(","),
			sisa = split[0].length % 3,
			biaya_pembayaran = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? "." : "";
			biaya_pembayaran += separator + ribuan.join(".");
		}

		biaya_pembayaran = split[1] != undefined ? biaya_pembayaran + "," + split[1] : biaya_pembayaran;
		return prefix == undefined ? biaya_pembayaran : biaya_pembayaran ? +biaya_pembayaran : "";
	}
</script>
<script>
	$(function() {
		/* ChartJS
		 * -------
		 * Here we will create a few charts using ChartJS
		 */

		//--------------
		//- AREA CHART -
		//--------------

		// Get context with jQuery - using jQuery's .get() method.
		var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

		var areaChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
					label: 'Digital Goods',
					backgroundColor: 'rgba(60,141,188,0.9)',
					borderColor: 'rgba(60,141,188,0.8)',
					pointRadius: false,
					pointColor: '#3b8bba',
					pointStrokeColor: 'rgba(60,141,188,1)',
					pointHighlightFill: '#fff',
					pointHighlightStroke: 'rgba(60,141,188,1)',
					data: [28, 48, 40, 19, 86, 27, 90]
				},
				{
					label: 'Electronics',
					backgroundColor: 'rgba(210, 214, 222, 1)',
					borderColor: 'rgba(210, 214, 222, 1)',
					pointRadius: false,
					pointColor: 'rgba(210, 214, 222, 1)',
					pointStrokeColor: '#c1c7d1',
					pointHighlightFill: '#fff',
					pointHighlightStroke: 'rgba(220,220,220,1)',
					data: [65, 59, 80, 81, 56, 55, 40]
				},
			]
		}

		var areaChartOptions = {
			maintainAspectRatio: false,
			responsive: true,
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					gridLines: {
						display: false,
					}
				}],
				yAxes: [{
					gridLines: {
						display: false,
					}
				}]
			}
		}

		// This will get the first returned node in the jQuery collection.
		new Chart(areaChartCanvas, {
			type: 'line',
			data: areaChartData,
			options: areaChartOptions
		})

		//-------------
		//- LINE CHART -
		//--------------
		var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
		var lineChartOptions = $.extend(true, {}, areaChartOptions)
		var lineChartData = $.extend(true, {}, areaChartData)
		lineChartData.datasets[0].fill = false;
		lineChartData.datasets[1].fill = false;
		lineChartOptions.datasetFill = false

		var lineChart = new Chart(lineChartCanvas, {
			type: 'line',
			data: lineChartData,
			options: lineChartOptions
		})

		//-------------
		//- DONUT CHART -
		//-------------
		// Get context with jQuery - using jQuery's .get() method.
		var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
		var donutData = {
			labels: [
				'Chrome',
				'IE',
				'FireFox',
				'Safari',
				'Opera',
				'Navigator',
			],
			datasets: [{
				data: [700, 500, 400, 600, 300, 100],
				backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
			}]
		}
		var donutOptions = {
			maintainAspectRatio: false,
			responsive: true,
		}
		//Create pie or douhnut chart
		// You can switch between pie and douhnut using the method below.
		new Chart(donutChartCanvas, {
			type: 'doughnut',
			data: donutData,
			options: donutOptions
		})

		//-------------
		//- PIE CHART -
		//-------------
		// Get context with jQuery - using jQuery's .get() method.
		var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
		var pieData = donutData;
		var pieOptions = {
			maintainAspectRatio: false,
			responsive: true,
		}
		//Create pie or douhnut chart
		// You can switch between pie and douhnut using the method below.
		new Chart(pieChartCanvas, {
			type: 'pie',
			data: pieData,
			options: pieOptions
		})

		//-------------
		//- BAR CHART -
		//-------------
		var barChartCanvas = $('#barChart').get(0).getContext('2d')
		var barChartData = $.extend(true, {}, areaChartData)
		var temp0 = areaChartData.datasets[0]
		var temp1 = areaChartData.datasets[1]
		barChartData.datasets[0] = temp1
		barChartData.datasets[1] = temp0

		var barChartOptions = {
			responsive: true,
			maintainAspectRatio: false,
			datasetFill: false
		}

		new Chart(barChartCanvas, {
			type: 'bar',
			data: barChartData,
			options: barChartOptions
		})

		//---------------------
		//- STACKED BAR CHART -
		//---------------------
		var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
		var stackedBarChartData = $.extend(true, {}, barChartData)

		var stackedBarChartOptions = {
			responsive: true,
			maintainAspectRatio: false,
			scales: {
				xAxes: [{
					stacked: true,
				}],
				yAxes: [{
					stacked: true
				}]
			}
		}

		new Chart(stackedBarChartCanvas, {
			type: 'bar',
			data: stackedBarChartData,
			options: stackedBarChartOptions
		})
	})
</script>
</body>

</html>
