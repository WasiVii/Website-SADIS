<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Mata Pelajaran</title>
</head>
<body>
    < <h1 class="text-2xl font-bold mb-4" style="text-align: center">{{ $title }}</h1>
    <p class="mb-4">Tanggal : {{ $date }}</p>
    <table border="1px" width='100%'>
        <thead>
            Laporan Kelas
        </thead>
        <tbody>
            <tr>
                <td>No</td>
                <td>Nama Siswa</td>
                <td>Tanggal Lahir</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>Nomor Telepon </td>
                <td>Email</td>
                <td>Tahun Lulus</td>
                <td>User ID</td>
                <td>Kelas ID</td>
                <td>Ekstrakulikuler ID</td>
            </tr>
        </tbody>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($siswa as $sws)
                <tr>
                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$no++}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$sws->Nama_Siswa}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$sws->Tanggal_Lahir}}

                                    </td>
                                     <td class="px-6 py-4">
                                        {{$sws->Alamat}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$sws->Jenis_Kelamin}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$sws->Nomor_Telepon}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$sws->Email}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$sws->Tahun_Lulus}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$sws->user}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$sws->kelas}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$sws->ekstrakulikuler}}

                                    </td>
                                </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
