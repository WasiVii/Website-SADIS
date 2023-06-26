<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <a
        href="{{ route('dashboard') }}"
        class="inline-flex items-center gap-2"
    >
        <x-application-logo aria-hidden="true" class="h-22 sm:h-auto lg:h-auto" />

        <span class="sr-only">Dashboard</span>
    </a>

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
        title="Administrasi Data"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
    >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        @if (Auth::user()->role_id == 1)
            <x-sidebar.sublink
                title="Data Guru"
                href="{{ route('guru.index') }}"
                :active="request()->routeIs('guru.index')"
            />
            <x-sidebar.sublink
                title="Data Staff"
                href="{{ route('staff.index') }}"
                :active="request()->routeIs('staff.index')"
            />
        @endif
        @if (Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
            <x-sidebar.sublink
                title="Data Kelas"
                href="{{ route('kelas.index') }}"
                :active="request()->routeIs('kelas.index')"
            />
            <x-sidebar.sublink
                title="Data Mata Pelajaran"
                href="{{ route('mapel.index') }}"
                :active="request()->routeIs('mapel.index')"
            />
        @endif
        @if (Auth::user()->role_id != 4)
            <x-sidebar.sublink
                title="Data Siswa"
                href="{{ route('siswa.index') }}"
                :active="request()->routeIs('siswa.index')"
            />
        @endif
        @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 1)
            <x-sidebar.sublink
                title="Data Nilai"
                href="{{ route('nilai.index') }}"
                :active="request()->routeIs('nilai.index')"
            />
        @endif
        @if (Auth::user()->role_id == 4)
        <x-sidebar.sublink
                title="Transkip Nilai"
                href="{{ url('/dashboard/data-siswa') }}"
                :active="request()->routeIs('users.index')"
            />
        @endif
    </x-sidebar.dropdown>

    @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        <x-sidebar.dropdown
            title="Website Data"
            :active="Str::startsWith(request()->route()->uri(), 'buttons')"
        >
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-3d-cube-sphere" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6 17.6l-2 -1.1v-2.5" />
                    <path d="M4 10v-2.5l2 -1.1" />
                    <path d="M10 4.1l2 -1.1l2 1.1" />
                    <path d="M18 6.4l2 1.1v2.5" />
                    <path d="M20 14v2.5l-2 1.12" />
                    <path d="M14 19.9l-2 1.1l-2 -1.1" />
                    <path d="M12 12l2 -1.1" />
                    <path d="M18 8.6l2 -1.1" />
                    <path d="M12 12l0 2.5" />
                    <path d="M12 18.5l0 2.5" />
                    <path d="M12 12l-2 -1.12" />
                    <path d="M6 8.6l-2 -1.1" />
                </svg>
            </x-slot>

            <x-sidebar.sublink
                title="Data Sarana"
                href="{{ route('sarana.index') }}"
                :active="request()->routeIs('sarana.index')"
            />
            <x-sidebar.sublink
                title="Data Ekstrakulikuler"
                href="{{ route('ekstrakulikuler.index') }}"
                :active="request()->routeIs('ekstrakulikuler.index')"
            />
            @endif
            @if (Auth::user()->role_id == 4)
            <x-sidebar.sublink
                title="Data Berita"
                href="{{ route('berita.index') }}"
                :active="request()->routeIs('berita.index')"
            />
        </x-sidebar.dropdown>
        @endif

    @if (Auth::user()->role_id == 1)
        <x-sidebar.dropdown
            title="User Management"
            :active="Str::startsWith(request()->route()->uri(), 'buttons')"
        >
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                </svg>
            </x-slot>

            <x-sidebar.sublink
                title="User Account"
                href="{{ route('users.index') }}"
                :active="request()->routeIs('users.index')"
            />

             <x-sidebar.sublink
                title="Role"
                href="{{ url('admin/roles') }}"
                :active="request()->routeIs('users.index')"
            />
            <x-sidebar.sublink
                title="Permission"
                href="{{ url('admin/permissions') }}"
                :active="request()->routeIs('users.index')"
            />
            <x-sidebar.sublink
                title="Users Roles"
                href="{{ url('admin/users') }}"
                :active="request()->routeIs('users.index')"
            />
        </x-sidebar.dropdown>
    @endif
</x-perfect-scrollbar>
