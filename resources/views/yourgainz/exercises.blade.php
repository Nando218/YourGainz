<x-app-layout>
<head>
    <style>
        /* Estilos para el grid de ejercicios */
        #exerciseGrid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 16px;
            width: 100%;
            max-width: 1200px;
            margin: 32px auto 0;
        }
        
        .exercise-card {
            background-color: white;
            color: black;
            padding: 20px 12px;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            min-height: 220px;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .exercise-card:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }
        
        .exercise-image {
            object-fit: cover;
            margin-bottom: 16px;
        }
        
        .exercise-title {
            font-weight: 600;
            font-size: 0.875rem;
            padding: 8px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 100%;
        }
        
        /* Media queries para responsividad */
        @media (min-width: 640px) {
            #exerciseGrid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 768px) {
            #exerciseGrid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        @media (min-width: 1024px) {
            #exerciseGrid {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col items-center">
    <div class="container mx-auto p-4">
        <main class="text-center">
            <h1 style="color: #FFF700; font-size: 3rem; font-weight: 700; margin-bottom: 1rem;">Ejercicios</h1>
            <p style="color: white; font-size: 1.125rem; margin-bottom: 1.5rem;">Selecciona el músculo que deseas trabajar</p>

            <select id="muscleSelect" class="bg-gray-300 text-black px-4 py-2 rounded mb-6">
                <option value="">Selecciona un músculo</option>
                <option value="Pecho">Pecho</option>
                <option value="Espalda">Espalda</option>
                <option value="Hombros">Hombros</option>
                <option value="Brazos">Brazos</option>
                <option value="Piernas">Piernas</option>
                <option value="Abdominales">Abdominales</option>
            </select>

            <div id="exerciseGrid"></div>
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
        const response = await fetch(`/exercise/${muscle}`);
        const data = await response.json();

        if (data.error) {
            grid.innerHTML = `<p class="text-white text-center col-span-full">${data.error}</p>`;
        } else {
            grid.innerHTML = data.map(exercise => `
                <div class="exercise-card" onclick="showExercise('${exercise.nombre}', '${exercise.descripcion}', '${exercise.video}')">
                    <img src="${exercise.video}" class="exercise-image" />
                    <h3 class="exercise-title">${exercise.nombre}</h3>
                </div>
            `).join('');
        }
    } catch (error) {
        grid.innerHTML = '<p class="text-white text-center col-span-full">Error al cargar los ejercicios.</p>';
    }
});

function showExercise(name, description, video) {
    Swal.fire({
        title: `<span style="color: #fff700">${name}</span>`,
        html: `<p>${description}</p>` +
            `<div class="mt-4"><img src="${video}" class="w-full h-auto" /></div>`,
        showConfirmButton: false,
        background: '#1a202c', // Fondo oscuro
        color: '#fff',         // Texto blanco
        showCancelButton: true,
        cancelButtonText: 'Cerrar',
        cancelButtonColor: 'gray',
        cancelButtonClass: 'bg-gray-800 hover:bg-gray-700'
    });
}

    </script>
</body>
</x-app-layout>
