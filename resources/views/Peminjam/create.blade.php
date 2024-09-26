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
    <form action="{{ route('peminjam.store')}}" method="POST">
        @csrf
        <label for="title">NISN</label>
        <input type="text" name="nisn">
        <label for="title">Nama</label>
        <input type="text" name="nama">
        <label for="title">Kelas</label>
        <input type="text" name="kelas">
        <label for="title">No HP</label>
        <input type="number" name="no_hp">
        <button type="submit">Simpan</button>
        </form>
</body>
</html>