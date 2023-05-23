@extends('layouts/app')
 
@section('title', 'Galeri')

@php
$galeri1 = array(
    'image' => '/assets/img/galeri/galeri1.png'
);
$galeri2 = array(
    'image' => '/assets/img/galeri/galeri2.png'
);
$galeri3 = array(
    'image' => '/assets/img/galeri/galeri3.png'
);
$galeri4 = array(
    'image' => '/assets/img/galeri/galeri4.png'
);
$galeri5 = array(
    'image' => '/assets/img/galeri/galeri5.png'
);
$data_images = [$galeri1, $galeri2, $galeri3, $galeri4, $galeri5];
@endphp

@section('content')
    <section class="flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg max-w-7xl">
                <div class="px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Galeri Foto Sekolah
                    </p>
                    </div>
                </div>
            </section>
            <section class="mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg max-w-7xl">
                <section class="flex flex-col mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <section class="container mx-auto">
                    <div class="m-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 md:gap-4 lg:gap-6">
                        @foreach ($data_images as $galeri)
                        <div class="card mt-5 bg-main-color shadow-xl">
                            <figure class="px-10 pt-10">
                                <img
                                    class="h-60"
                                    src="{{ $galeri['image'] }}"
                                    alt=""
                                />
                            </figure>
                        </div>
                        @endforeach
                    </div>
                </section>
                </section>
            </section>
        </div>
    </section>
@endsection

