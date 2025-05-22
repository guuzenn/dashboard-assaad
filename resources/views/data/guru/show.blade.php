<x-layout>
   <!-- ===== Header Start ===== -->
   <header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
      <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
         <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <!-- Hamburger Toggle BTN -->
            <button class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <span class="relative block h-5.5 w-5.5 cursor-pointer">
            <span class="du-block absolute right-0 h-full w-full">
            <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-300': !sidebarToggle }"></span>
            <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-400': !sidebarToggle }"></span>
            <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-500': !sidebarToggle }"></span>
            </span>
            <span class="du-block absolute right-0 h-full w-full rotate-45">
            <span class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white" :class="{ '!h-0 delay-[0]': !sidebarToggle }"></span>
            <span class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white" :class="{ '!h-0 dealy-200': !sidebarToggle }"></span>
            </span>
            </span>
            </button>
         </div>
         <div class="hidden sm:block">
            <form action="https://formbold.com/s/unique_form_id" method="POST">
               <div class="relative">
                  <button class="absolute left-0 top-1/2 -translate-y-1/2">
                     <svg class="fill-body hover:fill-primary dark:fill-bodydark dark:hover:fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z" fill="" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z" fill="" />
                     </svg>
                  </button>
                  <input type="text" placeholder="Type to search..." class="w-full bg-transparent pl-9 pr-4 focus:outline-none xl:w-125" />
               </div>
            </form>
         </div>
         <div class="flex items-center gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
               <li>
                  <!-- Dark Mode Toggler -->
                  <label :class="darkMode ? 'bg-primary' : 'bg-stroke'" class="relative m-0 block h-7.5 w-14 rounded-full">
                     <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0" />
                     <span :class="darkMode && '!right-1 !translate-x-full'" class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear">
                        <span class="dark:hidden">
                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M7.99992 12.6666C10.5772 12.6666 12.6666 10.5772 12.6666 7.99992C12.6666 5.42259 10.5772 3.33325 7.99992 3.33325C5.42259 3.33325 3.33325 5.42259 3.33325 7.99992C3.33325 10.5772 5.42259 12.6666 7.99992 12.6666Z" fill="#969AA1" />
                           </svg>
                        </span>
                     </span>
                  </label>
               </li>
               <!-- User Area -->
               <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                  <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                  <span class="hidden text-right lg:block">
                  <span class="block text-sm font-medium text-black dark:text-white">Admin</span>
                  </span>
                  </a>
                  <!-- Dropdown End -->
               </div>
               <!-- User Area -->
            </ul>
         </div>
      </div>
   </header>
   <!-- ===== Header End ===== -->

   <!-- ===== Main Content Start ===== -->
   <main>
      <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
         <h4 class="text-lg font-bold text-black dark:text-white mb-4">Detail Guru</h4>
         <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
               <h3 class="font-medium text-black dark:text-white">Informasi Guru</h3>
            </div>
            <div class="p-6.5 grid grid-cols-1 gap-y-5 sm:grid-cols-2 sm:gap-x-8">
               <!-- Nama -->
               <div>
                  <p class="text-sm text-slate-500 mb-1">Nama Lengkap</p>
                  <p class="text-base font-medium text-black dark:text-white">{{ $guru->nama }}</p>
               </div>
               <!-- Tempat Lahir -->
               <div>
                  <p class="text-sm text-slate-500 mb-1">Tempat Lahir</p>
                  <p class="text-base font-medium text-black dark:text-white">{{ $guru->tempat_lahir }}</p>
               </div>
               <!-- Tanggal Lahir -->
               <div>
                  <p class="text-sm text-slate-500 mb-1">Tanggal Lahir</p>
                  <p class="text-base font-medium text-black dark:text-white">{{ $guru->tanggal_lahir }}</p>
               </div>
                <!-- Usia -->
                <div>
                    <p class="text-sm text-slate-500 mb-1">Usia</p>
                    <p class="text-base font-medium text-black dark:text-white">{{ $guru->usia }}</p>
                 </div>
               <!-- Jenis Kelamin -->
               <div>
                  <p class="text-sm text-slate-500 mb-1">Jenis Kelamin</p>
                  <p class="text-base font-medium text-black dark:text-white">{{ $guru->jenis_kelamin }}</p>
               </div>
               <!-- Kelas -->
               <div>
                  <p class="text-sm text-slate-500 mb-1">Kelas yang Diajarkan</p>
                  <p class="text-base font-medium text-black dark:text-white">{{ $guru->kelas }}</p>
               </div>
               <!-- Alamat -->
               <div class="sm:col-span-2">
                  <p class="text-sm text-slate-500 mb-1">Alamat</p>
                  <p class="text-base font-medium text-black dark:text-white whitespace-pre-line">{{ $guru->alamat }}</p>
               </div>
               <!-- No HP -->
               <div>
                  <p class="text-sm text-slate-500 mb-1">No HP</p>
                  <p class="text-base font-medium text-black dark:text-white">{{ $guru->no_hp }}</p>
               </div>
               <!-- Foto -->
                <div>
                    <p class="text-sm text-slate-500 mb-1">Foto</p>
                    <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto Guru" class="w-32 h-32 object-cover rounded-md">
               <!-- Back Button -->
               <div class="sm:col-span-2 flex justify-end mt-6">
                  <a href="{{ route('data.guru.index') }}" class="px-4 py-2 text-white bg-primary rounded-md hover:bg-primary-dark">
                  Kembali
                  </a>
               </div>
            </div>
         </div>
      </div>
   </main>
</x-layout>
