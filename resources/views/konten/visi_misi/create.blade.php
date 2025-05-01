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
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z" fill="#969AA1" />
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
      <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded shadow-md dark:bg-boxdark">
         <h2 class="text-2xl font-semibold mb-6 text-gray-800 dark:text-white">Tambah Visi Misi</h2>
         <form action="{{ route('konten.visi_misi.store') }}" method="POST">
            @csrf
            <div class="mb-4">
               <label for="judul" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Judul</label>
               <input type="text" id="judul" name="judul" required
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/50 dark:bg-form-input dark:border-gray-600 dark:text-white" />
            </div>

            <div class="mb-4">
               <label for="konten" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Konten</label>
               <textarea id="konten" name="konten" rows="5" required
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/50 dark:bg-form-input dark:border-gray-600 dark:text-white"></textarea>
            </div>

            <div class="mb-6">
               <label for="updated_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Terakhir Diupdate</label>
               <input type="datetime-local" id="updated_at" name="updated_at"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary/50 dark:bg-form-input dark:border-gray-600 dark:text-white" />
            </div>

            <div class="flex justify-end">
               <a href="{{ route('konten.visi_misi.index') }}"
                  class="inline-block px-4 py-2 mr-2 text-sm font-medium text-gray-700 bg-gray-200 rounded hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">Kembali</a>
               <button type="submit"
                  class="px-4 py-2 text-sm font-semibold text-white bg-primary rounded hover:bg-primary-dark">Simpan</button>
            </div>
         </form>
      </div>
   </main>
</x-layout>