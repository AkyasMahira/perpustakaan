<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Pegawai</h1>
    <hr>
    <form action="<?php echo e(route('pegawai.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="title">NIP</label>
    <input type="text" name="nip">
    <label for="title">Nama</label>
    <input type="text" name="nama">
    <label for="jabatan">Pilih jabatan anda:</label>
    <select name="jabatan" id="jabatan">
      <option value="kepala">Kepala</option>
      <option value="admin">Admin</option>
    </select> 
    <button type="submit">Simpan</button>
    </form>
</body>
</html><?php /**PATH C:\laragon\www\PerpustakaanSMKTI\resources\views/pegawai/create.blade.php ENDPATH**/ ?>