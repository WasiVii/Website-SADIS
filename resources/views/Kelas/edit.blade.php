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
                        <input type="text" name="Nama_Kelas" id="Nama_Kelas" value="{{ $kelas->Nama_Kelas }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="Tahun_Pelajaran" class="block text-sm font-medium text-gray-700">Mata Pelajaran</label>
                        <input type="text" name="Tahun_Pelajaran" id="Tahun_Pelajaran" value="{{ $kelas->Tahun_Pelajaran }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="Wali_Kelas" class="block text-sm font-medium text-gray-700">Wali_Kelas</label>
                        <textarea name="Wali_Kelas" id="Wali_Kelas" rows="3" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $kelas->Wali_Kelas }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="Array_Siswa" class="block text-sm font-medium text-gray-700">Array Siswa</label>
                        <input type="text" name="Array_Siswa" id="Array_Siswa" value="{{ $kelas->Array_Siswa }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <button type="submit" class="text-white bg-blue-600 rounded text-sm px-5 py-2.5">Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
