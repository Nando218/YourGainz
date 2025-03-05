<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1739966822/YourGainz_Logo_Completo_1_gsl94c.png" type="image/x-icon">
    <title>Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('https://res.cloudinary.com/dd5hetwb8/image/upload/v1739967517/wallpaper2_nxxxpp.png');
            background-repeat: repeat;
            background-size: 100px 100px;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <form method="POST" action="{{ route('login') }}" class="bg-white bg-opacity-10 p-8 rounded-2xl shadow-md w-96 filter backdrop-blur-sm" id="loginForm">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <h2 class="text-2xl text-white font-semibold text-center mb-6">Iniciar Sesión</h2>

        <div class="mb-4">
            <label for="email" class="block text-white text-sm font-medium">Correo Electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <p class="text-red-500 text-sm mt-1 hidden" id="emailError">Ingrese un correo válido.</p>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-white text-sm font-medium">Contraseña</label>
            <input id="password" type="password" name="password" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <p class="text-red-500 text-sm mt-1 hidden" id="passwordError">Debe tener al menos 8 caracteres.</p>
        </div>

        <div class="mb-4 flex items-center">
            <input id="remember_me" type="checkbox" name="remember" class="mr-2">
            <label for="remember_me" class="text-white text-sm">Recordarme</label>
        </div>

        <div class="flex justify-between items-center mb-4">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-gray-100 text-sm">¿Olvidaste tu contraseña?</a>
            @endif
        </div>
        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('register') }}" class="text-gray-100 text-sm">¿No tienes cuenta? Registrate</a>
        </div>
        <button type="submit" class="w-full bg-[#FFF700] text-black py-2 rounded-lg hover:bg-[#F2C464] transition">
            Iniciar Sesión
        </button>
    </form>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            let valid = true;

            const email = document.getElementById('email');
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!email.value.match(emailRegex)) {
                emailError.classList.remove('hidden');
                valid = false;
            } else {
                emailError.classList.add('hidden');
            }

            const password = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
            if (password.value.length < 8) {
                passwordError.classList.remove('hidden');
                valid = false;
            } else {
                passwordError.classList.add('hidden');
            }

            if (!valid) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
