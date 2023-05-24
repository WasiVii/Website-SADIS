@extends('layouts/app')
 
@section('title', 'Home')

@php
$alasan1 = array(
    'judul' => 'Pendaftaran Mudah',
    'icon' => '/assets/img/home/note.png',
    'catatan' => 'Selama siswa sudah membayar, mengisi administrasi dan tes masuk, Anda dipastikan menjadi siswa kami'
);

$alasan2 = array(
    'judul' => 'Biaya Ringan',
    'icon' => '/assets/img/home/money.png',
    'catatan' => 'Biaya administrasi kami ringan karena kami berfokus pada apa yang kami berikan bermanfaat bagi siswa kami'
);

$alasan3 = array(
    'judul' => 'Banyak Fasilitas',
    'icon' => '/assets/img/home/mosque.png',
    'catatan' => 'Fasilitas-fasilitas di SADIS School terawat dengan baik dikarenakan kami mempekerjakan beberapa staff untuk merewat fasilitas sekolah'
);

$alasan4 = array(
    'judul' => 'Banyak Extrakulikuler',
    'icon' => '/assets/img/home/ball.png',
    'catatan' => 'Terdapat banyak extrakulikuler untuk pengembangan diri peserta didik untuk mengembangkan dan mengekspresikan diri sesuai dengan kebutuhan, bakat, minat, setiap peserta didik'
);

$alasan5 = array(
    'judul' => 'Kelas Nyaman',
    'icon' => '/assets/img/home/room.png',
    'catatan' => 'Semua kelas memiliki fasilitas yang sama dan baru dan nyaman untuk belajar mengajar'
);

$alasan6 = array(
    'judul' => 'Guru Professional',
    'icon' => '/assets/img/home/guru.png',
    'catatan' => 'Guru yang mengajar di SADIS School sudah berpengalaman dan mengabdi di bidang pendidikan dengan jenjang Strata-2'
);

$data_alasan = [$alasan1, $alasan2, $alasan3, $alasan4, $alasan5, $alasan6];

@endphp

