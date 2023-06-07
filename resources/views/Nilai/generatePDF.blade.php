<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Export PDF Data Nilai Siswa SADIS SCHOOL</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19" rel="stylesheet">
</head>
<body class="p-4">
    <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>
    <p class="mb-4">{{ $date }}</p>
    <table class="table w-full">
        <thead>
            <tr>
                <th class="w-1/4">#</th>
                <th class="w-1/4">Nilai</th>
                <th class="w-1/4">Siswa</th>
                <th class="w-1/4">Mapel</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($nilai as $nls)
            <tr>
                <td class="w-1/4">{{ $no++ }}</td>
                <td class="w-1/4">{{ $nls->Nilai }}</td>
                <td class="w-1/4">{{ $nls->siswa }}</td>
                <td class="w-1/4">{{ $nls->mapel }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
