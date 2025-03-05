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
                <button on
                    class="bg-[#FFF700] text-black text-sm font-bold py-2 px-6 rounded-full shadow-md hover:bg-black hover:text-[#FFF700] hover:ring-2 hover:ring-[#FFF700] transition-all">
                    CREAR NUEVA RUTINA
                </button>
            </div>

            <!-- Imagen central para móvil -->
            <div class="mt-20 flex justify-center">
                <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1739966822/YourGainz_Logo_Completo_1_gsl94c.png"
                    alt="Your Gainz Logo" class="w-40 h-auto">
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

        <!-- Versión escritorio (se muestra solo en pantallas grandes) -->
        <div class="hidden md:block">
            <!-- Título para escritorio -->
            <h1 class="text-3xl font-bold text-[#FFF700] tracking-widest pl-4 pt-8">
                Rutinas (Escritorio)
            </h1>

            <!-- Botones para escritorio -->
            <div class="mt-12 flex items-center justify-center gap-16">
                <div class="flex flex-col items-center">
                    <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1740575960/image_33_rk8ja9.png" alt="Icono" class="mb-4 w-40 h-auto">
                    <button
                        class="bg-[#FFF700] text-black text-base font-bold py-2 px-8 rounded-full shadow-md hover:bg-black hover:text-[#FFF700] hover:ring-2 hover:ring-[#FFF700] transition-all">
                        RUTINAS RECOMENDADAS
                    </button>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1740576103/image_34_mblsdu.png" alt="Icono" class="mb-4 w-40 h-auto">
                    <button
                        class="bg-[#FFF700] text-black text-base font-bold py-2 px-8 rounded-full shadow-md hover:bg-black hover:text-[#FFF700] hover:ring-2 hover:ring-[#FFF700] transition-all">
                        CREAR NUEVA RUTINA
                    </button>
                </div>
            </div>

            <!-- Imagen central para escritorio -->
            <div class="mt-12 flex justify-center">
                <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1739966822/YourGainz_Logo_Completo_1_gsl94c.png"
                    alt="Your Gainz Logo" class="w-40 h-auto">
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
