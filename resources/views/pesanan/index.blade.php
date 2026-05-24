<div class="space-y-6">

<!-- RINGKASAN -->
<section class="bg-white rounded-[28px] shadow-sm p-8">

<h2 class="text-[40px] font-extrabold text-[#123C76] mb-8">
Ringkasan Pesanan
</h2>

<div class="grid grid-cols-1 md:grid-cols-4 gap-5">




<!-- Total -->
<div class="border rounded-[24px] p-7 flex items-center gap-5">

<div
class="w-[82px]
h-[82px]
rounded-[24px]
bg-[#EAF4FF]
flex
items-center
justify-center">

<i class="fa-regular fa-calendar text-[#2684FF] text-[36px]"></i>

</div>

<div>

<p class="text-[#667085] text-lg">
Total Pesanan
</p>

<h3 class="text-[56px] leading-none font-black text-[#123C76]">
0
</h3>

<p class="text-[#667085]">
Semua Pesanan
</p>

</div>

</div>




<!-- Menunggu -->
<div class="border rounded-[24px] p-7 flex items-center gap-5">

<div
class="w-[82px]
h-[82px]
rounded-[24px]
bg-[#FFF7E4]
flex
items-center
justify-center">

<i class="fa-regular fa-clock text-[#F59E0B] text-[36px]"></i>

</div>

<div>

<p class="text-[#667085]">
Menunggu
</p>

<h3 class="text-[56px] font-black text-[#123C76]">
0
</h3>

<p class="text-[#667085]">
Pesanan
</p>

</div>

</div>





<!-- selesai -->
<div class="border rounded-[24px] p-7 flex items-center gap-5">

<div
class="w-[82px]
h-[82px]
rounded-[24px]
bg-[#EDFFF4]
flex
items-center
justify-center">

<i class="fa-solid fa-check text-[#16A34A] text-[36px]"></i>

</div>

<div>

<p class="text-[#667085]">
Selesai
</p>

<h3 class="text-[56px] font-black text-[#123C76]">
0
</h3>

<p class="text-[#667085]">
Pesanan
</p>

</div>

</div>





<!-- batal -->
<div class="border rounded-[24px] p-7 flex items-center gap-5">

<div
class="w-[82px]
h-[82px]
rounded-[24px]
bg-[#FFF0F0]
flex
items-center
justify-center">

<i class="fa-solid fa-xmark text-[#EF4444] text-[40px]"></i>

</div>

<div>

<p class="text-[#667085]">
Dibatalkan
</p>

<h3 class="text-[56px] font-black text-[#123C76]">
0
</h3>

<p class="text-[#667085]">
Pesanan
</p>

</div>

</div>


</div>

</section>






<!-- LIST -->
<section class="bg-white rounded-[28px] shadow-sm p-8">

<div class="flex justify-between items-center mb-8">

<div class="flex gap-10">

<a href="?menu=pesanan&status=semua"
class="{{ request('status','semua')=='semua'
? 'text-[#12B8B4] font-bold border-b-[4px] border-[#12B8B4]'
: 'text-[#344054]' }}
pb-4">

Semua

</a>


<a href="?menu=pesanan&status=menunggu"
class="{{ request('status')=='menunggu'
? 'text-[#12B8B4] font-bold border-b-[4px] border-[#12B8B4]'
: 'text-[#344054]' }}
pb-4">

Menunggu

</a>


<a href="?menu=pesanan&status=berjalan"
class="{{ request('status')=='berjalan'
? 'text-[#12B8B4] font-bold border-b-[4px] border-[#12B8B4]'
: 'text-[#344054]' }}
pb-4">

Berjalan

</a>


<a href="?menu=pesanan&status=selesai"
class="{{ request('status')=='selesai'
? 'text-[#12B8B4] font-bold border-b-[4px] border-[#12B8B4]'
: 'text-[#344054]' }}
pb-4">

Selesai

</a>


<a href="?menu=pesanan&status=dibatalkan"
class="{{ request('status')=='dibatalkan'
? 'text-[#12B8B4] font-bold border-b-[4px] border-[#12B8B4]'
: 'text-[#344054]' }}
pb-4">

Dibatalkan

</a>

</div>

</div>



