<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title', 'Blog Post - Start Bootstrap Template')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        @include('partials.common.style')
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('partials.common.header')
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    @yield('content')
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    @include('partials.common.sidebar')
                </div>
            </div>
        </div>
        <!-- Footer-->
        @include('partials.common.footer')

        @include('partials.common.scripts')
    </body>
</html>
