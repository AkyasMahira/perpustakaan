<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Update Buku</h1>
    <hr>
    <form action="{{ route('book.update', $books->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Judul</label>
    <input type="text" name="title" value="{{ $books->title}}">
    <label for="title">Pengarang</label>
    <input type="text" name="author" value="{{ $books->author}}">
    <label for="title">Penerbit</label>
    <input type="text" name="publisher" value="{{ $books->publisher}}">
    <label for="title">Tanggal Terbit</label>
    <input type="date" name="tanggal_terbit" value="{{ $books->tanggal_terbit}}">
    <button type="submit">Update</button>
    </form>
</body>
</html>