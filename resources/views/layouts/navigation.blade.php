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
            <div class="hidden sm:flex sm:items-center sm:ms-6 mt-4 ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 rounded-md text-[#FFF700] font-bold bg-black hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 ">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">

                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden mt-4">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400  text-gray-500 hover:text-gray-500  hover:text-gray-400 hover:bg-gray-100  hover:bg-gray-900 focus:outline-none focus:bg-gray-100  focus:bg-gray-900 focus:text-gray-500  focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('yourgainz.home')" :active="request()->routeIs('yourgainz.home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200  ">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800  text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<div class="w-full h-[60px] absolute bg-gradient-to-b from-black to-transparent">
    <!-- Contenido aquí -->
</div>
