<x-app-layout>
<body class="bg-gray-900 text-white min-h-screen flex flex-col items-center">
    <div class="container mx-auto p-4">
        <main class="text-center">
            <h1 class="text-[#FFF700] text-5xl font-bold mb-4">Ejercicios</h1>
            <p class="text-lg mb-6">Selecciona el músculo que deseas trabajar</p>

            <select id="muscleSelect" class="bg-gray-300 text-black px-4 py-2 rounded">
                <option value="">Selecciona un músculo</option>
                <option value="Pecho">Pecho</option>
                <option value="Espalda">Espalda</option>
                <option value="Hombros">Hombros</option>
                <option value="Brazos">Brazos</option>
                <option value="Piernas">Piernas</option>
                <option value="Abdominales">Abdominales</option>
            </select>

            <div id="exerciseGrid" class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full mx-auto max-w-6xl mt-8"></div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.getElementById('muscleSelect').addEventListener('change', async function () {
    const muscle = this.value;
    const grid = document.getElementById('exerciseGrid');
    grid.innerHTML = '<p class="text-white text-center col-span-full">Cargando...</p>';

    if (!muscle) {
        grid.innerHTML = '<p class="text-white text-center col-span-full">Selecciona un músculo</p>';
        return;
    }

    try {
        const response = await fetch(`/exercises/${muscle}`);
        const data = await response.json();

        if (data.error) {
            grid.innerHTML = `<p class="text-white text-center col-span-full">${data.error}</p>`;
        } else {
            grid.innerHTML = data.map(exercise => `
                <div class="bg-white text-black p-4 rounded shadow-lg text-center cursor-pointer" onclick="showExercise('${exercise.nombre}', '${exercise.descripcion}', '${exercise.video}')">
                    <h3 class="font-semibold">${exercise.nombre}</h3>
                    <img src="${exercise.video}" class="w-full h-auto mt-2" />
                </div>
            `).join('');
        }
    } catch (error) {
        grid.innerHTML = '<p class="text-white text-center col-span-full">Error al cargar los ejercicios.</p>';
    }
});

function showExercise(name, description, video) {
    Swal.fire({
        title: name,
        html: `<p>${description}</p>` +
            `<div class="mt-4"><img src="${video}" class="w-full h-auto" /></div>`,
        showCancelButton: true,
        confirmButtonText: 'Agregar ejercicio',
        cancelButtonText: 'Cancelar',
        background: '#1a202c', // Fondo oscuro
        color: '#fff'         // Texto blanco
    });
}

    </script>
</body>
</x-app-layout>
