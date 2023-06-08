<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Export PDF Data Nilai Siswa SADIS SCHOOL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 1rem;
        }
    </style>
</head>
<body>
    <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>
    <p class="mb-4">{{ $date }}</p>
    <table class="table">
        <thead>
            <tr>
                <th class="w-25">#</th>
                <th class="w-25">Nama Siswa</th>
                <th class="w-25">Mata Pelajara</th>
                <th class="w-25">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($nilai as $nls)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $nls->siswa }}</td>
                <td>{{ $nls->mapel }}</td>
                <td>{{ $nls->Nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
