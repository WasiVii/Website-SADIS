<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Permissions Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('permissions.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('name') text-red-500 @enderror">Name</span>
                                    <input value="{{ old('name') }}" name="name"
                                    class="block @error('name') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder=""/>
                            </label>
                            @error('name')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <div class="mb-6" hidden>
                            <label class="block">
                                <span class="text-gray-700 @error('guard_name') text-red-500 @enderror">Guard</span>
                                <input
                                    class="block @error('guard_name') border-red-500  bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    name="guard_name" value='web' rows="3"/>
                            </label>
                            @error('guard_name')
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
