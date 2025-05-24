<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Duluan</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords"
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.ico" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="/assets/css/style.css">
    {{-- <link rel="stylesheet" href="/assets/css/custom.css"> --}}

    @livewireStyles
</head>

<body>
    <div id="loader">
        {{-- <img src="/assets/img/loading-icon.png" alt="icon" class="loading-icon"> --}}
        {{-- <div class="spinner-grow text-danger loading-icon" role="status"></div> --}}
        <div class="loading-icon text-white" >
            <div class="spinner-border" role="status"></div>
        </div>
    </div>

    <div class="app-container">
        <livewire:notification-box />
        <livewire:toast />

        @yield('content')
    </div>

    <script src="/assets/js/lib/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="/assets/js/plugins/splide/splide.min.js"></script>
    <script src="/assets/js/base.js"></script>

    @livewireScripts
</body>

</html>
