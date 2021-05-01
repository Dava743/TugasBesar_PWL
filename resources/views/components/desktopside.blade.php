<a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#"> Pengelolaan Barang</a>
<ul class="mt-6">
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == null ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == null ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('dashboard') }}">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
            </svg>
            <span class="ml-4">{{ __('Dashboard') }}</span>
        </a>
    </li>
</ul>
<ul>
    {{-- User --}}
    @if (Auth::user()->roles()->first()->name == "admin" || Auth::user()->roles()->first()->name == "kasir")
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'kasir' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'kasir' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('kasir.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            <span class="ml-4">{{ __('User') }}</span>
        </a>
    </li>
    @endif

    {{-- Pengelolaan Barang --}}
    @if (Auth::user()->roles()->first()->name == "admin" || Auth::user()->roles()->first()->name == "pegawai")
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'barang' || request()->segment(1) == 'kategori' || request()->segment(1) == 'merek' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'keuangan' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('barang.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg>
            <span class="ml-4">{{ __('Pengelolaan Barang') }}</span>
        </a>
    </li>
    @endif

    {{-- Kategori Barang--}}
    @if (Auth::user()->roles()->first()->name == "admin")
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'keuangan' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'keuangan' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('kategori.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
            </svg>
            <span class="ml-4">{{ __('Kategori Barang') }}</span>
        </a>
    </li>


    {{-- Merek Barang --}}
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(1) == 'pegawai' || request()->segment(1) == 'jabatan' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(1) == 'keuangan' ? 'text-gray-800 dark:text-gray-100' : ''}}" href="{{ route('merek.index') }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            <span class="ml-4">{{ __('Merek Barang') }}</span>
        </a>
    </li>

    {{-- Laporan --}}
    <li class="relative px-6 py-3">
        <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg {{request()->segment(2) == 'absensi' || request()->segment(2) == 'barang' || request()->segment(2) == 'keuangan' || request()->segment(2) == 'penggajian' || request()->segment(2) == 'transaksi' ? 'bg-purple-600' : ''}}" aria-hidden="true"></span>
        <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 " @click="toggleLaporanMenu" aria-haspopup="true">
            <span class="inline-flex items-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="ml-4">{{ __('Laporan') }}</span>
            </span>
            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" >
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <template x-if="isLaporanMenuOpen">
            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu" >
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(2) == 'barang' ? 'text-gray-800 dark:text-gray-100' : ''}}">
                    <a class="w-full" href="{{ route('laporan.barang') }}">{{ __('Laporan Barang Masuk') }}</a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{request()->segment(2) == 'transaksi' ? 'text-gray-800 dark:text-gray-100' : ''}}">
                    <a class="w-full" href="{{ route('laporan.transaksi') }}">{{ __('Laporan Barang Keluar') }}</a>
                </li>
            </ul>
        </template>
    </li>
    @endif
</ul>
