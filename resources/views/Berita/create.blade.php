<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Berita Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Judul') text-red-500 @enderror">Judul</span>
                                <input type="text" name="Judul"
                                    class="block @error('Judul') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('Judul')}}" />
                            </label>
                            @error('Judul')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Isi_Berita') text-red-500 @enderror">Isi Berita</span>
                                <textarea
                                    class="block @error('Isi_Berita') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="Isi_Berita" rows="3">{{old('Isi_Berita')}}</textarea>
                            </label>
                            @error('Isi_Berita')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Tanggal_Publikasi') text-red-500 @enderror">Tanggal Publikasi</span>
                                <input type="date" name="Tanggal_Publikasi"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('Tanggal_Publikasi')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Staff_id') text-red-500 @enderror">Staff ID</span>
                               <select id="select" name="Staff_id" class="custom-select">
                                    @foreach($staff as $stf)
                                    <option value="{{$stf->id}}">{{$stf->Staffcol}}</option>
                                    @endforeach
                            </label>
                            @error('Staff_id')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="photo"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('photo')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
