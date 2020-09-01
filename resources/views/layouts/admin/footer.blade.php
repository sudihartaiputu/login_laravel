 <!-- /.content-wrapper -->
 <footer class="main-footer">
     <strong>Copyright &copy; 2020 <a href="https://facebook.com/sudiharta/">I Putu Sudiharta</a>.</strong>
     All rights reserved.
     <div class="float-right d-none d-sm-inline-block">
         <b>Version</b> 1.0.0
     </div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery, Select2 -->
 <script src="{{asset('public/assets/admin/plugins/jquery/jquery.min.js')}}">
 </script>
 <!-- jQuery UI 1.11.4 -->
 <script src="{{asset('public/assets/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
 <!-- Select 2 -->
 <script src="{{asset('public/assets/admin/plugins/select2/js/select2.full.min.js')}}"></script>
 <!-- Bootstrap 4, Select2  -->
 <script src="{{asset('public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- ChartJS -->
 <script src="{{asset('public/assets/admin/plugins/chart.js/Chart.min.js')}}"></script>
 <!-- Sparkline -->
 <script src="{{asset('public/assets/admin/plugins/sparklines/sparkline.js')}}"></script>
 <!-- JQVMap -->
 <script src="{{asset('public/assets/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
 <script src="{{asset('public/assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
 <!-- jQuery Knob Chart -->
 <script src="{{asset('public/assets/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
 <!-- daterangepicker -->
 <script src="{{asset('public/assets/admin/plugins/moment/moment.min.js')}}"></script>
 <script src="{{asset('public/assets/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="{{asset('public/assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
 <!-- Summernote -->
 <script src="{{asset('public/assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
 <!-- overlayScrollbars -->
 <script src="{{asset('public/assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
 <!-- AdminLTE App -->
 <script src="{{asset('public/assets/admin/dist/js/adminlte.js')}}"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="{{asset('public/assets/admin/dist/js/pages/dashboard.js')}}"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{asset('public/assets/admin/dist/js/demo.js')}}"></script>

 <script>
     $(function() {
         //Initialize Select2 Elements
         $('.select2').select2()

         //Initialize Select2 Elements
         $('.select2bs4').select2({
             theme: 'bootstrap4'
         })

         //Bootstrap Duallistbox
         $('.duallistbox').bootstrapDualListbox()


     })
 </script>
 </body>

 </html>