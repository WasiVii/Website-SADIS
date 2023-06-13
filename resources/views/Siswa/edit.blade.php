<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Siswa Edit') }}
        </h2>
    </x-slot>
    <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                {{-- @dd($berita) --}}
                <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="Nama_Siswa" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                        <input type="text" name="Nama_Siswa" id="Nama_Siswa" value="{{ $siswa->Nama_Siswa }}" class=" my-5 input-bordered input w-full focus:ring-blue-500 focus:border-blue-500 block shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="Tanggal_Lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" name="Tanggal_Lahir" id="Tanggal_Lahir" value="{{ $siswa->Tanggal_Lahir }}" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                     <div class="mb-4">
                        <label for="Alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <textarea name="Alamat" id="Alamat" rows="3" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $siswa->Alamat }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="Jenis_Kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <select id="select" name="Jenis_Kelamin" class="block my-5 input-bordered input w-full border-gray-300 rounded-md">
                            <option value="#">Pilih Jenis Kelamin</option>
                            <option value="L">Laki - Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="Nomor_Telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" name="Nomor_Telepon" id="Nomor_Telepon" value="{{ $siswa->Nomor_Telepon }}" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                     <div class="mb-4">
                        <label for="Email" class="block text-sm font-medium text-gray-700">Email</label>
                        <textarea name="Email" id="Email" rows="3" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $siswa->Email }}</textarea>
                    </div>
                     <div class="mb-4">
                        <label for="Tahun_Lulus" class="block text-sm font-medium text-gray-700">Tahun Lulus</label>
                        <input type="date" name="Tahun_Lulus" id="Tahun_Lulus" value="{{ $siswa->Tahun_Lulus }}" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="Kelas_id" class="block text-sm font-medium text-gray-700">Kelas ID</label>
                        <select name="Kelas_id" id="Kelas_id" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @foreach($kelas as $kls)
                            <option  value="{{$kls->id}}">{{$kls->Nama_Kelas}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="Users_id" class="block text-sm font-medium text-gray-700">Users ID</label>
                        <select name="Users_id" id="Users_id" class="focus:ring -blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @if ($user->isEmpty())
                                <option value="#">Silahkan Masukan User</option>
                            @else
                            @foreach($user as $u)
                            <option value="{{$u->id}}" >{{$u->name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="Ekstrakulikuler_id" class="block text-sm font-medium text-gray-700">Ekstrakulikuler ID</label>
                        <select name="Ekstrakulikuler_id" id="Ekstrakulikuler_id" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @foreach($ekstrakulikuler as $e)
                            <option value="{{$e->id}}">{{$e->Nama_Ekstrakulikuler}}</option>
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
