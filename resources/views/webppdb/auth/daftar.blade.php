<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar PPDB ASSIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col lg:flex-row font-['Fredoka']">

    <div class="w-full lg:w-1/2 relative flex items-center justify-center h-64 lg:h-auto">
        <div class="absolute inset-0"></div>
        <img src="/assets/images/webppdb/loginppdb.png" alt="Background image for PPDB ASSIK" class="object-cover w-full h-full absolute mix-blend-overlay" />
        <div class="relative z-10 text-white text-center p-4">
            <h1 class="text-3xl md:text-4xl font-bold">Selamat Datang <br> di PPDB ASSIK</h1>
        </div>
    </div>

    <div class="w-full lg:w-1/2 bg-gradient-to-r from-[#C0CA9D] to-[#FCD19C] flex items-center justify-center py-10">
        <div class="w-full max-w-md px-8">
            <h2 class="text-2xl md:text-3xl font-bold text-green-800 mb-8 text-center">Daftar PPDB</h2>
            <form onsubmit="registerUser(event)" class="space-y-6">
                <div>
                    <label for="nama" class="block text-lg font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm" required pattern="[A-Za-z\s]+" title="Nama hanya boleh mengandung huruf dan spasi">
                </div>
                <div>
                    <label for="telp" class="block text-lg font-medium text-gray-700 mb-1">No. Telepon</label>
                    <input type="tel" id="telp" name="telp" placeholder="08xxxxxxxx" pattern="08[0-9]{8,11}" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm" title="Masukkan nomor telepon yang valid (08xxxxxxxx)">
                </div>
                <div>
                    <label for="username" class="block text-lg font-medium text-gray-700 mb-1">ID Pengguna</label>
                    <input type="text" id="username" name="username" placeholder="ID Pengguna" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm" required pattern="[A-Za-z0-9]+" title="ID Pengguna hanya boleh mengandung huruf dan angka">
                </div>
                <div>
                    <label for="password" class="block text-lg font-medium text-gray-700 mb-1">Kata Sandi</label>
                    <input type="password" id="password" name="password" placeholder="Kata Sandi" class="w-full p-3 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                </div>

                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded">Daftar</button>
            </form>
        </div>
    </div>

    <script>
        function registerUser(event) {
            event.preventDefault();
            const nama = document.getElementById('nama').value;
            const telp = document.getElementById('telp').value;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (nama && telp && username && password) {
                localStorage.setItem('user', JSON.stringify({
                    username,
                    password
                }));
                alert('Berhasil daftar! Silakan login.');
                window.location.href = 'login.html';
            } else {
                alert('Semua field harus diisi!');
            }
        }
    </script>

</body>

</html>