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
    <form action="<?php echo e(route('peminjam.update', $peminjams->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="title">NISN</label>
    <input type="text" name="nisn" value="<?php echo e($peminjams->nisn); ?>">
    <label for="title">Nama</label>
    <input type="text" name="nama" value="<?php echo e($peminjams->nama); ?>">
    <label for="title">Kelas</label>
    <input type="text" name="kelas" value="<?php echo e($peminjams->kelas); ?>">
    <label for="title">No HP</label>
    <input type="number" name="no_hp" value="<?php echo e($peminjams->no_hp); ?>">
    <button type="submit">Update</button>
    </form>
</body>
</html><?php /**PATH C:\laragon\www\PerpustakaanSMKTI\resources\views/peminjam/edit.blade.php ENDPATH**/ ?>