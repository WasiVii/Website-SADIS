<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Siswa Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('siswa.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Nama_Siswa') text-red-500 @enderror">Nama_Siswa</span>
                                <input type="text" name="Nama_Siswa"
                                    class="block @error('Nama_Siswa') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('Nama_Siswa')}}" />
                            </label>
                            @error('Nama_Siswa')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Tanggal_Lahir') text-red-500 @enderror">Tanggal Lahir</span>
                                <input
                                    class="block @error('Tanggal_Lahir') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="Tanggal_Lahir" rows="3" value="{{old('Tanggal_Lahir')}}" type="date">
                            </label>
                            @error('Tanggal_Lahir')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Alamat') text-red-500 @enderror">Alamat</span>
                                <input type="text" name="Alamat"
                                class="block w-full mt-1 text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('Alamat')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-6">
                             <label class="block">
                                 <span class="text-gray-700 @error('Jenis_Kelamin') text-red-500 @enderror">Jenis Kelamin</span>
                                 <select id="select" name="Jenis_Kelamin" class="block w-full mt-1 border-gray-300 rounded-md">
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
                                <span class="text-gray-700 @error('Nomor_Telepon') text-red-500 @enderror">Nomor Telepon</span>
                                <input type="number" name="Nomor_Telepon"
                                class="block w-full mt-1 text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('Nomor_Telepon')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                          <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Email') text-red-500 @enderror">Email</span>
                                <input type="email" name="Email"
                                class="block w-full mt-1 text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('Email')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Tahun_Lulus') text-red-500 @enderror">Tahun Lulus</span>
                                <input type="date" name="Tahun_Lulus"
                                class="block w-full mt-1 text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('Tahun_Lulus')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                            <div class="mb-6">
                            <label class="block">
                            <span class="text-gray-700 @error('Users_id') text-red-500 @enderror">Users ID</span>
                            <select id="select" name="Users_id" class="block w-full mt-1 border-gray-300 rounded-md">
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
                            <span class="text-gray-700 @error('Kelas_id') text-red-500 @enderror">Kelas ID</span>
                            <select id="select" name="Kelas_id" class="block w-full mt-1 border-gray-300 rounded-md">
                            @foreach($kelas as $kls)
                            <option value="#">Silahkan Pilih Kelas </option>
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
                            <span class="text-gray-700 @error('Ekstrakulikuler_id') text-red-500 @enderror">Ekstrakulikuler ID</span>
                            <select id="select" name="Ekstrakulikuler_id" class="block w-full mt-1 border-gray-300 rounded-md">
                            @foreach($ekstrakulikuler as $e)
                            <option value="{{$e->id}}">{{$e->Nama_Ekstrakulikuler}}</option>
                            @endforeach
                            </select>
                            </label>
                            @error('Ekstrakulikuler_id')
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
