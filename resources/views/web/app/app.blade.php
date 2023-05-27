<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('web.inc.head')

<body class="has-side-panel side-panel-right fullwidth-page">
    <div class="body-overlay"></div>
    @include('web.inc.side-panel')
    <div id="wrapper">


        <!-- Header -->
        @include('web.inc.header')

        <!-- Start main-content -->
        <div class="main-content">
@yield('main-body')

        </div>
        <!-- end main-content -->

        <!-- Footer -->
        @include('web.inc.footer')
        <a class="scrollToTop" href="#"><i class="flaticon-seo-transport-3"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="{{ asset('/') }}/assets/web/js/custom.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('/') }}/assets/web/js/revolution-slider/js/extensions/revolution.extension.actions.min.js">
    </script>
    <script src="{{ asset('/') }}/assets/web/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js">
    </script>
    <script src="{{ asset('/') }}/assets/web/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js">
    </script>
    <script
        src="{{ asset('/') }}/assets/web/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script src="{{ asset('/') }}/assets/web/js/revolution-slider/js/extensions/revolution.extension.migration.min.js">
    </script>
    <script src="{{ asset('/') }}/assets/web/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js">
    </script>
    <script src="{{ asset('/') }}/assets/web/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js">
    </script>
    <script src="{{ asset('/') }}/assets/web/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js">
    </script>
    <script src="{{ asset('/') }}/assets/web/js/revolution-slider/js/extensions/revolution.extension.video.min.js">
    </script>

</body>

</html>
