<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden
    bg-white drop-shadow-1 duration-300 ease-linear
    dark:bg-boxdark dark:drop-shadow-none
    lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-between gap-2 px-4 py-3 pt-6">
    <!-- Logo tetap tampil di semua halaman -->
    <div class="w-full flex flex-col items-center">
        <img src="/assets/images/logo/as-saad.png" alt="Logo As-Sa'ad" class="h-20 w-20 object-contain mb-2" />
        <a href="/dashboard">
        <h1 class="text-2xl font-bold text-primary dark:text-black">As-Sa'ad</h1>
        </a>
    </div>

    <!-- Tombol toggle sidebar -->
    <button class="absolute top-4 right-4 block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
        <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
            fill="" />
        </svg>
    </button>
    </div>

    <!-- SIDEBAR HEADER -->
    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class="mt-2 px-6 py-4" x-data="{ selected: $persist('Dashboard') }">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>
                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Dashboard -->
                    <li>
                    <a href="{{ route('dashboard') }}"
                        class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::routeIs('dashboard') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                            <!-- SVG Dashboard -->
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                                    fill="" />
                                <path
                                    d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                                    fill="" />
                                <path
                                    d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                                    fill="" />
                                <path
                                    d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                                    fill="" />
                            </svg>
                            Dashboard
                        </a>
                    </li>

                     <!-- Akun Panel (Akun) -->
                     <li>
                        <a href="{{ route('admin.akun.index') }}"
                            class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                            hover:bg-primary/10 dark:hover:bg-meta-4
                            {{ Request::routeIs('admin.akun.index') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" 
                                clip-rule="evenodd" />
                            </svg>
                            Akun
                        </a>
                    </li>
                    <!-- Menu Item PPDB -->
                    <li>
                    <a href="{{ route('ppdb.index') }}"
                        class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::is('ppdb*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                            <!-- SVG PPDB -->
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                            </svg>
                            PPDB
                        </a>
                    </li>

                    <!-- Menu Item Data Murid -->
                    <li>
                    <a href="{{ route('data.murid.index') }}"
                        class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::is('data/murid*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                            <!-- SVG Murid -->
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                            </svg>
                            Data Murid
                        </a>
                    </li>

                    <!-- Menu Item Data Guru -->
                    <li>
                    <a href="{{ route('data.guru.index') }}"
                        class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::is('data/guru*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                            <!-- SVG Guru -->
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                <path
                                    d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                <path
                                    d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                            </svg>
                            Data Guru
                        </a>
                    </li>

                    <!-- Menu Item Data Kelas -->
                    <li>
                    <a href="{{ route('data.kelas.index') }}"
                        class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::is('data/kelas*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                            <!-- SVG Kelas -->
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z" />
                                <path
                                    d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z" />
                                <path
                                    d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z" />
                            </svg>
                            Data Kelas
                        </a>
                    </li>

                    <!-- Panel Rekap Nilai & Mapel (Dropdown) -->
                    <li x-data="{ open: {{ Request::routeIs('data.nilai.*') || Request::routeIs('data.mata_pelajaran.*') || Request::routeIs('data.pivot_mapel_kelas.*') || Request::routeIs('data.laporan_harian.*') ? 'true' : 'false' }} }">
                        <button @click="open = !open"
                            class="w-full flex items-center justify-between gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                            hover:bg-primary/10 dark:hover:bg-meta-4
                            {{ Request::routeIs('data.nilai.*') || Request::routeIs('data.mata_pelajaran.*') || Request::routeIs('data.pivot_mapel_kelas.*') || Request::routeIs('data.laporan_harian.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">

                            <div class="flex items-center gap-2.5">
                                <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.32 2.577a49.255 49.255 0 0 1 11.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 0 1-1.085.67L12 18.089l-7.165 3.583A.75.75 0 0 1 3.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Akademik
                            </div>
                            <svg :class="open ? 'rotate-180' : ''"
                                class="fill-current transform transition-transform duration-200" width="12"
                                height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        <ul x-show="open" class="mt-1 space-y-1 pl-6 text-sm" x-transition>
                            <li>
                            <a href="{{ route('data.nilai.index') }}"
                                class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                hover:bg-primary/10 dark:hover:bg-meta-4
                                {{ Request::routeIs('data.nilai.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                    Rekap Nilai
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('data.mata_pelajaran.index') }}"
                                class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                hover:bg-primary/10 dark:hover:bg-meta-4
                                {{ Request::routeIs('data.mata_pelajaran.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                    Mata Pelajaran
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('data.pivot_mapel_kelas.index') }}"
                                class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                hover:bg-primary/10 dark:hover:bg-meta-4
                                {{ Request::routeIs('data.pivot_mapel_kelas.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                    Pembagian Mapel
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('data.laporan_harian.index') }}"
                                class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                hover:bg-primary/10 dark:hover:bg-meta-4
                                {{ Request::is('data/laporan-harian*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                Laporan Harian
                            </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Panel Keuangan (Dropdown) -->
                    <li x-data="{ open: {{ Request::routeIs('admin.pembayaran.*', 'admin.pembayaran.cicilan.*') ? 'true' : 'false' }} }">
                        <button @click="open = !open"
                            class="w-full flex items-center justify-between gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                            hover:bg-primary/10 dark:hover:bg-meta-4
                            {{ Request::routeIs('admin.pembayaran.*', 'admin.pembayaran.cicilan.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                            <div class="flex items-center gap-2.5">
                                <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                    <path fill-rule="evenodd"
                                        d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                                </svg>
                                Keuangan
                            </div>
                            <svg :class="open ? 'rotate-180' : ''"
                                class="fill-current transform transition-transform duration-200" width="12"
                                height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        <ul x-show="open" class="mt-1 space-y-1 pl-6 text-sm" x-transition>
                            <li>
                            <a href="{{ route('admin.pembayaran.index') }}"
                                class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                hover:bg-primary/10 dark:hover:bg-meta-4
                                {{ Request::routeIs('admin.pembayaran.index', 'admin.pembayaran.create', 'admin.pembayaran.edit') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                    Tagihan Pembayaran
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('admin.pembayaran.riwayat') }}"
                                class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                hover:bg-primary/10 dark:hover:bg-meta-4
                                {{ Request::routeIs('admin.pembayaran.riwayat') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                    Riwayat Pembayaran
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('admin.pembayaran.cicilan.index') }}"
                                class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                hover:bg-primary/10 dark:hover:bg-meta-4
                                {{ Request::routeIs('admin.pembayaran.cicilan.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                    Pengajuan Cicilan
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <!-- Panel Konten (Dropdown) -->
                    <li x-data="{ open: {{ Request::routeIs('konten.visi_misi.*', 'konten.kegiatan.*') ? 'true' : 'false' }} }">
                        <button @click="open = !open"
                            class="w-full flex items-center justify-between gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                            hover:bg-primary/10 dark:hover:bg-meta-4
                            {{ Request::routeIs('konten.visi_misi.*', 'konten.kegiatan.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                            <div class="flex items-center gap-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-file">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z"></path>
                                </svg>
                                Konten
                            </div>
                            <svg :class="open ? 'rotate-180' : ''"
                                class="fill-current transform transition-transform duration-200" width="12" height="8"
                                viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.41 0.91a1 1 0 011.18 0L6 5.32l4.41-4.41a1 1 0 111.18 1.18l-5 5a1 1 0 01-1.18 0l-5-5a1 1 0 010-1.18z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        <ul x-show="open" x-transition class="mt-1 space-y-1 pl-6 text-sm">
                            <li>
                                <a href="{{ route('konten.visi_misi.index') }}"
                                    class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                    hover:bg-primary/10 dark:hover:bg-meta-4
                                    {{ Request::routeIs('konten.visi_misi.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                    Visi & Misi
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('konten.kegiatan.index') }}"
                                    class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                    hover:bg-primary/10 dark:hover:bg-meta-4
                                    {{ Request::routeIs('konten.kegiatan.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                    Kegiatan
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('admin.profile.index') }}"
                            class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                            hover:bg-primary/10 dark:hover:bg-meta-4
                            {{ Request::is('admin/profil') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 
                                0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                            </svg>
                            Profil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.akun.logout') }}"
                            class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                            hover:bg-primary/10 dark:hover:bg-meta-4">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3 
                                3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>

@push('styles')
<style>
.sidebar-hover:hover {
  background-color: rgba(153,188,133,0.2);
}
.sidebar-active {
  background-color: rgba(153,188,133,0.2);
}
</style>
@endpush