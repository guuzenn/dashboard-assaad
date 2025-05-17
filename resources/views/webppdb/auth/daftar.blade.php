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
                <form action="{{ route('register-student.post') }}" method="POST" class="space-y-6">
                    @csrf
                    @if ($errors->any())
                        <div class="mb-4 text-red-600">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required class="w-full p-3 rounded border border-gray-300">
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" required class="w-full p-3 rounded border border-gray-300">
                    </div>
                    <div>
                        <label for="password" class="block text-lg font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="password" name="password" required class="w-full p-3 rounded border border-gray-300">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-lg font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full p-3 rounded border border-gray-300">
                    </div>
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded">Daftar</button>
                </form>
            <p class="text-center text-sm text-gray-700 mt-4">
                Sudah punya akun?
                <a href="{{ route('login-student') }}" class="text-green-700 hover:underline font-semibold">Masuk</a>
            </p>
        </div>
    </div>

</body>

</html>
