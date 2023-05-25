@extends('layouts/app')
 
@section('title', 'Extrakulikuler')

@section('content')
    <section class="container flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 sm:w-screen lg:w-screen max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Extrakulikuler Sekolah
                    </p>
                    </div>
                </div>
            </section>
            <section class="mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <figure class="h-96"><img src="https://img.freepik.com/free-vector/hand-drawn-national-sports-day-illustration_52683-67356.jpg?w=1000" class="object-cover" alt="School"/></figure>
                        <div class="card-body">
                            <p class="normal-case text-4xl font-bold">Extrakulikuler</p>
                            <p>Pengembangan diri adalah kegiatan yang bertujuan memberikan kesempatan kepada peserta didik untuk mengembangkan dan mengekspresikan diri sesuai dengan kebutuhan, bakat, minat, setiap peserta didik sesuai dengan kondisi SADIS School</p>
                            <div class="card-actions justify-end">
                            <button class="btn btn-primary mt-2" disabled>Pendaftaran Extrakulikuler</button>
                            </div>
                        </div>
                </div>
            </section>
            <section class="flex flex-col mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 mx-10  text-4xl font-bold leading-tight text-gray-900 sm:leading-tight lg:leading-tight font-pj">
                        Macam Extrakulikuler SADIS School
                    <hr class="border-black" />
                    </p>
                </div>
                <section class="container mx-auto">
                    <div class="m-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 md:gap-4 lg:gap-6">
                        @foreach ($extrakulikuler as $extra)
                        <div class="card mt-5 bg-main-color shadow-xl">
                            <figure class="px-10 pt-10">
                                <img
                                    class="h-60 rounded-full"
                                    src="{{ url('images') }}/{{ $extra->photo }}"
                                    alt=""
                                />
                            </figure>
                            <div class="card-body items-center text-center">
                                <h1 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $extra->Nama_Ekstrakulikuler }}</h1>

                                <p class="pb-2 text-gray-700 dark:text-gray-400">{{ $extra->Deskripsi }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </section>
        </div>
    </section>
@endsection

