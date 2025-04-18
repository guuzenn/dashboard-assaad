{{-- resources/views/auth/login.blade.php --}}
<x-layout :hideSidebar="true" :hideHeader="true">
   <main class="fixed inset-0 flex items-center justify-center bg-[#f1f5f9] dark:bg-boxdark-2 px-4">
      <div class="w-full max-w-md bg-white rounded-lg border border-stroke shadow-md dark:border-strokedark dark:bg-boxdark p-6">
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold text-black dark:text-white mb-2">Login</h2>
                <p class="text-sm text-body">Silakan masuk ke akun Anda</p>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="mb-2 block text-sm font-medium text-black dark:text-white">Email</label>
                    <input
                        type="email"
                        name="email"
                        placeholder="Masukkan email"
                        class="w-full rounded-lg border border-stroke bg-transparent px-4 py-2.5 text-black dark:text-white dark:border-form-strokedark dark:bg-form-input focus:outline-none focus:border-primary"
                        required
                    />
                </div>

                <div class="mb-4">
                    <label class="mb-2 block text-sm font-medium text-black dark:text-white">Password</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        class="w-full rounded-lg border border-stroke bg-transparent px-4 py-2.5 text-black dark:text-white dark:border-form-strokedark dark:bg-form-input focus:outline-none focus:border-primary"
                        required
                    />
                </div>

                <div class="mt-6">
                    <button
                        type="submit"
                        class="w-full rounded-lg bg-primary py-2.5 text-white font-medium hover:bg-primary-dark transition"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
    </main>
</x-layout>
