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
    <a href="<?php echo e(route('peminjam.create')); ?>" type="button">Tambah</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>No hp</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $peminjams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peminjam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($peminjam->nisn); ?></td>
                    <td><?php echo e($peminjam->nama); ?></td>
                    <td><?php echo e($peminjam->kelas); ?></td>
                    <td><?php echo e($peminjam->no_hp); ?></td>
                    <td>
                        <a href="<?php echo e(route('peminjam.edit', $peminjam->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('peminjam.destroy', $peminjam->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\laragon\www\PerpustakaanSMKTI\resources\views/peminjam/index.blade.php ENDPATH**/ ?>