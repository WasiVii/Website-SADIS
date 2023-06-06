<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Nilai ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl text-center">Daftar Nilai
                    </h1>

                    @if (Auth::user()->role_id != 4)
                    <div class="mt-1 mb-4">
                        <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
                            href="{{ route('nilai.create') }}">{{ __('Add Nilai') }}</a>

                    </div>
                    @endif
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
                                        Nilai
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Siswa
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Mata Pelajaran
                                    </th>
                                    @if (Auth::user()->role_id != 4)
                                    <th scope="col" class="px-6 py-3">
                                        Edit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Show
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Delete
                                    </th>
                                    @endif
                                    <th scope="col" class="px-6 py-3">
                                        Export
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilai as $nilais)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$no}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$nilais->Nilai}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$nilais->siswa}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$nilais->mapel}}

                                    </td>
                                    @if (Auth::user()->role_id != 4)
                                        <td class="px-6 py-4">
                                            <a href="{{ route('nilai.edit',$nilais->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('nilai.show',$nilais->id) }}">
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
                                            <a href="{{ route('nilai.destroy', $nilais->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    class="w-6 h-6 text-blue-600">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 6l2-2h14a2 2 0 012 2v2h2v2H3V6zm15 11a2 2 0 01-2 2H8a2 2 0 01-2-2V9h12v8zm-1-3V9H6v5h11z" />
                                                </svg>
                                            </a>
                                        </td>
                                    @endif
                                        <td>
                                          <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
   href="{{ route('nilai.generatePDF', $nilais->id) }}">{{ __('Cetak PDF') }}</a>

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
