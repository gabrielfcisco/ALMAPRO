<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    @stack('styles')
    <title>Layout</title>
</head>

<body>
    <h1>@yield('title', 'Meu layout')</h1>
    @yield('content')
    <script src="{{ asset('/js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>