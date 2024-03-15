<nav x-data="{ open: false }" class="font-readex border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="hidden sm:block mx-auto px-4 sm:px-6 lg:px-8 bg-green-700 text-white">
        <div class="flex justify-between mx-auto px-2 sm:px-4 md:px-6 lg:px-8 text-white">
            <div class="flex space-x-4">
                <div>
                    <a class="flex items-center gap-1 hover:text-gray-800" href="https://wa.me/send?phone=5516996464493" target="_blank">
                        <img src="{{ asset('/images/whatsapp.svg') }}" alt="">
                        <p>(16) 99646-4493</p>
                    </a>
                </div>
                <div>
                    <a class="flex items-center gap-1 hover:text-gray-800"" href=" tel:551632429074">
                        <img src="{{ asset('/images/phone.svg') }}" alt="" target="_blank">
                        <p>3242-9074</p>
                    </a>
                </div>
            </div>

            <div class="flex space-x-4  ">
                <div>
                    <a class="flex items-center gap-1 hover:text-gray-800"" href=" https://web.facebook.com/ActionMotoParts/" target="_blank">
                        <img src="{{ asset('/images/facebook.svg') }}" alt="">
                        <p>action_parts</p>
                    </a>
                </div>
                <div>
                    <a class="flex items-center gap-1 hover:text-gray-800"" href=" https://www.instagram.com/actionmotoparts/" target="_blank">
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
            <div class="flex justify-center items-center h-16">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('/') }}">
                        <x-application-logo></x-application-logo>
                    </a>
                </div>

                <!-- Search Bar -->
                <div class="grow my-3 px-6">
                    <div class="max-w-xl mx-auto flex items-center justify-between bg-cinza-search py-1 px-2 rounded-lg">
                        <p class="text-gray-500">Olá, o que você procura?</p>
                        <img src="{{ asset('/images/lupa-icon.svg') }}" alt="">
                    </div>
                </div>

                <!-- Settings Dropdown -->
                @if (Route::has('login'))
                <div class="flex items-center">

                    @auth

                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-nav-link :href="route('exibircarrinho')" :active="request()->routeIs('exibircarrinho')">
                            <div class="mr-3 -mt-1">
                                <svg width="25" height="25" viewBox="0 0 41 38" fill="current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M38.156 23.0031L40.4572 10.3468C40.5308 9.9415 40.5145 9.52496 40.4095 9.12664C40.3044 8.72832 40.1132 8.35793 39.8492 8.04166C39.5853 7.7254 39.2551 7.47097 38.8819 7.29638C38.5088 7.12178 38.1019 7.03127 37.69 7.03125H8.2049L7.34643 2.30945C7.22888 1.66127 6.88742 1.07496 6.38167 0.65287C5.87592 0.230777 5.23799 -0.000291503 4.57924 2.75992e-07H1.40625C1.03329 2.75992e-07 0.675604 0.148158 0.411881 0.411881C0.148158 0.675604 0 1.03329 0 1.40625C0 1.77921 0.148158 2.1369 0.411881 2.40062C0.675604 2.66434 1.03329 2.8125 1.40625 2.8125H4.57924L9.27298 28.6281C9.31495 28.8564 9.38503 29.0787 9.48163 29.2899C8.7795 29.8831 8.25757 30.6611 7.97499 31.5358C7.69241 32.4105 7.66047 33.3469 7.88281 34.2388C8.10514 35.1307 8.57286 35.9425 9.23294 36.5822C9.89303 37.2219 10.7191 37.6639 11.6175 37.8581C12.516 38.0524 13.4509 37.9911 14.3163 37.6812C15.1817 37.3714 15.9429 36.8253 16.5139 36.1049C17.0848 35.3845 17.4425 34.5186 17.5465 33.6053C17.6505 32.692 17.4966 31.7678 17.1023 30.9375H29.304C28.847 31.901 28.7154 32.9869 28.9289 34.0316C29.1424 35.0764 29.6895 36.0236 30.4878 36.7306C31.2861 37.4375 32.2925 37.8661 33.3554 37.9517C34.4183 38.0374 35.4803 37.7754 36.3815 37.2053C37.2827 36.6352 37.9743 35.7879 38.3523 34.7907C38.7303 33.7936 38.7742 32.7007 38.4774 31.6765C38.1806 30.6522 37.5591 29.7521 36.7065 29.1116C35.8539 28.4711 34.8164 28.1249 33.75 28.125H12.0402L11.5288 25.3125H35.3889C36.0476 25.3128 36.6855 25.0817 37.1913 24.6597C37.697 24.2376 38.0385 23.6513 38.156 23.0031ZM14.7656 33.0469C14.7656 33.4641 14.6419 33.8719 14.4101 34.2188C14.1784 34.5657 13.8489 34.836 13.4635 34.9957C13.078 35.1553 12.6539 35.1971 12.2447 35.1157C11.8356 35.0343 11.4597 34.8334 11.1647 34.5384C10.8697 34.2434 10.6688 33.8676 10.5874 33.4584C10.506 33.0492 10.5478 32.6251 10.7074 32.2397C10.8671 31.8542 11.1375 31.5248 11.4843 31.293C11.8312 31.0612 12.2391 30.9375 12.6562 30.9375C13.2155 30.9381 13.7517 31.1606 14.1471 31.556C14.5426 31.9515 14.765 32.4876 14.7656 33.0469ZM35.8594 33.0469C35.8594 33.4641 35.7357 33.8719 35.5039 34.2188C35.2721 34.5657 34.9427 34.836 34.5572 34.9957C34.1718 35.1553 33.7477 35.1971 33.3385 35.1157C32.9293 35.0343 32.5534 34.8334 32.2584 34.5384C31.9634 34.2434 31.7625 33.8676 31.6812 33.4584C31.5998 33.0492 31.6415 32.6251 31.8012 32.2397C31.9608 31.8542 32.2312 31.5248 32.5781 31.293C32.925 31.0612 33.3328 30.9375 33.75 30.9375C34.3092 30.9381 34.8454 31.1606 35.2409 31.556C35.6363 31.9515 35.8587 32.4876 35.8594 33.0469ZM8.71628 9.84375H37.69L35.3889 22.5H11.0174L8.71628 9.84375Z" fill="black" />
                                </svg>
                            </div>


                            @if(\Cart::getContent()->count() != '0')
                            <span class="-mt-2 ml-1 bg-yellow-800 text-white text-xs font-sans mr-2 px-1.5 py-px rounded">
                                {{ \Cart::getContent()->count() }}
                            </span>
                            @endif
                        </x-nav-link>

                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent leading-4 font-medium rounded-md text-gray-500 bg-red-400 dark:bg-gray-800 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
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
                                    {{ __('MEU PERFIL') }}

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

                    <div class="hidden space-x-6 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('register')">
                            {{ __('CADASTRE-SE') }}
                        </x-nav-link>

                        @if (Route::has('register'))
                        <x-nav-link :href="route('login')">
                            {{ __('ENTRAR') }}
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



    <div class="mx-auto px-2 sm:px-4 lg:px-8 bg-cinza-header text-white border-b-[3px] border-verde-escuro">
        <div class="flex justify-center items-center h-6 sm:h-8">
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:flex">
                <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                    {{ __('INÍCIO') }}
                </x-nav-link>
                <x-nav-link :href="route('quem-somos')" :active="request()->routeIs('quem-somos')">
                    {{ __('QUEM SOMOS') }}
                </x-nav-link>
                <x-nav-link :href="route('produtos')" :active="request()->routeIs('produtos')">
                    {{ __('PRODUTOS') }}
                </x-nav-link>
                <x-nav-link :href="route('catalogos')" :active="request()->routeIs('catalogos')">
                    {{ __('CATÁLOGOS') }}
                </x-nav-link>
                <x-nav-link :href="route('contato')" :active="request()->routeIs('contato')">
                    {{ __('CONTATO') }}
                </x-nav-link>
            </div>
        </div>
    </div>


















    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/')" :active="request()->routeIs('/')">
                {{ __('INÍCIO') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('quem-somos')" :active="request()->routeIs('quem-somos')">
                {{ __('QUEM SOMOS') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('produtos')" :active="request()->routeIs('produtos')">
                {{ __('PRODUTOS') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('catalogos')" :active="request()->routeIs('catalogos')">
                {{ __('CATÁLOGOS') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contato')" :active="request()->routeIs('contato')">
                {{ __('CONTATO') }}
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
                        {{ __('MEU PERFIL') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('pedidos')">
                        {{ __('MEUS PEDIDOS') }}
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

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">CADASTRE-SE</a>
            @endif

            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ENTRAR</a>


            @endauth
        </div>
        @endif


    </div>
</nav>