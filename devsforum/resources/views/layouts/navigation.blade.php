<nav x-data="{ open: false }" class="bg-white-200">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}">
                        <div class="flex-shrink-0">
                            <img class="h-32 w-auto" src="{{ asset('images/devsforum_1.png') }}" alt="devsforum">
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')"
                                    class="text-black-50 hover:bg-white-200 hover:text-pink-600 px-3 py-2 rounded-md text-sm font-medium">
                            {{ __('Popular') }}
                        </x-nav-link>

                        <x-nav-link :href="route('comunidades')" :active="request()->routeIs('comunidades')"
                                    class="text-black-50 hover:bg-white-200 hover:text-pink-600 px-3 py-2 rounded-md text-sm font-medium">
                            {{ __('Comunidades') }}
                        </x-nav-link>
                        <!-- Zona que usara middleware auth  -->
                        @auth()
                            <x-nav-link :href="route('communities.index')" :active="request()->routeIs('communities.index')"
                                        class="text-black-50 hover:bg-white-200 hover:text-pink-600 px-3 py-2 rounded-md text-sm font-medium">
                                {{ __('Tus comunidades') }}
                            </x-nav-link>



                            @if ( Auth::user()->admin== 1)
                                <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')"
                                            class="text-black-50 hover:bg-red-500 hover:text-red-900 px-3 py-2 rounded-md text-sm font-medium">
                                    {{ __('ADMIN') }}
                                </x-nav-link>
                            @endif
                        @endauth




                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @auth()
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="max-w-xs text-pink-600 rounded-full flex items-end text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-pink-700 focus:ring-white">

                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
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
                    @else

                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('login') }}" class="text-sm text-pink-600 dark:text-white-500 underline">Log
                                in</a>
                        </div>
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('register') }}" class="text-sm text-pink-600 dark:text-white-500 underline">Register</a>
                        </div>

                    @endauth
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out display:hidden">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Popular') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('comunidades')" :active="request()->routeIs('comunidades')">
                {{ __('Tus comunidades') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Para ti') }}
            </x-responsive-nav-link>
        </div>

            <!-- Responsive Settings Options -->
            @auth
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
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
            @else
                <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')"
                                       class="block px-3 py-2 rounded-md text-base font-medium text-white-400 hover:text-white hover:bg-gray-700">
                    {{ __('Log in') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')"
                                       class="block px-3 py-2 rounded-md text-base font-medium text-white-400 hover:text-white hover:bg-gray-700">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            @endauth
        </div>
    </div>
</nav>
