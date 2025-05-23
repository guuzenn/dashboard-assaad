<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden
    bg-white drop-shadow-1 duration-300 ease-linear
    dark:bg-boxdark dark:drop-shadow-none
    lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">

    <div class="flex items-center justify-between gap-2 px-4 py-3 pt-6">
        <a href="{{ route('student.dashboard') }}" class="pl-6">
            <h1 class="text-2xl font-bold text-primary dark:text-black">Student Portal</h1>
        </a>
        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                    fill="" />
            </svg>
        </button>
    </div>

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <nav class="mt-2 px-6 py-4">
            <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>
            <ul class="flex flex-col gap-1.5">
                <li>
                    <a href="{{ route('student.dashboard') }}"
                        class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::routeIs('student.dashboard') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                        <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18">
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

                <li>
                    <a href="{{ route('student.profile') }}"
                        class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::routeIs('student.profile') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                        <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" />
                            <path d="M4 20c0-4 4-7 8-7s8 3 8 7" />
                        </svg>
                        Profil Saya
                    </a>
                </li>

                <li x-data="{ open: {{ Request::routeIs('student.pembayaran.*') || Request::routeIs('student.cicilan.*') ? 'true' : 'false' }} }">
                    <button @click="open = !open"
                        class="w-full flex items-center justify-between gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::routeIs('student.pembayaran.*') || Request::routeIs('student.cicilan.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
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
                            Pembayaran
                        </div>
                        <svg :class="open ? 'rotate-180' : ''"
                            class="fill-current transform transition-transform duration-200" width="12"
                            height="8" viewBox="0 0 12 8">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.41 0.91c0.33-0.33 0.86-0.33 1.19 0L6 5.32l4.41-4.41c0.33-0.33 0.86-0.33 1.19 0 0.33 0.33 0.33 0.86 0 1.19l-5 5c-0.33 0.33-0.86 0.33-1.19 0l-5-5c-0.33-0.33-0.33-0.86 0-1.19z"
                                fill="currentColor" />
                        </svg>
                    </button>
                    <ul x-show="open" class="mt-1 space-y-1 pl-6 text-sm" x-transition>
                        <li>
                            <a href="{{ route('student.pembayaran.index') }}"
                                class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                hover:bg-primary/10 dark:hover:bg-meta-4
                                {{ Request::routeIs('student.pembayaran.index') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                Tagihan & Riwayat
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('student.pembayaran.cicilan.index') }}"
                                class="block rounded-sm px-4 py-1.5 font-medium transition duration-300 ease-in-out
                                hover:bg-primary/10 dark:hover:bg-meta-4
                                {{ Request::routeIs('student.pembayaran.cicilan.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                                Pengajuan Cicilan
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('student.laporan_harian.index') }}"
                        class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::routeIs('student.laporan_harian.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                        <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                        </svg>
                        Laporan Harian
                    </a>
                </li>
                <li>
                    <a href="{{ route('student.rekap_nilai.index') }}"
                        class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                        hover:bg-primary/10 dark:hover:bg-meta-4
                        {{ Request::routeIs('student.rekap_nilai.*') ? 'text-primary bg-primary-active' : 'text-dark' }}">
                        <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                        </svg>
                        Rekap Nilai
                    </a>
                </li>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <li>
                        <button
                            class="group flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium transition duration-300 ease-in-out
                            hover:bg-primary/10 dark:hover:bg-meta-4">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16.5 3.75a1.5 1.5 0 0 1 1.5 1.5v13.5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5V15a.75.75 0 0 0-1.5 0v3.75a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V5.25a3 3 0 0 0-3-3h-6a3 3 0 0 0-3
                                3V9A.75.75 0 1 0 9 9V5.25a1.5 1.5 0 0 1 1.5-1.5h6ZM5.78 8.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 0 0 0 1.06l3 3a.75.75 0 0 0 1.06-1.06l-1.72-1.72H15a.75.75 0 0 0 0-1.5H4.06l1.72-1.72a.75.75 0 0 0 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Logout
                        </button>
                    </li>
                </form>
            </ul>
        </nav>
    </div>
</aside>
