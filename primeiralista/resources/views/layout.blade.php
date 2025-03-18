<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    <!--importando o Brootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/brootstrap@5.3.0/dist/css/brootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--cabecalho-->
    @include('Cabecalho')

    <!--Conteudo Principal-->

    <div class="container my-4">
        @yield
    </div>

    <!--Script do Brootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/brootstrap@5.3.0/dist/css/brootstrap.bundle.min.js"></script>
</body>
</html>