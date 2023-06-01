<!doctype html>
<html class="no-js" lang="zxx">


@include('web.inc.head')

<body class="">

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        @include('web.inc.header')
        <!-- mobile-menu-area start -->
        @include('web.inc.mobile-menu')
        <!-- mobile-menu-area end -->
        <!-- End of header area -->
<div class="container-md bg-white">
        <!-- start page content -->
        @yield('main-body')
        <!-- End page content -->
</div>


        @include('web.inc.footer')
        <!-- start scrollUp
        ============================================ -->
        <div id="toTop">
            <i class="fa fa-chevron-up"></i>
        </div>

    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    @include('web.inc.script')
</body>


</html>
