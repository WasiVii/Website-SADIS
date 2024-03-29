<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Sarana Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @dd($sarana) --}}
                    <form action="{{ route('sarana.update', $sarana->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="nama_Sarana">Nama Sarana</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="nama_Sarana" name="nama_Sarana" value="{{ $sarana->nama_Sarana }}">
                        </div>

                        <div class="form-group">
                            <label for="Ketersediaan">Ketersediaan</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="Ketersediaan" name="Ketersediaan" value="{{ $sarana->Ketersediaan }}">
                        </div>

                        <div class="form-group">
                            <label for="Lokasi">Lokasi</label>
                            <input class="form-control my-5 input-bordered input w-full" type="text" id="Lokasi" name="Lokasi" rows="3" value="{{ $sarana->Lokasi }}">
                        </div>
                        <button type="Update"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
