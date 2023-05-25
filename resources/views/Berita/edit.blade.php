<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Berita Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @dd($berita) --}}
                    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="Judul">Judul</label>
                            <input type="text" class="form-control" id="Judul" name="Judul" value="{{ $berita->Judul }}">
                        </div>

                        <div class="form-group">
                            <label for="Isi_Berita">Isi_Berita</label>
                            <input type="text" class="form-control" id="Isi_Berita" name="Isi_Berita" value="{{ $berita->Isi_Berita }}">
                        </div>

                        <div class="form-group">
                            <label for="Tanggal_Publikasi">Tanggal_Publikasi</label>
                            <input class="form-control" type="date" id="Tanggal_Publikasi" name="Tanggal_Publikasi" rows="3" value="{{ $berita->Tanggal_Publikasi }}">
                        </div>
                        <div class="form-group">
                            <label for="Staff_id">Staff_id</label>
                            <textarea class="form-control" id="Staff_id" name="Staff_id" rows="3">{{ $berita->Staff_id }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                            <img src="{{ asset('images/'.$berita->photo) }}" width="50">
                        </div>

                        <button type="Update"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
