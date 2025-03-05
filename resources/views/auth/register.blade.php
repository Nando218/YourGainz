<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1739966822/YourGainz_Logo_Completo_1_gsl94c.png" type="image/x-icon">
    <title>Registro</title>
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
    <form method="POST" action="{{ route('register') }}" class="bg-white bg-opacity-10 p-8 rounded-2xl shadow-md w-96 filter backdrop-blur-sm" id="registerForm">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <h2 class="text-2xl text-white font-semibold text-center mb-6">Crear Cuenta</h2>

        <div class="mb-4">
            <label for="name" class="block text-white text-sm font-medium ">Usuario</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <p class="text-red-500 text-sm mt-1 hidden" id="nameError">Debe tener más de 3 caracteres.</p>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-white text-sm font-medium ">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-white text-sm font-medium ">Contraseña</label>
            <input id="password" type="password" name="password" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <p class="text-red-500 text-sm mt-1 hidden" id="passwordError">Debe tener al menos 8 caracteres.</p>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-white text-sm font-medium ">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="weight" class="block text-white text-sm font-medium ">Peso (KG)</label>
            <input id="weight" type="number" name="weight" value="{{ old('weight') }}" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <p class="text-red-500 text-sm mt-1 hidden" id="weightError">Debe ser mayor que 1 kg.</p>
        </div>

        <div class="mb-4">
            <label for="height" class="block text-white text-sm font-medium ">Altura (CM)</label>
            <input id="height" type="number" name="height" value="{{ old('height') }}" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <p class="text-red-500 text-sm mt-1 hidden" id="heightError">Debe ser mayor que 1 cm.</p>
        </div>

        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('login') }}" class="text-gray-100 text-sm">¿Ya tienes cuenta?</a>
        </div>

        <button type="submit" class="w-full bg-[#FFF700] text-black  py-2 rounded-lg hover:bg-[#F2C464] transition">
            Registrar
        </button>
    </form>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            let valid = true;

            const name = document.getElementById('name');
            const nameError = document.getElementById('nameError');
            if (name.value.length < 3) {
                nameError.classList.remove('hidden');
                valid = false;
            } else {
                nameError.classList.add('hidden');
            }

            const password = document.getElementById('password');
            const passwordError = document.getElementById('passwordError');
            if (password.value.length < 8) {
                passwordError.classList.remove('hidden');
                valid = false;
            } else {
                passwordError.classList.add('hidden');
            }

            const weight = document.getElementById('weight');
            const weightError = document.getElementById('weightError');
            if (parseFloat(weight.value) <= 1) {
                weightError.classList.remove('hidden');
                valid = false;
            } else {
                weightError.classList.add('hidden');
            }

            const height = document.getElementById('height');
            const heightError = document.getElementById('heightError');
            if (parseFloat(height.value) <= 1) {
                heightError.classList.remove('hidden');
                valid = false;
            } else {
                heightError.classList.add('hidden');
            }

            if (!valid) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
