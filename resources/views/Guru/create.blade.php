<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Guru Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('guru.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Nama_Guru') text-red-500 @enderror">Nama Guru</span>
                                <input type="text" name="Nama_Guru"
                                    class="block @error('Nama_Guru') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder="" value="{{old('Nama_Guru')}}" />
                            </label>
                            @error('Nama_Guru')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Mata_Pelajaran') text-red-500 @enderror">Mata Pelajaran</span>
                                <input
                                    class="block @error('Mata_Pelajaran') border-red-500  bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    name="Mata_Pelajaran" rows="3" value="{{old('Mata_Pelajaran')}}" type="text">
                            </label>
                            @error('Mata_Pelajaran')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                       <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Jenis_Kelamin') text-red-500 @enderror">Jenis Kelamin</span>
                                <select id="select" name="Jenis_Kelamin" class="block my-5 input-bordered input w-full border-gray-300 rounded-md">
                                    <option value="#">Pilih Jenis Kelamin</option>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </label>
                            @error('Jenis_Kelamin')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Alamat') text-red-500 @enderror">Alamat</span>
                                <input type="text" name="Alamat"
                                    class="block my-5 input-bordered input w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                        @error('Alamat')
                        <div class="flex items-center text-sm text-red-600">
                        {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                            <span class="text-gray-700 @error('Nomor_Telepon') text-red-500 @enderror">Nomor Telepon</span>
                            <input type="number" name="Nomor_Telepon"
                                                            class="block my-5 input-bordered input w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                        @error('Nomor_Telepon')
                        <div class="flex items-center text-sm text-red-600">
                        {{ $message }}
                        </div>
                        @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Kelas_id') text-red-500 @enderror">Kelas ID</span>
                                <select id="select" name="Kelas_id" class="block my-5 input-bordered input w-full border-gray-300 rounded-md">
                                    <option value="#">Silahkan Pilih Kelas </option>
                                    @foreach($kelas as $kls)
                                    <option value="{{$kls->id}}">{{$kls->Nama_Kelas}}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('Kelas_id')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                            <div class="mb-6">
                            <label class="block">
                            <span class="text-gray-700 @error('Users_id') text-red-500 @enderror">Users ID</span>
                            <select id="select" name="Users_id" class="block my-5 input-bordered input w-full border-gray-300 rounded-md">
                                <option value="#">Pilih User</option>
                            @foreach($user as $u)
                            <option value="{{$u->id}}">{{$u->name}}</option>
                            @endforeach
                            </select>
                            </label>
                            @error('Users_id')
                            <div class="flex items-center text-sm text-red-600">
                            {{ $message }}
                            </div>
                            @enderror
                            </div>
                            <div class="mb-6">
                            <label class="block">
                            <span class="text-gray-700 @error('Mata_Pelajaran_id') text-red-500 @enderror">Mata Pelajaran ID</span>
                            <select id="select" name="Mata_Pelajaran_id" class="block my-5 input-bordered input w-full border-gray-300 rounded-md">
                                <option value="">Pilih Mata Pelajaran</option>
                            @foreach($mapel as $mp)
                            <option value="{{$mp->id}}">{{$mp->Nama_Mata_Pelajaran}}</option>
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
                            <span class="sr-only">Choose File</span>
                            <input type="file" name="photo"
                            class="block my-5 input-bordered input w-full text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded -full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('photo')
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
