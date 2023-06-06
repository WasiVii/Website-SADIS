<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __( ucfirst($role->name)." Role" ) }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-1 mb-4">
                        <div class="font-bold px-2 py-2 text-sm">{{ __('Assigned permissions') }}</div>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                @php
                                    $no = 1;
                                @endphp
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Guard
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rolePermissions as $permission)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$no}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $permission->name }}

                                    </td>
                                    <td class="px-6 py-4">
                                       {{ $permission->guard_name }}
                                    </td>
                                </tr>
                                @php
                                    $no++
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-5 py-2.5">
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
