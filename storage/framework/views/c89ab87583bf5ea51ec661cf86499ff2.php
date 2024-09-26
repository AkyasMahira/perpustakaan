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
    <a href="<?php echo e(route('rakbuku.create')); ?>" type="button">Tambah Rak</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th>No Rak</th>
            <th>Nama Rak</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $rakbukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rakbuku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($rakbuku->kode_rak); ?></td>
                    <td><?php echo e($rakbuku->nama_rak); ?></td>
                    <td>
                        <a href="<?php echo e(route('rakbuku.edit', $rakbuku->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('rakbuku.destroy', $rakbuku->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
</body>
</html><?php /**PATH C:\laragon\www\PerpustakaanSMKTI\resources\views/rakbuku/index.blade.php ENDPATH**/ ?>