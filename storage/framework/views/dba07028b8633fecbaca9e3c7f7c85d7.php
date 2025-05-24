<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/detail.css')); ?>">
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="<?php echo e(route('user.home')); ?>">Home</a></b></li>
            <li class="dropdown">
                <b><a href="#">Category</a></b>
                <ul class="itulah"> <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('user.category', $category->id)); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li><b><a href="<?php echo e(route('user.about')); ?>">About Us</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="<?php echo e(asset('pict/Home.png')); ?>" alt="Home"></a>
            <a href="#"><img src="<?php echo e(asset('pict/Account.png')); ?>" alt="User"></a>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </nav>

    <div class="data">
        <h2><?php echo e($gadgets->name); ?></h2>
        <h3>Tahun Keluaran: <?php echo e($gadgets->tahun_keluaran); ?> <br> Spesifikasi lainnya: <br> <?php echo e($gadgets->description); ?>

        </h3>
    </div>
    <div class="box"><img src="<?php echo e(asset('pict/' . $gadgets->image)); ?>">
        <h3>Rp <?php echo e(number_format($gadgets->harga, 0, ',', '.')); ?></h3>
    </div>

    <h2 class="link">Link pembelian:</h2>
    <div class="buy">
        <a href="">Shopee</a>
        <a href="">Lazada</a>
        <a href="">Tokopedia</a>
        <a href="">Ori Web</a>
    </div>

    <div class="rating">
        <h2>Beri rating website ini</h2>
        <p>Sampaikan pendapat anda</p>
    </div>

    <div class="terlaris">
        <div></div>
        <div></div>
        <div></div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/user/detail.blade.php ENDPATH**/ ?>