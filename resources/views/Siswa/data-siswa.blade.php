<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Siswa ') }}
        </h2> --}}
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl text-center">Data Siswa
                    </h1>
                    {{-- <div class="mt-1 mb-4">
                        <a class="px-2 py-2 text-sm text-white bg-red-600 rounded"
                        href="{{ url('dashboard/dashboard/siswa/generatePDF') }}">{{ __('Export PDF') }}</a>
                        <a class="px-2 py-2 text-sm text-white bg-green-600 rounded"
                        href="{{ url('dashboard/dashboard/siswa/exportExcel') }}">{{ __('Export Excel') }}</a>
                        <a class="px-2 py-2 text-sm text-white bg-yellow-600 rounded" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        href="#">{{ __('Import Excel') }}</a>
                        <!-- Modal toggle -->
                    </div> --}}
                     <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <div class="mb-4" style="font-family: 'Times New Roman', Times, serif; font-size:18px; " >
                                <h1>Nama Siswa : {{ $siswa->Nama_Siswa }}</h1>
                            </div>
                            <div class="mt-1 mb-2" style="font-family: 'Times New Roman', Times, serif; font-size:18px; ">
                                <h1>Kelas   : {{ $siswa->kelas }}</h1>
                            </div>
                            <table class="min-w-full text-center text-sm font-light">
                            <thead class="border-b bg-purple-500 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                                @php
                                    $no = 1;
                                @endphp
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Mata Pelajaran
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nilai
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilaiSiswa as $sws)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$no}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$sws->mapel}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$sws->nilai}}

                                    </td>
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
