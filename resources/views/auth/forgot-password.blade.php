<x-layout>
   <!-- ===== Main Content Start ===== -->
   <main>
      <div class="mx-auto max-w-screen-md p-4 md:p-6 2xl:p-10">
         <h4 class="text-lg font-bold text-black dark:text-white mb-4">Lupa Password</h4>
         <p class="mb-4 text-sm text-gray-500 dark:text-gray-300">
            Masukkan email Anda untuk menerima link reset password.
         </p>

         <form action="{{ route('auth.forgot-password') }}" method="POST">
            @csrf
            <!-- Email -->
            <div class="mb-4">
               <label for="email" class="block text-sm font-medium text-black dark:text-white">Email</label>
               <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Masukkan Email"
                  class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
               />
               @error('email')
                  <span class="text-red-500 text-sm">{{ $message }}</span>
               @enderror
            </div>

            <!-- Status -->
            @if (session('status'))
               <div class="mb-4 text-green-500">
                  {{ session('status') }}
               </div>
            @endif

            <!-- Submit Button -->
            <div class="flex items-center justify-end gap-4">
               <button type="submit" class="px-4 py-2 text-white bg-primary rounded-md hover:bg-primary-dark">
                  Kirim Link Reset
               </button>
            </div>
         </form>
      </div>
   </main>
   <!-- ===== Main Content End ===== -->
</x-layout>
