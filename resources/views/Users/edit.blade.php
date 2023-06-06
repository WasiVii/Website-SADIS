<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Update Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- @dd($berita) --}}
                    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="name">Judul</label>
                            <input type="text" class="my-5 input-bordered input w-full" id="name" name="name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="Isi_Berita">Email</label>
                            <input type="email" class="my-5 input-bordered input w-full" id="email" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="my-5 input-bordered input w-full" id="password" name="password" value="{{ $user->password }}">
                        </div>
                        <div class="form-group">
                            <label for="role_id">Account Role ID</label>
                               <select id="role_id" name="role_id" class="my-5 input-bordered input w-full">
                                    @foreach($role as $roles_id)
                                    <option value="{{$roles_id->id}}">{{$roles_id->name}}</option>
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
