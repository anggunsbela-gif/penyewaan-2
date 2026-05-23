<div class="space-y-6">

    <!-- Header Profil -->
    <section class="bg-white rounded-3xl shadow-sm p-8 flex items-center justify-between">

        <div class="flex items-center gap-8">
            <div class="relative">
                <img src="https://i.pravatar.cc/200?img=47"
                     class="w-40 h-40 rounded-full object-cover">

                <button class="absolute right-2 bottom-2 w-10 h-10 bg-white rounded-full shadow flex items-center justify-center text-[#123C76]">
                    <i class="fa-solid fa-camera"></i>
                </button>
            </div>

            <div>
                <div class="flex items-center gap-3">
                    <h1 class="text-3xl font-extrabold text-[#123C76]">
                        Anggun
                    </h1>
                    <span class="bg-[#D8FAF8] text-[#0FA39F] px-4 py-1 rounded-full font-bold text-sm">
                        Penyewa
                    </span>
                </div>

                <p class="text-gray-500 mt-4">
                    <i class="fa-regular fa-envelope mr-3"></i>
                    anggun@example.com
                </p>

                <p class="text-gray-500 mt-3">
                    <i class="fa-solid fa-phone mr-3"></i>
                    0812-3456-7890
                </p>

                <p class="text-gray-500 mt-3">
                    <i class="fa-solid fa-location-dot mr-3"></i>
                    Makassar, Sulawesi Selatan
                </p>
            </div>
        </div>

    </section>


    <div class="grid grid-cols-1 xl:grid-cols-[1.2fr_1fr] gap-6">

        <!-- Kiri -->
        <section class="bg-white rounded-3xl shadow-sm p-8">

            <h2 class="text-2xl font-extrabold text-[#123C76] mb-8">
                Informasi Akun
            </h2>

            @php
                $fields = [
                    ['fa-regular fa-user','Nama Lengkap','Anggun'],
                    ['fa-regular fa-envelope','Email','anggun@example.com'],
                    ['fa-solid fa-phone','Nomor Telepon','0812-3456-7890'],
                    ['fa-solid fa-location-dot','Alamat','Jl. Andi Djemma No. 123, Makassar, Sulawesi Selatan, 90111'],
                    ['fa-regular fa-calendar','Tanggal Lahir','12 Agustus 1998'],
                    ['fa-regular fa-user','Jenis Kelamin','Perempuan'],
                ];
            @endphp

            <div class="space-y-6">
                @foreach($fields as $field)
                    <div class="grid grid-cols-[30px_1fr_auto] gap-5 items-center">

                        <i class="{{ $field[0] }} text-[#123C76] text-2xl"></i>

                        <div>
                            <label class="text-[#123C76] font-semibold">
                                {{ $field[1] }}
                            </label>

                            <div class="mt-2 border rounded-xl px-5 py-4 text-gray-500">
                                {{ $field[2] }}
                            </div>
                        </div>

                        <button class="border px-7 py-3 rounded-xl font-bold text-[#123C76]">
                            Ubah
                        </button>

                    </div>
                @endforeach
            </div>

        </section>


        <!-- Kanan -->
        <div class="space-y-6">

            <section class="bg-white rounded-3xl shadow-sm p-8">
                <h2 class="text-2xl font-extrabold text-[#123C76] mb-6">
                    <i class="fa-solid fa-lock mr-3"></i>
                    Keamanan Akun
                </h2>

                <div class="flex items-center justify-between border-b pb-6">
                    <div>
                        <h3 class="font-bold text-[#123C76]">Password</h3>
                        <p class="text-gray-500">Terakhir diubah 10 Mei 2025</p>
                    </div>

                    <button class="border px-6 py-3 rounded-xl font-bold text-[#123C76]">
                        Ubah Password
                        <i class="fa-solid fa-chevron-right ml-2"></i>
                    </button>
                </div>

                <div class="flex items-center justify-between pt-6">
                    <div>
                        <h3 class="font-bold text-[#123C76]">Verifikasi Dua Langkah</h3>
                        <p class="text-gray-500">Tingkatkan keamanan akun Anda</p>
                    </div>

                    <div class="w-14 h-8 bg-gray-300 rounded-full"></div>
                </div>
            </section>


            <section class="bg-white rounded-3xl shadow-sm p-8">
                <h2 class="text-2xl font-extrabold text-[#123C76] mb-6">
                    <i class="fa-regular fa-bell mr-3"></i>
                    Preferensi Notifikasi
                </h2>

                @foreach([
                    ['Notifikasi Pesanan','Dapatkan update status pesanan'],
                    ['Notifikasi Promo','Info promo dan penawaran menarik'],
                    ['Notifikasi Sistem','Informasi penting dari GoRent'],
                ] as $notif)

                <div class="flex items-center justify-between py-4">
                    <div>
                        <h3 class="font-bold text-[#123C76]">{{ $notif[0] }}</h3>
                        <p class="text-gray-500">{{ $notif[1] }}</p>
                    </div>

                    <div class="w-14 h-8 bg-[#12B8B4] rounded-full flex justify-end items-center px-1">
                        <div class="w-6 h-6 bg-white rounded-full"></div>
                    </div>
                </div>

                @endforeach
            </section>


            <section class="bg-white rounded-3xl shadow-sm p-8">
                <h2 class="text-2xl font-extrabold text-[#123C76] mb-6">
                    <i class="fa-regular fa-trash-can mr-3"></i>
                    Akun
                </h2>

                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-red-500">
                            <i class="fa-regular fa-trash-can mr-3"></i>
                            Hapus Akun
                        </h3>
                        <p class="text-gray-500 mt-2">
                            Akun akan dihapus secara permanen
                        </p>
                    </div>

                    <i class="fa-solid fa-chevron-right text-[#123C76]"></i>
                </div>
            </section>

        </div>

    </div>

    <p class="text-center text-sm text-gray-500">
        © 2025 GoRent. All rights reserved.
    </p>

</div>