<div class="flex gap-3">

<button
class="px-6
h-[54px]
border
rounded-xl
font-semibold">

Terbaru

<i class="fa-solid fa-chevron-down ml-2"></i>

</button>


<button
class="w-[54px]
h-[54px]
border
rounded-xl">

<i class="fa-solid fa-sliders"></i>

</button>

</div>

</div>



<hr>





<!-- RIWAYAT PESANAN -->
@php
$riwayatPesanan = [
    [
        'mobil' => 'Toyota Avanza',
        'status' => 'Menunggu',
        'tanggal' => '17 Mei 2025 - 18 Mei 2025',
        'lokasi' => 'Mall Panakkukang, Makassar',
        'harga' => 'Rp 350.000',
        'gambar' => 'https://blog.getandride.com/wp-content/uploads/elementor/thumbs/toyota-all-new-avanza-1-qdxpo7qo5w303a1xte52bavvjloyza2xjde0qo1nt0.jpg',
        'warna' => 'bg-[#FFF4DE] text-[#F59E0B]'
    ],
    [
        'mobil' => 'Honda Brio',
        'status' => 'Berjalan',
        'tanggal' => '15 Mei 2025 - 16 Mei 2025',
        'lokasi' => 'Bandara Sultan Hasanuddin',
        'harga' => 'Rp 300.000',
        'gambar' => 'https://foto.kontan.co.id/UJQGr9wuXM5XIWaJW5rtV98AqGI=/smart/2021/08/12/641707538p.jpg',
        'warna' => 'bg-[#EAF4FF] text-[#3B82F6]'
    ],
    [
        'mobil' => 'Mitsubishi Xpander',
        'status' => 'Selesai',
        'tanggal' => '1 Mei 2025 - 2 Mei 2025',
        'lokasi' => 'Mall Panakkukang, Makassar',
        'harga' => 'Rp 450.000',
        'gambar' => 'https://hargamitsubishimedan.id/assets/img/all-new-xpander-cross/car/new-xpander-cross-white.png',
        'warna' => 'bg-[#D8FAF8] text-[#12B8B4]'
    ],
    [
        'mobil' => 'Toyota Fortuner',
        'status' => 'Dibatalkan',
        'tanggal' => '20 April 2025 - 21 April 2025',
        'lokasi' => 'Mall Panakkukang, Makassar',
        'harga' => 'Rp 1.200.000',
        'gambar' => 'https://aykafrica.com/wp-content/uploads/2022/08/fortuner-jfstl-si2-070-22.png',
        'warna' => 'bg-[#FFECEC] text-[#EF4444]'
    ],
];
@endphp


@php

$status = request('status','semua');

if($status != 'semua'){

$riwayatPesanan =
collect($riwayatPesanan)

->filter(function($item) use ($status){

return strtolower($item['status']) == strtolower($status);

})

->values()

->all();

}

@endphp


<div class="divide-y">

@foreach($riwayatPesanan as $pesanan)

<div class="py-6 flex items-center justify-between gap-5">

    <div class="flex items-center gap-5">

        <img
        src="{{ $pesanan['gambar'] }}"
        class="w-32 h-20 object-contain rounded-xl">

        <div>

            <div class="flex items-center gap-3">

                <h3 class="text-xl font-extrabold text-[#123C76]">
                    {{ $pesanan['mobil'] }}
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

        @php
        $link =
        $pesanan['status']=='Menunggu'
        ? '/?menu=detail-pesanan'
        : (
        $pesanan['status']=='Berjalan'
        ? '/?menu=detail-pesanan-berjalan'
        : (
        $pesanan['status']=='Selesai'
        ? '/?menu=detail-pesanan-selesai'
        : (
        $pesanan['status']=='Dibatalkan'
        ? '/?menu=detail-pesanan-dibatalkan'
        : '#'
        )
        )
        );
        @endphp


        <a
        href="{{ $link }}"
        class="mt-3 border px-5 py-2 rounded-xl font-bold text-[#123C76] inline-block">

        Lihat Detail

        </a>
    </div>

</div>

@endforeach

</div>

</section>

<p class="text-center text-sm text-gray-500">
    © 2026 GoRent. All rights reserved.
</p>

</div>