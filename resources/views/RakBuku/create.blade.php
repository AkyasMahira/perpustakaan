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
    <form action="{{ route('rakbuku.store')}}" method="POST">
        @csrf
        <label for="kode_rak">Kode Rak</label>
        <input type="text" name="kode_rak">
        <label for="nama_rak">Nama Rak</label>
        <input type="text" name="nama_rak">
        <button type="submit">Simpan</button>
        </form>
</body>
</html>