<!DOCTYPE html>
<html
    lang="en"
    class="dark-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>My workspace</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{!! url('/assets/boxicons/fonts/boxicons.css') !!}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{!! url('/assets/core/css/core.css') !!}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{!! url('/assets/core/css/theme-default.css') !!}" class="template-customizer-theme-css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{!! url('/assets/auth/css/auth.css') !!}" />
</head>
<body>
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/perfect-scrollbar/1.5.6/perfect-scrollbar.min.js" integrity="sha512-gcLXgodlQJWRXhAyvb5ULNlBAcvjuufaOBRggyLCtCqez+9jW7MxP3Is/9serId1YmNZ0Lx1ewh9z2xBwwZeKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
{{--    <script src="../assets/vendor/libs/jquery/jquery.js"></script>--}}
{{--    <script src="../assets/vendor/libs/popper/popper.js"></script>--}}
{{--    <script src="../assets/vendor/js/bootstrap.js"></script>--}}
{{--    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>--}}

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
