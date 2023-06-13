<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Kelas Edit') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                {{-- @dd($berita) --}}
                <form action="{{ route('kelas.update', $kelas->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="Nama_Kelas" class="block text-sm font-medium text-gray-700">Nama Kelas</label>
                        <input type="text" name="Nama_Kelas" id="Nama_Kelas" value="{{ $kelas->Nama_Kelas }}" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="Tahun_Pelajaran" class="block text-sm font-medium text-gray-700">Tahun Pelajaran</label>
                        <input type="date" name="Tahun_Pelajaran" id="Tahun_Pelajaran" value="{{ $kelas->Tahun_Pelajaran }}" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="Wali_Kelas" class="block text-sm font-medium text-gray-700">Wali Kelas</label>
                        <select name="Wali_Kelas" id="Wali_Kelas" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            {{-- <option value="#">Silahkan Pilih Nama Guru</option> --}}
                            @foreach($guru as $g)
                            <option value="{{$g->id}}" @if($g->id == $kelas->Wali_Kelas) selected @endif>{{$g->Nama_Guru}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="text-white bg-blue-600 rounded text-sm px-5 py-2.5">Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
