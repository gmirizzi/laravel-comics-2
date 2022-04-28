<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    {{-- link css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel DC Comics</title>
</head>
<body>
    @include('..partials.header')
    <main>
        @yield('content')
    </main>
    @include('..partials.footer')
</body>
</html>