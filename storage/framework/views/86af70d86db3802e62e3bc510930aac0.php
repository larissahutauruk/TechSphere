<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="<?php echo e(asset(path: "css/tambahproduk.css")); ?>">
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="<?php echo e(route('admin.categories.index')); ?>">Categories</a></b></li>
            <li><b><a href="#">Gadgets</a></b></li>
            <li><b><a href="#">Ratings</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="<?php echo e(asset('pict/Home.png')); ?>" alt="Home"></a>
            <a href="#"><img src="<?php echo e(asset('pict/Account.png')); ?>" alt="User"></a>

        </div>
    </nav>

    <div class="container">
        <h2>Edit Produk</h2>
        <form action="<?php echo e(route('admin.gadgets.update', $gadgets->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <input type="text" name="name" value="<?php echo e($gadgets->name); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <select name="categories_id" id="category" class="form-control">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $gadgets->categories_id ? 'selected' : ''); ?>>
                            <?php echo e($category->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <input type="year" name="tahun_keluaran" value="<?php echo e($gadgets->tahun_keluaran); ?>" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <input type="number" name="harga" value="<?php echo e($gadgets->harga); ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="string" name="description" value="<?php echo e($gadgets->description); ?>" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <input type="file" name="image" value="<?php echo e($gadgets->images); ?>" class="form-control" required>
            </div>

            <a href="<?php echo e(route('admin.gadgets.dashboard')); ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/admin/gadgets/edit.blade.php ENDPATH**/ ?>