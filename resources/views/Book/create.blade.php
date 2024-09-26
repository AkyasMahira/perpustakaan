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
    <form action="{{ route('book.store')}}" method="POST">
        @csrf
        <label for="title">Judul</label>
        <input type="text" name="title">
        <label for="title">Pengarang</label>
        <input type="text" name="author">
        <label for="title">Penerbit</label>
        <input type="text" name="publisher">
        <label for="title">Tanggal Terbit</label>
        <input type="date" name="tanggal_terbit">
        <button type="submit">Simpan</button>
        </form>
</body>
</html>