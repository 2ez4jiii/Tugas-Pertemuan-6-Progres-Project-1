<!-- resources/views/layout/navbar.blade.php -->
<nav id="navbar" class="sticky top-0 bg-opacity-10 backdrop-blur-lg backdrop-filter shadow-md z-50" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center gap-20 lg:gap-10 xl:gap-20">
                <div class="flex gap-2 items-center">
                    <h1 class="font-medium text-xl text-black">MiWoo</h1>
                    <img class="h-12 w-12" src="{{ asset('img/pawblack.png') }}" alt="MiWoo Logo">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4 text-black">
                        <a href="{{ route('home') }}" class="rounded-md outline px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                        <a href="{{ route('about') }}" class="rounded-md px-3 py-2 text-sm font-medium hover:outline">About</a>
                        <a href="{{ route('booking') }}" class="rounded-md px-3 py-2 text-sm font-medium hover:outline">Booking</a>
                        <a href="{{ route('contact') }}" class="rounded-md px-3 py-2 text-sm font-medium hover:outline">Contact</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="relative ml-3">
                        <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="{{ asset('img/Rei_Ayanami.jpg') }}" alt="User Avatar">
                        </button>

                        <div x-show="isOpen"
                             x-transition:enter="transition ease-out duration-100 transform"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75 transform"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="bg-white bg-opacity-70 text-black absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-black" role="menuitem">Your Profile</a>
                            <a href="{{ route('settings') }}" class="block px-4 py-2 text-sm text-black" role="menuitem">Settings</a>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-black" role="menuitem">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md p-2 text-black hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3 text-black">
            <a href="{{ route('home') }}" class="block rounded-md outline px-3 py-2 text-base font-medium" aria-current="page">Home</a>
            <a href="{{ route('about') }}" class="block rounded-md px-3 py-2 text-base font-medium hover:outline">About</a>
            <a href="{{ route('booking') }}" class="block rounded-md px-3 py-2 text-base font-medium hover:outline">Booking</a>
            <a href="{{ route('contact') }}" class="block rounded-md px-3 py-2 text-base font-medium hover:outline">Contact</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ asset('img/Rei_Ayanami.jpg') }}" alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-black">Rei Ayanami</div>
                    <div class="text-sm font-medium leading-none text-black">reiayanami12@gmail.com</div>
                </div>
                <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="{{ route('profile') }}" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700">Your Profile</a>
                <a href="{{ route('settings') }}" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700">Settings</a>
                <a href="{{ route('logout') }}" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-700">Sign out</a>
            </div>
        </div>
    </div>
</nav>