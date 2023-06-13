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
                            <select id="select" name="Wali_Kelas" class="block my-5 input-bordered input w-full border-gray-300 rounded-md">
                                <option value="#">Silahkan Pilih Wali Kelas </option>
                            @foreach($guru as $g)
                            <option value="{{$g->id}}">{{$g->Nama_Guru}}</option>
                            @endforeach
                            </select>
                            </label>
                            @error('Wali_Kelas')
                        </div>
                         <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                            <button type="submit"
                                                    class="text-white bg-blue-600 rounded text-sm px-5 py-2.5">Submit</button>
                                                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </x-app-layout>
