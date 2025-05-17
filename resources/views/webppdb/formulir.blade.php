<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir PPDB ASSIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/as-saad.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/as-saad.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/as-saad.png') }}">
</head>

<body class="bg-gray-100 font-['Fredoka']">

    <div class="flex">
        <!-- Sidebar (Fixed) -->
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
                    <span class="font-semibold">Nama Pendaftar</span>
                </div>
            </header>

            <!-- Form Content -->
            <main class="flex-1 p-8 pt-24 pb-24">
                <div class="max-w-6xl mx-auto">
                    <h1 class="text-2xl font-bold text-[#388E3C]">Formulir Pendaftaran</h1>
                    <p class="text-gray-500 mt-2">Isilah formulir dengan data yang benar dan pastikan semua terisi.</p>

                    <!-- Form Card -->
                    <div class="bg-white mt-6 rounded-2xl shadow-md">
                        <div class="bg-[#388E3C] text-white py-3 px-6 rounded-t-2xl">
                            <h2 class="text-xl font-bold">Formulir Pendaftaran PPDB ASSIK</h2>
                        </div>

                        <!-- Isi Form -->
                        <form id="pendaftaranForm" action="{{ route('ppdb.store') }}" method="POST" class="p-8 space-y-6">
                            @csrf
                            <!-- Data Siswa -->
                            <div class="pb-4 mb-6 border-b-2 border-gray-200">
                                <h3 class="text-lg font-bold text-[#388E3C] mb-4">Data Calon Peserta Didik</h3>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1" for="nama_lengkap">Nama Lengkap</label>
                                    <input required name="nama_lengkap" id="nama_lengkap" type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Masukkan nama lengkap" />
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Nama Panggilan Calon Peserta Didik</label>
                                    <input required name="nama_panggilan" id="nama_panggilan" type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Masukkan nama panggilan">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Jenjang Kelas</label>
                                    <select required name="jenjang_kelas" id="jenjang_kelas" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600">
                                            <option value="">Pilih Jenjang Kelas</option>
                                            <option>KIDDY A</option>
                                            <option>TOODLER B</option>
                                        </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Tempat Lahir Calon Peserta Didik</label>
                                    <input required name="tempat_lahir" id="tempat_lahir" type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Contoh: Jakarta">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Tanggal Lahir Calon Peserta Didik</label>
                                    <input required name="tanggal_lahir" id="tanggal_lahir" type="date" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Tanggal Lahir">
                                </div>


                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Usia Calon Peserta Didik (Tahun dan Bulan) Per Juli</label>
                                    <input required name="usia" id="usia" type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Contoh: 7 tahun 3 bulan">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Jenis Kelamin</label>
                                    <select required name="jenis_kelamin" id="jenis_kelamin" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Agama</label>
                                    <select required name="agama" id="agama" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600">
                                            <option value="">Pilih Agama</option>
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                            <option>Konghucu</option>
                                        </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Anak Ke-</label>
                                    <input required name="anak_ke" id="anak_ke" type="number" min="1" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Contoh: 2">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Status dalam Keluarga</label>
                                    <select required name="status_dalam_keluarga" id="status_dalam_keluarga" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600">
                                            <option value="">Pilih Status</option>
                                            <option>Anak Kandung</option>
                                            <option>Anak Angkat</option>
                                            <option>Anak Tiri</option>
                                            <option>Lainnya</option>
                                        </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Jumlah Saudara</label>
                                    <input required name="jumlah_saudara" id="jumlah_saudara" type="number" min="0" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Masukkan jumlah saudara">
                                </div>


                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Provinsi</label>
                                    <select id="provinsi" name="provinsi" class="w-full px-4 py-2 border shadow-sm rounded-lg focus:outline-none focus:border-green-600">
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Kabupaten/Kota</label>
                                    <select id="kabupaten" name="kabupaten" class="w-full px-4 py-2 border shadow-sm rounded-lg focus:outline-none focus:border-green-600">
                                        <option value="">Pilih Kabupaten/Kota</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Kecamatan</label>
                                    <select id="kecamatan" name="kecamatan" class="w-full px-4 py-2 border shadow-sm rounded-lg focus:outline-none focus:border-green-600">
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Desa/Kelurahan</label>
                                    <select id="desa" name="desa" class="w-full px-4 py-2 border shadow-sm rounded-lg focus:outline-none focus:border-green-600">
                                        <option value="">Pilih Desa/Kelurahan</option>
                                    </select>
                                </div>


                                <div class="mt-4">
                                    <label class="block font-semibold mb-1">Alamat Lengkap Calon Peserta Didik</label>
                                    <textarea name="alamat_lengkap" id="alamat_lengkap" required class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Lokasi Rumah Siswa</label>
                                    <div id="map" style="height: 400px;" class="rounded-lg mb-2"></div>
                                    <input type="hidden" name="latitude" id="latitude">
                                    <input type="hidden" name="longitude" id="longitude">
                                    <small class="text-gray-500">Geser marker ke lokasi rumah siswa.</small>
                                </div>

                                <div class="mt-4">
                                    <label class="block font-semibold mb-1">Upload Kartu Keluarga (KK)</label>
                                    <input name="kk" id="kk" type="file" name="kk" accept=".pdf,.jpg,.jpeg,.png" required class="w-full border rounded px-4 py-2 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-[#388E3C] file:text-white file:font-semibold hover:file:bg-green-700"
                                    />
                                </div>

                                <div class="mt-4">
                                    <label class="block font-semibold mb-1">Upload Akta Kelahiran</label>
                                    <input name="akta_lahir" id="akta_lahir" type="file" name="akta" accept=".pdf,.jpg,.jpeg,.png" required class="w-full border rounded px-4 py-2 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-[#388E3C] file:text-white file:font-semibold hover:file:bg-green-700"
                                    />
                                </div>
                            </div>

                            <!-- Data Medis -->
                            <div class="pb-4 mb-6 border-b-2 border-gray-200">
                                <h3 class="text-lg font-bold text-[#388E3C] mb-4">Data Kesehatan</h3>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Penyakit Bawaan Calon Peserta Didik</label>
                                    <select required class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600">
                                            <option value="">Pilih</option>
                                            <option>Ada</option>
                                            <option>Tidak Ada</option>
                                        </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Jika Ada, Tolong Sebutkan</label>
                                    <input name="penyakit_bawaan" id="penyakit_bawaan" type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Sebutkan penyakit bawaan jika ada">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Alergi Calon Peserta Didik (makanan, obat, dll)</label>
                                    <select required class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600">
                                            <option value="">Pilih</option>
                                            <option>Ada</option>
                                            <option>Tidak Ada</option>
                                        </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Jika Ada, Tolong Sebutkan</label>
                                    <input name="alergi" id="alergi" type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Sebutkan alergi jika ada">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Saat Ini Apakah Calon Peserta Didik sedang dalam Pengawasan Medis/Mengonsumsi Obat Secara Rutin?</label>
                                    <select required class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600">
                                            <option value="">Pilih</option>
                                            <option>Ya</option>
                                            <option>Tidak</option>
                                        </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Jika Ada, Tolong Sebutkan</label>
                                    <input name="pengawasan_medis" id="pengawasan_medis" type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Sebutkan pengawasan medis/obat rutin jika ada">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Apakah Calon Peserta Didik Pernah Mengalami Cedera Serius Akibat Kecelakaan?</label>
                                    <select required class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600">
                                            <option value="">Pilih</option>
                                            <option>Ya</option>
                                            <option>Tidak</option>
                                        </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Jika Ada, Tolong Sebutkan</label>
                                    <input name="cedera_serius" id="cedera_serius" type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Sebutkan cedera/kecelakaan jika ada">
                                </div>
                            </div>

                            <!-- Data Orang Tua -->
                            <div>
                                <h3 class="text-lg font-bold text-[#388E3C] mb-4">Data Orang Tua</h3>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Nama Lengkap Ibu (isi dengan huruf cetak)</label>
                                    <input name="nama_ibu" id="nama_ibu" required type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Masukkan nama lengkap ibu">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Nomor Telepon Aktif Ibu</label>
                                    <input name="no_hp_ibu" id="no_hp_ibu" required type="tel" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Contoh: 08123456789">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Pekerjaan Ibu</label>
                                    <input name="pekerjaan_ibu" id="pekerjaan_ibu" required type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Masukkan pekerjaan ibu">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Nama Lengkap Ayah (isi dengan huruf cetak)</label>
                                    <input name="nama_ayah" id="nama_ayah" required type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Masukkan nama lengkap ayah">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Nomor Telepon Aktif Ayah</label>
                                    <input name="no_hp_ayah" id="no_hp_ayah" required type="tel" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Contoh: 08123456789">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Pekerjaan Ayah</label>
                                    <input name="pekerjaan_ayah" id="pekerjaan_ayah" required type="text" class="w-full px-4 py-2 border shadow-sm rounded-lg  focus:outline-none focus:border-green-600" placeholder="Masukkan pekerjaan ayah">
                                </div>

                                <div class="mb-4">
                                    <label class="block font-semibold mb-1">Upload KTP Orang Tua</label>
                                    <input name="ktp_ortu" id="ktp_ortu" type="file" name="ktp_ortu" accept=".pdf,.jpg,.jpeg,.png" required class="w-full border rounded px-4 py-2 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-[#388E3C] file:text-white file:font-semibold hover:file:bg-green-700"
                                    />
                                </div>
                            </div>
                        </form>

                        <!-- Tombol Submit -->
                        <div class="flex justify-end p-6 border-t border-gray-200">
                            <button id="btnSubmit" type="submit" class="bg-[#388E3C] hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full transition-colors">
                                Simpan & Kirim
                            </button>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var map = L.map('map').setView([-6.403, 106.999], 13); // Default: Cileungsi
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

            var marker = L.marker([-6.403, 106.999], {draggable: true}).addTo(map);

            function updateInput(latlng) {
                document.getElementById('latitude').value = latlng.lat;
                document.getElementById('longitude').value = latlng.lng;
            }

            updateInput(marker.getLatLng());

            marker.on('dragend', function(e) {
                updateInput(marker.getLatLng());
            });

            // Search lokasi
            L.Control.geocoder({
                defaultMarkGeocode: false
            }).on('markgeocode', function(e) {
                var center = e.geocode.center;
                map.setView(center, 16);
                marker.setLatLng(center);
                updateInput(center);
            }).addTo(map);
        });


        function validateForm() {
            const form = document.getElementById('pendaftaranForm');
            const requiredInputs = form.querySelectorAll('[required]');
            let isValid = true;

            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add('border-red-500');
                    isValid = false;
                } else {
                    input.classList.remove('border-red-500');
                }
            });

            return isValid;
        }

        function submitForm() {
            if (!validateForm()) {
                alert('Mohon lengkapi semua data yang wajib diisi!');
                return;
            }

            alert('Formulir berhasil disimpan dan dikirim!');
            localStorage.setItem('formulirSelesai', 'true');


            document.getElementById('pendaftaranForm').reset();
        }


        document.querySelectorAll('input, select, textarea').forEach(element => {
            element.addEventListener('focus', () => {
                element.classList.add('ring-2', 'ring-green-600', 'border-green-600');
            });

            element.addEventListener('blur', () => {
                element.classList.remove('ring-2', 'ring-green-600', 'border-green-600');
            });
        });


        // Isi provinsi

            async function getWilayah(url) {
                const response = await fetch(url);
                return await response.json();
            }

            document.addEventListener("DOMContentLoaded", () => {
                const provinsiSelect = document.getElementById("provinsi");
                const kabupatenSelect = document.getElementById("kabupaten");
                const kecamatanSelect = document.getElementById("kecamatan");
                const desaSelect = document.getElementById("desa");

                // Load provinsi
                getWilayah("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json").then(data => {
                    data.forEach(prov => {
                        provinsiSelect.innerHTML += `<option value="${prov.id}">${prov.name}</option>`;
                    });
                });

                // Load kabupaten/kota
                provinsiSelect.addEventListener("change", () => {
                    kabupatenSelect.innerHTML = `<option value="">Memuat...</option>`;
                    getWilayah(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsiSelect.value}.json`).then(data => {
                        kabupatenSelect.innerHTML = `<option value="">Pilih Kabupaten/Kota</option>`;
                        data.forEach(kab => {
                            kabupatenSelect.innerHTML += `<option value="${kab.id}">${kab.name}</option>`;
                        });
                    });
                });

                // Load kecamatan
                kabupatenSelect.addEventListener("change", () => {
                    kecamatanSelect.innerHTML = `<option value="">Memuat...</option>`;
                    getWilayah(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabupatenSelect.value}.json`).then(data => {
                        kecamatanSelect.innerHTML = `<option value="">Pilih Kecamatan</option>`;
                        data.forEach(kec => {
                            kecamatanSelect.innerHTML += `<option value="${kec.id}">${kec.name}</option>`;
                        });
                    });
                });

                // Load desa
                kecamatanSelect.addEventListener("change", () => {
                    desaSelect.innerHTML = `<option value="">Memuat...</option>`;
                    getWilayah(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecamatanSelect.value}.json`).then(data => {
                        desaSelect.innerHTML = `<option value="">Pilih Desa/Kelurahan</option>`;
                        data.forEach(des => {
                            desaSelect.innerHTML += `<option value="${des.id}">${des.name}</option>`;
                        });
                    });
                });
            });
        </script>



</body>

</html>
