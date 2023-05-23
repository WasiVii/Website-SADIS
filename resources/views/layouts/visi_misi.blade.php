@extends('layouts/app')
 
@section('title', 'Visi & Misi')

@section('content')
    <section class="flex flex-col min-h-screen py-10">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <section class="py-10 bg-main-color rounded-lg">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                    <p class="mt-5 text-4xl font-bold leading-tight text-gray-900 sm:leading-tight sm:text-5xl lg:text-6xl lg:leading-tight font-pj">
                        Visi dan Misi Sekolah
                    </p>
                    </div>
                </div>
            </section>
            <section class="mt-5 card card-side bg-base-100 shadow-xl container mx-auto rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="card-body">
                            <p class="normal-case text-4xl font-bold">Visi</p>
                            <div class="chat chat-start">
                                <div class="chat-bubble chat-bubble-primary">SADIS School adalah sekolah menengah atas yang berbasis Teknologi Informasi dan berwawasan lingkungan, mantap dalam IMTAQ, unggul dalam IPTEK, berprestasi dalam olahraga dan seni serta siap bersaing dalam menghadapi era global.</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="normal-case text-4xl font-bold">Misi</p>
                            <div class="chat chat-start">
                                <div class="chat-bubble chat-bubble-info">Menciptakan lingkungan yang harmonis dalam upaya meningkatkan keimanan dan ketaqwaan terhadap Tuhan yang Maha Kuasa.</div>
                            </div>
                            <div class="chat chat-end">
                                <div class="chat-bubble chat-bubble-success">Menciptakan lingkungan pembelajaran yang kondusif dalam upaya meningkatkan mutu pembelajaran.</div>
                            </div>
                            <div class="chat chat-start">
                                <div class="chat-bubble chat-bubble-warning">Menciptakan lingkungan sekolah yang berwawasan adiwiyata, bersih, hijau dan terpelihara.</div>
                            </div>
                            <div class="chat chat-end">
                                <div class="chat-bubble chat-bubble-accent">Menumbuh kembangkan semangat keunggulan dan bernalar sehat kepada para peserta didik, guru dan karyawan sehingga berkemauan kuat untuk terus maju.</div>
                            </div>
                            <div class="chat chat-start">
                                <div class="chat-bubble chat-bubble-error">Meraih prestasi terbaik baik akademik maupun non akademik mulai tingkat provinsi dan nasional maupun internasional.</div>
                            </div>
                            <div class="chat chat-end">
                                <div class="chat-bubble chat-bubble-secondary">Mengembangkan Teknologi Informasi dan komunikasi dalam pembelajaran dan administrasi sekolah.</div>
                            </div>
                        </div>
                </div>
            </section>
        </div>
    </section>
@endsection

