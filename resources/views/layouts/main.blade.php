<!DOCTYPE html>
<html class="h-100">
    <head>
        <!-- START Meta -->
        <meta charset="UTF-8">
        <meta name="google-site-verification" content="lDxTOGHIhYyrKdyYwHmDza0EckWZ60Zu_No56c6Xv4Y" />
        <meta name="description" content="@yield('description', config('meta.default.description'))">
        <meta name="keywords" content="@yield('keywords', config('meta.default.keywords'))">
        <meta name="author" content="{{ env('APP_NAME') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', env('APP_NAME'))</title>
        <!-- END Meta -->
        <!-- START Links -->
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="icon" href="images/logo-2.png">
        <!-- END Links -->
        <!-- START Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128668145-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-128668145-1');
        </script>
        <!-- END Global site tag (gtag.js) - Google Analytics -->
    </head>
    <body class="h-100 background-color">
        <!-- START Mobile top nav -->
        @include('partials.mobile-top-nav', ['controllerName' => $controllerName])
        <!-- END Mobile top nav -->
        <div class="container-fluid h-100">
            <div class="row minh-100">
                <!-- START Side nav -->
                <div class="col-12 col-md-3 col-xl-2 bd-sidebar bg-sidebar p-0 hidden-xs d-none d-lg-block">
                    <div class="text-center p-5">
                        <img src="/images/logo-2-small.png" class="logo" alt="{{ env('APP_NAME') }}">
                    </div>
                    <!-- START Nav Links -->
                    @include('partials.nav-links', ['controllerName' => $controllerName])
                    <!-- END Nav Links -->
                    <!-- START Social Links -->
                    <div class="pt-5">
                        @include('partials.social-links')
                    </div>
                    <!-- END Social Links -->
                    <p class="text-white pt-5 pl-3">Telefon:<br>{{ config('constants.phone-number') }}</p>
                </div>
                <!-- END Side nav -->
                <div class="col p-0">
                    <div class="tab-content">
                        <!-- START Content -->
                        @yield('content')
                        <!-- END Content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- START Body scripts -->
        <script src="js/app.js"></script>
        <!-- END Body scripts -->
    </body>
</html>