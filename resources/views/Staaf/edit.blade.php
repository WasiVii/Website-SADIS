<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Staff Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @dd($nilai) --}}
                    <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="Staffcol">Staff Nama</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="Staffcol" name="Staffcol" value="{{ $staff->Staffcol }}">
                        </div>

                        <div class="form-group">
                            <label for="Divisi">Divisi</label>
                            <input type="text" class="form-control my-5 input-bordered input w-full" id="Divisi" name="Divisi" value="{{ $staff->Divisi }}">
                        </div>

                        <div class="form-group">
                            <label for="Users_id">Users ID</label>
                            <input class="form-control my-5 input-bordered input w-full" type="text" id="Users_id" name="Users_id" rows="3" value="{{ $staff->Users_id }}">
                        </div>
                        <button type="Update"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
