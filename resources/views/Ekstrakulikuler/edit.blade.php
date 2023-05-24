<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Esktrakulikuler Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('ekstrakulikuler.update',$ekstrakulikuler->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                         <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Nama_Ekstrakulikuler') text-red-500 @enderror">Nama Ekstrakulikuler</span>
                                <input type="text" name="Nama_Ekstrakulikuler"
                                    class="block @error('Nama_Ekstrakulikuler') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('Nama_Ekstrakulikuler')}}" />
                            </label>
                            @error('Nama_Ekstrakulikuler')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Deskripsi') text-red-500 @enderror">Deskripsi</span>
                                <textarea
                                    class="block @error('Deskripsi') border-red-500  bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    name="Deskripsi" rows="3">{{old('Deskripsi')}}</textarea>
                            </label>
                            @error('Deskripsi')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                          <div class="mb-6">
                            <label class="block">
                                <span class="sr-only">Choose File</span>
                                <input type="file" name="Photo"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('Photo')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <button type="Update"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
