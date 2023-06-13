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

                       <div class="mb-4">
                        <label for="Users_id" class="block text-sm font-medium text-gray-700">User ID</label>
                        <select name="Users_id" id="Users_id" class="focus:ring-blue-500 focus:border-blue-500 block my-5 input-bordered input w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @foreach($user as $u)
                            <option value="{{$u->id}}" @if($u->id == $staff->Users_id) selected @endif>{{$u->name}}</option>
                            @endforeach
                    </select>
                    </div>
                        <button type="Update"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
