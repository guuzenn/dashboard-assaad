<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>School Visit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/as-saad.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/as-saad.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/as-saad.png') }}">
    <style>
        .form-container {
            background-color: #fff;
            background-size: 30px 30px;
            background-position: 0 0, 15px 15px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .input-field {
            border: 2px solid #E0E0E0;
            border-radius: 12px;
            padding: 10px 16px;
            transition: all 0.3s;
        }
        
        .input-field:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.3);
            outline: none;
        }
        
        .submit-btn {
            background: linear-gradient(45deg, #FF9800, #F57C00);
            transition: all 0.3s;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(245, 124, 0, 0.3);
        }
        
        .radio-custom {
            display: flex;
            align-items: center;
        }
        
        .radio-custom input {
            width: 22px;
            height: 22px;
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-green-50 font-['Fredoka']">
    <nav class="backdrop-blur-lg bg-white/30 w-full fixed top-0 left-0 z-50 h-20">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-4 py-3">
            <div class="flex items-center">
                <img src="/assets/images/compro/logos.png" alt="Logo TK As Sa'ad" class="w-16 h-16 object-cover rounded-full">
            </div>
            <button id="menu-button" class="block md:hidden text-gray-900 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <ul id="menu" class="hidden md:flex flex-col md:flex-row gap-6 absolute md:static top-20 left-0 w-full md:w-auto bg-white md:bg-transparent p-4 md:p-0 shadow md:shadow-none">
                <li><a href="{{ route('compro.beranda') }}" class="text-base text-gray-900 hover:font-semibold hover:text-green-700">Beranda</a></li>
                <li><a href="{{ route('compro.tentang') }}" class="text-base text-gray-900 hover:font-semibold hover:text-green-700">Tentang</a></li>
                <li><a href="{{ route('compro.event') }}" class="text-base text-gray-900 hover:font-semibold hover:text-green-700">Event</a></li>
                <li><a href="{{ route('compro.kontak') }}" class="text-base text-gray-900 hover:font-semibold hover:text-green-700">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <section class="py-12 max-w-4xl mx-auto px-4 text-center mt-16">
        <h2 class="text-4xl font-bold text-orange-500 mb-4">School Visit</h2>
        <p class="text-lg text-gray-800 mb-8">
            Isi formulir berikut ini untuk menjadwalkan kunjungan ke TK ASSAD. Harap mengisi paling lambat H-1 sebelum hari kunjungan.
        </p>
        <div class="relative mb-12">
            <div class="cloud absolute top-0 left-10 opacity-60"></div>
            <div class="cloud absolute top-5 right-20 opacity-70"></div>
            <div class="sun opacity-80"></div>
        </div>

        <!-- Form Container -->
        <div class="form-container relative p-8 mx-auto bg-white my-16">
            <form class="space-y-6 text-left">
                <!-- Nama Calon Peserta Didik -->
                <div class="mb-4">
                    <label for="namaCalonPeserta" class="block text-lg font-medium text-gray-800 mb-2">
                        Nama Calon Peserta Didik <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="namaCalonPeserta" name="namaCalonPeserta" required class="w-full input-field focus:ring-green-500 focus:border-green-500 bg-green-50/30">
                </div>

                <!-- Tempat, Tanggal Lahir Calon Peserta Didik -->
                <div class="mb-4">
                    <label for="ttlCalonPeserta" class="block text-lg font-medium text-gray-800 mb-2">
                        Tempat, Tanggal Lahir Calon Peserta Didik <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="ttlCalonPeserta" name="ttlCalonPeserta" required class="w-full input-field focus:ring-green-500 focus:border-green-500 bg-green-50/30">
                </div>

                <!-- Nama Panggilan Calon Peserta Didik -->
                <div class="mb-4">
                    <label for="namaPanggilanCalonPeserta" class="block text-lg font-medium text-gray-800 mb-2">
                        Nama Panggilan Calon Peserta Didik <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="namaPanggilanCalonPeserta" name="namaPanggilanCalonPeserta" required class="w-full input-field focus:ring-green-500 focus:border-green-500 bg-green-50/30">
                </div>

                <!-- Nama Calon Wali Murid -->
                <div class="mb-4">
                    <label for="namaWaliMurid" class="block text-lg font-medium text-gray-800 mb-2">
                        Nama Calon Wali Murid (Boleh salah satu) <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="namaWaliMurid" name="namaWaliMurid" required class="w-full input-field focus:ring-green-500 focus:border-green-500 bg-green-50/30">
                </div>

                <!-- Alamat Domisili -->
                <div class="mb-4">
                    <label for="alamatDomisili" class="block text-lg font-medium text-gray-800 mb-2">
                        Alamat (Sesuai domisili) <span class="text-red-500">*</span>
                    </label>
                    <textarea id="alamatDomisili" name="alamatDomisili" rows="3" required class="w-full input-field focus:ring-green-500 focus:border-green-500 bg-green-50/30"></textarea>
                </div>

                <!-- Nomor Telepon Wali Murid -->
                <div class="mb-4">
                    <label for="noTeleponWaliMurid" class="block text-lg font-medium text-gray-800 mb-2">
                        Nomor Telepon Calon Wali Murid <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" id="noTeleponWaliMurid" name="noTeleponWaliMurid" required class="w-full input-field focus:ring-green-500 focus:border-green-500 bg-green-50/30">
                </div>

                <!-- Kelas yang ingin diikuti -->
                <div class="mb-4">
                    <p class="block text-lg font-medium text-gray-800 mb-3">
                        Kelas yang ingin diikuti: <span class="text-red-500">*</span>
                    </p>
                    <div class="space-y-3">
                        <div class="radio-custom">
                            <input type="radio" id="regularClass" name="kelas" value="Regular Class" class="mr-3">
                            <label for="regularClass" class="text-md text-gray-800">Regular Class</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" id="fulldayClass" name="kelas" value="Fullday+ Class" class="mr-3">
                            <label for="fulldayClass" class="text-md text-gray-800">Fullday+ Class</label>
                        </div>
                    </div>
                </div>

                <!-- Jenjang yang ingin diikuti -->
                <div class="mb-4">
                    <p class="block text-lg font-medium text-gray-800 mb-3">
                        Jenjang yang ingin diikuti: <span class="text-red-500">*</span>
                    </p>
                    <div class="space-y-3">
                        <div class="radio-custom">
                            <input type="radio" id="toddler" name="jenjang" value="Toddler" class="mr-3">
                            <label for="toddler" class="text-md text-gray-800">Toddler (sejak usia 2 tahun)</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" id="playgroup" name="jenjang" value="Playgroup" class="mr-3">
                            <label for="playgroup" class="text-md text-gray-800">Playgroup (3 tahun - 4 tahun)</label>
                        </div>
                        <div class="radio-custom">
                            <input type="radio" id="tkA" name="jenjang" value="TK A" class="mr-3">
                            <label for="tkA" class="text-md text-gray-800">TK A (4 tahun - 5 tahun)</label>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center pt-4">
                    <button type="submit" class="submit-btn py-3 px-8 text-white font-bold rounded-full text-lg">
                        Kirim Formulir
                    </button>
                </div>
            </form>
        </div>
    </section>

    <footer id="kontak" class="bg-gray-900 text-white py-12 mt-12">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <!-- Logo & About -->
            <div>
                <img src="/assets/images/compro/logos.png" alt="Logo TK As Sa'ad" class="w-16 h-16 object-cover rounded-full mb-4">
                <p class="text-gray-400">"Elevating Global Leadership Excellences." Membentuk global muslim leader dengan metode montessori</p>
                <div class="flex gap-5 mt-3">
                    <a href="https://www.instagram.com/assikindergarten?igsh=MTh5d2Z1NGxqeGtsOQ==" target="_blank">
                        <button aria-label="Instagram" class="bg-[#388E3C] rounded-full flex items-center justify-center text-white text-lg py-4 px-4 w-12 h-12 hover:bg-[#246337] transition-colors" type="button">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 12.6667C2 7.63867 2 5.124 3.56267 3.56267C5.12533 2.00133 7.63867 2 12.6667 2H15.3333C20.3613 2 22.876 2 24.4373 3.56267C25.9987 5.12533 26 7.63867 26 12.6667V15.3333C26 20.3613 26 22.876 24.4373 24.4373C22.8747 25.9987 20.3613
                        26 15.3333 26H12.6667C7.63867 26 5.124 26 3.56267 24.4373C2.00133 22.8747 2 20.3613 2 15.3333V12.6667Z" stroke="white" stroke-width="3"/>
                        <path d="M20 10C21.1046 10 22 9.10457 22 8C22 6.89543 21.1046 6 20 6C18.8954 6 18 6.89543 18 8C18 9.10457 18.8954 10 20 10Z" fill="white"/>
                        <path d="M14 18C16.2091 18 18 16.2091 18 14C18 11.7909 16.2091 10 14 10C11.7909 10 10 11.7909 10 14C10 16.2091 11.7909 18 14 18Z" stroke="white" stroke-width="3"/>
                        </svg>
                        </button>
                    </a>

                    <a href="https://youtube.com/@assikindergarten?si=PeN1sEQYWjKLXOHR" target="_blank">
                        <button aria-label="YouTube" class="bg-[#388E3C] rounded-full flex items-center justify-center text-white text-lg py-4 px-4 w-12 h-12 hover:bg-[#246337] transition-colors" type="button">
                        <svg width="28" height="20" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3333 13.9998L18.2533 9.99984L11.3333 5.99984V13.9998ZM26.7467 3.55984C26.92 4.1865 27.04 5.0265 27.12 6.09317C27.2133 7.15984 27.2533 8.07984 27.2533 8.87984L27.3333 9.99984C27.3333 12.9198 27.12 15.0665 26.7467 16.4398C26.4133
                        17.6398 25.64 18.4132 24.44 18.7465C23.8133 18.9198 22.6667 19.0398 20.9067 19.1198C19.1733 19.2132 17.5867 19.2532 16.12 19.2532L14 19.3332C8.41334 19.3332 4.93334 19.1198 3.56 18.7465C2.36001 18.4132 1.58667 17.6398 1.25334 16.4398C1.08001 15.8132
                        0.960005 14.9732 0.880005 13.9065C0.786672 12.8398 0.746672 11.9198 0.746672 11.1198L0.666672 9.99984C0.666672 7.07984 0.880005 4.93317 1.25334 3.55984C1.58667 2.35984 2.36001 1.5865 3.56 1.25317C4.18667 1.07984 5.33334 0.959837 7.09334 0.879837C8.82667
                        0.786504 10.4133 0.746504 11.88 0.746504L14 0.666504C19.5867 0.666504 23.0667 0.879837 24.44 1.25317C25.64 1.5865 26.4133 2.35984 26.7467 3.55984Z" fill="white"/>
                        </svg>
                        </button>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h2 class="text-2xl font-bold mb-4">Quick Links</h2>
                <ul class="space-y-2">
                    <li><a href="{{ route('compro.beranda') }}" class="hover:text-orange-500">Beranda</a></li>
                    <li><a href="{{ route('compro.tentang') }}" class="hover:text-orange-500">Tentang</a></li>
                    <li><a href="{{ route('compro.event') }}" class="hover:text-orange-500">Event</a></li>
                    <li><a href="{{ route('compro.kontak') }}" class="hover:text-orange-500">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 class="text-2xl font-bold mb-4">Kontak</h2>
                <p class="text-gray-400">Jl. Tanjung Blok D No. 20, Limus Pratama Regency, Limusnunggal, Citeungsi, Bogor, Indonesia</p>
                <p class="text-gray-400 mt-2">Email: info@sekolahislamku.sch.id</p>
                <p class="text-gray-400">Telp: 0812-3456-7890</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize AOS animations
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();

            // Menu toggle functionality for mobile
            const menuButton = document.getElementById('menu-button');
            const menu = document.getElementById('menu');

            menuButton.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });

            // Form submission
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Simple validation
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('border-red-500');
                    } else {
                        field.classList.remove('border-red-500');
                    }
                });

                // Radio button validation
                const kelasSelected = form.querySelector('input[name="kelas"]:checked');
                const jenjangSelected = form.querySelector('input[name="jenjang"]:checked');

                if (!kelasSelected || !jenjangSelected) {
                    isValid = false;
                    alert('Silakan pilih kelas dan jenjang yang ingin diikuti');
                }

                if (isValid) {
                    alert('Terima kasih! Formulir Anda telah berhasil dikirim.');
                    form.reset();
                }
            });
        });
    </script>
</body>

</html>