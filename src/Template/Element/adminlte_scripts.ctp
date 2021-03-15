<?php
    echo $this->Html->script(
    [
        '/AdminLTE/bower_components/jquery/dist/jquery.min.js',
        '/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js',
        '/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js',
        '/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
        '/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
        '/AdminLTE/bower_components/fastclick/lib/fastclick.js',
        '/AdminLTE/dist/js/adminlte.min.js',
        // '/AdminLTE/dist/js/demo.js',
    ]);
?>
<script>
  $(function () {
    $('#schedules').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
    $('#pay').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
    $('#abouts').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  });
</script>