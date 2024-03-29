<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ekstrakulikuler') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl text-center">Daftar Ekstrakulikuler
                    </h1>
                    <div class="mt-1 mb-4">
                        <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
                            href="{{ route('ekstrakulikuler.create') }}">{{ __('Add ekstrakulikuler') }}</a>
                    </div>
                     <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center text-sm font-light" id="example">
                            <thead class="border-b bg-purple-500 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                @php
                                    $no = 1;
                                @endphp
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Ekstrakulikuler
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        photo
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Edit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Show
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ekstrakulikuler as $ekstrakulikulers)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$no}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$ekstrakulikulers->Nama_Ekstrakulikuler}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$ekstrakulikulers->Deskripsi}}

                                    </td>
                                    <td class="px-6 py-4">
                                       {{-- <img src="{{ url(Storage::url($ekstrakulikulers->Photo)) }}" style="width: 100px"
                                                    alt="{{ url(Storage::url($ekstrakulikulers->Photo)) }}"> --}}
                                        @empty($ekstrakulikulers->photo)
                                        <img src="{{ url('images/nophoto.jpg') }}" alt="">
                                        @else
                                        <img src="{{ url('images') }}/{{ $ekstrakulikulers->photo }}" alt=""  class="w-12 h-12">
                                        @endempty
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('ekstrakulikuler.edit',$ekstrakulikulers->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="/extrakulikuler">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('ekstrakulikuler.destroy', $ekstrakulikulers->id) }}" class="btn btn-danger btn-sm" data-confirm-delete="true">
                                        <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @php
                                    $no++
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
