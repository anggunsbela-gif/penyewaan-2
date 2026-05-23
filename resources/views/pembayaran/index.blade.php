<div class="space-y-6">

    <div>

<a
href="/?menu=detail-mobil"

class="inline-flex
items-center
gap-3
text-[#123C76]
font-semibold
mb-10">

<i class="fa-solid fa-arrow-left"></i>

Kembali ke detail mobil

</a>

<p class="text-gray-500 text-xl mt-3">

Pilih metode pembayaran yang paling nyaman untuk Anda.

</p>

</div>

    <div class="bg-[#EDFDFF] border border-[#12B8B4]/30 rounded-2xl p-5 text-[#12B8B4] font-semibold">
        <i class="fa-solid fa-shield-halved mr-3"></i>
        Transaksi Anda aman dan terenkripsi. Kami tidak menyimpan detail kartu kredit Anda.
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-[1.3fr_0.9fr] gap-6">

        <!-- Kiri -->
        <section class="bg-white rounded-3xl shadow-sm p-8">
            <h2 class="text-xl font-extrabold text-[#123C76] mb-6">Pilih Metode Pembayaran</h2>

            <!-- Transfer Bank -->
            <div class="border-2 border-[#12B8B4] rounded-2xl overflow-hidden mb-5">
                <div class="p-6 flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <span class="w-5 h-5 rounded-full bg-[#12B8B4]"></span>
                        <div>
                            <h3 class="font-extrabold text-[#123C76]">Transfer Bank</h3>
                            <p class="text-sm text-gray-500">Bayar melalui transfer ke rekening bank GoRent.</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-up text-[#123C76]"></i>
                </div>

                <div class="mx-6 mb-6 bg-[#F8FCFD] border rounded-2xl p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-bold text-[#123C76]">Bank Central Asia (BCA)</p>
                            <h3 class="text-xl font-extrabold text-[#123C76] mt-1">1231 5678 9012</h3>
                            <p class="text-gray-500">a.n. GoRent Indonesia</p>
                        </div>

                        <button class="text-[#12B8B4] font-bold">
                            <i class="fa-regular fa-copy mr-2"></i> Salin
                        </button>
                    </div>

                    <div class="mt-6">
                        <h4 class="font-bold text-[#123C76] mb-3">Instruksi pembayaran:</h4>
                        <ol class="list-decimal ml-5 text-gray-600 space-y-2">
                            <li>Lakukan transfer ke nomor rekening di atas.</li>
                            <li>Pastikan nominal sesuai dengan total pembayaran.</li>
                            <li>Unggah bukti transfer pada halaman konfirmasi pembayaran.</li>
                        </ol>
                    </div>
                </div>
            </div>

            @foreach([
                ['E-Wallet','Bayar menggunakan saldo e-wallet Anda.','gopay   OVO   DANA'],
                ['Virtual Account','Bayar melalui Virtual Account dari berbagai bank.','BCA   Mandiri   BNI   BRI'],
                ['Kartu Kredit / Debit','Bayar dengan kartu kredit atau kartu debit Anda.','VISA   Mastercard'],
                ['Bayar di Tempat (COD)','Bayar secara tunai saat pengambilan atau pengembalian mobil.','💵']
            ] as $pay)
            <div class="border rounded-2xl p-6 flex justify-between items-center mb-5">
                <div class="flex items-center gap-4">
                    <span class="w-5 h-5 rounded-full border-2"></span>
                    <div>
                        <h3 class="font-extrabold text-[#123C76]">{{ $pay[0] }}</h3>
                        <p class="text-sm text-gray-500">{{ $pay[1] }}</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 text-[#123C76] font-bold">
                    <span>{{ $pay[2] }}</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>
            @endforeach
        </section>

        <!-- Kanan -->
        <section class="bg-white rounded-3xl shadow-sm p-8">
            <h2 class="text-xl font-extrabold text-[#123C76] mb-8">Ringkasan Pemesanan</h2>

            <div class="flex items-center gap-4 border-b pb-6">
                <img src="https://blog.getandride.com/wp-content/uploads/elementor/thumbs/toyota-all-new-avanza-1-qdxpo7qo5w303a1xte52bavvjloyza2xjde0qo1nt0.jpg"
                     class="w-28 h-20 object-contain">

                <div>
                    <div class="flex gap-2 items-center">
                        <h3 class="font-extrabold text-[#123C76]">Toyota Avanza</h3>
                        <span class="bg-[#D8FAF8] text-[#0FA39F] text-xs px-3 py-1 rounded-full">MPV</span>
                    </div>
                    <p class="text-gray-500 text-sm">7 Kursi • Manual • Bensin</p>
                </div>
            </div>

            <div class="space-y-5 py-6 border-b text-[#123C76]">
                <p><i class="fa-regular fa-calendar mr-3"></i>17 Mei 2025, 09:00 <br><span class="ml-8 text-gray-500">(Pengambilan)</span></p>
                <p><i class="fa-regular fa-calendar mr-3"></i>18 Mei 2025, 09:00 <br><span class="ml-8 text-gray-500">(Pengembalian)</span></p>
                <p><i class="fa-solid fa-location-dot mr-3"></i>Lokasi Pengambilan <br><span class="ml-8 text-gray-500">Mall Panakkukang, Makassar</span></p>
                <p><i class="fa-regular fa-clock mr-3"></i>Durasi Sewa <br><span class="ml-8 text-gray-500">1 hari</span></p>
            </div>

            <div class="space-y-5 py-6 border-b">
                <div class="flex justify-between">
                    <span>Harga Sewa</span>
                    <span>Rp 350.000</span>
                </div>
                <div class="flex justify-between">
                    <span>Durasi</span>
                    <span>1 hari</span>
                </div>
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span>Rp 350.000</span>
                </div>
            </div>

            <div class="flex justify-between items-center mt-6">
                <h3 class="font-extrabold text-[#123C76]">Total</h3>
                <h3 class="text-3xl font-extrabold text-[#12B8B4]">Rp 350.000</h3>
            </div>

            <div class="bg-[#F1FAFA] rounded-2xl p-5 mt-6 flex gap-4">
                <i class="fa-solid fa-circle-info text-[#12B8B4] text-xl"></i>
                <p class="text-sm text-gray-600">
                    Selesaikan pembayaran sebelum batas waktu 15:00 WIB untuk memastikan pesanan Anda tetap aktif.
                </p>
            </div>

            <a href="/?menu=pembayaran-berhasil"
               class="mt-6 block text-center bg-[#12B8B4] text-white py-4 rounded-xl font-bold text-lg">
                Bayar Sekarang
            </a>

            <p class="text-center text-sm text-gray-500 mt-4">
                <i class="fa-solid fa-lock text-[#12B8B4] mr-2"></i>
                Pembayaran aman dan terenkripsi
            </p>
        </section>

    </div>

    <p class="text-center text-sm text-gray-500">
        © 2025 GoRent. All rights reserved.
    </p>

</div>