<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset(path: "css/admindashboard.css")); ?>">
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
            <a href="<?php echo e(route('admin.gadgets.dashboard')); ?>"><img src="<?php echo e(asset('pict/Home.png')); ?>" alt="Home"></a>
            <a href="#"><img src="<?php echo e(asset('pict/Account.png')); ?>" alt="User"></a>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </nav>

    

    <?php $__env->startSection('content'); ?>
        <h1>Daftar Kategori</h1>
        <a href="<?php echo e(route('admin.categories.create')); ?>" class="button-1">Tambah Produk</a>
        <table class="tabel">
            <tr class="tabel-head" border-buttom="1px solid #d9d9d9">
                <th width="100vh">ID</th>
                <th width="100vh">Kategori</th>
                <th width="150vh">Opsi</th>
            </tr>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="table-body">
                    <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->name); ?></td>
                    <td><!-- Link Edit -->
                        <a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>" class="link">Edit</a>

                        <!-- Link Delete -->
                        <form action="<?php echo e(route('admin.categories.destroy', $category->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                class="button">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>