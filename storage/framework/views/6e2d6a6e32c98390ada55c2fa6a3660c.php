<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Update Buku</h1>
    <hr>
    <form action="<?php echo e(route('book.update', $books->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="title">Judul</label>
    <input type="text" name="title" value="<?php echo e($books->title); ?>">
    <label for="title">Pengarang</label>
    <input type="text" name="author" value="<?php echo e($books->author); ?>">
    <label for="title">Penerbit</label>
    <input type="text" name="publisher" value="<?php echo e($books->publisher); ?>">
    <label for="title">Tanggal Terbit</label>
    <input type="date" name="tanggal_terbit" value="<?php echo e($books->tanggal_terbit); ?>">
    <button type="submit">Update</button>
    </form>
</body>
</html><?php /**PATH C:\laragon\www\PerpustakaanSMKTI\resources\views/book/edit.blade.php ENDPATH**/ ?>