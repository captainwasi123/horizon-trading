<!-- BEGIN BASE JS -->
    <script src="{{URL::to('/')}}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="{{URL::to('/')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="{{URL::to('/')}}/assets/vendor/pace-progress/pace.min.js"></script>
    <script src="{{URL::to('/')}}/assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="{{URL::to('/')}}/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script><!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="{{URL::to('/')}}/assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{URL::to('/')}}/assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session()->has('success'))
        <script type="text/javascript">
            $(document).ready(function(){
              'use strict'

              swal("Success!", "{{ session()->get('success') }}", "success");
            });
        </script>
    @endif
    @if(session()->has('warning'))
        <script type="text/javascript">
            $(document).ready(function(){
              'use strict'

              swal("Warning!", "{{ session()->get('warning') }}", "warning");
            });
        </script>
    @endif