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

    @php
        $totalGuru = $guru->count();
    @endphp

   <!-- ===== Main Content Start ===== -->
   <main>
      <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
         <h4 class="text-lg font-bold text-black dark:text-white mb-4">Data Guru</h4>
         <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">
            <!-- Card Item Start -->
            <div
               class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
               <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <svg class="fill-primary dark:fill-white" width="20" height="22" viewBox="0 0 24 24"
                     fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                    </svg>
               </div>
               <div class="mt-4 flex items-end justify-between">
                  <div>
                     <h4 class="text-title-md font-bold text-black dark:text-white">
                        {{$totalGuru}}
                     </h4>
                     <span class="text-sm font-medium">Total Guru</span>
                  </div>
               </div>
            </div>
            <!-- Card Item End -->
         </div>

         <!-- List Guru -->
         <div
            class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1 mt-6"
            >
            <div class="flex items-center justify-between mb-4">
               <h4 class="text-lg font-bold text-black dark:text-white">List Guru</h4>
               <div class="flex items-center gap-4">
                  <div class="relative">
                        <select
                            name="filter_gender"
                            id="filter_gender"
                            class="relative inline-flex appearance-none rounded-lg border border-stroke bg-transparent py-2 pl-5 pr-10 text-sm font-medium text-black dark:border-form-strokedark dark:bg-form-input dark:text-white outline-none focus:border-primary"
                            onchange="filterGuru()"
                        >
                            <option value="">Semua Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

                     <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2">
                        <svg
                           width="14"
                           height="10"
                           viewBox="0 0 10 6"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                        >
                           <path
                              d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
                              fill="#637381"
                           />
                        </svg>
                     </span>
                  </div>

                  <button
                     class="px-4 py-2 text-white bg-primary rounded-md hover:bg-primary-dark"
                     @click="window.location.href='{{ route('data.guru.create') }}'"
                  >
                     Tambah Guru
                  </button>
               </div>
            </div>
            <!-- Table -->
            <div class="max-w-full overflow-x-auto">
               <table class="w-full table-auto">
                  <thead>
                     <tr class="bg-gray-2 text-left dark:bg-meta-4">
                        <th class="min-w-[60px] px-4 py-4 font-medium text-black dark:text-white">No.</th>
                        <th class="min-w-[220px] px-4 py-4 font-medium text-black dark:text-white">Nama Lengkap</th>
                        <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">Jenis Kelamin</th>
                        {{-- <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">Kelas</th> --}}
                        <th class="min-w-[120px] px-4 py-4 font-medium text-black dark:text-white">No. HP</th>
                        <th class="px-4 py-4 font-medium text-black dark:text-white">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($guru as $index => $item)
                     <tr data-gender="{{ $item->jenis_kelamin }}">
                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{ $index + 1 }}</td>
                        <td class="border-b border-[#eee] px-4 py-5 pl-9 dark:border-strokedark xl:pl-11">{{ $item->nama }}</td>
                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{ $item->jenis_kelamin }}</td>
                        {{-- <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{ $item->kelas->nama}}</td> --}}
                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{ $item->no_hp }}</td>
                        <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                            <form action="{{ route('data.guru.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                           <div class="flex items-center space-x-3.5">
                               <!-- Button Show -->
                             <a href="{{ route('data.guru.show', $item->id) }}" class="hover:text-primary">
                                 <svg
                                    class="fill-current"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 18 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                       d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.20624 8.99981 3.20624C14.5686 3.20624 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.5562 8.99981 13.5562C13.1061 13.5562 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.44374 8.99981 4.44374C4.89356 4.44374 2.4748 7.95936 1.85605 8.99999Z"
                                       fill=""
                                       />
                                    <path
                                       d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 7.875C8.38125 7.875 7.875 8.38125 7.875 9C7.875 9.61875 8.38125 10.125 9 10.125C9.61875 10.125 10.125 9.61875 10.125 9C10.125 8.38125 9.61875 7.875 9 7.875Z"
                                       fill=""
                                       />
                                 </svg>
                            </a>
                               <!-- Button Trash -->
                              <button class="hover:text-primary">
                                 <svg
                                    class="fill-current"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 18 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                       d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z"
                                       fill=""
                                       />
                                    <path
                                       d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z"
                                       fill=""
                                       />
                                    <path
                                       d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z"
                                       fill=""
                                       />
                                    <path
                                       d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z"
                                       fill=""
                                       />
                                 </svg>
                              </button>
                              <!-- Button Edit -->
                              <a href="{{ route('data.guru.edit', $item->id) }}" class="hover:text-primary">
                                 <svg
                                    class="fill-current"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                 </svg>
                               </a>
                           </div>
                            </form>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </main>

    <script>
    function filterGuru() {
        const filter = document.getElementById('filter_gender').value;
        const rows = document.querySelectorAll('tbody tr[data-gender]');
        rows.forEach(row => {
            const gender = row.getAttribute('data-gender');
            if (!filter) {
                row.style.display = '';
            } else {
                row.style.display = (gender === filter) ? '' : 'none';
            }
        });
    }
    document.addEventListener('DOMContentLoaded', filterGuru);
    </script>

   @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: "{{ session('success') }}",
            confirmButtonColor: '#22c55e',
            color: '#000000',
            customClass: {
            confirmButton: 'text-black'
        }
        });
    </script>
    @endif

</x-layout>
