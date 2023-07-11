<!DOCTYPE html>
<html lang="en">

<head>
    @include('templating.header')

    <title>@yield('title')</title>
</head>

<body>
    @include('templating.navbar')
    @include('templating.sidebar')
    <div class="mt-20 ml-60 h-screen p-8 bg-gray-50">
        @yield('content')
        @include('templating.footer')
    </div>
</body>

</html>
