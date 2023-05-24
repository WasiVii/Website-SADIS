<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown
        title="Master Data"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Data Guru"
            href="{{ route('guru.index') }}"
            :active="request()->routeIs('guru.index')"
        />
        <x-sidebar.sublink
            title="Data Siswa"
            href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')"
        />
        <x-sidebar.sublink
            title="Data Kelas"
            href="{{ route('kelas.index') }}"
            :active="request()->routeIs('kelas.index')"
        />
        <x-sidebar.sublink
            title="Data Mata Pelajaran"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
        <x-sidebar.sublink
            title="Data Staff"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
    </x-sidebar.dropdown>
    <x-sidebar.sublink
            title="Data Sarana"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
        <x-sidebar.sublink
            title="Data Nilai"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
        <x-sidebar.sublink
            title="Data Users"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
        <x-sidebar.sublink
            title="Data Ekstrakulikuler"
            href="{{ route('ekstrakulikuler.index') }}"
            :active="request()->routeIs('ekstrakulikuler.index')"
        />
        <x-sidebar.sublink
            title="Data Berita"
            href="{{ route('berita.index') }}"
            :active="request()->routeIs('berita.index')"
        />
</x-perfect-scrollbar>
