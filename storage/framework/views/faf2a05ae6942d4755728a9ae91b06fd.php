<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('rakbuku.update', $rakbukus->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="kode_rak">Kode Rak</label>
        <input type="text" name="kode_rak" value="<?php echo e($rakbukus->kode_rak); ?>">
        <label for="nama_rak">Nama Rak</label>
        <input type="text" name="nama_rak" value="<?php echo e($rakbukus->nama_rak); ?>">
        <button type="submit">Update</button>
</body>
</html><?php /**PATH C:\laragon\www\PerpustakaanSMKTI\resources\views/rakbuku/edit.blade.php ENDPATH**/ ?>