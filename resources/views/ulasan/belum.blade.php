<div class="space-y-6">

    <!-- Banner -->
    <section class="bg-white rounded-3xl shadow-sm p-8 flex items-center justify-between">
        <div class="flex items-center gap-10">
            <div class="w-[260px] flex justify-center">
                <div class="bg-[#12B8B4] text-white px-10 py-8 rounded-3xl text-2xl shadow-sm">
                    ★ ★ ★ ★ <br>
                    ★
                </div>
            </div>

            <div>
                <h2 class="text-2xl font-extrabold text-[#123C76]">
                    Pendapat Anda sangat berarti! 🙂
                </h2>
                <p class="text-gray-500 mt-3 leading-7">
                    Berikan ulasan dan rating untuk pengalaman rental mobil Anda bersama GoRent.
                    <br>
                    Ulasan Anda membantu kami untuk terus memberikan layanan terbaik.
                </p>
            </div>
        </div>

        <a href="/?menu=buat-ulasan"
           class="bg-[#12B8B4] text-white px-8 py-4 rounded-xl font-bold">
            <i class="fa-solid fa-pen mr-2"></i>
            Buat Ulasan
        </a>
    </section>


    <!-- List Belum Diulas -->
    <section class="bg-white rounded-3xl shadow-sm p-8">

        <div class="flex gap-10 border-b font-bold">
            <a href="/?menu=ulasan" class="pb-5 text-[#123C76]">
                Semua Ulasan
            </a>

            <a href="/?menu=ulasan-belum"
               class="pb-5 text-[#12B8B4] border-b-4 border-[#12B8B4]">
                Belum Diulas
            </a>
        </div>


        @php
            $belumDiulas = [
                [
                    'mobil' => 'Toyota Avanza',
                    'tanggal' => '20 Mei 2025 - 21 Mei 2025',
                    'lokasi' => 'Mall Panakkukang, Makassar',
                    'selesai' => 'Selesai pada 21 Mei 2025',
                    'gambar' => 'https://blog.getandride.com/wp-content/uploads/elementor/thumbs/toyota-all-new-avanza-1-qdxpo7qo5w303a1xte52bavvjloyza2xjde0qo1nt0.jpg'
                ],
                [
                    'mobil' => 'Mitsubishi Xpander',
                    'tanggal' => '18 Mei 2025 - 19 Mei 2025',
                    'lokasi' => 'Bandara Sultan Hasanuddin',
                    'selesai' => 'Selesai pada 19 Mei 2025',
                    'gambar' => 'https://hargamitsubishimedan.id/assets/img/all-new-xpander-cross/car/new-xpander-cross-white.png'
                ],
            ];
        @endphp


        <div class="divide-y">

            @foreach($belumDiulas as $item)

            <div class="py-8 grid grid-cols-1 xl:grid-cols-[1.1fr_1fr_0.8fr] gap-6 items-center">

                <div class="flex items-center gap-6">
                    <img src="{{ $item['gambar'] }}"
                         class="w-36 h-24 object-contain rounded-xl">

                    <div>
                        <h3 class="text-xl font-extrabold text-[#123C76]">
                            {{ $item['mobil'] }}
                        </h3>

                        <p class="text-gray-500 mt-2">
                            <i class="fa-regular fa-calendar mr-2"></i>
                            {{ $item['tanggal'] }}
                        </p>

                        <p class="text-gray-500 mt-1">
                            <i class="fa-solid fa-location-dot mr-2"></i>
                            {{ $item['lokasi'] }}
                        </p>
                    </div>
                </div>


                <div class="flex items-center gap-6">
                    <span class="bg-[#FFF4DE] text-[#F59E0B] px-4 py-2 rounded-full font-semibold">
                        Selesai
                    </span>

                    <div>
                        <h4 class="font-extrabold text-[#123C76]">
                            Perjalanan selesai
                        </h4>
                        <p class="text-gray-500 mt-1">
                            Bagikan pengalaman Anda selama menggunakan mobil ini.
                        </p>
                    </div>
                </div>


                <div class="text-right">
                    <p class="text-gray-500 mb-5">
                        <i class="fa-regular fa-calendar mr-2"></i>
                        {{ $item['selesai'] }}
                    </p>

                    <a href="/?menu=buat-ulasan"
                       class="inline-block bg-[#12B8B4] text-white px-10 py-4 rounded-xl font-bold">
                        Buat Ulasan
                    </a>
                </div>

            </div>

            @endforeach

        </div>


        <div class="text-center pt-10">
            <div class="text-5xl mb-3">📦</div>

            <h3 class="text-[#123C76] font-extrabold">
                Tidak ada pesanan lain yang belum diulas
            </h3>

            <p class="text-gray-500 mt-1">
                Semua pesanan yang perlu diulas sudah selesai!
            </p>
        </div>

    </section>

    <p class="text-center text-sm text-gray-500">
    © 2025 GoRent. All rights reserved.
</p>

</div>