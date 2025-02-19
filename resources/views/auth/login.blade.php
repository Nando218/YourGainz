
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" id="login-form">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Correo Electrónico</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
            <div id="email-error" class="error-message"></div>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" />
            <div id="password-error" class="error-message"></div>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember" />
                <span class="text-sm">Recordarme</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif

            <button type="submit" class="submit-button">
                Iniciar sesión
            </button>
        </div>
    </form>

    <!-- Estilos personalizados -->
    <style>

    </style>

    <!-- Script para validar el formulario -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');

            // Validar el formulario antes de enviarlo
            form.addEventListener('submit', function (event) {
                // Obtener los valores de los campos
                const email = document.getElementById('email');
                const password = document.getElementById('password');
                const rememberMe = document.getElementById('remember_me');

                // Limpiar mensajes de error previos
                clearErrors();

                let valid = true;

                // Validación del campo email
                if (!email.value || !validateEmail(email.value)) {
                    valid = false;
                    displayError(email, "Por favor, ingresa una dirección de correo electrónico válida.");
                }

                // Validación del campo password
                if (!password.value || password.value.length < 6) {
                    valid = false;
                    displayError(password, "La contraseña debe tener al menos 6 caracteres.");
                }

                // Si alguna validación falla, evitar el envío del formulario
                if (!valid) {
                    event.preventDefault();
                }
            });

            // Función para validar el formato del email
            function validateEmail(email) {
                const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                return regex.test(email);
            }

            // Función para mostrar los mensajes de error
            function displayError(input, message) {
                const errorElement = document.createElement('div');
                errorElement.classList.add('error-message');
                errorElement.innerText = message;
                input.classList.add('border-red-500');
                input.parentNode.appendChild(errorElement);
            }

            // Función para limpiar los mensajes de error
            function clearErrors() {
                const errorElements = document.querySelectorAll('.error-message');
                errorElements.forEach(function (error) {
                    error.remove();
                });

                const inputs = document.querySelectorAll('input');
                inputs.forEach(function (input) {
                    input.classList.remove('border-red-500');
                });
            }
        });
    </script>

