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
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @foreach ($guru as $g)
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        @empty($g->photo)
                            <img src="{{ url('images/nophoto.jpg') }}" alt="">
                        @else
                            <img src="{{ url('images') }}/{{ $g->photo }}" alt="" class="w-full h-48 object-cover object-center">
                        @endempty
                        <div class="px-6 py-4">
                            <h2 class="text-lg font-medium text-gray-800 mb-2">{{ $g->Nama_Guru }}</h2>
                            Mata Pelajaran : <p class="text-sm text-gray-600 mb-4">{{ $g->Mata_Pelajaran }}</p>
                            Jenis Kelamin : <p class="text-gray-700 text-base">{{ $g->Jenis_Kelamin }}</p>
                            Alamat : <p class="text-gray-700 text-base">{{ $g->Alamat }}</p>
                            Nomor Telepon : <p class="text-gray-700 text-base">{{ $g->Nomor_Telepon }}</p>
                            Admin Pembuat :
                            <p class="text-gray-700 text-base">
                                {{ $g->user }}
                            </p>
                            Kelas Yang di Ajar :
                            <p class="text-gray-700 text-base">
                                {{ $g->kelas }}
                            </p>
                            Mapel Yang di Ajar :
                            <p class="text-gray-700 text-base">
                                {{ $g->mapel }}
                            </p>

                            <div class="flex justify-between items-center">
                                <a href="{{ route('guru.show', $g->id) }}" class="bg-purple-500 text-white px-4 py-2 rounded-lg">Show</a>
                                <a href="{{ route('guru.edit', $g->id) }}" class="bg-cyan-500 text-white px-4 py-2 rounded-lg">Edit</a>
                                <form action="{{ route('guru.destroy', $g->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        </div>
        </x-app-layout>
