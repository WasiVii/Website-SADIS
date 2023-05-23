@extends('layouts/app')
 
@section('title', 'Profil Sekolah')

@section('content')
    <section class="flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Profile Sekolah
                    </p>
                    </div>
                </div>
            </section>
            <section class="mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <figure><img src="https://wallpaperaccess.com/full/2931337.jpg" class="object-cover" alt="School"/></figure>
                        <div class="card-body">
                            <p class="normal-case text-4xl font-bold">SADISschool</p>
                            <p>SADIS School adalah sekolah menengah atas yang berbasis Teknologi Informasi dan berwawasan lingkungan, mantap dalam IMTAQ, unggul dalam IPTEK, berprestasi dalam olahraga dan seni serta siap bersaing dalam menghadapi era global.</p>
                            <div class="card-actions justify-end">
                            <a href="/ppdb"><button class="btn btn-primary mt-2">Pendaftaran Siswa</button></a>
                            </div>
                        </div>
                </div>
            </section>
        </div>
    </section>
@endsection

