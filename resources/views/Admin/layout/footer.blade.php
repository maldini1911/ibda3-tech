  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; {{date('Y')}} <a href="{{url('/')}}">Ibda3</a></strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{url('/')}}/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{url('/')}}/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('/')}}/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
@if(App::getLocale() == 'en')
<script src="{{url('/')}}/adminlte/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{url('/')}}/adminlte/js/demo.js"></script>
@elseif(App::getLocale() == 'ar'))
<script src="{{url('/')}}/adminlte/js/rtl/adminlte.min.js"></script>
<script src="{{url('/')}}/adminlte/js/rtl/demo.js"></script>
<script src="{{url('/')}}/adminlte/js/rtl/persian-datepicker.min.js"></script>
<script src="{{url('/')}}/adminlte/js/rtl/persian-date.min.js"></script>
@endif
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{url('/')}}/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{url('/')}}/adminlte/plugins/raphael/raphael.min.js"></script>
<script src="{{url('/')}}/adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{url('/')}}/adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{url('/')}}/adminlte/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="{{url('/')}}/adminlte/js/pages/dashboard2.js"></script>
<!-- DataTables -->
<script src="{{url('/')}}/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{url('/')}}/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

@stack('js')
</body>
</html>
