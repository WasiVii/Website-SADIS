<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Kelas Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('kelas.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Nama_Kelas') text-red-500 @enderror">Nama Kelas</span>
                                <input type="text" name="Nama_Kelas"
                                    class="block @error('Nama_Kelas') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder="" value="{{old('Nama_Kelas')}}" />
                            </label>
                            @error('Nama_Kelas')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Tahun_Pelajaran') text-red-500 @enderror">Tahun Pelajaran</span>
                                <input
                                    class="block @error('Tahun_Pelajaran') border-red-500  bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    name="Tahun_Pelajaran" rows="3" value="{{old('Tahun_Pelajaran')}}" type="date">
                            </label>
                            @error('Tahun_Pelajaran')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Wali_Kelas') text-red-500 @enderror">Wali Kelas</span>
                                <input type="text" name="Wali_Kelas"
                                    class="block my-5 input-bordered input w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                        @error('Wali_Kelas')
                        <div class="flex items-center text-sm text-red-600">
                        {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                            <span class="text-gray-700 @error('Array_Siswa') text-red-500 @enderror">Jumlah Siswa</span>
                            <input type="number" name="Array_Siswa"
                                                            class="block my-5 input-bordered input w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                        @error('Array_Siswa')
                        <div class="flex items-center text-sm text-red-600">
                        {{ $message }}
                        </div>
                        @enderror
                            <button type="submit"
                                                    class="text-white bg-blue-600 rounded text-sm px-5 py-2.5">Submit</button>
                                                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </x-app-layout>
