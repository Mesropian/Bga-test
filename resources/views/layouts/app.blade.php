<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BGA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <div id="app">
        @include('layouts.header')
        <main>
            @yield('content') 
        </main>
        @include('layouts.footer')
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>