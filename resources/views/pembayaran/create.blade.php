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
            <!-- Hamburger Toggle BTN -->
         </div>
            <div class="hidden sm:block">
         </div>
         <div class="flex items-center gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
            <li>
               <!-- Dark Mode Toggler -->
               <label :class="darkMode ? 'bg-primary' : 'bg-stroke'"
                  class="relative m-0 block h-7.5 w-14 rounded-full">
                  <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode"
                     class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0" />
                  <span :class="darkMode && '!right-1 !translate-x-full'"
                     class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear">
                     <span class="dark:hidden">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M7.99992 12.6666C10.5772 12.6666 12.6666 10.5772 12.6666 7.99992C12.6666 5.42259 10.5772 3.33325 7.99992 3.33325C5.42259 3.33325 3.33325 5.42259 3.33325 7.99992C3.33325 10.5772 5.42259 12.6666 7.99992 12.6666Z"
                              fill="#969AA1" />
                           <path
                              d="M8.00008 15.3067C7.63341 15.3067 7.33342 15.0334 7.33342 14.6667V14.6134C7.33342 14.2467 7.63341 13.9467 8.00008 13.9467C8.36675 13.9467 8.66675 14.2467 8.66675 14.6134C8.66675 14.9801 8.36675 15.3067 8.00008 15.3067ZM12.7601 13.4267C12.5867 13.4267 12.4201 13.3601 12.2867 13.2334L12.2001 13.1467C11.9401 12.8867 11.9401 12.4667 12.2001 12.2067C12.4601 11.9467 12.8801 11.9467 13.1401 12.2067L13.2267 12.2934C13.4867 12.5534 13.4867 12.9734 13.2267 13.2334C13.1001 13.3601 12.9334 13.4267 12.7601 13.4267ZM3.24008 13.4267C3.06675 13.4267 2.90008 13.3601 2.76675 13.2334C2.50675 12.9734 2.50675 12.5534 2.76675 12.2934L2.85342 12.2067C3.11342 11.9467 3.53341 11.9467 3.79341 12.2067C4.05341 12.4667 4.05341 12.8867 3.79341 13.1467L3.70675 13.2334C3.58008 13.3601 3.40675 13.4267 3.24008 13.4267ZM14.6667 8.66675H14.6134C14.2467 8.66675 13.9467 8.36675 13.9467 8.00008C13.9467 7.63341 14.2467 7.33342 14.6134 7.33342C14.9801 7.33342 15.3067 7.63341 15.3067 8.00008C15.3067 8.36675 15.0334 8.66675 14.6667 8.66675ZM1.38675 8.66675H1.33341C0.966748 8.66675 0.666748 8.36675 0.666748 8.00008C0.666748 7.63341 0.966748 7.33342 1.33341 7.33342C1.70008 7.33342 2.02675 7.63341 2.02675 8.00008C2.02675 8.36675 1.75341 8.66675 1.38675 8.66675ZM12.6734 3.99341C12.5001 3.99341 12.3334 3.92675 12.2001 3.80008C11.9401 3.54008 11.9401 3.12008 12.2001 2.86008L12.2867 2.77341C12.5467 2.51341 12.9667 2.51341 13.2267 2.77341C13.4867 3.03341 13.4867 3.45341 13.2267 3.71341L13.1401 3.80008C13.0134 3.92675 12.8467 3.99341 12.6734 3.99341ZM3.32675 3.99341C3.15341 3.99341 2.98675 3.92675 2.85342 3.80008L2.76675 3.70675C2.50675 3.44675 2.50675 3.02675 2.76675 2.76675C3.02675 2.50675 3.44675 2.50675 3.70675 2.76675L3.79341 2.85342C4.05341 3.11342 4.05341 3.53341 3.79341 3.79341C3.66675 3.92675 3.49341 3.99341 3.32675 3.99341ZM8.00008 2.02675C7.63341 2.02675 7.33342 1.75341 7.33342 1.38675V1.33341C7.33342 0.966748 7.63341 0.666748 8.00008 0.666748C8.36675 0.666748 8.66675 0.966748 8.66675 1.33341C8.66675 1.70008 8.36675 2.02675 8.00008 2.02675Z"
                              fill="#969AA1" />
                        </svg>
                     </span>
                     <span class="hidden dark:inline-block">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M14.3533 10.62C14.2466 10.44 13.9466 10.16 13.1999 10.2933C12.7866 10.3667 12.3666 10.4 11.9466 10.38C10.3933 10.3133 8.98659 9.6 8.00659 8.5C7.13993 7.53333 6.60659 6.27333 6.59993 4.91333C6.59993 4.15333 6.74659 3.42 7.04659 2.72666C7.33993 2.05333 7.13326 1.7 6.98659 1.55333C6.83326 1.4 6.47326 1.18666 5.76659 1.48C3.03993 2.62666 1.35326 5.36 1.55326 8.28666C1.75326 11.04 3.68659 13.3933 6.24659 14.28C6.85993 14.4933 7.50659 14.62 8.17326 14.6467C8.27993 14.6533 8.38659 14.66 8.49326 14.66C10.7266 14.66 12.8199 13.6067 14.1399 11.8133C14.5866 11.1933 14.4666 10.8 14.3533 10.62Z"
                              fill="#969AA1" />
                        </svg>
                     </span>
                  </span>
               </label>
               <!-- Dark Mode Toggler -->
            </li>
            <!-- User Area -->
            <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
               <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                  <span class="hidden text-right lg:block">
                  <span class="block text-sm font-medium text-black dark:text-white">Admin</span>
                  </span>
                  <svg :class="dropdownOpen && 'rotate-180'" class="hidden fill-current sm:block"
                     width="12" height="8" viewBox="0 0 12 8" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                        fill="" />
                  </svg>
               </a>
               <!-- Dropdown Start -->
               <div x-show="dropdownOpen"
                  class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <button
                     class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                     <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z"
                           fill="" />
                        <path
                           d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z"
                           fill="" />
                     </svg>
                     Log Out
                  </button>
               </div>
               <!-- Dropdown End -->
            </div>
            <!-- User Area -->
         </div>
      </div>
   </header>
   <!-- ===== Header End ===== -->

  <!-- ===== Main Content Start ===== -->
  <main>
   <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
      <h4 class="text-lg font-bold text-black dark:text-white mb-4">Tambah Tagihan</h4>

      <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
         <div class="flex flex-col gap-9">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
               <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                  <h3 class="font-medium text-black dark:text-white">Form Tagihan Pembayaran</h3>
               </div>
               <div class="flex flex-col gap-5.5 p-6.5">
                  <form action="{{ route('pembayaran.store') }}" method="POST">
                     @csrf

                     <!-- Jenis Pembayaran -->
                     <div class="mb-4">
                        <label class="mb-2 block text-sm font-medium text-black dark:text-white">Jenis Pembayaran</label>

                        <div class="relative">
                            <select name="judul"
                                class="w-full appearance-none rounded-lg border-[1.5px] border-stroke bg-transparent px-5 pr-12 py-3 font-normal text-black dark:border-form-strokedark dark:bg-form-input dark:text-white focus:border-primary">
                                <option value="">Pilih Jenis</option>
                                @foreach ($jenis as $j)
                                    <option value="{{ $j }}">{{ $j }}</option>
                                @endforeach
                            </select>

                            <!-- Custom Dropdown Icon -->
                            <div class="pointer-events-none absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.167l3.71-3.937a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                        @error('judul')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Nominal -->
                     <div class="mb-4">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">Keterangan</label>
                        <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Tagihan"
                           class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black dark:border-form-strokedark dark:bg-form-input dark:text-white focus:border-primary"
                           value="{{ old('deskripsi') }}">
                        @error('deskripsi')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                     </div>

                     <!-- Nominal -->
                     <div class="mb-4">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">Nominal</label>
                        <input type="number" name="nominal" placeholder="Masukkan jumlah tagihan"
                           class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black dark:border-form-strokedark dark:bg-form-input dark:text-white focus:border-primary"
                           value="{{ old('nominal') }}">
                        @error('nominal')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                     </div>

                     <!-- Jatuh Tempo -->
                     <div class="mb-4">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">Tanggal Jatuh Tempo</label>
                        <input type="date" name="tanggal_tempo"
                           class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black dark:border-form-strokedark dark:bg-form-input dark:text-white focus:border-primary"
                           value="{{ old('tanggal_tempo') }}">
                        @error('tanggal-tempo')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                     </div>

                     <!-- Target Siswa -->
                     <div class="mb-4">
                        <label class="mb-2 block text-sm font-medium text-black dark:text-white">Tagih ke</label>

                        <div class="relative">
                            <select name="siswa_id"
                                class="w-full appearance-none rounded-lg border-[1.5px] border-stroke bg-transparent px-5 pr-12 py-3 font-normal text-black dark:border-form-strokedark dark:bg-form-input dark:text-white focus:border-primary">
                                <option value="">Pilih Siswa</option>
                                @foreach ($murid as $m)
                                    <option value="{{ $m->id }}">{{ $m->nama_lengkap }}</option>
                                @endforeach
                            </select>

                            <div class="pointer-events-none absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 dark:text-gray-400">
                                <svg class="h-  4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.167l3.71-3.937a.75.75 0 011.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                        <p class="text-xs text-gray-500 mt-1">Kosongkan jika untuk semua siswa / massal</p>
                        @error('siswa_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- <div>
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">Status</label>
                        <select name="status_tagihan"
                           class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                           <option value="">Pilih Status</option>
                           <option value="aktif" @selected(old('status_tagihan') == 'aktif')>Aktif</option>
                           <option value="non-aktif" @selected(old('status_tagihan') == 'non-aktif')>Non-Aktif</option>
                        </select>
                        @error('status')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                     </div> --}}

                     <!-- Boleh Cicilan -->
                     <div class="flex items-center gap-2">
                        <input type="checkbox" name="boleh_cicilan" id="boleh_cicilan"
                           class="h-5 w-5 rounded border-gray-300 text-primary focus:ring-primary"
                           {{ old('boleh_cicilan') ? 'checked' : '' }}>
                        <label for="boleh_cicilan" class=" ml-2 text-sm text-black dark:text-white">Izinkan Cicilan?</label>
                     </div>

                     <!-- Submit -->
                     <div class="flex items-center justify-end gap-4 pt-4">
                        <button type="submit" class="px-4 py-2 text-white bg-primary rounded-md hover:bg-primary-dark">
                           Simpan
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

   <!-- ===== Main Content End ===== -->
</x-layout>
