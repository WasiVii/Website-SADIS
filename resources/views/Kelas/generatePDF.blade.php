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
    <p class="mb-4">{{ $date }}</p>
    <table border="1px" width='100%'>
        <thead>
            Laporan Kelas
        </thead>
        <tbody>
            <tr>
                <td>#</td>
                <td>Nama Kelas</td>
                <td>Tahun Pelajaran</td>
                <td>Wali Kelas</td>
                <td>Jumlah Siswa</td>
            </tr>
        </tbody>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($kelas as $kls)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $kls->Nama_Kelas }}</td>
                    <td>{{ $kls->Tahun_Pelajaran }}</td>
                    <td>{{ $kls->Wali_Kelas }}</td>
                    <td>{{ $kls->Array_Siswa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
