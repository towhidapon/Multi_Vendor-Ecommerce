<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('admin') }}/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('admin') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('admin') }}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('admin') }}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/app.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/header-colors.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!-- DataTable -->
    <link href="{{ asset('admin') }}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('admin') }}/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
    <title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body>
    <!--wrapper-->
    @yield('panel')
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr />
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
            </div>
            <hr />

            <h6 class="mb-0">Sidebar Backgrounds</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end switcher-->
     <!-- Bootstrap JS -->
     <script src="{{ asset('admin') }}/assets/js/bootstrap.bundle.min.js"></script>
     <!--plugins-->
     <script src="{{ asset('admin') }}/assets/js/jquery.min.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/chartjs/js/Chart.min.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/jquery-knob/excanvas.js"></script>
     <script src="{{ asset('admin') }}/assets/plugins/jquery-knob/jquery.knob.js"></script>
     <script>
         $(function() {
             $(".knob").knob();
         });
     </script>
     <script src="{{ asset('admin') }}/assets/js/index.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <script src="{{ asset('admin') }}/assets/js/code.js"></script>

     <script src="{{ asset('admin') }}/assets/js/validate.min.js"></script>
     <!--Datatable-->
     <script src="{{ asset('admin') }}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
     <script>
         $(document).ready(function() {
             $('#example').DataTable();
         });
     </script>
     <!--Datatable-->

     <!--app JS-->
     <script src="{{ asset('admin') }}/assets/js/app.js"></script>

     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

     <script>
         @if (Session::has('message'))
             var type = "{{ Session::get('alert-type', 'info') }}"
             switch (type) {
                 case 'info':
                     toastr.info(" {{ Session::get('message') }} ");
                     break;
                 case 'success':
                     toastr.success(" {{ Session::get('message') }} ");
                     break;
                 case 'warning':
                     toastr.warning(" {{ Session::get('message') }} ");
                     break;
                 case 'error':
                     toastr.error(" {{ Session::get('message') }} ");
                     break;
             }
         @endif
     </script>
     <script src="{{ asset('admin') }}/assets/plugins/input-tags/js/tagsinput.js"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
     <script>
         tinymce.init({
           selector: '#mytextarea'
         });
     </script>
</body>

</html>
