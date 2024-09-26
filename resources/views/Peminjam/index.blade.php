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
    <a href="{{ route('peminjam.create') }}" type="button">Tambah</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>No hp</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($peminjams as $peminjam)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $peminjam->nisn }}</td>
                    <td>{{ $peminjam->nama }}</td>
                    <td>{{ $peminjam->kelas }}</td>
                    <td>{{ $peminjam->no_hp }}</td>
                    <td>
                        <a href="{{ route('peminjam.edit', $peminjam->id) }}">Edit</a>
                        <form action="{{ route('peminjam.destroy', $peminjam->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>