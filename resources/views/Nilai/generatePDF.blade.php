<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Nilai Siswa</title>
</head>
<body>
    < <h1 class="text-2xl font-bold mb-4" style="text-align: center">{{ $title }}</h1>
    <p class="mb-4">{{ $date }}</p>
    <table border="1px" width='100%'>
        <thead>
            Laporan Nilai Siswa
        </thead>
        <tbody>
            <tr>
                <td>#</td>
                <td>Nama Siswa</td>
                <td>Mata Pelajaran</td>
                <td>Nilai Siswa</td>
            </tr>
        </tbody>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($nilai as $ns)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $ns->siswa }}</td>
                    <td>{{ $ns->mapel }}</td>
                    <td>{{ $ns->Nilai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
