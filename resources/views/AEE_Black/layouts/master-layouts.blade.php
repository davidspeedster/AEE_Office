<!DOCTYPE html>
<html lang="en">
<head>
	<title>Onetel Bootstrap Template</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('AEE_Black.layouts.head')
</head>
    @yield('body')
    <body>
          <!-- Begin page -->
          <div id="wrapper">
      @include('AEE_Black.layouts.topbar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
      @yield('content')
                </div> <!-- content -->
    @include('AEE_Black.layouts.footer')
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    @include('AEE_Black.layouts.footer-script')
    </body>
</html>
