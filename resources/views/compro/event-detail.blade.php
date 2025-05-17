<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Event</title>
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
</head>

<body class="bg-green-50 font-['Fredoka'] min-h-screen flex flex-col">

    <!-- Navbar -->
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
                <li><a href="{{ route('compro.event') }}" class="text-base text-green-700 font-semibold hover:font-semibold hover:text-green-700">Event</a></li>
                <li><a href="{{ route('compro.kontak') }}" class="text-base text-gray-900 hover:font-semibold hover:text-green-700">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- Konten Event -->
    <div class="max-w-4xl mx-auto mt-32 p-6 bg-white rounded-lg shadow-md">
        @if($event->gambar)
            <img src="{{ asset('storage/' . $event->gambar) }}" class="rounded mb-4 w-full max-h-96 object-cover" alt="Gambar event">
        @endif
        <h1 class="text-4xl font-bold text-green-700 mb-4">
            {{ $event->judul }}
        </h1>
        <div class="text-gray-500 mb-4">{{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}</div>
        <div class="text-gray-700 text-lg leading-relaxed">{{ $event->deskripsi }}</div>
    </div>

    <!-- Event Lainnya -->
    <div class="max-w-4xl mx-auto mt-12">
        <h2 class="text-2xl font-bold text-green-800 mb-4">Event Lainnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="other-events">
            @foreach($otherEvents as $ev)
                <a href="{{ route('compro.event-detail', $ev->id) }}" class="bg-white p-4 rounded shadow hover:shadow-lg transition block">
                    @if($ev->gambar)
                        <img src="{{ asset('storage/' . $ev->gambar) }}" alt="{{ $ev->judul }}" class="rounded mb-2 h-40 w-full object-cover">
                    @endif
                    <h3 class="text-lg font-semibold text-green-700">{{ $ev->judul }}</h3>
                    <div class="text-gray-500 text-sm mb-1">{{ \Carbon\Carbon::parse($ev->tanggal)->format('d M Y') }}</div>
                </a>
            @endforeach
        </div>
    </div>


    <!-- Footer -->
    <footer id="kontak" class="bg-gray-900 text-white py-12 mt-12">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <!-- Logo & About -->
            <div>
                <img src="/assets/images/compro/logos.png" alt="Logo TK As Sa'ad" class="w-16 h-16 object-cover rounded-full mb-4">
                <p class="text-gray-400">“Elevating Global Leadership Excellences.” Membentuk global muslim leader dengan metode montessori</p>
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

    <!-- JavaScript -->
    <script>
        const events = {
            1: {
                title: "Field Trip",
                image: "/assets/images/compro/tkA.png",
                description: "Kegiatan seru mengunjungi tempat luar kelas agar anak-anak mengenal dunia sekitar."
            },
            2: {
                title: "Market Day",
                image: "/assets/images/compro/playGroup.png",
                description: "Anak-anak belajar praktik jual beli secara langsung melalui bermain peran."
            },
            3: {
                title: "Pentas Seni",
                image: "/assets/images/compro/literasi.png",
                description: "Ajang ekspresi seni anak-anak dengan menampilkan tari, nyanyian, dan drama."
            },
            4: {
                title: "Family Day",
                image: "/assets/images/compro/tahsin.png",
                description: "Momen kebersamaan antara anak, orang tua, dan guru untuk mempererat hubungan."
            }
        };

        const params = new URLSearchParams(window.location.search);
        const id = params.get("id");
        const event = events[id];

        if (event) {
            document.getElementById("event-title").textContent = event.title;
            document.getElementById("event-img").src = event.image;
            document.getElementById("event-img").alt = event.title;
            document.getElementById("event-desc").textContent = event.description;
        } else {
            document.getElementById("event-title").textContent = "Event tidak ditemukan.";
        }

        // Render Event Lainnya
        const otherEvents = document.getElementById("other-events");
        Object.entries(events).forEach(([key, ev]) => {
            if (key !== id) {
                const card = document.createElement("a");
                card.href = `event-detail.html?id=${key}`;
                card.className = "bg-white p-4 rounded shadow hover:shadow-lg transition block";
                card.innerHTML = `
          <img src="${ev.image}" alt="${ev.title}" class="rounded mb-2 h-40 w-full object-cover">
          <h3 class="text-lg font-semibold text-green-700">${ev.title}</h3>
        `;
                otherEvents.appendChild(card);
            }
        });
    </script>

</body>

</html>
