<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Painel Administrativo')</title>
    @vite('resources/css/app.css')
</head>
<body class="flex min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-gray-100">
    @include('partials.sidebar')
    @yield('content')
    @stack('scripts')
</body>
</html>
