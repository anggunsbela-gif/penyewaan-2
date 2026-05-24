<aside
id="sidebar"
class="fixed left-0 top-0 h-screen w-[260px] bg-white border-r border-[#EDF1F4] flex flex-col z-50">

    <!-- Logo -->
    <div class="px-8 pt-8 pb-10 flex items-center gap-3">

        <div class="w-14 h-14 rounded-full bg-[#D8FAF8] flex items-center justify-center">
            <i class="fa-solid fa-car text-[#12B8B4] text-2xl"></i>
        </div>

        <div>
            <h1 class="text-[22px] font-extrabold text-[#123C76]">
                GoRent
            </h1>
        </div>

    </div>


    <!-- Menu -->
    <nav class="flex-1 px-4 space-y-2">

    <!-- Dashboard -->
    <a href="/?menu=dashboard"

    class="flex items-center gap-4 px-8 py-5 rounded-r-2xl rounded-l-lg font-bold

    {{ request('menu') == null || request('menu') == 'dashboard'

    ? 'bg-[#D8FAF8] text-[#12B8B4] border-l-[6px] border-[#12B8B4]'

    : 'text-[#123C76] hover:bg-[#F4FCFC] hover:text-[#12B8B4]' }}">

    <i class="fa-solid fa-house text-xl"></i>

    Dashboard

</a>



<!-- Pesanan -->
    <a href="/?menu=pesanan"

    class="flex items-center gap-4 px-8 py-5 rounded-r-2xl rounded-l-lg font-bold

    {{ request('menu') == 'pesanan'

    ? 'bg-[#D8FAF8] text-[#12B8B4] border-l-[6px] border-[#12B8B4]'

    : 'text-[#123C76] hover:bg-[#F4FCFC] hover:text-[#12B8B4]' }}">

    <i class="fa-regular fa-calendar-check text-xl"></i>

    Pesanan Saya

</a>

<!-- Ulasan -->
    <a href="/?menu=ulasan"

    class="flex items-center gap-4 px-8 py-5 rounded-r-2xl rounded-l-lg font-bold

    {{ request('menu') == 'ulasan'

    ? 'bg-[#D8FAF8] text-[#12B8B4] border-l-[6px] border-[#12B8B4]'

    : 'text-[#123C76] hover:bg-[#F4FCFC] hover:text-[#12B8B4]' }}">

    <i class="fa-regular fa-star text-xl"></i>

    Ulasan Saya

</a>


        <a href="/?menu=mobil"
        class="flex items-center gap-4 px-8 py-5 rounded-r-2xl rounded-l-lg font-bold
        {{ request('menu') == 'mobil'
        ? 'bg-[#D8FAF8] text-[#12B8B4] border-l-[6px] border-[#12B8B4]'
        : 'text-[#123C76] hover:bg-[#F4FCFC] hover:text-[#12B8B4]' }}">
            <i class="fa-solid fa-car text-xl"></i>
            Mobil
</a>


        <a href="/?menu=bantuan"
        class="flex items-center gap-4 px-8 py-5 rounded-r-2xl rounded-l-lg font-bold
        {{ request('menu') == 'bantuan'
        ? 'bg-[#D8FAF8] text-[#12B8B4] border-l-[6px] border-[#12B8B4]'
        : 'text-[#123C76] hover:bg-[#F4FCFC] hover:text-[#12B8B4]' }}">
            <i class="fa-regular fa-circle-question text-xl"></i>
            Bantuan & Keluhan
</a>


        <a href="/?menu=syarat"
        class="flex items-center gap-4 px-8 py-5 rounded-r-2xl rounded-l-lg font-bold
        {{ request('menu') == 'syarat'
        ? 'bg-[#D8FAF8] text-[#12B8B4] border-l-[6px] border-[#12B8B4]'
        : 'text-[#123C76] hover:bg-[#F4FCFC] hover:text-[#12B8B4]' }}">
            <i class="fa-regular fa-file-lines text-xl"></i>
            Syarat & Ketentuan
</a>


        <a href="/?menu=profil"
        class="flex items-center gap-4 px-8 py-5 rounded-r-2xl rounded-l-lg font-bold
        {{ request('menu') == 'profil'
        ? 'bg-[#D8FAF8] text-[#12B8B4] border-l-[6px] border-[#12B8B4]'
        : 'text-[#123C76] hover:bg-[#F4FCFC] hover:text-[#12B8B4]' }}">
            <i class="fa-regular fa-user text-xl"></i>
            Profil Saya
</a>

    </nav>


    <!-- Tombol keluar -->
    <a href="/?menu=login"
    class="w-full border-2 border-[#12B8B4] text-[#12B8B4] rounded-2xl py-4 font-bold hover:bg-[#12B8B4] hover:text-white transition flex items-center justify-center">
        <i class="fa-solid fa-right-from-bracket mr-2"></i>
        Keluar
    </a>

    </div>

</aside>



<style>

.menu-item{

display:flex;

align-items:center;

gap:16px;

padding:18px 32px;

border-radius:18px;

color:#123C76;

font-weight:700;

transition:.2s;

}


.menu-item:hover{

background:#F4FCFC;

color:#12B8B4;

}


.menu-item i{

font-size:22px;

width:24px;

}

</style>