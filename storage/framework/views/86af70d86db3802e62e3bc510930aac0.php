<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>

<body>
    <form action="<?php echo e(route('admin.gadgets.update', $gadgets->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label>Nama Gadget:</label>
        <input type="text" name="name" value="<?php echo e($gadgets->name); ?>" required>

        <label for="categories">Kategori:</label>
        <select name="categories_id" id="category">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $gadgets->categories_id ? 'selected' : ''); ?>>
                    <?php echo e($category->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>


        <label>Tahun Keluaran</label>
        <input type="year" name="tahun_keluaran" value="<?php echo e($gadgets->tahun_keluaran); ?>" required>
        <label>Harga</label>
        <input type="number" name="harga" value="<?php echo e($gadgets->harga); ?>" required>
        <label>Deskripsi</label>
        <input type="string" name="description" value="<?php echo e($gadgets->description); ?>" required>
        <label>Image</label>
        <input type="file" name="image" value="<?php echo e($gadgets->images); ?>" required>

        <button type="submit">Simpan Perubahan</button>
    </form>

</body>

</html><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/admin/gadgets/edit.blade.php ENDPATH**/ ?>