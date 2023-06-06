<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('name') text-red-500 @enderror">Name</span>
                                <input type="text" name="name"
                                    class="block @error('name') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder="" value="{{old('name')}}" />
                            </label>
                            @error('name')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('email') text-red-500 @enderror">Email</span>
                                <input type="email" name="email"
                                    class="block @error('email') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder="" value="{{old('email')}}" />
                            </label>
                            @error('email')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('password') text-red-500 @enderror">Password</span>
                                <input type="password" name="password"
                                    class="block @error('password') border-red-500 bg-red-100 text-red-900 @enderror my-5 input-bordered input w-full rounded-md"
                                    placeholder="" value="{{old('password')}}" />
                            </label>
                            @error('password')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('role_id') text-red-500 @enderror">Account Role ID</span>
                               <select id="select" name="role_id" class="custom-select my-5 input-bordered input w-full">
                                    @foreach($role as $roles_id)
                                    <option value="{{$roles_id->id}}">{{$roles_id->name}}</option>
                                    @endforeach
                               </select>
                            </label>
                            @error('role_id')
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
