<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="{{ asset('includes/bootstrap-3.2.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    @include('layouts.partials.nav')

    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('includes/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('includes/bootstrap-3.2.0-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>

 