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
         <h4 class="text-lg font-bold text-black dark:text-white mb-4">Konten Website</h4>
         <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5"></div>

         <!-- List Murid -->
         <div
               class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1 mt-6"
         >
               <div class="flex items-center justify-between mb-4">
                  <h4 class="text-lg font-bold text-black dark:text-white">Kegiatan Sekolah</h4>
                  <div class="flex items-center gap-4">
                     <button
                           class="px-4 py-2 text-white bg-primary rounded-md hover:bg-primary-dark"
                           @click="window.location.href='{{ route('konten.kegiatan.create') }}'"
                     >
                           Tambah Kegiatan
                     </button>
                  </div>
               </div>

               <!-- Table -->
               <div class="max-w-full overflow-x-auto">
                  <table class="w-full table-auto">
                     <thead>
                           <tr class="bg-gray-2 text-left dark:bg-meta-4">
                              <th class="min-w-[60px] px-4 py-4 font-medium text-black dark:text-white">No.</th>
                              <th class="min-w-[200px] px-4 py-4 font-medium text-black dark:text-white">Judul Kegiatan</th>
                              <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">Deskripsi Singkat</th>
                              <th class="min-w-[150px] px-4 py-4 font-medium text-black dark:text-white">Tanggal</th>
                              <th class="min-w-[200px] px-4 py-4 font-medium text-black dark:text-white">Gambar</th>
                              <th class="px-4 py-4 font-medium text-black dark:text-white">Aksi</th>
                           </tr>
                     </thead>
                     <tbody>
                           @foreach ($data as $index => $item)
                              <tr>
                                 <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                       {{ $index + 1 }}
                                 </td>
                                 <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                       {{ $item->judul }}
                                 </td>
                                 <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                       {{ $item->deskripsi }}
                                 </td>
                                 <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                       {{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}
                                 </td>
                                 <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                       <img src="{{ asset('storage/' . $item->gambar) }}" alt="Foto Kegiatan" class="w-20 h-20 object-cover rounded" />
                                 </td>
                                 <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">
                                       <div class="flex items-center space-x-3.5">
                                          <!-- Button Edit -->
                                          <a href="{{ route('konten.kegiatan.edit', $item->id) }}" class="hover:text-primary">
                                             <button class="hover:text-primary">
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
                                             </button>
                                          </a>
                                          <!-- Button Trash -->
                                          <form action="{{ route('konten.kegiatan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="hover:text-primary">
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
                                                      />
                                                      <path
                                                         d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z"
                                                      />
                                                      <path
                                                         d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z"
                                                      />
                                                      <path
                                                         d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z"
                                                      />
                                                   </svg>
                                             </button>
                                          </form>
                                       </div>
                                 </td>
                              </tr>
                           @endforeach
                     </tbody>
                  </table>
               </div>
         </div>
      </div>
   </main>

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
