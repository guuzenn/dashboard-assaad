<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB ASSIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/as-saad.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/as-saad.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/as-saad.png') }}">
</head>

<body class="bg-gray-100 overflow-hidden font-['Fredoka']">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md h-screen fixed top-0 left-0 flex flex-col">
            <div class="text-2xl font-bold text-[#388E3C] p-6">PPDB ASSIK</div>
            <nav class="flex-1 px-4 space-y-4 text-gray-700">
                <a href="{{ route('beranda') }}" class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded-md">
                    <span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.82369 17.9647V12.5299H12.1715V17.9647C12.1715 18.5625 12.6606 19.0516 13.2584 19.0516H16.5193C17.1171 19.0516 17.6062 18.5625 17.6062 17.9647V10.356H19.454C19.954 10.356 20.1932 9.73646 19.8127 9.41037L10.7258 1.22566C10.3128 0.856096 9.68237 0.856096 9.26933 1.22566L0.182446 9.41037C-0.187116 9.73646 0.0411431 10.356 0.541139 10.356H2.38895V17.9647C2.38895 18.5625 2.87808 19.0516 3.4759 19.0516H6.73674C7.33456 19.0516 7.82369 18.5625 7.82369 17.9647Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <span>Beranda</span>
                </a>
                <a href="{{ route('formulir') }}" class="flex items-center space-x-2 p-2 rounded-md
                    {{ request()->routeIs('formulir') ? 'bg-gradient-to-r from-[#388E3C] to-white text-white' : 'hover:bg-gray-100 text-gray-700' }}">
                    <span class="{{ request()->routeIs('formulir') ? 'text-white' : 'text-gray-700' }}">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.82 9H16.56C16.461 9 16.38 9.081 16.38 9.18V16.38H1.62V1.62H8.82C8.919 1.62 9 1.539 9 1.44V0.18C9 0.081 8.919 0 8.82 0H0.72C0.32175 0 0 0.32175 0 0.72V17.28C0 17.6783 0.32175 18 0.72 18H17.28C17.6783 18 18 17.6783 18 17.28V9.18C18 9.081 17.919 9 17.82 9Z" fill="currentColor"/>
                            <path d="M5.48784 9.51525L5.44509 12.1905C5.44284 12.3907 5.60484 12.555 5.80509 12.555H5.81409L8.46909 12.4897C8.51409 12.4875 8.55909 12.4695 8.59059 12.438L17.9483 3.1005C18.0181 3.03075 18.0181 2.916 17.9483 2.84625L15.1516 0.0517501C15.1156 0.0157501 15.0706 0 15.0233 0C14.9761 0 14.9311 0.0180001 14.8951 0.0517501L5.53959 9.38925C5.50709 9.42324 5.48861 9.46823 5.48784 9.51525ZM6.91659 10.0462L15.0233 1.9575L16.0403 2.97225L7.92909 11.0655L6.90084 11.0903L6.91659 10.0462Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <span>Formulir</span>
                </a>
                <a href="{{ route('pengumuman') }}" class="flex items-center space-x-2 p-2 hover:bg-gray-100 rounded-md">
                    <span>
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7548 1.97432V5.18646C17.1431 5.18646 17.5276 5.26295 17.8863 5.41154C18.2451 5.56014 18.571 5.77794 18.8456 6.05251C19.1202 6.32708 19.338 6.65304 19.4866 7.01179C19.6352 7.37053 19.7116 7.75503 19.7116 8.14333C19.7116 8.53163 19.6352 8.91613 19.4866 9.27487C19.338 9.63362 19.1202 9.95958 18.8456 10.2342C18.571 10.5087 18.2451 10.7265 17.8863 10.8751C17.5276 11.0237 17.1431 11.1002 16.7548 11.1002V14.0571C16.7548 15.6814 14.9008 16.6088 13.6008 15.6341L11.5704 14.1103C10.4851 13.2966 9.22141 12.7533 7.88418 12.5254V15.3285C7.88429 15.9729 7.65147 16.5955 7.22865 17.0817C6.80582 17.5679 6.22149 17.8849 5.58336 17.9742C4.94524 18.0635 4.29634 17.9191 3.75628 17.5677C3.21622 17.2163 2.82141 16.6814 2.64462 16.0618L1.09719 10.6448C0.540334 9.98722 0.17794 9.18732 0.050745 8.33504C-0.0764496 7.48277 0.036598 6.61191 0.37718 5.82036C0.717763 5.0288 1.27238 4.34794 1.97868 3.85429C2.68499 3.36065 3.51498 3.0738 4.37537 3.02598L7.34998 2.8604C8.80539 2.77956 10.2208 2.35426 11.4797 1.6195L13.79 0.271169C15.1048 -0.494659 16.7548 0.452523 16.7548 1.97432ZM3.58096 12.1627L4.53997 15.5207C4.58612 15.6833 4.68953 15.8236 4.8311 15.9159C4.97266 16.0081 5.14283 16.046 5.31016 16.0226C5.4775 15.9992 5.63072 15.916 5.74151 15.7884C5.8523 15.6608 5.91319 15.4975 5.91294 15.3285V12.3618L4.37537 12.276C4.10793 12.2599 3.84224 12.222 3.58096 12.1627ZM14.7835 1.97432L12.4723 3.32364C11.0687 4.1434 9.50267 4.646 7.88418 4.79616V10.5315C9.64549 10.774 11.322 11.4609 12.7532 12.5333L14.7835 14.0571V1.97432ZM5.91294 4.91443L4.48379 4.99328C3.81893 5.02999 3.192 5.31462 2.72674 5.79097C2.26147 6.26732 1.9917 6.90078 1.97065 7.56632C1.94961 8.23186 2.17884 8.8811 2.61308 9.38589C3.04732 9.89068 3.65503 10.2143 4.31623 10.293L4.48379 10.3078L5.91294 10.3866V4.91443ZM16.7548 7.15771V9.12895C17.006 9.12867 17.2476 9.03248 17.4303 8.86003C17.613 8.68757 17.7229 8.45188 17.7376 8.20109C17.7523 7.95031 17.6707 7.70337 17.5095 7.51073C17.3483 7.31808 17.1196 7.19428 16.8701 7.16461L16.7548 7.15771Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <span>Pengumuman</span>
                </a>
            </nav>
            <div class="p-4 border-t">
                <form method="POST" action="{{ route('logoutCS') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-start space-x-2 text-red-600 hover:bg-red-100 p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2
                                2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                        </svg>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col ml-64">
            <!-- Navbar (Fixed) -->
            <header class="bg-white flex items-center justify-end p-4 shadow-md fixed top-0 left-64 right-0 z-10">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center">👤</div>
                    <span class="font-semibold">{{ auth()->user()->name }}</span>
                </div>
            </header>

            <!-- Main Content -->
            <main class="ml-30 mt-16 p-6 overflow-y-auto h-[calc(100vh-4rem)]">
                <h1 class="text-3xl font-bold text-[#388E3C]">Beranda</h1>
                <section class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h2 class="text-xl font-semibold text-[#388E3C] mb-2">Selamat Datang!</h2>
                        <p class="text-gray-600">Ayo daftarkan dirimu di PPDB ASSIK! Proses pendaftaran mudah dan cepat. Pastikan kamu sudah punya semua dokumen yang dibutuhkan ya.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h2 class="text-xl font-semibold text-[#388E3C] mb-2">Tahapan PPDB</h2>
                        <ul class="list-disc list-inside text-gray-600 space-y-1">
                            <li>Isi formulir</li>
                            <li>Upload berkas</li>
                            <li>Verifikasi data</li>
                            <li>Pengumuman hasil</li>
                        </ul>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-md">
                        <h2 class="text-xl font-semibold text-[#388E3C] mb-2">Kontak Bantuan</h2>
                        <p class="text-gray-600">Ada kendala? Hubungi panitia kami melalui email ppdb@assik.sch.id atau WhatsApp di 08xxxxxxxxxx.</p>
                    </div>
                </section>


                <!-- Informasi Pendaftaran -->
                <section class="bg-white mt-6 p-6 rounded-xl shadow-md mb-8" contenteditable="true">
                    <h2 class="text-2xl font-bold text-orange-500 mb-4">Informasi Pendaftaran</h2>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Pendaftaran saat ini sedang dibuka hingga 30 April 2025. Harap isi semua formulir dan upload berkas dengan benar. Pastikan menyelesaikan seluruh proses pendaftaran agar dapat dilakukan verifikasi berkas. Apabila ada kendala dapat menghubungi kontak yang
                        tertera. Atas perhatiannya kami ucapkan terima kasih.
                    </p>
                </section>

                <!-- Cara Pendaftaran -->
                <section class="bg-white p-6 rounded-xl shadow-md" contenteditable="true">
                    <h2 class="text-2xl font-bold text-orange-500 mb-4">Cara Pendaftaran</h2>

                    <p class="text-gray-700 mb-5 text-sm leading-relaxed">
                        Untuk mengikuti proses Penerimaan Peserta Didik Baru (PPDB) di <span class="font-semibold">TK Ceria</span>, silakan ikuti langkah-langkah berikut:
                    </p>

                    <div class="space-y-5 text-gray-700 text-sm leading-relaxed">

                        <div>
                            <p class="font-semibold flex items-start gap-2">
                                <span>✏️ 1.</span> Mengisi Formulir Pendaftaran
                            </p>
                            <p class="ml-7 mt-1">Isi formulir pendaftaran secara online melalui halaman resmi kami dengan lengkap dan sesuai data anak.</p>
                        </div>

                        <div>
                            <p class="font-semibold flex items-start gap-2">
                                <span>📄 2.</span> Mengunggah Dokumen Persyaratan
                            </p>
                            <div class="ml-7 mt-1">
                                <p>Unggah dokumen yang dibutuhkan, seperti:</p>
                                <ul class="list-disc list-inside ml-4 mt-1 space-y-0.5">
                                    <li>Scan Akta Kelahiran</li>
                                    <li>Scan Kartu Keluarga</li>
                                    <li>Foto salah satu KTP Orangtua (Pastikan file dalam format JPG, PNG, atau PDF dan ukuran tidak melebihi 2MB)</li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <p class="font-semibold flex items-start gap-2">
                                <span>🔍 3.</span> Verifikasi Data
                            </p>
                            <p class="ml-7 mt-1">Tim administrasi kami akan melakukan verifikasi terhadap data dan dokumen yang Anda kirimkan. Anda akan dihubungi melalui WhatsApp jika ada data yang perlu dikonfirmasi.</p>
                        </div>

                        <div>
                            <p class="font-semibold flex items-start gap-2">
                                <span>📢 4.</span> Pengumuman Hasil Seleksi
                            </p>
                            <p class="ml-7 mt-1">Hasil pendaftaran akan diumumkan melalui website dan juga dikirim langsung ke nomor WhatsApp yang Anda daftarkan.</p>
                        </div>

                        <div>
                            <p class="font-semibold flex items-start gap-2">
                                <span>📝 5.</span> Daftar Ulang
                            </p>
                            <p class="ml-7 mt-1">Bagi peserta yang diterima, harap segera melakukan daftar ulang sesuai jadwal yang telah ditentukan. Petunjuk teknis akan diberikan bersamaan dengan pengumuman hasil.</p>
                        </div>

                        <div>
                            <p class="font-semibold flex items-start gap-2">
                                <span>🧒 6.</span> Siap Bergabung!
                            </p>
                            <p class="ml-7 mt-1">Setelah daftar ulang, anak Anda resmi menjadi bagian dari keluarga besar TK Ceria. Kami siap menyambut dengan penuh keceriaan dan kasih sayang.</p>
                        </div>

                        <div>
                            <p class="font-semibold flex items-start gap-2">
                                <span>📞</span> Bantuan & Pertanyaan:
                            </p>
                            <p class="ml-7 mt-1">
                                Jika ada kendala saat mendaftar, hubungi kami melalui:<br>
                                <span class="font-semibold">WA:</span> 0812-xxxx-xxxx<br>
                                <span class="font-semibold">Email:</span> tkkceria@example.com
                            </p>
                        </div>

                    </div>
                </section>

            </main>
        </div>
    </div>

</body>

</html>
