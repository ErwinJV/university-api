<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Curso de Laravel</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3/css/bootstrap.min.css')}}"  />
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.6.0/css/all.min.css')}}"  />
    @stack('css')
</head>
<body>
    {{-- Contenido --}}
    <main class="container">
        @yield('content')
    </main>
    <footer class="blog-footer">

    </footer>
    <script src="{{asset('bootstrap-5.3.3/js/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('fontawesome-free-6.6.0/js/all.min.js')}}" defer></script>
    @stack('js')
</body>
</html>