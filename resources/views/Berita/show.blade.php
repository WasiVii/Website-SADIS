<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Berita') }}
        </h2>
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">{{ $berita->Judul }}</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    @empty($berita->photo)
                                        <img src="{{ url('images/nophoto.jpg') }}" alt="">
                                        @else
                                        <img src="{{ url('images') }}/{{ $berita->photo }}" alt="" class="w-12 h-12">
                                        @endempty
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="Isi_Berita">Isi Berita</label>
                        <input type="text" class="form-control" id="Isi_Berita" name="Isi_Berita" value="{{ $berita->Isi_Berita }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="Tanggal_Publikasi">Tanggal Publikasi</label>
                        <input type="text" class="form-control" id="Tanggal_Publikasi" name="Tanggal_Publikasi" value="{{ $berita->Tanggal_Publikasi }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="Staff_id">Staff id</label>
                        <textarea class="form-control" id="Staff_id" name="Staff_id" rows="3" disabled>{{ $berita->Staff_id }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</x-app-layout>
