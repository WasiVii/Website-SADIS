@extends('layouts/app')
 
@section('title', 'Sarana & Prasarana')

@php
$sarana1 = array(
    'name' => 'Kantin',
    'ketersediaan' => '4 Ruang',
    'lokasi' => 'Bangunan paling timur dan paling barat'
);

$sarana2 = array(
    'name' => 'Gazebo',
    'ketersediaan' => '10 Ruang',
    'lokasi' => 'Setiap sudut sekolah'
);

$sarana3 = array(
    'name' => 'Masjid',
    'ketersediaan' => '1 Masjid',
    'lokasi' => 'Dekat pintu masuk sekolah'
);

$sarana4 = array(
    'name' => 'Kelas',
    'ketersediaan' => '40 Ruang',
    'lokasi' => 'Seluruh sekolah'
);

$data_sarana = [$sarana1, $sarana2, $sarana3, $sarana4];

@endphp

@section('content')
    <section class="container flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 sm:w-screen lg:w-screen max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Sarana & Prasarana
                    </p>
                    </div>
                </div>
            </section>
            <section class="flex flex-col mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <section class="container mx-auto">
                    <div class="m-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 lg:gap-6">
                        @foreach ($data_sarana as $sarana)
                        <div class="card shadow-xl">
                        <div class="overflow-x-auto">
                            <table class="table h-full w-full mx-auto overflow-hidden">
                                <tbody>
                                <tr class="max-w-xs break-words">
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-community" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                                            <path d="M13 7l0 .01" />
                                            <path d="M17 7l0 .01" />
                                            <path d="M17 11l0 .01" />
                                            <path d="M17 15l0 .01" />
                                        </svg>
                                    </td>
                                    <td>
                                        <h1 class="px-2 text-sm">{{ $sarana['name'] }}</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-numbers" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M11 6h9" />
                                            <path d="M11 12h9" />
                                            <path d="M12 18h8" />
                                            <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4" />
                                            <path d="M6 10v-6l-2 2" />
                                        </svg>
                                    </td>
                                    <td>
                                        <h1 class="px-2 text-sm text-ellipsis">{{ $sarana['ketersediaan'] }}</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                        </svg>
                                    </td>
                                    <td class="break-all">
                                        <p class="px-2 text-sm break-all">{{ $sarana['lokasi'] }}</p>
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

