@extends('layouts/app')

@section('title', 'Data Guru')

@section('content')
    <section class="container flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 sm:w-screen lg:w-screen max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Data Guru
                    </p>
                    </div>
                </div>
            </section>
            <section class="flex flex-col mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <section class="container mx-auto">
                    <div class="m-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 lg:gap-6">
                        @foreach ($guru as $data_guru)
                        <div class="card shadow-xl">
                            <figure class="px-10 pt-10">
                                <img
                                    class="h-60 rounded-full"
                                    src="{{ url('images') }}/{{ $data_guru->photo }}"
                                    alt=""
                                />
                            </figure>
                            <div class="overflow-x-auto">
                                <ul class="mt-5 menu bg-base-100 w-full p-2 rounded-box">
                                    <li class="w-full">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                                <path d="M16 19h6" />
                                                <path d="M19 16v6" />
                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                                            </svg>
                                            <h1 class="font-bold">{{ $data_guru->Nama_Guru }}</h1>
                                        </div>
                                    </li>
                                    <li class="w-full">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                            </svg>
                                            {{ $data_guru->Nomor_Telepon }}
                                        </div>
                                    </li>
                                    <li class="w-full">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-check" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2" />
                                                <path d="M19 13.488v-1.488h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h4.525" />
                                                <path d="M15 19l2 2l4 -4" />
                                            </svg>
                                            {{ $data_guru->Alamat }}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </section>
        </div>
    </section>
@endsection


