<nav class="bg-gray-800 fixed top-0 w-full z-50" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-8" src="img/logo.png" alt="Your Company">
                    <span class="ps-2 text-gold font-bold">KEY GOLD</span>
                </div>
                <div class="hidden md:block"></div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/#home" id="home-link"
                            class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                            aria-current="page">Home</a>
                        <a href="/#buyback" id="buyback-link"
                            class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Buyback</a>
                        <a href="/#harga" id="harga-link"
                            class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Harga
                            Emas</a>
                        <a href="/member" id="member-link"
                            class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">List
                            Member</a>
                        <a href="/#lokasi" id="lokasi-link"
                            class="nav-link rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Lokasi</a>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/#home" id="mobile-home-link"
                class="nav-link block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                aria-current="page">Home</a>
            <a href="/#buyback" id="mobile-buyback-link"
                class="nav-link block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Buyback</a>
            <a href="/#harga" id="mobile-harga-link"
                class="nav-link block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Harga
                Emas</a>
            <a href="/member" id="mobile-member-link"
                class="nav-link block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">List
                Member</a>
            <a href="/#lokasi" id="mobile-lokasi-link"
                class="nav-link block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Lokasi</a>
        </div>
    </div>
</nav>
