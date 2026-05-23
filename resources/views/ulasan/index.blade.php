<div class="space-y-6">

<!-- Banner -->
<section class="bg-white rounded-3xl shadow-sm p-8 flex items-center justify-between">

<div class="flex items-center gap-10">

<div class="w-[260px] flex justify-center">
<div class="w-44 h-32 rounded-full bg-[#D8FAF8] flex items-center justify-center">

<div class="bg-[#12B8B4] text-white px-8 py-5 rounded-2xl text-2xl">
★ ★ ★ ★ ★
</div>

</div>
</div>

<div>

<h2 class="text-2xl font-extrabold text-[#123C76]">
Pendapat Anda sangat berarti! 🙂
</h2>

<p class="text-gray-500 mt-3 max-w-xl leading-7">
Berikan ulasan dan rating untuk pengalaman rental mobil Anda bersama GoRent.
Ulasan Anda membantu kami untuk terus memberikan layanan terbaik.
</p>

</div>

</div>

<a
href="/?menu=buat-ulasan"
class="inline-flex items-center bg-[#12B8B4] text-white px-8 py-4 rounded-xl font-bold">

<i class="fa-solid fa-pen mr-2"></i>
Buat Ulasan

</a>

</section>



<!-- LIST -->
<section class="bg-white rounded-3xl shadow-sm p-8">

<div class="flex gap-10 border-b pb-5 font-bold">

<button
class="text-[#12B8B4] border-b-4 border-[#12B8B4] pb-5 -mb-5">
Semua Ulasan
</button>

<a href="/?menu=ulasan-belum" class="text-[#344054]">
Belum Diulas
</a>

</div>



@php

$ulasans = [

[
'mobil'=>'Toyota Avanza',
'tanggal'=>'12 Mei 2025 - 14 Mei 2025',
'lokasi'=>'Mall Panakkukang, Makassar',
'gambar'=>'https://blog.getandride.com/wp-content/uploads/elementor/thumbs/toyota-all-new-avanza-1-qdxpo7qo5w303a1xte52bavvjloyza2xjde0qo1nt0.jpg',
'rating'=>'★★★★★',
'komentar'=>'Pengalaman menyenangkan! Mobil bersih dan nyaman, proses mudah dan pelayanan ramah.',
'diulas'=>'Diulas pada 14 Mei 2025'
],

[
'mobil'=>'Honda Brio',
'tanggal'=>'5 Mei 2025 - 6 Mei 2025',
'lokasi'=>'Bandara Sultan Hasanuddin',
'gambar'=>'https://foto.kontan.co.id/UJQGr9wuXM5XIWaJW5rtV98AqGI=/smart/2021/08/12/641707538p.jpg',
'rating'=>'★★★★☆',
'komentar'=>'Mobil dalam kondisi baik dan irit bahan bakar. Terima kasih GoRent!',
'diulas'=>'Diulas pada 6 Mei 2025'
],

[
'mobil'=>'Mitsubishi Xpander',
'tanggal'=>'1 Mei 2025 - 2 Mei 2025',
'lokasi'=>'Mall Panakkukang, Makassar',
'gambar'=>'https://hargamitsubishimedan.id/assets/img/all-new-xpander-cross/car/new-xpander-cross-white.png',
'rating'=>'★★★★★',
'komentar'=>'Sangat puas! Mobil bersih, wangi, dan nyaman digunakan untuk perjalanan keluarga.',
'diulas'=>'Diulas pada 2 Mei 2025'
]

];

@endphp



<div class="divide-y">

@foreach($ulasans as $ulasan)

<div class="grid grid-cols-1 lg:grid-cols-[1.2fr_1.4fr_0.9fr] gap-8 py-8 items-center">

<div class="flex gap-6 items-center">

<img
src="{{ $ulasan['gambar'] }}"
class="w-36 h-24 object-contain rounded-xl">

<div>

<div class="flex items-center gap-3">

<h3 class="text-xl font-extrabold text-[#123C76]">
{{ $ulasan['mobil'] }}
</h3>

<span class="bg-[#D8FAF8] text-[#0FA39F] px-3 py-1 rounded-full text-sm">
Selesai
</span>

</div>

<p class="text-gray-500 mt-2">
<i class="fa-regular fa-calendar mr-2"></i>
{{ $ulasan['tanggal'] }}
</p>

<p class="text-gray-500 mt-1">
<i class="fa-solid fa-location-dot mr-2"></i>
{{ $ulasan['lokasi'] }}
</p>

</div>

</div>



<div>

<p class="text-[#123C76] mb-2">
Ulasan Anda
</p>

<div class="text-[#FBBF24] text-2xl">
{{ $ulasan['rating'] }}
</div>

<p class="text-gray-600 mt-3 leading-7">
{{ $ulasan['komentar'] }}
</p>

</div>



<div class="text-right">

<p class="text-gray-500 mb-6">
<i class="fa-regular fa-calendar mr-2"></i>
{{ $ulasan['diulas'] }}
</p>

<button class="border px-8 py-3 rounded-xl font-bold text-[#123C76]">
Lihat Detail
</button>

</div>

</div>

@endforeach

</div>

</section>




<!-- Bottom -->
<section class="bg-white rounded-3xl shadow-sm p-8 flex items-center gap-8">

<div class="w-36 h-24 rounded-2xl bg-[#D8FAF8] flex items-center justify-center text-[#12B8B4] text-5xl">
<i class="fa-solid fa-comment-dots"></i>
</div>

<div>

<h2 class="text-xl font-extrabold text-[#123C76]">
Belum ada pengalaman lain untuk diulas
</h2>

<p class="text-gray-500 mt-2">
Selesaikan pesanan Anda dan bagikan pengalaman berkendara Anda bersama GoRent.
</p>

</div>

</section>

<p class="text-center text-sm text-gray-500">
    © 2025 GoRent. All rights reserved.
</p>

</div>