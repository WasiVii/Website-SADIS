<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Sarana Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('sarana.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('nama_Sarana') text-red-500 @enderror">Nama Sarana</span>
                                <input type="text" name="nama_Sarana"
                                    class="block @error('nama_Sarana') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder="" value="{{old('nama_Sarana')}}" />
                            </label>
                            @error('nama_Sarana')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Ketersediaan') text-red-500 @enderror">Ketersediaan</span>
                                <input type="text" name="Ketersediaan"
                                    class="block @error('Ketersediaan') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder="" value="{{old('Ketersediaan')}}" />
                            </label>
                            @error('Ketersediaan')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Lokasi') text-red-500 @enderror">Lokasi</span>
                                <input type="text" name="Lokasi"
                                    class="block @error('Lokasi') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder="" value="{{old('Lokasi')}}" />
                            </label>
                            @error('Lokasi')
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
