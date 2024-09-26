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
    <a href="<?php echo e(route('book.create')); ?>" type="button">Tambah</a>
    <a href="<?php echo e(route('peminjam.index')); ?>" type="button">Peminjam</a>
    <a href="<?php echo e(route('pegawai.index')); ?>" type="button">Pegawai</a>
    <a href="<?php echo e(route('rakbuku.index')); ?>" type="button">Rak Buku</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tanggal Terbit</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($book->title); ?></td>
                    <td><?php echo e($book->author); ?></td>
                    <td><?php echo e($book->publisher); ?></td>
                    <td><?php echo e($book->tanggal_terbit); ?></td>
                    <td>
                        <a href="<?php echo e(route('book.edit', $book->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('book.destroy', $book->id)); ?>" method="POST">
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
</html><?php /**PATH C:\laragon\www\PerpustakaanSMKTI\resources\views/book/index.blade.php ENDPATH**/ ?>