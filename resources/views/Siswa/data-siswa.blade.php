{{-- @dd($nilaiSiswa) --}}
<h1>Data Siswa</h1>
<p>Nama Siswa: {{ $siswa->Nama_Siswa }}</p>
{{-- <p>Kelas: {{ $kelas->kelas_id }}</p> --}}
<table>
    <thead>
        <tr>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        @foreach($nilaiSiswa as $nilai)
        <tr>
            <td>{{ $nilai->Mata_Pelajaran->Nama_Mata_Pelajaran }}</td>
            <td>{{ $nilai->Nilai }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
