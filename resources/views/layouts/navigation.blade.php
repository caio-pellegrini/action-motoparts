<nav x-data="{ open: false }" class="font-readex dark:bg-black border-b border-gray-100 {{ request()->routeIs('produtos') ? 'fixed top-0 w-full z-50' : '' }}">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8 bg-green-700 text-white">
        <div class="flex justify-between mx-auto px-4 sm:px-6 lg:px-8 text-white">
            <div class="flex space-x-4">
                <div>
                    <a class="flex items-center gap-1" href="">
                        <img src="{{ asset('/images/whatsapp.svg') }}" alt="">
                        <p>(16) 99646-4493</p>
                    </a>
                </div>
                <div>
                    <a class="flex items-center gap-1" href="">
                        <img src="{{ asset('/images/phone.svg') }}" alt="">
                        <p>3242-9074</p>
                    </a>
                </div>
            </div>

            <div class="flex space-x-4  ">
                <div>
                    <a class="flex items-center gap-1" href="https://web.facebook.com/ActionMotoParts/" target="_blank">
                        <img src="{{ asset('/images/facebook.svg') }}" alt="">
                        <p>action_parts</p>
                    </a>
                </div>
                <div>
                    <a class="flex items-center gap-1" href="https://www.instagram.com/actionmotoparts/" target="_blank">
                        <img src="{{ asset('/images/instagram.svg') }}" alt="">
                        <p>actionmotoparts</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8 text-white">
        <div class="mx-auto px-4 sm:px-6 lg:px-8 ">
            <div class="flex justify-between h-16">


                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('/') }}">
                            <x-application-logo></x-application-logo>
                        </a>
                    </div>

                    <!-- Search Bar -->
                    <div class="hidden flex items-center space-x-5 sm:-my-px sm:ml-10 sm:flex ">


                        <div class="ml-[450px] w-100 h-10 bg-gray-400 p-2">
                            <p>Olá, eu sou uma barra de pesquisa</p>
                        </div>
                        
                    </div>


                </div>

                <!-- Settings Dropdown -->
                @if (Route::has('login'))
                <div class="flex items-center">

                    @auth

                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="font-lateef inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ mb_strtoupper(Auth::user()->name, 'UTF-8') }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('PERFIL') }}

                                </x-dropdown-link>

                                <x-dropdown-link :href="route('pedidos')">
                                    {{ __('MEUS PEDIDOS') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('SAIR') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    @else

                    <div class="hidden space-x-4 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link class="bg-verde-cinza text-white px-3 py-1 rounded-lg" :href="route('login')">
                            {{ __('ENTRAR') }}
                        </x-nav-link>

                        @if (Route::has('register'))
                        <x-nav-link class="bg-verde-cinza text-white px-3 py-1 rounded-lg" :href="route('register')">
                            {{ __('CADASTRE-SE') }}
                        </x-nav-link>
                        @endif
                    </div>
                    @endauth
                </div>
                @endif



                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>



    <div class="mx-auto px-4 sm:px-6 lg:px-8 bg-cinza-header text-white border-b-[3px] border-verde-escuro">
        <div class="flex justify-center items-center h-8">
            <!-- Navigation Links -->
            <div class="hidden space-x-5 sm:flex">
                <x-nav-link class="text-lg" :href="route('/')" :active="request()->routeIs('/')">
                    {{ __('INÍCIO') }}
                </x-nav-link>
                <x-nav-link :href="route('sobre-nos')" :active="request()->routeIs('sobre-nos')">
                    {{ __('QUEM SOMOS') }}
                </x-nav-link>
                <x-nav-link :href="route('produtos')" :active="request()->routeIs('produtos')">
                    {{ __('PRODUTOS') }}
                </x-nav-link>
                <x-nav-link :href="route('produtos')" :active="request()->routeIs('produtos')">
                    {{ __('CATÁLOGO') }}
                </x-nav-link>
                <x-nav-link :href="route('exibircarrinho')" :active="request()->routeIs('exibircarrinho')">
                    {{ __('CONTATO') }}


                    @if(\Cart::getContent()->count() != '0')
                    <span class="-mt-2 ml-1 bg-yellow-800 text-white text-xs font-sans mr-2 px-1.5 py-px rounded">
                        {{ \Cart::getContent()->count() }}
                    </span>
                    @endif

                    
                </x-nav-link>
            </div>
        </div>
    </div>




















    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('HOME') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('SOBRE NÓS') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('CARDÁPIO') }}
            </x-responsive-nav-link>

        </div>

        <!-- Responsive Settings Options -->
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Perfil') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Sair') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ENTRAR</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">CADASTRE-SE</a>
            @endif
            @endauth
        </div>
        @endif


    </div>
</nav>