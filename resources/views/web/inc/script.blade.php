    <!-- jquery latest version -->
    <script src="{{ asset('') }}assets/web/js/vendor/jquery-v1.12.4.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="{{ asset('') }}assets/web/js/popper.min.js"></script>
    <script src="{{ asset('') }}assets/web/js/bootstrap.min.js"></script>
    <!-- Sweet Alerts js -->
    <script src="{{ asset('') }}assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>
    <!--  ajax-mail.js  -->
    <script src="{{ asset('') }}assets/web/js/ajax-mail.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{ asset('') }}assets/web/js/plugins.js"></script>
    <script src="{{ asset('') }}assets/web/js/main.js"></script>

    @if ($massage = Session::get('success'))
    <script>
        Swal.fire({
      position: "top-end",
      icon: "success",
      title: "{{ $massage }}",
      showConfirmButton: !1,
      timer: 3000
      })
      Swal();
    </script>
    @endif


    @if ($massage = Session::get('error'))
    <script>
        Swal.fire({
    position: "top-end",
    icon: "Error",
    title: "{{ $massage }}",
    showConfirmButton: !1,
    timer: 3000
    })
    Swal();
    </script>
    @endif
