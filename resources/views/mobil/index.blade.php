<div class="space-y-6">

<section class="bg-white rounded-3xl shadow-sm p-6">

    <h2 class="text-xl font-extrabold text-[#123C76] mb-5">
        Cari mobil sesuai kebutuhan Anda
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-6 gap-4 mb-5">
        <div class="md:col-span-2 border rounded-xl px-4 py-3 flex items-center gap-3">
            <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
            <input type="text" placeholder="Cari mobil, contoh: Avanza, Brio, Fortuner" class="w-full outline-none text-sm">
        </div>

        <select class="border rounded-xl px-4 py-3">
            <option>Kategori Semua</option>
        </select>

        <select class="border rounded-xl px-4 py-3">
            <option>Transmisi Semua</option>
        </select>

        <select class="border rounded-xl px-4 py-3">
            <option>Kapasitas Semua</option>
        </select>

        <button class="border rounded-xl px-4 py-3 text-[#12B8B4] font-bold">
            Filter <i class="fa-solid fa-sliders ml-2"></i>
        </button>
    </div>

    <div class="flex flex-wrap items-center justify-between border-t pt-5">
        <div class="flex flex-wrap gap-3">
            <button class="bg-[#12B8B4] text-white px-7 py-3 rounded-xl font-bold">Semua</button>
            <button class="border px-7 py-3 rounded-xl">City Car</button>
            <button class="border px-7 py-3 rounded-xl">MPV</button>
            <button class="border px-7 py-3 rounded-xl">SUV</button>
            <button class="border px-7 py-3 rounded-xl">Premium</button>
            <button class="border px-7 py-3 rounded-xl">Van</button>
            <button class="border px-7 py-3 rounded-xl">Double Cabin</button>
        </div>

        <div class="flex items-center gap-3 mt-4 md:mt-0">
            <span class="text-gray-500">Urutkan</span>
            <button class="border px-5 py-3 rounded-xl">
                Terbaru <i class="fa-solid fa-chevron-down ml-2"></i>
            </button>
        </div>
    </div>

    <p class="mt-5 font-semibold text-[#123C76]">15 mobil tersedia</p>

    @php
        $mobils = [
            ['Toyota Avanza','MPV','7 Kursi','Manual','Bensin','Rp 350.000','https://blog.getandride.com/wp-content/uploads/elementor/thumbs/toyota-all-new-avanza-1-qdxpo7qo5w303a1xte52bavvjloyza2xjde0qo1nt0.jpg'],
            ['Honda Brio','City Car','5 Kursi','Manual','Bensin','Rp 300.000','https://foto.kontan.co.id/UJQGr9wuXM5XIWaJW5rtV98AqGI=/smart/2021/08/12/641707538p.jpg'],
            ['Toyota Innova','MPV','7 Kursi','Manual','Bensin','Rp 550.000','https://imgcdn.oto.com/large/gallery/color/38/1240/toyota-kijang-innova-color-974065.jpg'],
            ['Mitsubishi Xpander','MPV','7 Kursi','Manual','Bensin','Rp 500.000','https://hargamitsubishimedan.id/assets/img/all-new-xpander-cross/car/new-xpander-cross-white.png'],
            ['Toyota Fortuner','SUV','7 Kursi','Automatic','Diesel','Rp 1.200.000','https://aykafrica.com/wp-content/uploads/2022/08/fortuner-jfstl-si2-070-22.png'],
            ['Honda HR-V','SUV','5 Kursi','Automatic','Bensin','Rp 700.000','https://asset.honda-indonesia.com/variants/images/0IB498ADYlsJPdP3eVb166LvEt3mLKkWgfbgiYuR.png'],
            ['Toyota Alphard','Premium','7 Kursi','Automatic','Bensin','Rp 2.000.000','https://imgcdnblog.carbay.com/wp-content/uploads/2023/06/21145709/All-New-Toyota-Alphard-Vellfire-4.jpg'],
            ['Isuzu D-Max','Double Cabin','5 Kursi','Manual','Diesel','Rp 800.000','https://isuzumanado.com/wp-content/uploads/2024/04/dmax-dc-mt-white-ISUZU-MAKASSAR.png'],
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 mt-6">
        @foreach($mobils as $mobil)
        <div class="bg-white border rounded-2xl shadow-sm p-5 relative">

            <button class="absolute right-5 top-5 text-[#123C76]">
                <i class="fa-regular fa-heart text-xl"></i>
            </button>

            <img src="{{ $mobil[6] }}" class="w-full h-40 object-contain mb-4">

            <div class="flex items-center gap-2">
                <h3 class="text-xl font-extrabold text-[#123C76]">{{ $mobil[0] }}</h3>
                <span class="bg-[#D8FAF8] text-[#0FA39F] text-xs px-3 py-1 rounded-full">
                    {{ $mobil[1] }}
                </span>
            </div>

            <div class="flex flex-wrap gap-4 text-sm text-gray-500 mt-4">
                <span><i class="fa-solid fa-users mr-1"></i>{{ $mobil[2] }}</span>
                <span><i class="fa-solid fa-sliders mr-1"></i>{{ $mobil[3] }}</span>
                <span><i class="fa-solid fa-gas-pump mr-1"></i>{{ $mobil[4] }}</span>
            </div>

            <p class="text-gray-500 text-sm mt-5">Mulai dari</p>
            <p class="text-[#12B8B4] text-2xl font-extrabold">
                {{ $mobil[5] }} <span class="text-sm text-[#123C76] font-semibold">/ hari</span>
            </p>

            <a href="/?menu=detail-mobil"
            class="mt-5 block text-center bg-[#12B8B4] text-white py-3 rounded-xl font-bold">
            Lihat Detail
            </a>

        </div>
        @endforeach
    </div>

</section>

<p class="text-center text-sm text-gray-500">
    © 2025 GoRent. All rights reserved.
</p>

</div>