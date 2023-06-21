<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Staff</title>
</head>
<body>
    < <h1 class="text-2xl font-bold mb-4" style="text-align: center">{{ $title }}</h1>
    <p class="mb-4">{{ $date }}</p>
    <table border="1px" width='100%'>
        <thead>
            Laporan Staff
        </thead>
        <tbody>
            <tr>
                <td>#</td>
                <td>Nama Staff</td>
                <td>Divisi</td>
                <td>User ID</td>
            </tr>
        </tbody>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($staff as $stf)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $stf->Staffcol }}</td>
                    <td>{{ $stf->Divisi }}</td>
                    <td>{{ $stf->user }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
