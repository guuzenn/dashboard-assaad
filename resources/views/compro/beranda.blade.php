<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Compro</title>
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
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    

</head>

<body class="font-['Fredoka']">

    <!-- Scroll to Top Button -->
    <button onclick="topFunction()" id="scrollTopBtn" class="w-10 hidden fixed bottom-5 right-5 bg-orange-500 text-white rounded-full p-3 shadow-lg hover:bg-orange-700 z-50">
    ↑
  </button>

    <!-- Navbar -->
    <nav class="backdrop-blur-lg bg-white/30 w-full fixed top-0 left-0 z-50 h-20">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-4 py-3">
            <div class="flex items-center">
                <img src="/assets/images/compro/logos.png" alt="Logo TK As Sa'ad" class="w-16 h-16 object-cover rounded-full">
                <circle cx="41" cy="41" r="41" fill="#D9D9D9" />
                </svg>
            </div>
            <button id="menu-button" class="block md:hidden text-gray-900 focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <ul id="menu" class="hidden md:flex flex-col md:flex-row gap-6 absolute md:static top-20 left-0 w-full md:w-auto bg-white md:bg-transparent p-4 md:p-0 shadow md:shadow-none">
                <li><a href="{{ route('compro.beranda') }}" class="text-base text-green-700 font-semibold hover:font-semibold hover:text-green-700">Beranda</a></li>
                <li><a href="#visi-misi" class="text-base text-gray-900 hover:font-semibold hover:text-green-700">Visi Misi</a></li>
                <li><a href="{{ route('compro.tentang') }}" class="text-base text-gray-900 hover:font-semibold hover:text-green-700">Tentang</a></li>
                <li><a href="{{ route('compro.event') }}" class="text-base text-gray-900 hover:font-semibold hover:text-green-700">Event</a></li>
                <li><a href="{{ route('compro.kontak') }}" class="text-base text-gray-900 hover:font-semibold hover:text-green-700">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative flex items-center justify-center bg-cover bg-center h-screen bg-[url('/assets/images/compro/bg-hero.png')] mt-16 w-auto">
        <div class="max-w-4xl mx-auto p-4" data-aos="fade-up">
            <h1 class="text-white font-bold text-5xl md:text-7xl leading-tight">Elevating Global Leadership Excellence</h1>
            <p class="text-white text-lg md:text-2xl mt-6">Taman kanak-kanak kami bukan hanya tempat belajar, tapi tempat yang penuh keajaiban.</p>
            <a href="{{ route('loginppdb') }}" class="mt-8 inline-block bg-orange-500 hover:bg-orange-700 text-white py-3 px-6 rounded-full">Lihat Pendaftaran</a>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="max-w-6xl mx-auto p-8">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6">Tentang Kami</h2>
            <p class="text-lg mb-12">Sekolah Islam berbasis Montessori adalah tempat di mana nilai-nilai Islami dipadukan dengan pendeka Montessori, memberi anak kebebasan belajar sesuai perkembangan mereka. Di sini, pendidikan agama dan pembentukan karakter Islami dikemas dalam
                kegiatan sehari-hari yana kreatif membantu anak-anak tumbuh menjadi pribadi mandiri dan berakhlak baik sejak dini. Berikut beberapa program unggulan.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="zoom-in">
            <div class="text-center">
                <img src="/assets/images/compro/mentossori.png" alt="Mentossari" class="w-24 h-24 mx-auto mb-4">
                <h3 class="text-2xl font-semibold">Metode Montessori</h3>
                <p class="text-base mt-2">Lingkungan belajar dinamis yang merangsang perkembangan alami.</p>
            </div>
            <div class="text-center mt-8">
                <img src="/assets/images/compro/tahsin.png" alt="Tahfidz" class="w-24 h-24 mx-auto mb-4">
                <h3 class="text-2xl font-semibold">Tahsin & Tahfidz</h3>
                <p class="text-base mt-2">Belajar Qur'an efektif dan tepat.</p>
            </div>
            <div class="text-center">
                <img src="/assets/images/compro/literasi.png" alt="Literasi" class="w-24 h-24 mx-auto mb-4">
                <h3 class="text-2xl font-semibold">Pembiasaan Literasi</h3>
                <p class="text-base mt-2">Membiasakan membaca dan storytelling sejak dini.</p>
            </div>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section id="visi-misi" class=" py-16">
        <div class="max-w-6xl mx-auto px-4" data-aos="fade-up">
            <h2 class="text-center text-4xl font-bold mb-12">Visi & Misi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div data-aos="fade-right">
                    <h3 class="text-3xl font-bold mb-4">Visi</h3>
                    <p class="text-lg text-gray-800">Mewujudkan generasi anak shalih dan shalihah yang cerdas, mandiri, dan berakhlak mulia berdasarkan nilai-nilai Islam.</p>
                </div>
                <div data-aos="fade-left">
                    <h3 class="text-3xl font-bold mb-4">Misi</h3>
                    <ul class="list-disc list-inside text-lg text-gray-800 space-y-2">
                        <li>Menanamkan nilai-nilai Islam sejak usia dini melalui pembiasaan ibadah dan akhlak mulia.</li>
                        <li>Menyediakan lingkungan belajar yang aman, menyenangkan, dan bernuansa Islami.</li>
                        <li>Mengembangkan potensi anak secara holistik: spiritual, intelektual, sosial, emosional, dan fisik.</li>
                        <li>Mengintegrasikan kurikulum nasional dengan nilai-nilai keislaman dalam kegiatan sehari-hari.</li>
                        <li>Menjalin kerja sama erat antara sekolah dan orang tua dalam mendidik anak.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Khusus -->
    <section id="program" class="py-16 bg-gradient-to-br from-white via-orange-100 to-orange-200 ">
        <div class="max-w-6xl mx-auto px-4" data-aos="fade-up">
            <h2 class=" text-4xl font-bold mb-12">Program Khusus <br> Sesuai Usia Anak</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 absolute inset-0 bg-gradient-to-b from-[#388E3C] to-transparent " data-aos="flip-left ">
                    <img src="/assets/images/compro/todler.png " alt="Toddler " class="w-full h-48 object-cover rounded-t-2xl ">
                    <div class="p-6 text-center ">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 ">Toddler</h3>
                        <p class="text-gray-700 mb-4 ">Belajar bersosialisasi dan mengeksplorasi dunia sekitar.</p>
                        <span class="inline-block bg-green-600 text-white px-4 py-1 rounded-full text-lg ">2–3 Tahun</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 absolute inset-0 bg-gradient-to-b from-[#FEA439] to-transparent " data-aos="flip-left " data-aos-delay="100 ">
                    <img src="/assets/images/compro/playGroup.png " alt="Play Group " class="w-full h-48 object-cover rounded-t-2xl ">
                    <div class="p-6 text-center ">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 ">Play Group</h3>
                        <p class="text-gray-700 mb-4 ">Fokus pada literasi awal dan konsep matematika dasar melalui permainan.</p>
                        <span class="inline-block bg-orange-500 text-white px-4 py-1 rounded-full text-lg ">3–4 Tahun</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 absolute inset-0 bg-gradient-to-b from-[#388E3C] to-transparent  " data-aos="flip-left " data-aos-delay="200 ">
                    <img src="/assets/images/compro/tkA.png " alt="TK A " class="w-full h-48 object-cover rounded-t-2xl ">
                    <div class="p-6 text-center ">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 ">TK A</h3>
                        <p class="text-gray-700 mb-4 ">Penguatan sosialisasi, kerja sama, sains, logika, dan motorik.</p>
                        <span class="inline-block bg-green-600 text-white px-4 py-1 rounded-full text-lg ">4–5 Tahun</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Karyawan -->
    <section id="karyawan" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4" data-aos="fade-up">
            <h2 class="text-center text-4xl font-bold mb-12">Guru & Staff</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Card Guru -->
                <div class="text-center" data-aos="zoom-in">
                    <img src="/assets/images/compro/todler.png" alt="Guru 1" class="mx-auto w-40 h-40 object-cover rounded-xl mb-4">
                    <h3 class="text-xl font-bold">Bu Aisyah</h3>
                    <p class="text-gray-600">Guru Toddler</p>
                </div>
                <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="/assets/images/compro/todler.png" alt="Guru 2" class="mx-auto w-40 h-40 object-cover rounded-xl mb-4">
                    <h3 class="text-xl font-bold">Bu Sarah</h3>
                    <p class="text-gray-600">Guru Play Group</p>
                </div>
                <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="/assets/images/compro/todler.png" alt="Guru 3" class="mx-auto w-40 h-40 object-cover rounded-xl mb-4">
                    <h3 class="text-xl font-bold">Bu Dina</h3>
                    <p class="text-gray-600">Guru TK A</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Event -->

    <section id="event" class="py-16 bg-gradient-to-br from-white via-green-100 to-green-200">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-center text-4xl font-bold mb-2" data-aos="fade-up">Kegiatan Kami</h2>
            <p class="text-center text-2xl font-reguler mb-12" data-aos="fade-up">
                Disini kami melaksanakan dan mengikuti berbagai kegiatan yang dapat mengembangkan minat dan bakat anak.
            </p>
            <!-- PEMBUNGKUS SELURUH KOMPONEN -->
            <div class="relative flex flex-col items-center">

                <!-- SWIPER AREA -->
                <div class="swiper w-full max-w-6xl">
                    <div class="swiper-wrapper" id="event-wrapper">
                        <!-- Slides akan di-generate dengan JS -->
                    </div>
                </div>

                <!-- PAGINATION DIPISAH & DI LUAR SWIPER -->
                <div class="swiper-pagination mt-11"></div>
            </div>


        </div>
    </section>



    <!-- School Visit Section -->
    <section id="school-visit " class="flex flex-col md:flex-row items-center md:items-stretch w-full mt-32 " data-aos="fade-up ">
        <div class="w-full md:w-1/2 ">
            <img alt="Teacher and student sitting at a desk in a classroom " class="w-full h-full object-cover " src="https://storage.googleapis.com/a1aa/image/b047f471-0acb-4629-ea31-76b03a5076b1.jpg " />
        </div>
        <div class="w-full md:w-1/2 bg-[#f89f34] p-8 flex flex-col justify-center ">
            <h2 class="text-white text-4xl md:text-5xl font-bold mb-4 ml-0 md:ml-10 ">
                School Visit
            </h2>
            <p class="font-light text-white text-lg md:text-2xl leading-relaxed mb-6 max-w-[508px] ml-0 md:ml-10 ">
                Pengisian formulir bersifat wajib bagi calon peserta didik dan calon wali murid untuk pendataan dan penjadwalan sebelum melakukan kunjungan ke sekolah. Pengisian dilakukan maksimal H-1 sebelum kunjungan.
            </p>
            <div class="mt-6 md:ml-10">
               <a href="{{ route('compro.school_visit') }}" target="_blank">
                    <button class="bg-[#2a7a44] text-white text-lg md:text-2xl font-normal rounded-full py-2 px-6 w-max hover:bg-[#246337] transition-colors">
                        Isi Formulir
                    </button>
                </a>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-gray-900 text-white py-12 mt-12 ">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 ">
            <!-- Logo & About -->
            <div data-aos="fade-up ">
                <img src="/assets/images/compro/logos.png" alt="Logo TK As Sa'ad" class="w-16 h-16 object-cover rounded-full mb-4">
                <p class="text-gray-400 ">“Elevating Global Leadership Excellences.” Membentuk global muslim leader dengan metode montessori</p>
                <div class="flex gap-5 mt-3">
                    <a href="https://www.instagram.com/assikindergarten?igsh=MTh5d2Z1NGxqeGtsOQ==" target="_blank">
                        <button aria-label="Instagram " class="bg-[#388E3C] rounded-full flex items-center justify-center text-white text-lg py-4 px-4 w-12 h-12 hover:bg-[#246337] transition-colors  " type="button ">
                        <svg width="28 " height="28 " viewBox="0 0 28 28 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                        <path d="M2 12.6667C2 7.63867 2 5.124 3.56267 3.56267C5.12533 2.00133 7.63867 2 12.6667 2H15.3333C20.3613 2 22.876 2 24.4373 3.56267C25.9987 5.12533 26 7.63867 26 12.6667V15.3333C26 20.3613 26 22.876 24.4373 24.4373C22.8747 25.9987 20.3613
                        26 15.3333 26H12.6667C7.63867 26 5.124 26 3.56267 24.4373C2.00133 22.8747 2 20.3613 2 15.3333V12.6667Z " stroke="white " stroke-width="3 "/>
                        <path d="M20 10C21.1046 10 22 9.10457 22 8C22 6.89543 21.1046 6 20 6C18.8954 6 18 6.89543 18 8C18 9.10457 18.8954 10 20 10Z " fill="white "/>
                        <path d="M14 18C16.2091 18 18 16.2091 18 14C18 11.7909 16.2091 10 14 10C11.7909 10 10 11.7909 10 14C10 16.2091 11.7909 18 14 18Z " stroke="white " stroke-width="3 "/>
                        </svg>
                        </button>
                    </a>

                    <a href="https://youtube.com/@assikindergarten?si=PeN1sEQYWjKLXOHR" target="_blank">
                        <button aria-label="YouTube " class="bg-[#388E3C] rounded-full flex items-center justify-center text-white text-lg py-4 px-4 w-12 h-12 hover:bg-[#246337] transition-colors " type="button ">
                        <svg width="28 " height="20 " viewBox="0 0 28 20 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                        <path d="M11.3333 13.9998L18.2533 9.99984L11.3333 5.99984V13.9998ZM26.7467 3.55984C26.92 4.1865 27.04 5.0265 27.12 6.09317C27.2133 7.15984 27.2533 8.07984 27.2533 8.87984L27.3333 9.99984C27.3333 12.9198 27.12 15.0665 26.7467 16.4398C26.4133
                        17.6398 25.64 18.4132 24.44 18.7465C23.8133 18.9198 22.6667 19.0398 20.9067 19.1198C19.1733 19.2132 17.5867 19.2532 16.12 19.2532L14 19.3332C8.41334 19.3332 4.93334 19.1198 3.56 18.7465C2.36001 18.4132 1.58667 17.6398 1.25334 16.4398C1.08001 15.8132
                        0.960005 14.9732 0.880005 13.9065C0.786672 12.8398 0.746672 11.9198 0.746672 11.1198L0.666672 9.99984C0.666672 7.07984 0.880005 4.93317 1.25334 3.55984C1.58667 2.35984 2.36001 1.5865 3.56 1.25317C4.18667 1.07984 5.33334 0.959837 7.09334 0.879837C8.82667
                        0.786504 10.4133 0.746504 11.88 0.746504L14 0.666504C19.5867 0.666504 23.0667 0.879837 24.44 1.25317C25.64 1.5865 26.4133 2.35984 26.7467 3.55984Z " fill="white "/>
                        </svg>
                        </button>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div data-aos="fade-up " data-aos-delay="100 ">
                <h2 class="text-2xl font-bold mb-4 ">Quick Links</h2>
                <ul class="space-y-2 ">
                    <li><a href="{{ route('compro.beranda') }}" class="hover:text-orange-500">Beranda</a></li>
                    <li><a href="#visi-misi " class="hover:text-orange-500 ">Visi Misi</a></li>
                    <li><a href="{{ route('compro.tentang') }}" class="hover:text-orange-500">Tentang</a></li>
                    <li><a href="{{ route('compro.event') }}" class="hover:text-orange-500">Event</a></li>
                    <li><a href="{{ route('compro.kontak') }}" class="hover:text-orange-500">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div data-aos="fade-up " data-aos-delay="200 ">
                <h2 class="text-2xl font-bold mb-4 ">Kontak</h2>
                <p class="text-gray-400 ">Jl. Tanjung Blok D No. 20, Limus Pratama Regency, Limusnunggal, Citeungsi, Bogor, Indonesia</p>
                <p class="text-gray-400 mt-2 ">Email: info@sekolahislamku.sch.id</p>
                <p class="text-gray-400 ">Telp: 0812-3456-7890</p>
            </div>
        </div>
    </footer>

    <!-- Script for Menu Toggle & Scroll Top Button -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: false,
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
    <script>
        const events = [{
                id: 1,
                title: "Field Trip",
                image: "/assets/images/compro/tkA.png",
                desc: "Belajar luar kelas!",
                color: "orange",

            }, {
                id: 2,
                title: "Market Day",
                image: "/assets/images/compro/tkA.png",
                desc: "Belajar jual beli",
                color: "green",

            }, {
                id: 3,
                title: "Pentas Seni",
                image: "/assets/images/compro/tkA.png",
                desc: "Ekspresi anak",
                color: "orange",

            }, {
                id: 4,
                title: "Family Day",
                image: "/assets/images/compro/tkA.png",
                desc: "Kegiatan keluarga",
                color: "green",

            }, {
                id: 5,
                title: "Family Day",
                image: "/assets/images/compro/tkA.png",
                desc: "Kegiatan keluarga",
                color: "orange",

            }, {
                id: 6,
                title: "Family Day",
                image: "/assets/images/compro/tkA.png",
                desc: "Kegiatan keluarga",
                color: "green",

            }, {
                id: 7,
                title: "Family Day",
                image: "/assets/images/compro/tkA.png",
                desc: "Kegiatan keluarga",
                color: "orange",

            },
            // bisa ditambahkan dari API atau database
        ];

        const wrapper = document.getElementById("event-wrapper");

        for (let i = 0; i < events.length; i += 3) {
            const group = events.slice(i, i + 3);
            const slide = document.createElement("div");
            slide.className = "swiper-slide flex gap-6";

            group.forEach(ev => {
                const box = `
        <div class="w-1/3">
          <a href="event-detail.html?id=${ev.id}" class="block rounded-2xl shadow-md hover:shadow-xl border-4 border-${ev.color}-300 hover:border-${ev.color}-500 transition-all duration-300 bg-white overflow-hidden transform hover:scale-105">
            <div class="relative">
              <img src="${ev.image}" alt="${ev.title}" class="w-full h-64 object-cover rounded-t-xl">
            </div>
            <div class="p-4 text-center">
              <h3 class="text-lg font-semibold text-green-700 mb-2">${ev.title}</h3>
              <p class="text-sm text-gray-600">${ev.desc}</p>
            </div>
          </a>
        </div>`;
                slide.innerHTML += box;
            });

            wrapper.appendChild(slide);
        }

        new Swiper('.swiper', {
            loop: false,
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>


    <script>
        const menuButton = document.getElementById('menu-button');
        const menu = document.getElementById('menu');
        const scrollTopBtn = document.getElementById('scrollTopBtn');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollTopBtn.classList.remove('hidden');
            } else {
                scrollTopBtn.classList.add('hidden');
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        AOS.init();
    </script>

</body>

</html>