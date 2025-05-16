<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PPDB ASSIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col lg:flex-row font-['Fredoka']">

    <div class="w-full lg:w-1/2 relative flex items-center justify-center h-64 lg:h-auto">
        <div class="absolute inset-0"></div>
        <img src="/assets/images/webppdb/loginppdb.png" alt="Background" class="object-cover w-full h-full absolute mix-blend-overlay" />
        <div class="relative z-10 text-white text-center p-4">
            <h1 class="text-3xl md:text-4xl font-bold">Selamat Datang <br> di PPDB ASSIK</h1>
        </div>
    </div>

    <div class="w-full lg:w-1/2 bg-gradient-to-r from-[#C0CA9D] to-[#FCD19C] flex items-center justify-center py-10">
        <div class="w-full max-w-md px-8">
            <h2 class="text-2xl md:text-3xl font-bold text-green-800 mb-8 text-center">Login PPDB</h2>
            <form onsubmit="loginUser(event)" class="space-y-6">
                <div>
                    <label for="username" class="block text-lg font-medium text-gray-700 mb-1">ID Pengguna</label>
                    <input type="text" id="username" name="username" placeholder="ID Pengguna" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                </div>
                <div>
                    <label for="password" class="block text-lg font-medium text-gray-700 mb-1">Kata Sandi</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="Kata Sandi" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 pr-10">
                        <button type="button" onclick="togglePassword()" class="absolute right-1 top-1/2 transform -translate-y-1/2 text-gray-500"></button>
                    </div>
                </div>
                <div class="flex justify-end">
                    <a href="#" class="text-sm text-gray-500 hover:underline">Lupa kata sandi?</a>
                </div>
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded">Masuk</button>

                <p class="text-center text-sm text-gray-700 mt-4">
                    Belum punya akun?
                    <a href="{{ route('daftarppdb') }}" class="text-green-700 hover:underline font-semibold">Daftar</a>
                </p>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        }

        function loginUser(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            const user = JSON.parse(localStorage.getItem('user'));

            if (user && username === user.username && password === user.password) {
                alert('Login sukses!');
                window.location.href = 'beranda.html';
            } else {
                alert('ID atau Password salah!');
            }
        }
    </script>

</body>

</html>