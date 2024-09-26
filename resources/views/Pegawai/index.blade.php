<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Wellcome to Library of SMK TI</h1>
    <a href="{{ route('book.index') }}" type="button">Back</a>
    <a href="{{ route('pegawai.create') }}" type="button">Tambah Pegawai</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($pegawais as $pegawai)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pegawai->nip }}</td>
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->jabatan }}</td>
                    <td>
                        <a href="{{ route('pegawai.edit', $pegawai->id) }}">Edit</a>
                        <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>