<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Architects | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/AEE_Cool/img/favicon.ico">
    @include('AEE_Cool.layouts.head')
</head>

    @yield('body')
    <body>
          <!-- Begin page -->
          <div id="wrapper">
      @include('AEE_Cool.layouts.topbar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
      @yield('content')
                </div> <!-- content -->
    @include('AEE_Cool.layouts.footer')
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    @include('AEE_Cool.layouts.footer-script')
    @include('AEE_Dark.layouts.footer-script')
    {{-- @include('AEE_Black.layouts.footer-script')
    @include('AEE_Clear.layouts.footer-script')
    @include('AEE_Real.layouts.footer-script')
    @include('AEE_Slider.layouts.footer-script') --}}
    </body>
</html>
