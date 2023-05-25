<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Berita Edit') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                {{-- @dd($berita) --}}
                <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="Nama_Guru" class="block text-sm font-medium text-gray-700">Nama Guru</label>
                        <input type="text" name="Nama_Guru" id="Nama_Guru" value="{{ $guru->Nama_Guru }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="Mata_Pelajaran" class="block text-sm font-medium text-gray-700">Mata Pelajaran</label>
                        <input type="text" name="Mata_Pelajaran" id="Mata_Pelajaran" value="{{ $guru->Mata_Pelajaran }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="Jenis_Kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                         <select id="select" name="Jenis_Kelamin" class="block w-full mt-1 border-gray-300 rounded-md">
                                    <option value="#">Pilih Jenis Kelamin</option>
                                    <option value="Jenis_Kelamin">Laki - Laki</option>
                                    <option value="Jenis_Kelamin">Perempuan</option>
                               </select>
                    </div>
                    <div class="mb-4">
                        <label for="Alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <textarea name="Alamat" id="Alamat" rows="3" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $guru->Alamat }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="Nomor_Telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" name="Nomor_Telepon" id="Nomor_Telepon" value="{{ $guru->Nomor_Telepon }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="Kelas_id" class="block text-sm font-medium text-gray-700">Kelas ID</label>
                        <select name="Kelas_id" id="Kelas_id" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @foreach($kelas as $kls)
                            <option  value="{{$kls->id}}">{{$kls->Nama_Kelas}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="Users_id" class="block text-sm font-medium text-gray-700">Users ID</label>
                        <select name="Users_id" id="Users_id" class="mt-1 focus:ring -blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @foreach($user as $u)
                            <option value="{{$u->id}}" >{{$u->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="Mata_Pelajaran_id" class="block text-sm font-medium text-gray-700">Mata Pelajaran ID</label>
                        <select name="Mata_Pelajaran_id" id="Mata_Pelajaran_id" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @foreach($mapel as $mp)
                            <option value="{{$mp->id}}">{{$mp->Nama_Mata_Pelajaran}}</option>
                            @endforeach
                    </select>
                    </div>
                    <div class="mb-4">
                        <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                            <input type="file" name="photo" id="photo" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <img src="{{ asset('images/'.$guru->photo) }}" width="50">
                        </div>
                    <button type="submit" class="text-white bg-blue-600 rounded text-sm px-5 py-2.5">Update</button>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </x-app-layout>
