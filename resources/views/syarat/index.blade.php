<div class="bg-white rounded-[32px] shadow-sm p-10">

    <div class="border border-[#EDF1F4] rounded-[24px] overflow-hidden">

        @php
            $syarat = [
                'Penyewa wajib berusia minimal 18 tahun dan memiliki SIM yang masih berlaku.',
                'Penyewa wajib membawa KTP dan SIM asli saat pengambilan mobil.',
                'Minimal durasi sewa adalah 24 jam.',
                'Harga sewa belum termasuk bahan bakar, biaya parkir, dan biaya tol.',
                'Mobil wajib dikembalikan sesuai tanggal dan waktu yang telah dipilih.',
                'Dilarang merokok, membawa hewan, atau menggunakan mobil untuk kegiatan ilegal.',
                'Kerusakan akibat kelalaian penyewa menjadi tanggung jawab penyewa.',
                'Pembatalan pesanan mengikuti kebijakan yang berlaku di GoRent.',
            ];
        @endphp


        @foreach($syarat as $index => $item)

        <div class="flex items-center gap-6 px-8 py-8 border-b last:border-0">

            <div
            class="w-12 h-12
            rounded-full
            bg-[#12B8B4]
            text-white
            flex
            items-center
            justify-center
            font-bold
            text-lg
            shrink-0">

                {{ $index + 1 }}

            </div>

            <p class="text-[#123C76] text-[22px] leading-9">

                {{ $item }}

            </p>

        </div>

        @endforeach

    </div>


    <div
    class="mt-8
    bg-[#EDFDFF]
    rounded-[24px]
    p-8
    flex
    items-center
    gap-6">

        <div
        class="w-20
        h-20
        rounded-full
        bg-white
        flex
        items-center
        justify-center">

            <i class="fa-solid fa-shield-halved text-[#12B8B4] text-4xl"></i>

        </div>


        <div>

            <p class="text-[#12B8B4] text-xl font-bold mb-2">

                Penting

            </p>

            <p class="text-[#123C76] text-lg leading-8">

                Dengan melakukan pemesanan, Anda telah membaca,
                memahami, dan menyetujui seluruh syarat &
                ketentuan yang berlaku di GoRent.

            </p>

        </div>

    </div>


    <p class="text-center text-gray-500 mt-10">

        © 2025 GoRent. All rights reserved.

    </p>

</div>