<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wellcome to Library of SMK TI</title>
</head>
<body>
    <h1>Wellcome to Library of SMK TI</h1>
    <a href="{{ route('book.create') }}" type="button">Tambah</a>
    <a href="{{ route('peminjam.index') }}" type="button">Peminjam</a>
    <a href="{{ route('pegawai.index') }}" type="button">Pegawai</a>
    <a href="{{ route('rakbuku.index') }}" type="button">Rak Buku</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tanggal Terbit</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->tanggal_terbit }}</td>
                    <td>
                        <a href="{{ route('book.edit', $book->id) }}">Edit</a>
                        <form action="{{ route('book.destroy', $book->id) }}" method="POST">
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