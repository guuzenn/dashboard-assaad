<x-layout>
   <!-- ===== Main Content Start ===== -->
   <main>
      <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
         <h4 class="text-lg font-bold text-black dark:text-white mb-4">Edit Profil Saya</h4>
         
         <form action="{{ route('admin.profile.update') }}" method="POST">
         @csrf
         @method('POST')
         <div class="grid grid-cols-1 gap-9 sm:grid-cols-2">
            <div class="flex flex-col gap-9">
               <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                     <h3 class="font-medium text-black dark:text-white">Form Edit Profil</h3>
                  </div>
                  <div class="flex flex-col gap-5.5 p-6.5">
                     <!-- Nama -->
                     <div>
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">Nama</label>
                        <input
                           type="text"
                           name="nama"
                           value="{{ old('nama', $profil['nama']) }}"
                           placeholder="Masukkan Nama"
                           class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                        @error('nama')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                     </div>

                     <!-- Email -->
                     <div>
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">Email</label>
                        <input
                           type="email"
                           name="email"
                           value="{{ old('email', $profil['email']) }}"
                           placeholder="Masukkan Email"
                           class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                        @error('email')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                     </div>

                     <!-- No HP -->
                     <div>
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">No HP</label>
                        <input
                           type="text"
                           name="no_hp"
                           value="{{ old('no_hp', $profil['no_hp']) }}"
                           placeholder="Masukkan No HP"
                           class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                        @error('no_hp')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                     </div>

                     <!-- Status -->
                     <div>
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">Status</label>
                        <select
                           name="status"
                           class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        >
                           <option value="aktif" @selected(old('status', $profil['status']) == 'aktif')>Aktif</option>
                           <option value="non-aktif" @selected(old('status', $profil['status']) == 'non-aktif')>Non-Aktif</option>
                        </select>
                        @error('status')
                           <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                     </div>

                     <!-- Submit -->
                     <div class="flex items-center justify-end gap-4">
                        <button type="submit" class="px-4 py-2 text-white bg-primary rounded-md hover:bg-primary-dark">
                           Simpan Perubahan
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </form>
      </div>
   </main>
   <!-- ===== Main Content End ===== -->
</x-layout>