@section('content')
    {{-- ================= HERO SECTION ================= --}}
    <div class="flex flex-row min-h-screen justify-center items-center">
        <div class="my-5 px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-2 md:gap-4 lg:gap-6">
                <section class="col-span-3 lg:col-span-3 py-10 bg-main-color rounded-lg">
                    <div class=" flex flex-col px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                        <div class="max-w-2xl mx-auto text-center">
                            <p class="mb-10 text-4xl font-medium">
                                Selamat Datang di SADIS School
                            </p>
                        </div>
                        <div class="carousel w-full rounded-lg">
                            <div id="slide1" class="carousel-item relative lg:h-96 w-full">
                                <img src="https://wallpaperaccess.com/full/2931337.jpg" class="w-full bg-no-repeat" />
                                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                <a href="#slide4" class="btn btn-circle">❮</a> 
                                <a href="#slide2" class="btn btn-circle">❯</a>
                                </div>
                            </div> 
                            <div id="slide2" class="carousel-item relative lg:h-96 w-full">
                                <img src="/assets/img/sch-bg1.jpg" class="w-full bg-no-repeat" />
                                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                <a href="#slide1" class="btn btn-circle">❮</a> 
                                <a href="#slide3" class="btn btn-circle">❯</a>
                                </div>
                            </div> 
                            <div id="slide3" class="carousel-item relative lg:h-96 w-full">
                                <img src="https://wallpaperaccess.com/full/2931337.jpg" class="w-full bg-no-repeat" />
                                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                <a href="#slide2" class="btn btn-circle">❮</a> 
                                <a href="#slide4" class="btn btn-circle">❯</a>
                                </div>
                            </div> 
                            <div id="slide4" class="carousel-item relative lg:h-96 w-full">
                                <img src="/assets/img/sch-bg1.jpg" class="w-full bg-no-repeat" />
                                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                <a href="#slide3" class="btn btn-circle">❮</a> 
                                <a href="#slide1" class="btn btn-circle">❯</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="col-span-3 lg:col-span-1 py-10 bg-main-color rounded-lg">
                    <div class=" flex flex-col px-4 mx-auto max-w-7xl">
                        <figure class="mb-2 px-2 rounded justify-center items-center">
                            <img src="https://s3.getstickerpack.com/storage/uploads/sticker-pack/genshin-impact-baizhu/sticker_2.png" class="object-cover" alt="School"/>
                        </figure>
                        <div class="mb-2">
                            <p class="text-xl font-lg font-bold">Kepala Sekolah SADIS School</p>
                            <p class="text-xl font-medium">~Dr. Baizhu</p>
                        </div>
                        <p>SADIS School betujuan untuk terbaik dalam IMTAQ, unggul dalam IPTEK, berprestasi dalam olahraga dan seni serta siap bersaing dalam menghadapi era global.</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    {{-- ================= HERO SECTION ================= --}}
    {{-- ================= WHY CHOOSE US SECTION ================= --}}
    <div class="flex flex-row min-h-screen justify-center items-center bg-main-color">
        <div class="my-5 px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <section class="flex flex-col container mx-auto rounded-lg gap-6">
                <div class="max-w-2xl mx-auto text-center">
                    <p class="my-5 mx-10 text-4xl font-bold leading-tight text-blue-color sm:leading-tight lg:leading-tight font-pj">
                        Mengapa harus memilih SADIS School?
                    </p>
                </div>
                <section class="mt-5 container mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 lg:gap-6">
                        @foreach ($data_alasan as $alasan)
                        <div class="mb-10 card shadow-lg shadow-blue-color">
                                    <div class="card-body">
                                        <div class="px-2 flex flex-col gap-5">
                                            <span class="h-20 w-20 rounded-full bg-blue-color">
                                                <figure class="p-2 justify-center items-center">
                                                    <img src="{{ $alasan['icon'] }}" class="h-14" alt="School"/>
                                                </figure>
                                            </span> 
                                            <h1 class="text-xl font-medium underline">{{ $alasan['judul'] }}</h1>
                                            <p class="text-sm">{{ $alasan['catatan'] }}</p>
                                        </div>
                                    </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </section>
        </div>
    </div>
    {{-- ================= WHY CHOOSE US SECTION ================= --}}
    {{-- ================= ACHIEVEMENT / TESTIMONI SECTION ================= --}}
    {{-- <div class="flex flex-row min-h-screen justify-center items-center bg-main-color">
        HOME FOR ACHIEVEMENT / TESTIMONI
    </div> --}}
    {{-- ================= ACHIEVEMENT / TESTIMONI SECTION ================= --}}
    {{-- ================= FAQ SECTION ================= --}}
    <section class="flex flex-col min-h-screen bg-blue-color justify-center items-center">
        <div class="mb-5 px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <section class="flex flex-col mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 mx-10 normal-case text-4xl font-bold">
                        FAQ
                    <hr class="border-black" />
                    </p>
                </div>
                <div class="m-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2 md:gap-4 lg:gap-6">
                    {{-- FAQ ITEM --}}
                    <div tabindex="0" class="my-2 collapse collapse-arrow border border-base-300 bg-main-color rounded-box">
                        <div class="collapse-title text-xl font-medium">
                            Bagaimana saya mendaftarkan diri?
                        </div>
                        <div class="collapse-content">
                            <p>Silahkan kunjungi laman <a href="/ppdb" class="font-bold text-blue-color">PPDB</a> untuk info lebih lanjut.</p> 
                        </div>
                    </div>
                    <div tabindex="0" class="my-2 collapse collapse-arrow border border-base-300 bg-main-color rounded-box">
                        <div class="collapse-title text-xl font-medium">
                            Berapa rasio guru dan murid dalam satu kelas?
                        </div>
                        <div class="collapse-content">
                            <p>Rasio guru dan murid saat ini adalah 1:10, dan di dalam 1 kelas ratio guru dan siswa adalah 1:3 dimana perkelas terdapat 10 guru yang mengajar dengan materi yang berbeda-beda.</p>
                        </div>
                    </div>
                    <div tabindex="0" class="my-2 collapse collapse-arrow border border-base-300 bg-main-color rounded-box">
                        <div class="collapse-title text-xl font-medium">
                            Jenjang apa yang ditawarkan oleh SADIS School?
                        </div>
                        <div class="collapse-content">
                            <p>Kami menawarkan jenjang pendidikan menengah atas (SMA) untuk anda.</p>
                        </div>
                    </div>
                    <div tabindex="0" class="my-2 collapse collapse-arrow border border-base-300 bg-main-color rounded-box">
                        <div class="collapse-title text-xl font-medium">
                            Apakah SADIS School memiliki kegiatan extrakulikuler?
                        </div>
                        <div class="collapse-content">
                            <p>SADIS School memiliki berbagai kegiatan extrakulikuler yang dapat anda lihat di laman <a href="/extrakulikuler" class="font-bold text-blue-color">EXTRAKULIKULER</a>.</p>
                        </div>
                    </div>
                    <div tabindex="0" class="my-2 collapse collapse-arrow border border-base-300 bg-main-color rounded-box">
                        <div class="collapse-title text-xl font-medium">
                            Bagaimana peraturan seragam di SADIS School?
                        </div>
                        <div class="collapse-content">
                            <p>SADIS School memiliki seragam formal yang digunakan untuk siswa bersekolah Senin-Jum'at. Akan tetapi siswa memiliki kebebasan berpakaian asal sopan ketika diluar pembelajaran contohnya adalah kegiatan extrakulikuler.</p>
                        </div>
                    </div>
                    <div tabindex="0" class="my-2 collapse collapse-arrow border border-base-300 bg-main-color rounded-box">
                        <div class="collapse-title text-xl font-medium">
                            Apakah terdapat transportasi sekolah di SADIS School?
                        </div>
                        <div class="collapse-content">
                            <p>SADIS School tidak memiliki dan menyediakan transportasi sekolah. Akan tetapi SADIS School dapat memberikan biaya transportasi untuk siswa yang rumahnya jauh dengan syarat tertentu.</p>
                        </div>
                    </div>
                    {{-- FAQ ITEM --}}
                </div>
            </section>
        </div>
    </section>
@endsection

@push('scripts')
<script>    
</script>
@endpush