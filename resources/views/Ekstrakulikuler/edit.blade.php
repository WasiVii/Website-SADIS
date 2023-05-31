<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ekstrakulikuler Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @dd($berita) --}}
                    <form action="{{ route('ekstrakulikuler.update', $ekstrakulikuler->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="Nama_Ekstrakulikuler">Nama Ekstrakulikuler</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="Nama_Ekstrakulikuler" name="Nama_Ekstrakulikuler" value="{{ $ekstrakulikuler->Nama_Ekstrakulikuler }}">
                        </div>

                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="Deskripsi" name="Deskripsi" value="{{ $ekstrakulikuler->Deskripsi }}">
                        </div>
                         <div class="mb-4">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control my-5 input-bordered input w-full" id="photo" name="photo">
                            <img src="{{ asset('images/'.$ekstrakulikuler->photo) }}" width="50" class="mb-5">
                        </div>

                        <button type="Update"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
