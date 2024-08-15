<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/mofi/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2024 12:44:54 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('') }}assets/Admin-Mofi/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('') }}assets/Admin-Mofi/assets/images/favicon.png" type="image/x-icon">
    <title>Home » Dashboard</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/date-range-picker/flatpickr.min.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/style.css">
    <link id="color" rel="stylesheet" href="{{ asset('') }}assets/Admin-Mofi/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/Admin-Mofi/assets/css/responsive.css">
  </head>
  <body> 
    <div class="loader-wrapper"> 
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <!-- Page Header -->
      <x-header></x-header>

      <!-- Page Body Start-->
      <div class="page-body-wrapper">

        <!-- Page Seeder -->
        <x-seeder></x-seeder>

        <div class="page-body">
          <!-- Conten -->
          <div class="conten">
            @yield('content')
          </div>
          <!-- Conten -->
        </div>

        <!-- footer -->
        <x-footer></x-footer>
      </div>
      
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/scrollbar/simplebar.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/sidebar-menu.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/sidebar-pin.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/slick/slick.min.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/slick/slick.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/header-slick.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/notify/bootstrap-notify.min.js"></script>
    <!-- calendar js-->
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/dashboard/default.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/notify/index.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/datatable/datatables/datatable.custom1.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/datepicker/date-range-picker/moment.min.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/datepicker/date-range-picker/datepicker-range-custom.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/typeahead/handlebars.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/typeahead-search/handlebars.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/height-equal.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/animation/wow/wow.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/script.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/script1.js"></script>
    <script src="{{ asset('') }}assets/Admin-Mofi/assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
    <script>new WOW().init();</script>
  </body>

<!-- Mirrored from admin.pixelstrap.net/mofi/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2024 12:45:59 GMT -->
</html>