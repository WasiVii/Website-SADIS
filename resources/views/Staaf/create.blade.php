<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Staff Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('staff.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Staffcol') text-red-500 @enderror">Staffcol</span>
                                <input type="text" name="Staffcol"
                                    class="block @error('Staffcol') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('Staffcol')}}" />
                            </label>
                            @error('Staffcol')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Divisi') text-red-500 @enderror">Divisi</span>
                                <input type="text" name="Divisi"
                                    class="block @error('Divisi') border-red-500 bg-red-100 text-red-900 @enderror w-full mt-1 rounded-md"
                                    placeholder="" value="{{old('Divisi')}}" />
                            </label>
                            @error('Divisi')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('Users_id') text-red-500 @enderror">Users ID</span>
                                <select id="select" name="Users_id"
                                    class="block appearance-none w-full bg-white border border-gray-300 py-2 px-3 rounded-md leading-tight focus:outline-none focus:shadow-outline">
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
                        <button type="submit"
                            class="text-white bg-blue-600 rounded text-sm px-5 py-2.5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
