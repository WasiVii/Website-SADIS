<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Role Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('roles.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700 @error('name') text-red-500 @enderror">Role Name</span>
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
                        
                        <label for="permissions" class="form-label">Assign Permissions</label>
                        <table class="table table-striped">
                            <thead>
                                <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                                <th scope="col" width="20%">Name</th>
                                <th scope="col" width="1%">Guard</th> 
                            </thead>

                            @foreach($permissions as $permission)
                                <tr>
                                    <td>
                                        <input type="checkbox" 
                                        name="permission[{{ $permission->name }}]"
                                        value="{{ $permission->name }}"
                                        class='permission'>
                                    </td>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->guard_name }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <button type="submit"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }
                
            });
        });
    </script>
@endsection

</x-app-layout>
