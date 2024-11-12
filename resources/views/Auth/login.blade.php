<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Fuente Libre Baskerville -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <!-- Botón de Modo Oscuro -->
    <button class="toggle-dark-mode" onclick="toggleDarkMode()">Modo Oscuro</button>

    <!-- Encabezado con imagen y título -->
    <div class="text-center">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo Facultad" class="logo-facultad">
        <h1 class="titulo-principal">Facultad Multidisciplinaria Oriental</h1>
    </div>

    <!-- Formulario de inicio de sesión -->
    <div class="login-container">
        <form method="POST" action="" class="login-card">
            <h2 class="text-center mb-4 text-danger">Iniciar Sesión</h2>
            @csrf

            <div class="form-group mb-4">
                <label for="email" class="form-label"></label>
                <div class="input-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password" class="form-label"></label>
                <div class="input-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                    <div class="input-group-append">
                        <span class="input-group-text toggle-password"><i class="fas fa-eye"></i></span>
                    </div>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Recordarme
                    </label>
                </div>
                <a class="text-muted" href="">¿Has olvidado tu contraseña?</a>
            </div>

            <button type="submit" class="btn btn-danger rounded-pill w-100 mb-3">Ingresar</button>

            <div class="text-center">
                <p class="text-muted">¿No estás registrado? <a href="" class="text-danger">Regístrate aquí</a></p>
            </div>
        </form>
    </div>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para alternar entre modo claro y oscuro -->
    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            const button = document.querySelector('.toggle-dark-mode');
            button.textContent = document.body.classList.contains('dark-mode') ? 'Modo Claro' : 'Modo Oscuro';
        }

        // Mostrar y ocultar contraseña
        document.querySelector('.toggle-password').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>
