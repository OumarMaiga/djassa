<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 w-full" style="z-index:35; position:fixed; top:0">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-4">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <h1 class="inline-flex items-center" style="font-size:24px; font-weight:800; color:#ec8333">DJASSA</h1>
                    </a>
                </div>

                <!-- Search input -->
                <input style="height:70%; width:20rem; background:#F6F6F6; padding-left:1rem; border-radius:6px; margin-left:1.5rem; margin-top:0.75rem" placeholder="Rechercher un produit"/>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    @if(Auth::check() && Auth::user()->type === "admin")
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @endif
                    <!-- @if($cartCount ?? '' )
                        <span style="margin-top:1.5rem" class="position-relative">
                            <a href="{{ route('panier.index') }}">
                                <ion-icon name="cart-outline" style="font-size:2em; color:#1A1A1A"></ion-icon>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color:#ec6333">{{ $cartCount }}</span>
                            </a>
                        </span>
                    @endif -->
                    @if (Auth::check())
                        <x-nav-link :href="route('my_commande', Auth::user()->id)">
                            Commandes
                        </x-nav-link> 
                        
                        @if(Auth::user()->type === "admin")
                            <x-nav-link :href="route('dashboard.config')">
                                Config
                            </x-nav-link>
                            <!--<x-nav-link :href="route('service.dashboard_index')">
                                Services
                            </x-nav-link>-->
                        @endif
                        <x-nav-link :href="route('service.index', Auth::user()->id)">
                            Services
                        </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @if($cartCount ?? '' )
                    <span style="margin-top:0.6rem; margin-right:2rem" class="position-relative">
                        <a href="{{ route('panier.index') }}">
                            <ion-icon name="cart-outline" style="font-size:2em; color:#1A1A1A"></ion-icon>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background-color:#ec6333">{{ $cartCount }}</span>
                        </a>
                    </span>
                @endif
                @if (Auth::check())
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div style="font-size:16px; color:#1A1A1A; margin-right:-5rem">{{ Auth::check() ? Auth::user()->name : "" }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        
                        @if (Auth::check())
                            @if(Auth::user()->type === "admin")
                                <x-dropdown-link :href="route('dashboard')">
                                    Dashboard
                                </x-dropdown-link>
                            @endif
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        @endif
                    </x-slot>
                </x-dropdown>
                @else
                <x-nav-link :href="route('login')">
                    Login
                </x-nav-link>
                <x-nav-link :href="route('register')">
                    register
                </x-nav-link>
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
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
            <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <?php
                    if(Auth::check()){    
                ?>
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                <?php } ?>
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
    </div>
</nav>
