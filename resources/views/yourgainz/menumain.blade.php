<x-app-layout>

    <div class="p-6 text-gray-900">
        <div class="container mx-auto p-4">
            <div class="flex justify-center mb-6">
                <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1739966822/YourGainz_Logo_Completo_1_gsl94c.png"
                    alt="YourGainz Logo" class="h-60 md:h-60 lg:h-180">
            </div>
            <div class="hidden md:flex justify-center items-center p-6 rounded-lg relative">
                <div class="relative w-48 h-48 lg:w-64 lg:h-64 rounded-full overflow-hidden border-8 border-[#fff]">
                    <img src="https://res.cloudinary.com/dgzgzx9ov/image/upload/v1739966822/YourGainz_Logo_Completo_1_gsl94c.png" 
                        class="w-full h-full object-cover rounded-full" alt="User">
                </div>
                <div class="p-4 bg-[#ffffffd3] rounded-xl text-black shadow-lg ml-[-108px] lg:ml-[-128px] pl-20 lg:pl-24 h-48 w-3/4 lg:h-64 flex flex-col justify-center">
                    <h3 class="text-xl lg:text-2xl font-semibold ml-12">{{ Auth::user()->name }}</h3>
                    <p class="text-lg lg:text-xl ml-12">Peso: {{ Auth::user()->weight }}</p>
                    <p class="text-lg lg:text-xl ml-12">Altura: {{ Auth::user()->height }}</p>
                    <p class="text-lg lg:text-xl ml-12">IMC: Poner función</p>
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
