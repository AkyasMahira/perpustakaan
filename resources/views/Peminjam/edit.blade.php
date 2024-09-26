<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form edit Peminjam</h1>
    <hr>
    <form action="{{ route('peminjam.update', $peminjams->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">NISN</label>
    <input type="text" name="nisn" value="{{ $peminjams->nisn}}">
    <label for="title">Nama</label>
    <input type="text" name="nama" value="{{ $peminjams->nama}}">
    <label for="title">Kelas</label>
    <input type="text" name="kelas" value="{{ $peminjams->kelas}}">
    <label for="title">No HP</label>
    <input type="number" name="no_hp" value="{{ $peminjams->no_hp}}">
    <button type="submit">Update</button>
    </form>
</body>
</html>