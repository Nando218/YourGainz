<x-app-layout>

    <div class="p-6 text-gray-900">
        <div class="container mx-auto p-4">
            <div class="flex justify-center mb-6">
                <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1739966822/YourGainz_Logo_Completo_1_gsl94c.png"
                    alt="YourGainz Logo" class="h-60 md:h-60 lg:h-180">
            </div>
            <div class="text-black p-6 rounded-lg relative md:bg-[#ffffffd2]">


                <div
                    class="  p-4 rounded-lg hidden md:flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4">
                    <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1739966822/YourGainz_Logo_Completo_1_gsl94c.png"
                        class=" w-48 h-48 rounded-full" alt="User">
                    <div class="text-center md:text-left">
                        <h3 class="text-lg font-semibold">{{ Auth::user()->name }}</h3>
                        <p class="text-sm">Peso: {{ Auth::user()->weight }}</p>
                        <p class="text-sm">Altura: {{ Auth::user()->height }}</p>
                        <p class="text-sm">IMC: Poner funcion</p>
                    </div>
                </div>



            </div>
            <div class=" flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4 md:mt-6">
                <button
                    class="bg-[#FFF700] hover:bg-[#e2dc2e] text-gray-900 font-bold py-2 px-4 rounded-3xl flex items-center justify-center w-full md:w-40">
                    <i class="fas fa-list-ul mr-2"></i> RUTINAS
                </button>
                <button
                    class="bg-[#FFF700] hover:bg-[#e2dc2e] text-gray-900 font-bold py-2 px-4 rounded-3xl flex items-center justify-center w-full md:w-40">
                    <i class="fas fa-dumbbell mr-2"></i> EJERCICIOS
                </button>
                <button
                    class="bg-[#FFF700] hover:bg-[#e2dc2e] text-gray-900 font-bold py-2 px-4 rounded-3xl flex items-center justify-center w-full md:w-40">
                    <i class="fas fa-eye mr-2"></i> IMC
                </button>
            </div>
        </div>
    </div>

</x-app-layout>
