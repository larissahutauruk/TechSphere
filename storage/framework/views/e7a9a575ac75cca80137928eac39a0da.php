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
            <li><b><a href="<?php echo e(route('admin.gadgets.dashboard')); ?>">Gadgets</a></b></li>
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
        <form action="<?php echo e(route('admin.categories.update', $category->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <input type="text" name="name" value="<?php echo e($category->name); ?>" class="form-control" required>
            </div>

            <a href="<?php echo e(route('admin.categories.index')); ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>