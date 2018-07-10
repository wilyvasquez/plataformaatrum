<!-- jQuery 3 -->
<script src="<?= base_url() ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>bower_components/admin-lte/dist/js/adminlte.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>bower_components/chart.js/Chart.js"></script>

<script src="<?= base_url() ?>assets/js/bootstrap-filestyle.min.js"></script>
<!-- page script -->
<script>
  $(function () {

    $(".select2").select2();

    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      "lengthMenu": [[12, 24], [12, 24]],
      'autoWidth'   : false,
      "language": {
            "lengthMenu": "Mostrar _MENU_",
            "zeroRecords": "No se encontraron datos",
            "info": "Paginas _PAGE_ de _PAGES_",
            "infoEmpty": "No se encontraron datos",
            "search": "Buscar",
	        "paginate": {
		        "first":      "Primero",
		        "last":       "Ultimo",
		        "next":       "Siguiente",
		        "previous":   "Anterior"
		    }
        },
    })
  })
</script>
</body>
</html>