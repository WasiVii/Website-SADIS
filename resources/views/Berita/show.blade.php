<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Berita') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full lg:w-1/2">
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b">
                        <h3 class="text-lg font-semibold">{{ $berita->Judul }}</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            @empty($berita->photo)
                                <img src="{{ url('images/nophoto.jpg') }}" alt="" class="w-12 h-12 rounded-full">
                            @else
                                <img src="{{ url('images') }}/{{ $berita->photo }}" alt="" class="w-12 h-12 rounded-full">
                            @endempty
                        </div>
                        <div class="mb-4">
                            <label for="Isi_Berita" class="block mb-2">Isi Berita</label>
                            <input type="text" class="w-full px-4 py-2 rounded-md border-gray-300 bg-gray-50" id="Isi_Berita" name="Isi_Berita" value="{{ $berita->Isi_Berita }}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="Tanggal_Publikasi" class="block mb-2">Tanggal Publikasi</label>
                            <input type="text" class="w-full px-4 py-2 rounded-md border-gray-300 bg-gray-50" id="Tanggal_Publikasi" name="Tanggal_Publikasi" value="{{ $berita->Tanggal_Publikasi }}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="Staff_id" class="block mb-2">Staff id</label>
                            <textarea class="w-full px-4 py-2 rounded-md border-gray-300 bg-gray-50" id="Staff_id" name="Staff_id" rows="3" disabled>{{ $berita->Staff_id }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
