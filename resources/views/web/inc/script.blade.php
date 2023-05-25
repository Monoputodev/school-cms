    <!-- jquery -->
    <script src="{{ asset('') }}assets/web/js/vendor/jquery-3.2.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{ asset('') }}assets/web/js/bootstrap.min.js"></script>

    {{-- Sweetalert --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.3/sweetalert2.all.js" integrity="sha512-5gz/at+6LT6tuaX/ritelLOHwVc0CoXsspPbUBPdoIrOLshcpguRTMBAKVZCdG//YdwyYP2c4n7NMaDqVXWTJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('') }}assets/web/js/owl.carousel.min.js"></script>
    <!-- slick js -->
    <script src="{{ asset('') }}assets/web/js/slick.min.js"></script>
    <!-- meanmenu js -->
    <script src="{{ asset('') }}assets/web/js/jquery.meanmenu.min.js"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset('') }}assets/web/js/jquery-ui.min.js"></script>
    <!-- wow js -->
    <script src="{{ asset('') }}assets/web/js/wow.min.js"></script>
    <!-- counter js -->
    <script src="{{ asset('') }}assets/web/js/jquery.counterup.min.js"></script>
    <!-- Countdown js -->
    <script src="{{ asset('') }}assets/web/js/jquery.countdown.min.js"></script>
    <!-- waypoints js -->
    <script src="{{ asset('') }}assets/web/js/jquery.waypoints.min.js"></script>
    <!-- Isotope js -->
    <script src="{{ asset('') }}assets/web/js/isotope.pkgd.min.js"></script>
    <!-- magnific js -->
    <script src="{{ asset('') }}assets/web/js/jquery.magnific-popup.min.js"></script>
    <!-- Image loaded js -->
    <script src="{{ asset('') }}assets/web/js/imagesloaded.pkgd.min.js"></script>
    <!-- chossen js -->
    <script src="{{ asset('') }}assets/web/js/chosen.jquery.min.js"></script>
    <!-- Revolution JS -->
    <script src="{{ asset('') }}assets/web/js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/assets/revolution/revolution.js"></script>
     <!-- modernizr css -->
 <script src="{{ asset('') }}assets/web/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- plugin js -->
    <script src="{{ asset('') }}assets/web/js/plugins.js"></script>
    <!-- select2 js -->
    <script src="{{ asset('') }}assets/web/js/select2.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/colors.js"></script>

    <script src="https://unpkg.com/flexmasonry/dist/flexmasonry.js"></script>
    <!-- customSelect Js -->
    <script src="{{ asset('') }}assets/web/js/jquery-customselect.js"></script>
    <!-- custom js -->
    <script src="{{ asset('') }}assets/web/js/custom.js"></script>
    <script>
        FlexMasonry.init('.gridbox');
    </script>
    @if ($massage = Session::get('success'))
    <script>
        Swal.fire({
      position: "center",
      icon: "success",
      title: "{{ $massage }}",
      showConfirmButton: !1,
      timer: 3000
      })
      Swal();
    </script>

    @endif
