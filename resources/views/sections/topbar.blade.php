<header class="h-[92px] bg-white border-b border-[#EDF1F4] flex items-center justify-between px-8">

<!-- Kiri -->
<div class="flex items-center gap-8">

<button onclick="openSidebar()" class="text-[#123C76] text-2xl">
<i class="fa-solid fa-bars"></i>
</button>

<div>

<h1 class="text-2xl font-extrabold text-[#123C76]">

@if(request('menu') == 'pesanan')

Pesanan Saya

@elseif(request('menu') == 'ulasan')

Ulasan Saya

@elseif(request('menu') == 'bantuan')

Bantuan & Keluhan

@elseif(request('menu') == 'syarat')

Syarat & Ketentuan

@elseif(request('menu') == 'profil')

Profil Saya

@elseif(
request('menu') == 'mobil'
||
request('menu') == 'detail-mobil'
||
request('menu') == 'pembayaran'
||
request('menu') == 'pembayaran-berhasil'
)

Mobil

@else

Dashboard

@endif

</h1>



@if(request('menu') == 'pesanan')

<p class="text-sm text-gray-500">
Kelola semua pesanan dan riwayat rental Anda
</p>

@elseif(request('menu') == 'ulasan')

<p class="text-sm text-gray-500">
Lihat dan kelola ulasan/rating Anda
</p>

@elseif(request('menu') == 'bantuan')

<p class="text-sm text-gray-500">
Kami siap membantu Anda
</p>

@elseif(request('menu') == 'syarat')

<p class="text-sm text-gray-500">
Informasi penting sebelum Anda melakukan pemesanan
</p>

@elseif(request('menu') == 'profil')

<p class="text-sm text-gray-500">
Kelola informasi profil dan pengaturan akun Anda
</p>

@elseif(
request('menu') == 'mobil'
||
request('menu') == 'detail-mobil'
||
request('menu') == 'pembayaran'
||
request('menu') == 'pembayaran-berhasil'
)

<p class="text-sm text-gray-500">
Temukan berbagai pilihan mobil terbaik untuk perjalanan Anda
</p>

@endif

</div>

</div>


<!-- Kanan -->
<div class="flex items-center gap-6">

<a
href="/?menu=notifikasi"
class="relative text-[#123C76] text-2xl block">

<i class="fa-regular fa-bell"></i>

<span
class="
absolute
-top-1
-right-1
w-3
h-3
bg-red-500
rounded-full">
</span>

</a>


<div class="flex items-center gap-3">

<img
src="https://i.pravatar.cc/100?img=47"
alt="Anggun"
class="w-12 h-12 rounded-full object-cover">

<div class="hidden sm:block leading-tight">

<h2 class="font-extrabold text-[#123C76]">
Halo, Anggun
</h2>

<p class="text-sm text-gray-500">
Penyewa
</p>

</div>

<i class="fa-solid fa-chevron-down text-[#123C76] text-sm"></i>

</div>

</div>

</header>