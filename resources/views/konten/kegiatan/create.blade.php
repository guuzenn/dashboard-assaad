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
                                 d="M8.00008 15.3067C7.63341 15.3067 7.33342 15.0334 7.33342 14.6667V14.6134C7.33342 14.2467 7.63341 13.9467 8.00008 13.9467C8.36675 13.9467 8.66675 14.2467 8.66675 14.6134C8.66675 14.9801 8.36675 15.3067 8.00008 15.3067ZM12.7601 13.4267C12.5867 13.4267 12.4201 13.3601 12.2867 13.2334L12.2001 13.1467C11.9401 12.8867 11.9401 12.4667 12.2001 12.2067C12.4601 11.9467 12.8801 11.9467 13.1401 12.2067L13.2267 12.2934C13.4867 12.5534 13.4867 12.9734 13.2267 13.2334C13.1001 13.3601 12.9334 13.4267 12.7601 13.4267ZM3.24008 13.4267C3.06675 13.4267 2.90008 13.3601 2.76675 13.2334C2.50675 12.9734 2.50675 12.5534 2.76675 12.2934L2.85342 12.2067C3.11342 11.9467 3.53341 11.9467 3.79341 12.2067C4.05341 12.4667 4.05341 12.8867 3.79341 13.1467L3.70675 13.2334C3.58008 13.3601 3.40675 13.4267 3.24008 13.4267ZM14.6667 8.66675H14.6134C14.2467 8.66675 13.9467 8.36675 13.9467 8.00008C13.9467 7.63342 14.2467 7.33342 14.6134 7.33342H14.6667C15.0334 7.33342 15.3334 7.63342 15.3334 8.00008C15.3334 8.36675 15.0334 8.66675 14.6667 8.66675Z"
                                 fill="#969AA1" />
                           </svg>
                        </span>
                     </span>
                  </label>
               </li>
            </ul>
         </div>
      </div>
   </header>
   <!-- ===== Header End ===== -->

   <!-- ===== Main Content Start ===== -->
   <main>
      <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
         <h4 class="text-lg font-bold text-black dark:text-white mb-4">Tambah Konten</h4>

         <!-- Form Elements Section Start -->
         <form action="{{ route('konten.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
            <div class="flex flex-col gap-9">
               <!-- Form Start -->
               <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                     <h3 class="font-medium text-black dark:text-white">Form Tambah Kegiatan</h3>
                  </div>
                  <div class="flex flex-col gap-6 p-6.5">

                     <!-- Judul Kegiatan -->
                     <div>
                           <label class="mb-3 block text-sm font-medium text-black dark:text-white">Judul Kegiatan</label>
                              <input type="text" name="judul" placeholder="Masukkan Judul Kegiatan"
                                 class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                              @error('judul')
                              <span class="text-red-500 text-sm">{{ $message }}</span>
                              @enderror
                     </div>

                     <!-- Deskripsi -->
                     <div>
                           <label class="mb-3 block text-sm font-medium text-black dark:text-white">Deskripsi Singkat</label>
                           <textarea
                              name="deskripsi"
                              placeholder="Masukkan Deskripsi Kegiatan"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                           >{{ old('deskripsi') }}</textarea>
                           @error('deskripsi')
                              <span class="text-red-500 text-sm">{{ $message }}</span>
                           @enderror
                     </div>

                     <!-- Tanggal -->
                     <div>
                           <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white">Tanggal</label>
                           <input type="date" name="tanggal" value="{{ old('tanggal') }}"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                              @error('tanggal')
                                 <span class="text-red-500 text-sm">{{ $message }}</span>
                              @enderror
                     </div>

                     <!-- Upload Foto -->
                     <div>
                           <label class="mb-3 block text-sm font-medium text-black dark:text-white">Gambar</label>
                           <input type="file" name="gambar"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                           @error('gambar')
                              <span class="text-red-500 text-sm">{{ $message }}</span>
                           @enderror
                     </div>

                     <!-- Submit Button -->
                     <div class="flex items-center justify-end gap-4">
                           <button type="submit" class="px-4 py-2 text-white bg-primary rounded-md hover:bg-primary-dark">
                              Simpan
                           </button>
                     </div>
                  
                  </div>
               </div>
               <!-- Form End -->
            </div>
         </div>
         <!-- Form Elements Section End -->
      </div>
      </form>
   </main>
   <!-- ===== Main Content End ===== -->
</x-layout>