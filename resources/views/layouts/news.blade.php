@extends('layouts/app')
 
@section('title', 'News')

@section('content')
    <section class="container flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 w-screen max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Berita Sekolah 
                    </p>
                    </div>
                </div>
            </section>
            <section class="flex flex-col mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <section class="container mx-auto">
                    <div class="m-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2 md:gap-4 lg:gap-6">
                        @foreach ($berita as $article)
                        <div class="card mt-5 bg-main-color hover:shadow-xl">
                            <div class="card-body">
                            <a href="/news/{{$article->id}}" class="text-center">
                                <h1 class="btn btn-ghost text-xl font-semibold text-gray-800 dark:text-white">{{ $article->Judul }}</h1>
                            </a>
                            <p class="pb-2 text-gray-700 dark:text-gray-400">{{ $article->Isi_Berita }}</p>
                                <p class="pb-2 text-gray-700 dark:text-gray-400">
                                    <div class="flex flex-col w-full lg:flex-row">
                                        <div class="grid flex-grow rounded-box place-items-center">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                                </svg>
                                            </div>
                                            <p class="text-blue-color">{{ $article->Staff_id }}</p>
                                        </div> 
                                        <div class="grid flex-grow rounded-box place-items-center">
                                            <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                                <path d="M16 3l0 4" />
                                                <path d="M8 3l0 4" />
                                                <path d="M4 11l16 0" />
                                                <path d="M8 15h2v2h-2z" />
                                            </svg>
                                            </div>
                                            <p class="text-blue-color">{{ $article->Tanggal_Publikasi }}</p>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </section>
        </div>
    </section>
@endsection


