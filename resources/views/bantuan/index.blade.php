<div class="space-y-6">

    <!-- Hero -->
    <section class="bg-white rounded-3xl shadow-sm p-8 flex items-center justify-between">
        <div>
            <p class="text-gray-500 text-xl mt-4 leading-8">
                Punya pertanyaan atau mengalami kendala? <br>
                Kami siap membantu Anda.
            </p>
        </div>

        <div class="hidden md:flex w-[360px] justify-center">
            <div class="w-48 h-36 bg-[#12B8B4] rounded-[40px] flex items-center justify-center text-white text-7xl">
                <i class="fa-solid fa-headset"></i>
            </div>
        </div>
    </section>


    <div class="grid grid-cols-1 xl:grid-cols-[0.8fr_1.2fr] gap-6">

        <!-- KIRI -->
        <div class="space-y-6">

            <section class="bg-white rounded-3xl shadow-sm p-8">
                <h2 class="text-2xl font-extrabold text-[#123C76] mb-6">
                    Topik Bantuan Populer
                </h2>

                @php
                    $topics = [
                        ['fa-regular fa-calendar-check', 'Cara melakukan pemesanan', 'Pelajari langkah mudah memesan mobil di GoRent.'],
                        ['fa-regular fa-credit-card', 'Pembayaran & Refund', 'Informasi metode pembayaran dan kebijakan refund.'],
                        ['fa-regular fa-file-lines', 'Syarat & Dokumen', 'Dokumen apa saja yang diperlukan untuk rental.'],
                        ['fa-solid fa-car', 'Pengambilan & Pengembalian', 'Informasi lokasi dan ketentuan pengambilan mobil.'],
                        ['fa-solid fa-shield-halved', 'Asuransi & Keamanan', 'Perlindungan selama perjalanan bersama GoRent.'],
                    ];
                @endphp

                <div class="divide-y">
                    @foreach($topics as $topic)
                    <div class="py-5 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-[#D8FAF8] flex items-center justify-center text-[#12B8B4] text-2xl">
                                <i class="{{ $topic[0] }}"></i>
                            </div>

                            <div>
                                <h3 class="font-extrabold text-[#123C76]">
                                    {{ $topic[1] }}
                                </h3>
                                <p class="text-sm text-gray-500 mt-1">
                                    {{ $topic[2] }}
                                </p>
                            </div>
                        </div>

                        <i class="fa-solid fa-chevron-right text-[#123C76]"></i>
                    </div>
                    @endforeach
                </div>
            </section>


            <section class="bg-white rounded-3xl shadow-sm p-8">
                <h2 class="text-2xl font-extrabold text-[#123C76] mb-4">
                    Hubungi Kami
                </h2>

                <p class="text-gray-500 mb-6">
                    Butuh bantuan lebih lanjut? Hubungi tim kami melalui
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#D8FAF8] flex items-center justify-center text-[#12B8B4] text-2xl">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-[#123C76]">0812-3456-7890</h3>
                            <p class="text-sm text-gray-500">(08.00 - 20.00 WIB)</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#D8FAF8] flex items-center justify-center text-[#12B8B4] text-2xl">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="font-extrabold text-[#123C76]">support@gorent.id</h3>
                            <p class="text-sm text-gray-500">Respon dalam 1x24 jam</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>


        <!-- KANAN -->
        <section class="bg-white rounded-3xl shadow-sm p-8">
            <h2 class="text-2xl font-extrabold text-[#123C76] mb-6">
                Kirim Pertanyaan atau Keluhan
            </h2>

            <form class="space-y-5">

                <div>
                    <label class="font-semibold text-[#123C76]">Pilih Jenis</label>
                    <select class="w-full mt-2 border rounded-xl px-5 py-4 text-gray-400 outline-none">
                        <option>Pilih jenis pertanyaan atau keluhan</option>
                    </select>
                </div>

                <div>
                    <label class="font-semibold text-[#123C76]">Subjek</label>
                    <input type="text"
                           placeholder="Contoh: Kendala saat pembayaran"
                           class="w-full mt-2 border rounded-xl px-5 py-4 outline-none">
                </div>

                <div>
                    <label class="font-semibold text-[#123C76]">Pesan</label>
                    <textarea
                        placeholder="Jelaskan pertanyaan atau keluhan Anda secara detail..."
                        class="w-full mt-2 border rounded-xl px-5 py-4 h-52 outline-none resize-none"></textarea>
                    <p class="text-right text-gray-400 text-sm">0/500</p>
                </div>

                <div>
                    <label class="font-semibold text-[#123C76]">Lampiran (Opsional)</label>

                    <div class="mt-2 border-2 border-dashed rounded-xl p-6 flex items-center gap-4 max-w-lg">
                        <i class="fa-solid fa-paperclip text-[#123C76] text-3xl"></i>
                        <div>
                            <p class="font-semibold text-[#123C76]">
                                Klik untuk upload <span class="font-normal text-gray-500">atau seret file di sini</span>
                            </p>
                            <p class="text-gray-500 text-sm">
                                Maks. 2MB (JPG, PNG, PDF)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="button"
                            class="bg-[#12B8B4] text-white px-10 py-4 rounded-xl font-bold">
                        <i class="fa-regular fa-paper-plane mr-2"></i>
                        Kirim
                    </button>
                </div>

            </form>
        </section>

    </div>

    <p class="text-center text-sm text-gray-500">
        © 2025 GoRent. All rights reserved.
    </p>

</div>