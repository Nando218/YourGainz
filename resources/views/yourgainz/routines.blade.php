<x-app-layout>
    <!-- Contenedor principal con la imagen de fondo -->
    <div class="min-h-screen bg-cover bg-center"
        style="
            background-image: url('https://res.cloudinary.com/dd5hetwb8/image/upload/v1739967517/wallpaper2_nxxxpp.png');
            background-repeat: repeat;
            background-size: 100px 100px;
        ">

        <!-- Versión móvil (se muestra solo en pantallas pequeñas) -->
        <div class="block md:hidden">
            <!-- Título para móvil -->
            <h1 class="text-2xl font-bold text-[#FFF700] tracking-widest pl-4 pt-4">
                Rutinas (Móvil)
            </h1>

            <!-- Botones para móvil -->
            <div class="mt-12 flex flex-col items-center gap-8">
                <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1740575960/image_33_rk8ja9.png" alt="Imagen encima del botón de RUTINAS RECOMENDADAS" class="w-20 h-auto">
                <button
                    class="bg-[#FFF700] text-black text-sm font-bold py-2 px-6 rounded-full shadow-md hover:bg-black hover:text-[#FFF700] hover:ring-2 hover:ring-[#FFF700] transition-all">
                    RUTINAS RECOMENDADAS
                </button>
                <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1740576103/image_34_mblsdu.png" alt="Imagen encima del botón de CREAR NUEVA RUTINA" class="w-20 h-auto">
                <button
                    class="bg-[#FFF700] text-black text-sm font-bold py-2 px-6 rounded-full shadow-md hover:bg-black hover:text-[#FFF700] hover:ring-2 hover:ring-[#FFF700] transition-all">
                    CREAR NUEVA RUTINA
                </button>
            </div>


            <!-- Barra de gradiente en la parte inferior -->
            <div class="fixed bottom-0 left-0 right-0 w-full h-[60px] bg-gradient-to-b from-transparent to-black"></div>

            <!-- Botón de volver para móvil -->
            <div class="fixed bottom-0 left-0 right-0 flex justify-center mb-8">
                <button
                    class="bg-[#FFF700] text-black text-sm font-bold py-2 px-8 rounded-full shadow-md hover:bg-black hover:text-[#FFF700] hover:ring-2 hover:ring-[#FFF700] transition-all">
                    Back
                </button>
            </div>
        </div>

        <!-- Versión escritorio (se muestra solo en pantallas grandes)---------------------------------------------------------------- -->
        <div class="hidden md:block">
            <!-- Título para escritorio -->
            <h1 class="text-3xl font-bold text-[#FFF700] tracking-widest pl-4 pt-8">
                Rutinas (Escritorio)
            </h1>

            <!-- Botones para escritorio -->
            <div class="mt-[calc(50vh-12rem)] flex items-center justify-center gap-16 ">

                <div class="flex flex-col items-center">
                    <div class="bg-gray-800 bg-opacity-90 border-2 border-[#FFF700] p-16 rounded-lg w-[1200px]">
                        <table class="w-full text-left text-white">
                            <tr class="bg-gray-700">
                                <th class="p-4">Ejercicio</th>
                                <th class="p-4">Repeticiones</th>
                                <th class="p-4">Series</th>
                                <th class="p-4 text-right">Acciones</th>
                            </tr>
                            <tr class="bg-gray-800">
                                <td class="p-4">Ejercicio 1</td>
                                <td class="p-4">10</td>
                                <td class="p-4">3</td>
                                <td class="p-4 text-right">
                                    <button type="button" class="text-[#FFF700] hover:text-red-700 transition">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-gray-700">
                                <td class="p-4">Ejercicio 2</td>
                                <td class="p-4">12</td>
                                <td class="p-4">4</td>
                                <td class="p-4 text-right">
                                    <button type="button" class="text-[#FFF700] hover:text-red-700 transition">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                    </button>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </table>

                    </div>
                </div>
            </div>



            <!-- Barra de gradiente en la parte inferior -->
            <div class="fixed bottom-0 left-0 right-0 w-full h-[60px] bg-gradient-to-b from-transparent to-black"></div>

            <!-- Botón de volver para escritorio -->
            <div class="fixed bottom-0 left-0 right-0 flex justify-center mb-4">
                <button
                    class="bg-[#FFF700] text-black text-base font-bold py-2 px-8 rounded-full shadow-md hover:bg-black hover:text-[#FFF700] hover:ring-2 hover:ring-[#FFF700] transition-all">
                    Back
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
