<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Sarana Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @dd($sarana) --}}
                    <form action="{{ route('permissions.update', $permission->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="name" name="name" value="{{ $permission->name }}">
                        </div>

                        <div class="form-group" hidden>
                            <label for="guard_name">Guard</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="guard_name" name="guard_name" value="{{ $permission->guard_name }}">
                        </div>

                        <button type="Update"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
