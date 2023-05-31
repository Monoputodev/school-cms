<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home page || {{ $content->website_name }}</title>
    <meta name="description" content="{{ $content->website_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('') }}uploads/content/{{ $content->website_favicon }}">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('') }}assets/web/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('') }}assets/web/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('') }}assets/web/css/shortcode/shortcodes.css">
    <!-- Sweet Alert-->
    <link href="{{ asset('/assets') }}/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('') }}assets/web/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('') }}assets/web/css/responsive.css">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="{{ asset('') }}assets/web/css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="{{ asset('') }}assets/web/js/vendor/modernizr-3.11.7.min.js"></script>
</head>
