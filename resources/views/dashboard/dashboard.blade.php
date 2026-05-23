@include('sections.sidebar')

<div class="md:ml-[260px] min-h-screen bg-[#F8FCFD]">

@include('sections.topbar')

<main class="p-4 md:p-8 space-y-6">

    <!-- HERO / CARD ATAS -->
    <section class="bg-white rounded-3xl shadow-md pl-8 pt-8 pb-8 pr-0 md:pl-10 md:pt-10 md:pb-10 md:pr-0 overflow-hidden relative">

        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-0">

            <!-- Teks -->
            <div class="z-10 pr-28">

                <p class="text-[#12B8B4] font-extrabold text-lg mb-4">
                    Selamat datang di GoRent! 👋
                </p>

                <h2 class="text-3xl md:text-4xl font-extrabold text-[#123C76] leading-tight mb-5">
                    Sewa mobil jadi lebih mudah <br>
                    bersama <span class="text-[#12B8B4]">GoRent.</span>
                </h2>

                <p class="text-gray-500 text-base md:text-lg leading-relaxed max-w-md">
                    Temukan mobil terbaik untuk setiap perjalananmu dengan mudah, aman, dan terpercaya.
                </p>

            </div>

            <!-- Gambar Mobil -->
            <div class="relative h-[300px] flex items-center justify-end -ml-20">

                <img
                src="https://www.sunstarmotor.id/wp-content/uploads/elementor/thumbs/PAJERO-DAKAR-ULT-4X4-A_T-Quartz-White-Pearl-r87kmho43e8at0smyiycd2ag9kjsao99so6py5x4tc.jpg"
                alt="Mobil GoRent"
                class="relative z-10 w-[650px] object-contain">

            </div>

        </div>

        <!-- Background kanan putih -->
        <div class="absolute right-0 top-0 w-1/2 h-full bg-white pointer-events-none -z-0"></div>

    </section>


    <!-- STATISTIK -->
    <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

        <div class="bg-white rounded-3xl shadow-md p-6 flex items-center gap-5">
            <div class="w-20 h-20 rounded-2xl bg-[#D8FAF8] flex items-center justify-center text-[#12B8B4] text-4xl">
                <i class="fa-solid fa-car"></i>
            </div>

            <div>
                <p class="text-gray-500">Mobil Tersedia</p>
                <h2 class="text-4xl font-extrabold text-[#123C76]">15</h2>
                <p class="text-gray-500">Unit</p>
            </div>
        </div>


        <div class="bg-white rounded-3xl shadow-md p-6 flex items-center gap-5">
            <div class="w-20 h-20 rounded-2xl bg-[#FFF4DE] flex items-center justify-center text-[#F59E0B] text-4xl">
                <i class="fa-regular fa-calendar-check"></i>
            </div>

            <div>
                <p class="text-gray-500">Pesanan Aktif</p>
                <h2 class="text-4xl font-extrabold text-[#123C76]">1</h2>
                <p class="text-gray-500">Pesanan</p>
            </div>
        </div>


        <div class="bg-white rounded-3xl shadow-md p-6 flex items-center gap-5">
            <div class="w-20 h-20 rounded-2xl bg-[#F1E7FF] flex items-center justify-center text-[#8B5CF6] text-4xl">
                <i class="fa-regular fa-star"></i>
            </div>

            <div>
                <p class="text-gray-500">Ulasan Saya</p>
                <h2 class="text-4xl font-extrabold text-[#123C76]">1</h2>
                <p class="text-gray-500">Rata-rata</p>
            </div>
        </div>


        <div class="bg-white rounded-3xl shadow-md p-6 flex items-center gap-5">
            <div class="w-20 h-20 rounded-2xl bg-[#EAF4FF] flex items-center justify-center text-[#3B82F6] text-4xl">
                <i class="fa-regular fa-message"></i>
            </div>

            <div>
                <p class="text-gray-500">Pertanyaan Saya</p>
                <h2 class="text-4xl font-extrabold text-[#123C76]">1</h2>
                <p class="text-gray-500">Pesan</p>
            </div>
        </div>

    </section>


    <!-- PESANAN TERBARU + INFORMASI -->
    <section class="grid grid-cols-1 xl:grid-cols-[1.2fr_1fr] gap-6">

        <!-- Pesanan Terbaru -->
        <div class="bg-white rounded-3xl shadow-md p-8">

            <div class="flex justify-between items-center mb-6">

                <h2 class="text-2xl font-extrabold text-[#123C76]">
                    Pesanan Terbaru
                </h2>

                <a href="/?menu=pesanan" class="text-[#12B8B4] font-bold">
                    Lihat Semua
                </a>

            </div>


            @php
                $pesanans = [
                    [
                        'nama' => 'Toyota Avanza',
                        'status' => 'Aktif',
                        'tanggal' => '12 Mei 2025 - 14 Mei 2025',
                        'lokasi' => 'Mall Panakkukang, Makassar',
                        'harga' => 'Rp 700.000',
                        'gambar' => 'https://blog.getandride.com/wp-content/uploads/elementor/thumbs/toyota-all-new-avanza-1-qdxpo7qo5w303a1xte52bavvjloyza2xjde0qo1nt0.jpg',
                        'warna' => 'bg-[#D8FAF8] text-[#12B8B4]'
                    ],
                    [
                        'nama' => 'Honda Brio',
                        'status' => 'Menunggu',
                        'tanggal' => '5 Mei 2025 - 6 Mei 2025',
                        'lokasi' => 'Bandara Sultan Hasanuddin',
                        'harga' => 'Rp 300.000',
                        'gambar' => 'https://foto.kontan.co.id/UJQGr9wuXM5XIWaJW5rtV98AqGI=/smart/2021/08/12/641707538p.jpg',
                        'warna' => 'bg-[#FFF4DE] text-[#F59E0B]'
                    ],
                    [
                        'nama' => 'Mitsubishi Xpander',
                        'status' => 'Selesai',
                        'tanggal' => '1 Mei 2025 - 2 Mei 2025',
                        'lokasi' => 'Mall Panakkukang, Makassar',
                        'harga' => 'Rp 450.000',
                        'gambar' => 'https://hargamitsubishimedan.id/assets/img/all-new-xpander-cross/car/new-xpander-cross-white.png',
                        'warna' => 'bg-gray-100 text-[#123C76]'
                    ],
                ];
            @endphp


            <div class="divide-y">

                @foreach($pesanans as $pesanan)

                <div class="py-5 flex items-center justify-between gap-5">

                    <div class="flex items-center gap-5">

                        <img
                        src="{{ $pesanan['gambar'] }}"
                        class="w-28 h-20 object-contain rounded-xl">

                        <div>

                            <div class="flex items-center gap-3">

                                <h3 class="text-xl font-extrabold text-[#123C76]">
                                    {{ $pesanan['nama'] }}
                                </h3>

                                <span class="{{ $pesanan['warna'] }} px-3 py-1 rounded-full text-xs font-bold">
                                    {{ $pesanan['status'] }}
                                </span>

                            </div>

                            <p class="text-gray-500 mt-2">
                                <i class="fa-regular fa-calendar mr-2"></i>
                                {{ $pesanan['tanggal'] }}
                            </p>

                            <p class="text-gray-500">
                                <i class="fa-solid fa-location-dot mr-2"></i>
                                {{ $pesanan['lokasi'] }}
                            </p>

                        </div>

                    </div>


                    <div class="text-right shrink-0">

                        <p class="text-[#12B8B4] text-xl font-extrabold">
                            {{ $pesanan['harga'] }}
                        </p>

                        <a
                        href="/?menu=pesanan"
                        class="inline-block mt-3 border px-5 py-2 rounded-xl font-bold text-[#123C76]">
                            Lihat Detail
                        </a>

                    </div>

                </div>

                @endforeach

            </div>

        </div>


        <!-- Informasi GoRent -->
        <div class="bg-white rounded-3xl shadow-md p-8 relative overflow-hidden">

            <h2 class="text-2xl font-extrabold text-[#123C76] mb-8">
                Informasi GoRent
            </h2>

            <div class="space-y-8 relative z-10">

                <div class="flex gap-5">

                    <div class="w-16 h-16 rounded-2xl bg-[#D8FAF8] flex items-center justify-center text-[#12B8B4] text-3xl">
                        <i class="fa-regular fa-eye"></i>
                    </div>

                    <div>
                        <h3 class="text-xl font-extrabold text-[#123C76]">
                            Visi
                        </h3>

                        <p class="text-gray-500 mt-2 leading-7">
                            Menjadi platform rental mobil terpercaya dan terdepan di Indonesia.
                        </p>
                    </div>

                </div>


                <hr>


                <div class="flex gap-5">

                    <div class="w-16 h-16 rounded-2xl bg-[#D8FAF8] flex items-center justify-center text-[#12B8B4] text-3xl">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>

                    <div>
                        <h3 class="text-xl font-extrabold text-[#123C76]">
                            Misi
                        </h3>

                        <p class="text-gray-500 mt-2 leading-7">
                            Memberikan kemudahan dalam menyewa mobil dengan pelayanan terbaik,
                            harga kompetitif, dan pengalaman yang menyenangkan.
                        </p>
                    </div>

                </div>

            </div>

            <div class="absolute bottom-0 left-0 right-0 h-24 bg-[#D8FAF8] opacity-60"></div>

        </div>

    </section>


    <p class="text-center text-sm text-gray-500">
        © 2025 GoRent. All rights reserved.
    </p>

</main>

</div>