<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Guru') }}
        </h2>
    </x-slot>
    <div class="mb-10">
        <a href="{{ route('guru.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg">Create</a>
    </div>
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            {{-- @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif --}}
            @foreach ($guru as $g)
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        @empty($g->photo)
                            <img src="{{ url('images/nophoto.jpg') }}" alt="">
                        @else
                            <img src="{{ url('images') }}/{{ $g->photo }}" alt="" class="w-full h-48 object-cover object-center">
                        @endempty
                        <div class="px-6 py-4">
    <h2 style="text-align: center" class="text-lg font-medium text-gray-800 mb-2">Nama : {{ $g->Nama_Guru }}</h2>
    <p class="text-gray-700 text-base">Jenis Kelamin&nbsp;: {{ $g->Jenis_Kelamin }}</p>
    <p class="text-gray-700 text-base">Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $g->Alamat }}</p>
    <p class="text-gray-700 text-base">Nomor Telepon&nbsp;&nbsp;: {{ $g->Nomor_Telepon }}</p>
    <p class="text-gray-700 text-base">Admin Pembuat&nbsp;&nbsp;: {{ $g->user }}</p>
    <p class="text-gray-700 text-base">Kelas Yang di Ajar&nbsp;&nbsp;: {{ $g->kelas }}</p>
    <p class="text-gray-700 text-base">Mata Pelajaran Yang di Ajar&nbsp;&nbsp;: {{ $g->mapel }}</p>

    <div class="flex justify-between items-center">
        <a href="/profile/data-guru" class="bg-purple-500 text-white px-4 py-2 rounded-lg">Show</a>
        <a href="{{ route('guru.edit', $g->id) }}" class="bg-cyan-500 text-white px-4 py-2 rounded-lg">Edit</a>
        <a href="{{ route('guru.destroy', $g->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">Delete</a>
    </div>
</div>

                    </div>
                </div>
            @endforeach
        </div>

        </div>
        </x-app-layout>
