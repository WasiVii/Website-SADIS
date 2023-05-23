@extends('layouts/app')
 
@section('title', 'PPDB')

@section('content')
    <section class="flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Penerimaan Peserta Didik Baru (PPDB)
                    </p>
                    </div>
                </div>
            </section>
            <section class="mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="card-body">
                            <p class="normal-case text-4xl font-bold">Mohon Maaf</p>
                            <p>Pendaftaran Peserta Didik Baru Kelas Reguler SADIS School Tahun Ajaran 2023/2024 Belum Dibuka. Pastikan untuk selalu mengecek website SADIS School dan akun official Instagram kami</p>
                            <div class="card-actions justify-end">
                            <button class="btn btn-primary mt-2" disabled>Pendaftaran Siswa</button>
                            </div>
                        </div>
                        <figure class="h-96"><img src="https://cdn.pixabay.com/photo/2018/02/17/17/33/sorry-3160426_960_720.png" class="object-cover" alt="School"/></figure>
                </div>
            </section>
        </div>
    </section>
@endsection

