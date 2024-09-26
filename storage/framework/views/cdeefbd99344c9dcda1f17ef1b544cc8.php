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
    <form action="<?php echo e(route('pegawai.update', $pegawais->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="title">NIP</label>
    <input type="number" name="nip" value="<?php echo e($pegawais->nip); ?>">
    <label for="title">Nama</label>
    <input type="text" name="nama" value="<?php echo e($pegawais->nama); ?>">
    <label for="jabatan">Pilih jabatan anda:</label>
    <select name="jabatan" id="jabatan" value="<?php echo e($pegawais->jabatan); ?>">
      <option value="kepala">Kepala</option>
      <option value="admin">Admin</option>
    </select>
    <button type="submit">Update</button>
    </form>
</body>
</html><?php /**PATH C:\laragon\www\PerpustakaanSMKTI\resources\views/pegawai/edit.blade.php ENDPATH**/ ?>