<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @include('admin.css')
</head>

<body>
    <div id="wrapper">
        @include('admin.nav')

        <div id="page-wrapper" class="gray-bg">
            @include('admin.header')

            @yield('content')

            @include('admin.footer')

        </div>
        @include('admin.right-sidebar')
    </div>

    @include('admin.script')
    @yield('script')
</body>

</html>
