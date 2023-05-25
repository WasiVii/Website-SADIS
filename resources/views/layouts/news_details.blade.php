@extends('layouts/app')
 
@section('title', 'News')


@section('content')
    <section class="container flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 sm:w-screen lg:w-screen max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Berita Sekolah
                    </p>
                    </div>
                </div>
            </section>
            <section class="mt-5 card shadow">
                <div class="card-body">
                    <div class="px-2 flex flex-col gap-5">
                        <div class="text-sm breadcrumbs">
                            <ul>
                                <li><a href="/">HOME</a></li> 
                                <li><a href="/news">NEWS</a></li> 
                                <li>{{ $berita->Judul }}</li>
                            </ul>
                        </div>
                        <h1 class="text-2xl font-medium">{{ $berita->Judul }}</h1>
                            <div class="flex flex-col w-full lg:flex-row">
                                <div class="grid flex-grow">
                                    <div class="flex flex-row rounded-box place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        <p class="text-blue-color">{{ $berita->Staff_id }}</p>
                                    </div> 
                                </div> 
                                <div class="grid flex-grow">
                                    <div class="flex flex-row rounded-box place-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                                <path d="M16 3l0 4" />
                                                <path d="M8 3l0 4" />
                                                <path d="M4 11l16 0" />
                                                <path d="M8 15h2v2h-2z" />
                                            </svg>
                                        <p class="text-blue-color">{{ $berita->Tanggal_Publikasi }}</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <section class="mt-5 card shadow">
                <div class="card-body">
                    <div class="px-2 flex flex-col gap-5">
                        <figure class="mb-2 px-2 rounded justify-center items-center">
                            <img src="{{ url('images') }}/{{ $berita->photo }}" class="object-cover" alt="{{ $berita->Judul }}"/>
                        </figure>
                        <p class="pb-2 text-gray-700 dark:text-gray-400">{{ $berita->Isi_Berita }}</p>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection


