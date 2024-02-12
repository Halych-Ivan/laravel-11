<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? ''}}</title>
    <meta name="description" content="{{ $description ?? ''}}">
    <meta name="keywords" content="{{ $keywords ?? ''}}">
    <meta name="robots" content="index, follow">

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon"      sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <meta property="og:locale"          content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta property="og:type"            content="website">
    <meta property="og:url"             content="{{ URL::current() }}">
    <meta property="og:site_name"       content="{{ $site_name ?? '' }}">
    <meta property="og:title"           content="{{ $title ?? '' }}">
    <meta property="og:description"     content="{{ $description ?? ''}}">
    <meta property="og:image"           content="{{ $image ?? ''}}">
    <meta property="og:image:width"     content="{{ $width ?? '180'}}"/>
    <meta property="og:image:height"    content="{{ $height ?? '180'}}"/>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/default.css') }}">
    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div>

        @include('agromaster.header');

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('agromaster.footer');

    </div>

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>
    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <!--====== All Plugins js ======-->
    <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ajax-contact.js') }}"></script>

{{--    <script src="{{ assets('js/plugin.min.js') }}"></script>--}}

    <!--====== Main Activation  js ======-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
