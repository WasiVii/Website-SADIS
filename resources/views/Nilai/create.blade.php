<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Nilai Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('nilai.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Siswa_id') text-red-500 @enderror">Nama Siswa</span>
                                <select id="select" name="Siswa_id"
                                    class="block appearance-none my-5 input-bordered input w-full bg-white border border-gray-300 py-2 px-3 rounded-md leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="#">Nama Siswa</option>
                                    @foreach($siswa as $sws)
                                    <option value="{{$sws->id}}">{{$sws->Nama_Siswa}}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('Siswa_id')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Mata_Pelajaran_id') text-red-500 @enderror">Mata Pelajaran</span>
                                <select id="select" name="Mata_Pelajaran_id"
                                    class="block appearance-none my-5 input-bordered input w-full bg-white border border-gray-300 py-2 px-3 rounded-md leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="#">Masukan Mata Pelajaran</option>
                                    @foreach($mapel as $mpl)
                                    <option value="{{$mpl->id}}">{{$mpl->Nama_Mata_Pelajaran}}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('Mata_Pelajaran_id')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Nilai') text-red-500 @enderror">Nilai</span>
                                <input type="text" name="Nilai"
                                    class="block @error('Nilai') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder="" value="{{old('Nilai')}}" />
                            </label>
                            @error('Nilai')
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
