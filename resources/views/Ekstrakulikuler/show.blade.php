<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Ekstrakulikuler') }}
        </h2>
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">{{ $ekstrakulikuler->Judul }}</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    @empty($ekstrakulikuler->photo)
                                        <img src="{{ url('images/nophoto.jpg') }}" alt="">
                                        @else
                                        <img src="{{ url('images') }}/{{ $ekstrakulikuler->photo }}" alt="" class="w-12 h-12">
                                        @endempty
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="Nama_Ekstrakulikuler">Nama Ekstrakulikuler</label>
                        <input type="text" class="form-control" id="Nama_Ekstrakulikuler" name="Nama_Ekstrakulikuler" value="{{ $ekstrakulikuler->Nama_Ekstrakulikuler }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="Deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" value="{{ $ekstrakulikuler->Deskripsi }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</x-app-layout>
