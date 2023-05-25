<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Mata Pelajawan') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full lg:w-1/2">
                <div class="bg-white rounded-lg shadow">
                    <div class="px-6 py-4 border-b">
                        <h3 class="text-lg font-semibold">{{ $mapel->Nama_Mata_Pelajaran }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
