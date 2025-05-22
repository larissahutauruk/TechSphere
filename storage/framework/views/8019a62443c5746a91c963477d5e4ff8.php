<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
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
        <h2>Produk Baru</h2>
        <form action="<?php echo e(url('admin/gadgets/store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" name="name" class="form-control" placeholder="nama produk" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <select name="categories_id" class="form-control" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->nama_kategori); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label>Tahun Keluaran</label>
                <input type="year" name="tahun_keluaran" class="form-control" placeholder="tahun keluaran" required>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Rp" required>
            </div>

            <div class="mb-3">
                <label>Spesifikasi</label>
                <textarea name="description" class="form-control" placeholder="spesifikasi" required></textarea>
            </div>

            <div class="mb-3">
                <label>Foto Produk</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="<?php echo e(route('admin.gadgets.dashboard')); ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/admin/gadgets/create.blade.php ENDPATH**/ ?>