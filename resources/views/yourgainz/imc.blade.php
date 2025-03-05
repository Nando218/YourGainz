<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 text-white p-6 rounded-lg shadow-md w-full">
                <h3 class="text-lg font-semibold mb-4">Calculadora IMC</h3>

                <div class="text-center mb-6">
                    <h4 class="text-lg font-semibold">Tu IMC Actual</h4>
                    @php
                        $imcActual = auth()->user()->height > 0 ? auth()->user()->weight / ((auth()->user()->height / 100) ** 2) : null;
                        $categoriaActual = '';
                        if ($imcActual) {
                            if ($imcActual < 18.5) {
                                $categoriaActual = 'Bajo peso';
                            } elseif ($imcActual >= 18.5 && $imcActual < 24.9) {
                                $categoriaActual = 'Peso normal';
                            } elseif ($imcActual >= 25 && $imcActual < 29.9) {
                                $categoriaActual = 'Sobrepeso';
                            } elseif ($imcActual >= 30 && $imcActual < 34.9) {
                                $categoriaActual = 'Obesidad grado 1';
                            } elseif ($imcActual >= 35 && $imcActual < 39.9) {
                                $categoriaActual = 'Obesidad grado 2';
                            } else {
                                $categoriaActual = 'Obesidad grado 3';
                            }
                        }
                    @endphp
                    <p class="text-2xl mt-2">{{ $imcActual ? number_format($imcActual, 2) : 'N/A' }}</p>
                    <p class="text-lg mt-2">{{ $categoriaActual }}</p>
                </div>

                <div>
                    <div class="flex gap-4">
                        <div class="flex flex-col w-1/2">
                            <label for="peso">Peso (kg)</label>
                            <input type="number" step="0.1" id="peso" class="bg-gray-700 p-2 rounded-md" required>
                        </div>
                        <div class="flex flex-col w-1/2">
                            <label for="altura">Altura (cm)</label>
                            <input type="number" step="0.1" id="altura" class="bg-gray-700 p-2 rounded-md" required>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button onclick="calcularIMC()" class="bg-[#FFF700] hover:bg-[#e2dc2e] text-black py-2 px-4 rounded-3xl">Calcular</button>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <h4 class="text-lg font-semibold">Resultado</h4>
                    <p id="resultado-imc" class="text-2xl mt-2">---</p>
                    <p id="categoria-imc" class="text-lg mt-2"></p>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('yourgainz.home') }}" class="bg-[#FFF700] hover:bg-[#e2dc2e] text-black py-2 px-4 rounded-3xl">Back</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calcularIMC() {
            let peso = parseFloat(document.getElementById('peso').value);
            let altura = parseFloat(document.getElementById('altura').value) / 100;

            if (!isNaN(peso) && !isNaN(altura) && altura > 0) {
                let imc = (peso / (altura * altura)).toFixed(2);
                document.getElementById('resultado-imc').textContent = imc;
                let categoria = '';

                if (imc < 18.5) {
                    categoria = 'Bajo peso';
                } else if (imc >= 18.5 && imc < 24.9) {
                    categoria = 'Peso normal';
                } else if (imc >= 25 && imc < 29.9) {
                    categoria = 'Sobrepeso';
                } else if (imc >= 30 && imc < 34.9) {
                    categoria = 'Obesidad grado 1';
                } else if (imc >= 35 && imc < 39.9) {
                    categoria = 'Obesidad grado 2';
                } else {
                    categoria = 'Obesidad grado 3';
                }

                document.getElementById('categoria-imc').textContent = categoria;
            } else {
                document.getElementById('resultado-imc').textContent = 'Valores inválidos';
                document.getElementById('categoria-imc').textContent = '';
            }
        }
    </script>
</x-app-layout>
