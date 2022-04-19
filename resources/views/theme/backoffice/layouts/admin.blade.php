
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('theme.backoffice.layouts.includes.head')
</head>
<body>
<!-- Start Page Loading -->
    @include('theme.backoffice.layouts.includes.loader')
<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START HEADER -->
    @include('theme.backoffice.layouts.includes.header')
<!-- END HEADER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        @include('theme.backoffice.layouts.includes.leftsidebar')
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
            <!--start container-->
            <div class="container">
                @yield('content')
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- START RIGHT SIDEBAR NAV-->

        <!-- END RIGHT SIDEBAR NAV-->
    </div>
    <!-- END WRAPPER -->
</div>
<!-- END MAIN -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START FOOTER -->
    @include('theme.backoffice.layouts.includes.footer')
<!-- END FOOTER -->
<!-- ================================================
Scripts
================================================ -->
<!-- jQuery Library -->
    @include('theme.backoffice.layouts.includes.foot')
</body>
</html>
