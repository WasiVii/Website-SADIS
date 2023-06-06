<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Generate PDF Example - Webappfix</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19" rel="stylesheet">
</head>
<body class="p-4">
    <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>
    <p class="mb-4">{{ $date }}</p>
    <table class="table">
        <thead>
            <tr>
                <th class="col">#</th>
                <th class="col">Nilai</th>
                <th class="col">Siswa</th>
                <th class="col">Mapel</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($nilai as $nls)
            <tr>
                <td class="">{{ $no++ }}</td>
                <td class="">{{ $nls->Nilai }}</td>
                <td class="">{{ $nls->siswa }}</td>
                <td class="">{{ $nls->mapel }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
