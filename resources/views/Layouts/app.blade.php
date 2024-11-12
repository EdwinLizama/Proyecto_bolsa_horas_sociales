<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Proyecto de Horas Sociales')</title>

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
    <!-- Encabezado con imagen y texto -->
    <header class="text-center py-4">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo Facultad" class="logo-facultad">
        <h1 class="mt-3 titulo-principal">Facultad Multidisciplinaria Oriental</h1>
    </header>

    <!-- Contenido principal -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
