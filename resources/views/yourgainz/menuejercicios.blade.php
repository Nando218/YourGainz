<x-app-layout>


<body class="bg-gray-900 text-white min-h-screen flex flex-col items-center">
    <div class="container mx-auto p-4">
        <main class="text-center">
        <div class="text-left">
    <h1 class="text-[#FFF700] text-5xl font-bold mb-4">Ejercicios</h1>
    <p class="text-lg text-white mb-6">Selecciona el músculo que deseas trabajar</p>

    <div class="relative inline-block mb-6">
        <button class="dropdown-button bg-gray-300 text-black px-4 py-2 rounded flex items-center justify-between w-64">
            <span class="dropdown-text">Selecciona un músculo</span>
        </button>
                <div class="dropdown-content hidden absolute mt-1 w-64 bg-gray-300 rounded shadow-lg">
                    <div class="dropdown-item px-4 py-2 cursor-pointer hover:bg-gray-400">Pecho</div>
                    <div class="dropdown-item px-4 py-2 cursor-pointer hover:bg-gray-400">Espalda</div>
                    <div class="dropdown-item px-4 py-2 cursor-pointer hover:bg-gray-400">Hombros</div>
                    <div class="dropdown-item px-4 py-2 cursor-pointer hover:bg-gray-400">Brazos</div>
                    <div class="dropdown-item px-4 py-2 cursor-pointer hover:bg-gray-400">Piernas</div>
                    <div class="dropdown-item px-4 py-2 cursor-pointer hover:bg-gray-400">Abdominales</div>
                </div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full mx-auto max-w-6xl mt-8" id="exerciseGrid"></div>
            
            <button class="fixed bottom-6 left-6 bg-yellow-400 text-black p-4 rounded-full shadow-lg" onclick="window.location.href='/menumain';">
            🢀
            </button>
        </main>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.querySelector('.dropdown-button');
            const dropdownContent = document.querySelector('.dropdown-content');
            const dropdownText = document.querySelector('.dropdown-text');
            const exerciseGrid = document.getElementById('exerciseGrid');
            
            const exercises = Array(10).fill().map((_, index) => ({
                id: index + 1,
                name: 'Press Banca',
                muscle: 'Pecho',
                image: 'https://via.placeholder.com/150'
            }));

            dropdownButton.addEventListener('click', function() {
                dropdownContent.classList.toggle('hidden');
            });

            document.addEventListener('click', function(event) {
                if (!event.target.closest('.relative')) {
                    dropdownContent.classList.add('hidden');
                }
            });

            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', function() {
                    dropdownText.textContent = this.textContent;
                    dropdownContent.classList.add('hidden');
                });
            });

            function createExerciseCards() {
                exerciseGrid.innerHTML = exercises.map(exercise => `
                    <div class="bg-white text-black p-4 rounded shadow-lg text-center">
                        <h3 class="font-semibold">${exercise.name}</h3>
                        <img src="${exercise.image}" alt="${exercise.name}" class="w-36 h-36 mx-auto mt-2">
                    </div>
                `).join('');
            }

            createExerciseCards();
        });
    </script>
</body>
    </x-app-layout>
