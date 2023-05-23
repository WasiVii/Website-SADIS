@extends('layouts/app')
 
@section('title', 'Data Siswa')

@php
$siswa1 = array(
    'name' => 'Abdul Dika',
    'no_telepon' => '089111222333',
    'email' => 'Dika@gmail.com',
    'photo' => 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/genshin-impact-wanderer/sticker_4.png',
    'tahun_lulus' => '2015'
);

$siswa2 = array(
    'name' => 'M. Rizki',
    'no_telepon' => '089222333444',
    'email' => 'Rizki@gmail.com',
    'photo' => 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/genshin-impact-tighnari/sticker_1.png',
    'tahun_lulus' => '2024'
);

$siswa3 = array(
    'name' => 'Ikhsan Mulyadi',
    'no_telepon' => '089333444555',
    'email' => 'Ikhsan@gmail.com',
    'photo' => 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/genshin-impact-baizhu/sticker_2.png',
    'tahun_lulus' => '2021'
);

$siswa4 = array(
    'name' => 'Fitri Putri Rahmadani',
    'no_telepon' => '089444555666',
    'email' => 'Fitri@gmail.com',
    'photo' => 'https://s3.getstickerpack.com/storage/uploads/sticker-pack/genshin-impact-faruzan/sticker_2.png',
    'tahun_lulus' => '2020'
);

$data_siswa = [$siswa1, $siswa2, $siswa3, $siswa4];

@endphp

@section('content')
    <section class="flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Data siswa
                    </p>
                    </div>
                </div>
            </section>
            <section class="flex flex-col mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <section class="container mx-auto">
                    <div class="m-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 md:gap-4 lg:gap-6">
                        @foreach ($data_siswa as $siswa)
                        <div class="card shadow-xl">
                        <figure class="px-10 pt-10">
                            <img
                                class="h-60 rounded-full"
                                src="{{ $siswa['photo'] }}"
                                alt=""
                            />
                        </figure>
                        <div class="overflow-x-auto">
                            <table class="table h-full w-full mx-auto overflow-hidden text-center">
                                <tbody>
                                <tr class="max-w-xs break-words">
                                    <td>
                                        <h1 class="px-2 text-sm">{{ $siswa['name'] }}</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 class="px-2 text-sm text-ellipsis">{{ $siswa['no_telepon'] }}</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 class="px-2 text-sm text-ellipsis">{{ $siswa['email'] }}</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 class="px-2 text-sm text-ellipsis">Lulus tahun {{ $siswa['tahun_lulus'] }}</h1>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </section>
        </div>
    </section>
@endsection

