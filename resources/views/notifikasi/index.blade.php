<div class="bg-white rounded-[28px] shadow-sm p-8">

    <div class="flex justify-between items-center mb-8">

        <div>
            <h1 class="text-[36px] font-black text-[#123C76]">
                Notifikasi
            </h1>

            <p class="text-gray-500">
                Informasi terbaru dari GoRent
            </p>
        </div>

        <button class="border border-[#12B8B4] text-[#12B8B4] px-6 py-3 rounded-xl font-bold">
            <i class="fa-regular fa-circle-check mr-2"></i>
            Tandai semua sebagai dibaca
        </button>

    </div>

    <div class="flex gap-8 border-b pb-4 mb-6 font-bold text-[#123C76]">

        <button class="bg-[#12B8B4] text-white px-8 py-3 rounded-full">
            Semua
        </button>

        <button>Pesanan</button>
        <button>Promo</button>
        <button>Sistem</button>

    </div>

    <div class="space-y-4">

        @foreach([
            ['fa-regular fa-calendar-check','Pesanan Berhasil Dikonfirmasi','Pesanan Toyota Avanza Anda telah dikonfirmasi. Silakan cek detail pesanan untuk informasi lebih lanjut.','17 Mei 2025 - 10:30','Pesanan','bg-[#EAF4FF] text-[#2684FF]'],
            ['fa-solid fa-car','Pengembalian Berhasil','Terima kasih! Mobil telah berhasil dikembalikan. Semoga pengalaman Anda menyenangkan.','17 Mei 2025 - 12:15','Pesanan','bg-[#D8FAF8] text-[#12B8B4]'],
            ['fa-solid fa-tag','Promo Spesial Untuk Anda!','Diskon 15% untuk semua tipe mobil. Gunakan kode: GORENT15 saat checkout.','16 Mei 2025 - 09:00','Promo','bg-[#FFF4DE] text-[#F59E0B]'],
            ['fa-regular fa-bell','Jangan Lupa Review','Yuk, berikan ulasan untuk pengalaman sewa Anda dan bantu penyewa lainnya.','15 Mei 2025 - 18:45','Sistem','bg-[#F3E8FF] text-[#7C3AED]'],
            ['fa-solid fa-shield-halved','Verifikasi Email Berhasil','Email Anda telah berhasil diverifikasi. Terima kasih telah bergabung dengan GoRent.','10 Mei 2025 - 14:20','Sistem','bg-[#EAF4FF] text-[#2684FF]'],
            ['fa-solid fa-gift','Selamat! Anda Mendapat Promo','Anda mendapatkan promo cashback 10% untuk pemesanan berikutnya.','8 Mei 2025 - 11:05','Promo','bg-[#E8FBEF] text-[#16A34A]'],
        ] as $notif)

        <div class="border rounded-[20px] p-6 flex items-center gap-6">

            <div class="w-3 h-3 bg-[#2684FF] rounded-full"></div>

            <div class="w-[76px] h-[76px] rounded-full {{ $notif[5] }} flex items-center justify-center text-3xl">
                <i class="{{ $notif[0] }}"></i>
            </div>

            <div class="flex-1">

                <h3 class="text-xl font-black text-[#123C76]">
                    {{ $notif[1] }}
                </h3>

                <p class="text-gray-500 mt-2">
                    {{ $notif[2] }}
                </p>

                <p class="text-gray-500 mt-3 text-sm">
                    <i class="fa-regular fa-calendar mr-2"></i>
                    {{ $notif[3] }}
                </p>

            </div>

            <span class="px-4 py-2 rounded-full text-sm font-bold {{ $notif[5] }}">
                {{ $notif[4] }}
            </span>

            <i class="fa-solid fa-ellipsis-vertical text-[#123C76] text-xl"></i>

        </div>

        @endforeach

    </div>

</div>

<p class="text-center text-sm text-gray-500 mt-6">
    © 2026 GoRent. All rights reserved.
</p>