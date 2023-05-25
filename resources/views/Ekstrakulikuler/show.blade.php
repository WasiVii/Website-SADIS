<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Ekstrakulikuler') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full lg:w-1/2">
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b">
                        <h3 class="text-lg font-semibold">{{ $ekstrakulikuler->Judul }}</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            @empty($ekstrakulikuler->photo)
                                <img src="{{ url('images/nophoto.jpg') }}" alt="" >
                            @else
                                <img src="{{ url('images') }}/{{ $ekstrakulikuler->photo }}" alt="" >
                            @endempty
                        </div>
                        <div class="mb-4">
                            <label for="Nama_Ekstrakulikuler" class="block mb-2">Nama Ekstrakulikuler</label>
                            <input type="text" class="w-full px-4 py-2 rounded-md border-gray-300 bg-gray-50" id="Nama_Ekstrakulikuler" name="Nama_Ekstrakulikuler" value="{{ $ekstrakulikuler->Nama_Ekstrakulikuler }}" disabled>
                        </div>
                        <div class="mb-4">
                            <label for="Deskripsi" class="block mb-2">Deskripsi</label>
                            <input type="text" class="w-full px-4 py-2 rounded-md border-gray-300 bg-gray-50" id="Deskripsi" name="Deskripsi" value="{{ $ekstrakulikuler->Deskripsi }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
