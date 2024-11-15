<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-3">Selamat datang di aplikasi CRUD Laravel 11</h3>
        <div class="mt-5">
            @yield('konten')
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>