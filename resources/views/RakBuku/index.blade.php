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
    <a href="{{ route('rakbuku.create') }}" type="button">Tambah Rak</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th>No Rak</th>
            <th>Nama Rak</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($rakbukus as $rakbuku)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $rakbuku->kode_rak }}</td>
                    <td>{{ $rakbuku->nama_rak }}</td>
                    <td>
                        <a href="{{ route('rakbuku.edit', $rakbuku->id) }}">Edit</a>
                        <form action="{{ route('rakbuku.destroy', $rakbuku->id) }}" method="POST">
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