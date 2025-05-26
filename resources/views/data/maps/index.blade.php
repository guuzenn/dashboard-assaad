<x-layout>
   <!-- ===== Header Start ===== -->
   <header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
      <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
         <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
            <!-- Hamburger Toggle BTN -->
            <button class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <span class="relative block h-5.5 w-5.5 cursor-pointer">
            <span class="du-block absolute right-0 h-full w-full">
            <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-300': !sidebarToggle }"></span>
            <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-400': !sidebarToggle }"></span>
            <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-500': !sidebarToggle }"></span>
            </span>
            <span class="du-block absolute right-0 h-full w-full rotate-45">
            <span class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white" :class="{ '!h-0 delay-[0]': !sidebarToggle }"></span>
            <span class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white" :class="{ '!h-0 dealy-200': !sidebarToggle }"></span>
            </span>
            </span>
            </button>
         </div>
         <div class="hidden sm:block">
         </div>
         <div class="flex items-center gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
            <li>
               <!-- Dark Mode Toggler -->
               <label :class="darkMode ? 'bg-primary' : 'bg-stroke'"
                  class="relative m-0 block h-7.5 w-14 rounded-full">
                  <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode"
                     class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0" />
                  <span :class="darkMode && '!right-1 !translate-x-full'"
                     class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear">
                     <span class="dark:hidden">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M7.99992 12.6666C10.5772 12.6666 12.6666 10.5772 12.6666 7.99992C12.6666 5.42259 10.5772 3.33325 7.99992 3.33325C5.42259 3.33325 3.33325 5.42259 3.33325 7.99992C3.33325 10.5772 5.42259 12.6666 7.99992 12.6666Z"
                              fill="#969AA1" />
                           <path
                              d="M8.00008 15.3067C7.63341 15.3067 7.33342 15.0334 7.33342 14.6667V14.6134C7.33342 14.2467 7.63341 13.9467 8.00008 13.9467C8.36675 13.9467 8.66675 14.2467 8.66675 14.6134C8.66675 14.9801 8.36675 15.3067 8.00008 15.3067ZM12.7601 13.4267C12.5867 13.4267 12.4201 13.3601 12.2867 13.2334L12.2001 13.1467C11.9401 12.8867 11.9401 12.4667 12.2001 12.2067C12.4601 11.9467 12.8801 11.9467 13.1401 12.2067L13.2267 12.2934C13.4867 12.5534 13.4867 12.9734 13.2267 13.2334C13.1001 13.3601 12.9334 13.4267 12.7601 13.4267ZM3.24008 13.4267C3.06675 13.4267 2.90008 13.3601 2.76675 13.2334C2.50675 12.9734 2.50675 12.5534 2.76675 12.2934L2.85342 12.2067C3.11342 11.9467 3.53341 11.9467 3.79341 12.2067C4.05341 12.4667 4.05341 12.8867 3.79341 13.1467L3.70675 13.2334C3.58008 13.3601 3.40675 13.4267 3.24008 13.4267ZM14.6667 8.66675H14.6134C14.2467 8.66675 13.9467 8.36675 13.9467 8.00008C13.9467 7.63341 14.2467 7.33342 14.6134 7.33342C14.9801 7.33342 15.3067 7.63341 15.3067 8.00008C15.3067 8.36675 15.0334 8.66675 14.6667 8.66675ZM1.38675 8.66675H1.33341C0.966748 8.66675 0.666748 8.36675 0.666748 8.00008C0.666748 7.63341 0.966748 7.33342 1.33341 7.33342C1.70008 7.33342 2.02675 7.63341 2.02675 8.00008C2.02675 8.36675 1.75341 8.66675 1.38675 8.66675ZM12.6734 3.99341C12.5001 3.99341 12.3334 3.92675 12.2001 3.80008C11.9401 3.54008 11.9401 3.12008 12.2001 2.86008L12.2867 2.77341C12.5467 2.51341 12.9667 2.51341 13.2267 2.77341C13.4867 3.03341 13.4867 3.45341 13.2267 3.71341L13.1401 3.80008C13.0134 3.92675 12.8467 3.99341 12.6734 3.99341ZM3.32675 3.99341C3.15341 3.99341 2.98675 3.92675 2.85342 3.80008L2.76675 3.70675C2.50675 3.44675 2.50675 3.02675 2.76675 2.76675C3.02675 2.50675 3.44675 2.50675 3.70675 2.76675L3.79341 2.85342C4.05341 3.11342 4.05341 3.53341 3.79341 3.79341C3.66675 3.92675 3.49341 3.99341 3.32675 3.99341ZM8.00008 2.02675C7.63341 2.02675 7.33342 1.75341 7.33342 1.38675V1.33341C7.33342 0.966748 7.63341 0.666748 8.00008 0.666748C8.36675 0.666748 8.66675 0.966748 8.66675 1.33341C8.66675 1.70008 8.36675 2.02675 8.00008 2.02675Z"
                              fill="#969AA1" />
                        </svg>
                     </span>
                     <span class="hidden dark:inline-block">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M14.3533 10.62C14.2466 10.44 13.9466 10.16 13.1999 10.2933C12.7866 10.3667 12.3666 10.4 11.9466 10.38C10.3933 10.3133 8.98659 9.6 8.00659 8.5C7.13993 7.53333 6.60659 6.27333 6.59993 4.91333C6.59993 4.15333 6.74659 3.42 7.04659 2.72666C7.33993 2.05333 7.13326 1.7 6.98659 1.55333C6.83326 1.4 6.47326 1.18666 5.76659 1.48C3.03993 2.62666 1.35326 5.36 1.55326 8.28666C1.75326 11.04 3.68659 13.3933 6.24659 14.28C6.85993 14.4933 7.50659 14.62 8.17326 14.6467C8.27993 14.6533 8.38659 14.66 8.49326 14.66C10.7266 14.66 12.8199 13.6067 14.1399 11.8133C14.5866 11.1933 14.4666 10.8 14.3533 10.62Z"
                              fill="#969AA1" />
                        </svg>
                     </span>
                  </span>
               </label>
               <!-- Dark Mode Toggler -->
            </li>
            <!-- User Area -->
            <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
               <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                  <span class="hidden text-right lg:block">
                  <span class="block text-sm font-medium text-black dark:text-white">Admin</span>
                  </span>
                  <svg :class="dropdownOpen && 'rotate-180'" class="hidden fill-current sm:block"
                     width="12" height="8" viewBox="0 0 12 8" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                        fill="" />
                  </svg>
               </a>
               <!-- Dropdown Start -->
               <div x-show="dropdownOpen"
                  class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <button
                     class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                     <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z"
                           fill="" />
                        <path
                           d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z"
                           fill="" />
                     </svg>
                     Log Out
                  </button>
               </div>
               <!-- Dropdown End -->
            </div>
            <!-- User Area -->
         </div>
      </div>
   </header>
   <!-- ===== Header End ===== -->
   <!-- ===== Main Content Start ===== -->
   <main>
      <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
         <!-- Peta -->
         <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1 mt-6">
            <h4 class="text-lg font-bold text-black dark:text-white pb-6 text-center">
                Peta Persebaran Lokasi Tempat Tinggal Siswa
            </h4>
            <div class="flex flex-wrap justify-center items-center gap-4">
                <div class="flex items-center gap-4">
                    <div class="relative w-64">
                        <button id="toggleCileungsi"
                            class="relative inline-flex appearance-none rounded-lg border border-stroke bg-transparent py-2 pl-5 pr-10 text-sm font-medium text-black dark:border-form-strokedark dark:bg-form-input dark:text-white outline-none focus:border-primary w-auto">
                            Tampilkan Area Cileungsi
                        </button>
                    </div>
                    <div class="relative w-64">
                        <button id="togglePembagian"
                            class="relative inline-flex appearance-none rounded-lg border border-stroke bg-transparent py-2 pl-5 pr-10 text-sm font-medium text-black dark:border-form-strokedark dark:bg-form-input dark:text-white outline-none focus:border-primary w-auto">
                            Tampilkan Pembagian Kecamatan Area Cileungsi
                        </button>
                    </div>

                    <div class="relative">
                        <select
                            id="kecamatanFilter"
                            class="relative inline-flex appearance-none rounded-lg border border-stroke bg-transparent py-2 pl-5 pr-10 text-sm font-medium text-black dark:border-form-strokedark dark:bg-form-input dark:text-white outline-none focus:border-primary"
                        >
                            <option value="">Filter Kecamatan (default)</option>
                        </select>
                        <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2">
                            <svg
                                width="14"
                                height="10"
                                viewBox="0 0 10 6"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
                                    fill="#637381"
                                />
                            </svg>
                        </span>
                    </div>

                    <div class="relative">
                        <select
                            id="radiusFilter"
                            class="relative inline-flex appearance-none rounded-lg border border-stroke bg-transparent py-2 pl-5 pr-10 text-sm font-medium text-black dark:border-form-strokedark dark:bg-form-input dark:text-white outline-none focus:border-primary"
                        >
                            <option value="">Filter Radius (default)</option>
                            <option value="1">1 KM</option>
                            <option value="3">3 KM</option>
                            <option value="5">5 KM</option>
                            <option value="1000">&gt; 5 KM</option>
                        </select>
                        <span class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2">
                            <svg
                                width="14"
                                height="10"
                                viewBox="0 0 10 6"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
                                    fill="#637381"
                                />
                            </svg>
                        </span>
                    </div>

                    <div class="relative w-64">
                        <input id="searchSiswa" type="text"
                            placeholder="Cari siswa..."
                            autocomplete="off"
                            class="relative inline-flex appearance-none rounded-lg border border-stroke bg-transparent py-2 pl-5 pr-10 text-sm font-medium text-black dark:border-form-strokedark dark:bg-form-input dark:text-white outline-none focus:border-primary w-full"
                        />
                        <ul id="searchSuggestions"
                            class="absolute left-0 right-0 bottom-full z-[1001] bg-white dark:bg-boxdark border border-stroke dark:border-strokedark rounded-lg mb-1 shadow-lg max-h-60 overflow-y-auto w-full hidden">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="max-w-full overflow-x-auto h-1000px pt-6">
               @section('css')
               <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />


                <style>
                    #map { height: 600px; }
                    .leaflet-routing-container {
                        background: white;
                        padding: 10px;
                        border-radius: 8px;
                        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
                        max-height: 500px;
                        overflow-y: auto;
                    }

                </style>
               @endsection

                <div id="map" clas></div>

                <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
                <script src="https://unpkg.com/leaflet-geometryutil"></script>
                <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.min.js"></script>
                <script>
                    const sekolah = @json($sekolah); // {lat: ..., lng: ...}
                    const siswaData = @json($siswa); // Array berisi siswa

                    const map = L.map('map').setView([sekolah.lat, sekolah.lng], 13);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19, minZoom: 12,
                    }).addTo(map);

                    L.marker([sekolah.lat, sekolah.lng], {
                        icon: L.icon({
                            iconUrl: 'https://cdn-icons-png.flaticon.com/512/61/61168.png',
                            iconSize: [32, 32]
                        })
                    }).addTo(map).bindPopup(sekolah.nama).openPopup();

                    const siswaLayer = L.layerGroup().addTo(map);
                    let routeLayer;

                    // Calculate distance between two lat/lng points
                    function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
                        const R = 6371; // Radius bumi dalam km
                        const dLat = (lat2 - lat1) * Math.PI / 180;
                        const dLon = (lon2 - lon1) * Math.PI / 180;
                        const a =
                            Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                            Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                            Math.sin(dLon / 2) * Math.sin(dLon / 2);
                        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
                        return R * c;
                    }

                    let cileungsiLayer = null;
                    let pembagianLayer = null;
                    let cileungsiVisible = false;
                    let pembagianVisible = false;
                    let filterPolygonActive = false;

                    async function toggleCileungsiPolygon() {
                        if (cileungsiLayer) {
                            if (cileungsiVisible) {
                                map.removeLayer(cileungsiLayer);
                                cileungsiVisible = false;
                                document.getElementById('toggleCileungsi').textContent = 'Tampilkan Area Cileungsi';
                            } else {
                                cileungsiLayer.addTo(map);
                                cileungsiVisible = true;
                                document.getElementById('toggleCileungsi').textContent = 'Sembunyikan Area Cileungsi';
                                map.fitBounds(cileungsiLayer.getBounds());
                            }
                        } else {
                            const response = await fetch('/assets/geojson/cileungsi_only.geojson');
                            const geojson = await response.json();
                            cileungsiLayer = L.geoJSON(geojson, {
                                style: {
                                    color: "#16a34a",
                                    weight: 2,
                                    fillOpacity: 0.3
                                },
                                onEachFeature: function (feature, layer) {
                                // Tampilkan info lebih lengkap di popup
                                    let info = `<b>Area Cileungsi</b>`;
                                    if (feature.properties) {
                                        if (feature.properties.NAMOBJ) {
                                            info += `<br><b>Nama:</b> ${feature.properties.NAMOBJ}`;
                                        }
                                        if (feature.properties.LUASWH) {
                                            info += `<br><b>Luas:</b> ${feature.properties.LUASWH.toFixed(2)} Ha`;
                                        }
                                        if (feature.properties.WADMKK) {
                                            info += `<br><b>Kabupaten:</b> ${feature.properties.WADMKK}`;
                                        }
                                        if (feature.properties.WADMPR) {
                                            info += `<br><b>Provinsi:</b> ${feature.properties.WADMPR}`;
                                        }
                                    }
                                    layer.bindPopup(info);
                                }
                            }).addTo(map);
                            cileungsiVisible = true;
                            document.getElementById('toggleCileungsi').textContent = 'Sembunyikan Area Cileungsi';
                            map.fitBounds(cileungsiLayer.getBounds());
                        }
                        tampilkanSiswa(currentRadius, currentKeyword, filterPolygonActive);
                    }

                    // --- Polygon Pembagian Cileungsi ---
                    async function togglePembagianPolygon() {
                        if (pembagianLayer) {
                            if (pembagianVisible) {
                                map.removeLayer(pembagianLayer);
                                pembagianVisible = false;
                                document.getElementById('togglePembagian').textContent = 'Tampilkan Pembagian Kecamatan Area Cileungsi';
                            } else {
                                pembagianLayer.addTo(map);
                                pembagianVisible = true;
                                document.getElementById('togglePembagian').textContent = 'Sembunyikan Pembagian Kecamatan Area Cileungsi';
                                map.fitBounds(pembagianLayer.getBounds());
                            }
                        } else {
                            const response = await fetch('/assets/geojson/pembagian_cileungsi.geojson');
                            const geojson = await response.json();
                            pembagianLayer = L.geoJSON(geojson, {
                                style: {
                                    color: "#2563eb",
                                    weight: 1,
                                    fillOpacity: 0.15
                                },
                                onEachFeature: function (feature, layer) {
                                    // Tampilkan info kecamatan lebih lengkap
                                    if (feature.properties && feature.properties.NAMOBJ) {
                                        let info = `<b>Kecamatan:</b> ${feature.properties.NAMOBJ}`;
                                        if (feature.properties.LUASWH) {
                                            info += `<br><b>Luas:</b> ${feature.properties.LUASWH.toFixed(2)} Ha`;
                                        }
                                        if (feature.properties.WADMKK) {
                                            info += `<br><b>Kabupaten:</b> ${feature.properties.WADMKK}`;
                                        }
                                        if (feature.properties.WADMPR) {
                                            info += `<br><b>Provinsi:</b> ${feature.properties.WADMPR}`;
                                        }
                                        // Hitung total siswa di kecamatan ini
                                        const totalSiswa = siswaData.filter(s => s.kecamatan === feature.properties.NAMOBJ).length;
                                        info += `<br><b>Total Siswa:</b> ${totalSiswa}`;
                                        layer.bindPopup(info);
                                    }
                                }
                            }).addTo(map);
                            pembagianVisible = true;
                            document.getElementById('togglePembagian').textContent = 'Sembunyikan Pembagian Kecamatan Area Cileungsi';
                            map.fitBounds(pembagianLayer.getBounds());
                        }
                        tampilkanSiswa(currentRadius, currentKeyword, filterPolygonActive);
                    }

                    // --- Filter Marker in Polygon ---
                    function toggleFilterPolygon() {
                        filterPolygonActive = !filterPolygonActive;
                        document.getElementById('toggleFilterPolygon').textContent = filterPolygonActive
                            ? 'Tampilkan Semua Marker'
                            : 'Filter Marker di Dalam Polygon';
                        tampilkanSiswa(currentRadius, currentKeyword, filterPolygonActive);
                    }

                    // --- Check if point in any visible polygon ---
                    function isPointInAnyPolygon(lat, lng) {
                        let inside = false;
                        if (cileungsiVisible && cileungsiLayer) {
                            cileungsiLayer.eachLayer(function(poly) {
                                if (poly instanceof L.Polygon && poly.getBounds().contains([lat, lng])) {
                                    inside = true;
                                }
                            });
                        }
                        if (pembagianVisible && pembagianLayer) {
                            pembagianLayer.eachLayer(function(poly) {
                                if (poly instanceof L.Polygon && poly.getBounds().contains([lat, lng])) {
                                    inside = true;
                                }
                            });
                        }
                        return inside;
                    }

                    let kecamatanPolygons = {}; // { NAMOBJ: polygonLayer }
                    let kecamatanList = [];     // Array of NAMOBJ
                    let currentKecamatan = '';

                    // Ambil daftar kecamatan dari geojson dan isi dropdown
                    async function loadKecamatanOptions() {
                        const response = await fetch('/assets/geojson/pembagian_cileungsi.geojson');
                        const geojson = await response.json();
                        kecamatanList = [];
                        kecamatanPolygons = {};

                        geojson.features.forEach(feature => {
                            if (feature.properties && feature.properties.NAMOBJ) {
                                const nama = feature.properties.NAMOBJ;
                                kecamatanList.push(nama);

                                // Simpan polygon untuk filter point-in-polygon
                                const polygon = L.geoJSON(feature);
                                kecamatanPolygons[nama] = polygon;
                            }
                        });

                        // Isi dropdown
                        const kecamatanFilter = document.getElementById('kecamatanFilter');
                        kecamatanFilter.innerHTML = `<option value="">Filter Kecamatan (default)</option>`;
                        kecamatanList.forEach(nama => {
                            kecamatanFilter.innerHTML += `<option value="${nama}">${nama}</option>`;
                        });
                    }

                    // --- Check if point is in specific kecamatan polygon, ini paling stress ---
                    function isPointInKecamatan(lat, lng, namaKecamatan) {
                        const polygon = kecamatanPolygons[namaKecamatan];
                        if (!polygon) return false;
                        let inside = false;
                        polygon.eachLayer(function(layer) {
                            if (layer instanceof L.Polygon) {
                                // latlngs: multipolygon = array of array, polygon = array
                                const latlngs = layer.getLatLngs();
                                // Jika latlngs[0][0] ada, berarti multipolygon
                                const polygons = Array.isArray(latlngs[0][0]) ? latlngs : [latlngs];
                                polygons.forEach(poly => {
                                    // Untuk polygon dengan lubang, ambil hanya outer ring
                                    const ring = Array.isArray(poly[0]) ? poly[0] : poly;
                                    if (pointInPolygon([lat, lng], ring)) {
                                        inside = true;
                                    }
                                });
                            }
                        });
                        return inside;
                    }

                    // Fungsi point-in-polygon sederhana
                    function pointInPolygon(point, vs) {
                        // point: [lat, lng], vs: array of [lat, lng]
                        var x = point[0], y = point[1];
                        var inside = false;
                        for (var i = 0, j = vs.length - 1; i < vs.length; j = i++) {
                            var xi = vs[i].lat, yi = vs[i].lng;
                            var xj = vs[j].lat, yj = vs[j].lng;
                            var intersect = ((yi > y) !== (yj > y)) &&
                                (x < (xj - xi) * (y - yi) / (yj - yi + 0.0000001) + xi);
                            if (intersect) inside = !inside;
                        }
                        return inside;
                    }

                    // --- Update tampilkanSiswa function, holy stress---
                    function tampilkanSiswa(filterKm = null, keyword = '', filterPolygon = false, filterKecamatan = '') {
                        siswaLayer.clearLayers();

                        siswaData.forEach((siswa) => {
                            if (!siswa.latitude || !siswa.longitude || !siswa.nama_lengkap) return;
                            if (keyword && !siswa.nama_lengkap.toLowerCase().includes(keyword.toLowerCase())) return;

                            // Filter by radius
                            if (filterKm) {
                                const dist = getDistanceFromLatLonInKm(
                                    sekolah.lat, sekolah.lng,
                                    siswa.latitude, siswa.longitude
                                );
                                if (dist > filterKm) return;
                            }

                            // Filter by polygon(s)
                            if (filterPolygon && !isPointInAnyPolygon(siswa.latitude, siswa.longitude)) {
                                return;
                            }

                            // Filter by kecamatan
                            if (filterKecamatan && !isPointInKecamatan(siswa.latitude, siswa.longitude, filterKecamatan)) {
                                return;
                            }

                            const marker = L.marker([siswa.latitude, siswa.longitude]).addTo(siswaLayer);
                            marker.bindPopup(`
                                <b>${siswa.nama_lengkap}</b><br>
                                Kelas: ${siswa.usia}<br>
                                Alamat: ${siswa.alamat}<br>
                                <button onclick="tampilkanRute(${siswa.latitude}, ${siswa.longitude}, '${siswa.nama_lengkap}', '${siswa.usia}', '${siswa.alamat}')">Lihat Rute & Jarak</button>
                            `);
                        });
                    }

                    // Event listener untuk filter kecamatan
                    document.getElementById('kecamatanFilter').addEventListener('change', function () {
                        currentKecamatan = this.value;
                        tampilkanSiswa(currentRadius, currentKeyword, filterPolygonActive, currentKecamatan);
                    });

                    // Panggil loadKecamatanOptions saat halaman siap
                    loadKecamatanOptions();

                    // --- Event listeners for new buttons ---
                    document.getElementById('toggleCileungsi').addEventListener('click', toggleCileungsiPolygon);
                    document.getElementById('togglePembagian').addEventListener('click', togglePembagianPolygon);
                    // document.getElementById('toggleFilterPolygon').addEventListener('click', toggleFilterPolygon);

                    // Inisialisasi filter
                    let currentRadius = null;
                    let currentKeyword = '';

                    // Event listeners for radius and keyword filters
                    document.getElementById('radiusFilter').addEventListener('change', function (e) {
                        currentRadius = this.value ? parseFloat(this.value) : null;
                        tampilkanSiswa(currentRadius, currentKeyword, filterPolygonActive, currentKecamatan);
                    });
                    document.getElementById('searchSiswa').addEventListener('input', function (e) {
                        currentKeyword = this.value;
                        tampilkanSiswa(currentRadius, currentKeyword, filterPolygonActive, currentKecamatan);
                    });

                    tampilkanSiswa(currentRadius, currentKeyword, filterPolygonActive, currentKecamatan);

                    // Calculate route and distance only when button is clicked
                    async function tampilkanRute(lat, lng, nama, usia, alamat) {
                        if (routeLayer) map.removeControl(routeLayer);

                        routeLayer = L.Routing.control({
                            waypoints: [
                                L.latLng(lat, lng),
                                L.latLng(sekolah.lat, sekolah.lng)
                            ],
                            router: L.Routing.osrmv1({
                                serviceUrl: 'https://router.project-osrm.org/route/v1'
                            }),
                            routeWhileDragging: false,
                            lineOptions: {
                                styles: [{ color: '#e11d48', weight: 5, opacity: 0.8 }]
                            },
                            createMarker: function() { return null; },
                            show: true,
                            collapsible: true,
                            formatter: null,
                            summaryTemplate: '<div style="background: #fff; padding: 10px; border-radius: 8px;">{name} {distance}, {time}</div>'
                        }).on('routesfound', function(e) {
                            const jarak = e.routes[0].summary.totalDistance / 1000;
                            // Show popup with distance info
                            L.popup()
                                .setLatLng([lat, lng])
                                .setContent(`
                                    <b>${nama}</b><br>
                                    Kelas: ${usia}<br>
                                    Alamat: ${alamat}<br>
                                    Jarak rute ke sekolah: ${jarak.toFixed(2)} km
                                `)
                                .openOn(map);
                        }).addTo(map);

                        setTimeout(() => {
                            const panels = document.querySelectorAll('.leaflet-routing-container');
                            panels.forEach(panel => {
                                panel.style.background = '#fff';
                                panel.style.borderRadius = '8px';
                                panel.style.boxShadow = '0 2px 6px rgba(0,0,0,0.1)';
                                panel.style.maxHeight = '300px';
                                panel.style.overflowY = 'auto';

                                // Add close button if not exists
                                if (!panel.querySelector('.close-routing')) {
                                    const closeBtn = document.createElement('button');
                                    closeBtn.innerHTML = '&times;';
                                    closeBtn.className = 'close-routing';
                                    closeBtn.style.cssText = 'position:absolute;top:8px;right:12px;font-size:22px;background:none;border:none;cursor:pointer;color:#333;z-index:9999;';
                                    closeBtn.onclick = function() {
                                        if (routeLayer) map.removeControl(routeLayer);
                                    };
                                    panel.style.position = 'relative';
                                    panel.appendChild(closeBtn);
                                }
                            });
                        }, 100);
                    }

                    // Custom legend control
                    let legendVisible = true;
                    const legend = L.control({ position: 'bottomleft' });

                    legend.onAdd = function (map) {
                        const div = L.DomUtil.create('div', 'leaflet-control leaflet-bar bg-white rounded-lg shadow-lg p-4 text-sm border border-gray-300 flex flex-col gap-2');
                        div.id = 'mapLegendBox';
                        div.innerHTML = `
                            <button id="toggleLegendBtn" type="button"
                                class="mb-2 px-3 py-1 rounded bg-gray-200 hover:bg-gray-300 text-xs font-semibold text-gray-700 self-end">
                                Sembunyikan Legenda
                            </button>
                            <div id="legendContent">
                                <div class="flex items-center gap-2 mb-2">
                                    <img src="https://cdn-icons-png.flaticon.com/512/61/61168.png" alt="Sekolah" style="width: 22px; height: 22px;">
                                    <span>Sekolah</span>
                                </div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span style="display:inline-block;width:18px;height:18px;background:#3388ff;border-radius:50%;"></span>
                                    <span>Rumah Siswa</span>
                                </div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span style="display:inline-block;width:24px;height:4px;background:#e11d48;border-radius:2px;"></span>
                                    <span>Rute ke Sekolah</span>
                                </div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span style="display:inline-block;width:22px;height:14px;background:#16a34a;opacity:0.3;border:2px solid #16a34a;border-radius:2px;"></span>
                                    <span>Area Cileungsi</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span style="display:inline-block;width:22px;height:14px;background:#2563eb;opacity:0.15;border:2px solid #2563eb;border-radius:2px;"></span>
                                    <span>Pembagian Kecamatan Area Cileungsi</span>
                                </div>
                            </div>
                        `;
                        return div;
                    };

                    legend.addTo(map);

                    // Toggle logic inside the legend
                    function setLegendVisibility(show) {
                        const legendBox = document.getElementById('mapLegendBox');
                        const legendContent = document.getElementById('legendContent');
                        const toggleBtn = document.getElementById('toggleLegendBtn');
                        if (!legendBox || !toggleBtn || !legendContent) return;

                        if (show) {
                            legendContent.style.display = '';
                            toggleBtn.textContent = 'Sembunyikan Legenda';
                        } else {
                            legendContent.style.display = 'none';
                            toggleBtn.textContent = 'Tampilkan Legenda';
                        }
                        legendVisible = show;
                    }

                    // Wait until legend is rendered
                    setTimeout(() => {
                        const toggleBtn = document.getElementById('toggleLegendBtn');
                        if (toggleBtn) {
                            toggleBtn.addEventListener('click', function() {
                                setLegendVisibility(!legendVisible);
                            });
                        }
                    }, 300);

                    // --- Autocomplete Search ---
                    const siswaList = siswaData.map(s => s.nama_lengkap);
                    const searchInput = document.getElementById('searchSiswa');
                    const suggestions = document.getElementById('searchSuggestions');

                    searchInput.addEventListener('input', function () {
                        const val = this.value.toLowerCase();
                        // Filter names
                        const filtered = siswaList.filter(nama => nama.toLowerCase().includes(val));
                        // Show suggestions
                        if (val && filtered.length) {
                            suggestions.innerHTML = filtered.map(nama =>
                                `<li class="px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-meta-4" data-nama="${nama}">${nama}</li>`
                            ).join('');
                            suggestions.classList.remove('hidden');
                        } else {
                            suggestions.innerHTML = '';
                            suggestions.classList.add('hidden');
                        }
                        // Filter map markers
                        tampilkanSiswa(currentRadius, val);
                    });

                    // Click suggestion: autofill input, filter, and focus marker
                    suggestions.addEventListener('click', function(e) {
                        if (e.target && e.target.matches('li[data-nama]')) {
                            const namaDipilih = e.target.getAttribute('data-nama');
                            searchInput.value = namaDipilih;
                            suggestions.innerHTML = '';
                            suggestions.classList.add('hidden');
                            tampilkanSiswa(currentRadius, namaDipilih.toLowerCase());

                            // Cari data siswa yang sesuai dan fokus ke marker
                            const siswa = siswaData.find(s => s.nama_lengkap === namaDipilih);
                            if (siswa && siswa.latitude && siswa.longitude) {
                                map.setView([siswa.latitude, siswa.longitude], 16);
                                // Buka popup marker jika ada
                                siswaLayer.eachLayer(function(marker) {
                                    if (
                                        marker.getLatLng().lat === siswa.latitude &&
                                        marker.getLatLng().lng === siswa.longitude
                                    ) {
                                        marker.openPopup();
                                    }
                                });
                            }
                        }
                    });

                    // Hide suggestions on blur (with delay for click)
                    searchInput.addEventListener('blur', function() {
                        setTimeout(() => {
                            suggestions.classList.add('hidden');
                        }, 150);
                    });

                    setLegendVisibility(true);

                </script>
            </div>
         </div>
      </div>
   </main>
</x-layout>
