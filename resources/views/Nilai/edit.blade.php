<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Nilai Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @dd($nilai) --}}
                    <form action="{{ route('nilai.update', $nilai->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="Nilai">Nilai</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="Nilai" name="Nilai" value="{{ $nilai->Nilai }}">
                        </div>
                        <div class="form-group" hidden>
                            <label for="Siswa_id">Siswa id</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="Siswa_id" name="Siswa_id" value="{{ $nilai->Siswa_id }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="Mata_Pelajaran_id">Mata Pelajaran id</label>
                            <input class="form-control my-5 input-bordered input w-full" type="text" id="Mata_Pelajaran_id" name="Mata_Pelajaran_id" rows="3" value="{{ $nilai->Mata_Pelajaran_id }}">
                        </div>
                        <button type="Update"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
