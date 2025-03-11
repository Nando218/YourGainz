<nav x-data="{ open: false }" class="bg-black">
    <!-- Primary Navigation Menu -->
    <div class="  px-4 sm:px-6 lg:px-8 w-full ">
        <div class="flex h-16 w-full justify-between">

            <div class="flex justify-start">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('yourgainz.home') }}">
                        <x-application-logo/>
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
        <div class=" flex">

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 my-auto ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-5 rounded-md text-[#FFF700] font-bold bg-black hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 ">
                            <span style="color: #FFF700;">{{ Auth::user()->name }}</span>

                            <div class="ms-1">

                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-[#FFF700] hover:text-gray-300">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="text-[#FFF700] hover:text-gray-300">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

            <!-- Mobile Navigation (Matching Desktop Style) -->
            <div class="sm:hidden flex items-center my-auto">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-5 rounded-md text-[#FFF700] font-bold bg-black hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 ">
                            <span style="color: #FFF700;">{{ Auth::user()->name }}</span>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-[#FFF700] hover:text-gray-300">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="text-[#FFF700] hover:text-gray-300">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>

    <!-- No responsive menu needed as we're using the same dropdown for mobile and desktop -->
</nav>
<div class="w-full h-[60px] absolute bg-gradient-to-b from-black to-transparent">
    <!-- Contenido aquí -->
</div>
