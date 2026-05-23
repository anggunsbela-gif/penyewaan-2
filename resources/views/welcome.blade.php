<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>GoRent</title>

<script src="https://cdn.tailwindcss.com"></script>

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>


<body class="bg-[#F8FCFD] overflow-x-hidden">

@switch(request('menu'))

    @case('pesanan')

        @include('sections.sidebar')

        <div class="md:ml-[260px] min-h-screen">

            @include('sections.topbar')

            <main class="p-8">

                @include('pesanan.index')

            </main>

        </div>

        @break

    @case('ulasan')

        @include('sections.sidebar')

        <div class="md:ml-[260px] min-h-screen">

            @include('sections.topbar')

            <main class="p-8">

                @include('ulasan.index')

            </main>

        </div>

        @break

    @case('mobil')

    @include('sections.sidebar')

    <div class="md:ml-[260px] min-h-screen">
        @include('sections.topbar')

        <main class="p-8">
            @include('mobil.index')
        </main>
    </div>

    @break

    @case('detail-mobil')

    @include('sections.sidebar')

    <div class="md:ml-[260px] min-h-screen">
        @include('sections.topbar')

        <main class="p-8">
            @include('mobil.detail')
        </main>
    </div>

    @break

    @case('pembayaran')

    @include('sections.sidebar')

    <div class="md:ml-[260px] min-h-screen">
        @include('sections.topbar')

        <main class="p-8">
            @include('pembayaran.index')
        </main>
    </div>

    @break

    @case('pembayaran-berhasil')

    @include('sections.sidebar')

    <div class="md:ml-[260px] min-h-screen">
        @include('sections.topbar')

        <main class="p-8">
            @include('pembayaran.berhasil')
        </main>
    </div>

    @break

    @case('bantuan')

    @include('sections.sidebar')

    <div class="md:ml-[260px] min-h-screen">
        @include('sections.topbar')

        <main class="p-8">
            @include('bantuan.index')
        </main>
    </div>

    @break

    @case('syarat')

    @include('sections.sidebar')

    <div class="md:ml-[260px] min-h-screen">
        @include('sections.topbar')

        <main class="p-8">
            @include('syarat.index')
        </main>
    </div>

    @break

    @case('profil')

    @include('sections.sidebar')

    <div class="md:ml-[260px] min-h-screen">
        @include('sections.topbar')

        <main class="p-8">
            @include('profil.index')
        </main>
    </div>

    @break

    @case('ulasan-belum')

    @include('sections.sidebar')

    <div class="md:ml-[260px] min-h-screen">
        @include('sections.topbar')

        <main class="p-8">
            @include('ulasan.belum')
        </main>
    </div>

    @break

    @case('buat-ulasan')

    @include('sections.sidebar')

    <div class="md:ml-[260px] min-h-screen">
        @include('sections.topbar')

        <main class="p-8">
            @include('ulasan.buat')
        </main>
    </div>

    @break



    @default

        @include('dashboard.dashboard')

@endswitch


</body>

</html>