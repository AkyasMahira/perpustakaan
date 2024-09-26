<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>pegawai yaw</h1>
    <hr>
    <form action="{{ route('pegawai.update', $pegawais->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">NIP</label>
    <input type="number" name="nip" value="{{ $pegawais->nip}}">
    <label for="title">Nama</label>
    <input type="text" name="nama" value="{{ $pegawais->nama}}">
    <label for="jabatan">Pilih jabatan anda:</label>
    <select name="jabatan" id="jabatan" value="{{ $pegawais->jabatan}}">
      <option value="kepala">Kepala</option>
      <option value="admin">Admin</option>
    </select>
    <button type="submit">Update</button>
    </form>
</body>
</html>