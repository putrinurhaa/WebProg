<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="../build/assets/app.css">
</head>
<body class="d-flex flex-column min-vh-100">
    @yield('navbar')
    @yield('content')
    <div class="mt-auto">
        @yield('footer')
    </div>
    <script src="../build/assets/app.js"></script>
</body>
</html>