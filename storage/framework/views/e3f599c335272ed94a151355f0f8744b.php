<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Wellcome to Library of SMK TI</h1>
    <a href="<?php echo e(route('book.index')); ?>" type="button">Back</a>
    <a href="<?php echo e(route('pegawai.create')); ?>" type="button">Tambah Pegawai</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($pegawai->nip); ?></td>
                    <td><?php echo e($pegawai->nama); ?></td>
                    <td><?php echo e($pegawai->jabatan); ?></td>
                    <td>
                        <a href="<?php echo e(route('pegawai.edit', $pegawai->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('pegawai.destroy', $pegawai->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
</body>
</html><?php /**PATH C:\laragon\www\PerpustakaanSMKTI\resources\views/pegawai/index.blade.php ENDPATH**/ ?>