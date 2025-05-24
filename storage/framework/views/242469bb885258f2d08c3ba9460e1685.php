<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSphere</title>
    <link rel="stylesheet" href="<?php echo e(asset(path: 'css/userhomepage.css')); ?>">
</head>

<body>
    <nav class="navbar">
        <div class="logo">TechSphere</div>
        <ul class="nav-links">
            <li><b><a href="#">Home</a></b></li>
            <li class="dropdown">
                <b><a href="#">Category</a></b>
                <ul class="itulah"> <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><a href="<?php echo e(route('homepage', $category->id)); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li><b><a href="<?php echo e(route('about')); ?>">About Us</a></b></li>
        </ul>
        <div class="nav-icons">
            <input type="text" class="search-bar" placeholder="Search something..">
            <a href="#"><img src="<?php echo e(asset('pict/Home.png')); ?>" alt="Home"></a>
            <a href="<?php echo e(route('pralogin')); ?>"><img src="<?php echo e(asset('pict/Account.png')); ?>" alt="User"></a>
        </div>
    </nav>

    <?php $__currentLoopData = $gadgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gadget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="main-product">
            <div class="product-image">
                <img src="<?php echo e(asset('pict/' . $gadget->image)); ?>" alt="<?php echo e($gadget->name); ?>">
            </div>
            <div class="product-name"><?php echo e($gadget->name); ?></div>
            <a href="<?php echo e(route('pralogin')); ?>" class="detail-link">Lihat Detail</a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Bagian Rekomendasi Produk -->
    <section class="rekomendasi">
        <h2>Rekomendasi</h2>
        <div class="produk-container">
            <?php $__currentLoopData = $recommendedGadgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gadget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="produk">
                    <div class="produk-box">
                        <img src="<?php echo e(asset('pict/' . $gadget->image)); ?>" alt="<?php echo e($gadget->name); ?>">
                    </div>
                    <a href="<?php echo e(route('pralogin')); ?>" class="lihat-detail">Lihat Detail</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <div class="komen">
        <h2>Komentar</h2>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h2>TechSphere.</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. <br> Ut enim ad minim veniam.
                </p>
                <div class="footer-socials">
                    <a href="#"><img src="<?php echo e(asset('pict/web.png')); ?>" alt="Website" /></a>
                    <a href="#"><img src="<?php echo e(asset('pict/x.png')); ?>" alt="X" /></a>
                    <a href="#"><img src="<?php echo e(asset('pict/ig.png')); ?>" alt="Instagram" /></a>
                    <a href="#"><img src="<?php echo e(asset('pict/linkedin.png')); ?>" alt="LinkedIn" /></a>
                </div>
            </div>

            <div class="footer-center">
                <h2>Shop</h2>
                <ul>
                    <li>Mobile</li>
                    <li>Laptop</li>
                    <li>PC</li>
                    <li>Tablet</li>
                </ul>
            </div>

            <div class="footer-right">
                <h2>Contact</h2>
                <a href="#">+62 111 1111 111</a> <br>
                <a href="#">+62 000 0000 0000</a>

                <h2>Address</h2>
                <p>Sidoarjo, kab. Sidoarjo,</p>
                <p>Jawa Timur, Indonesia</p>
            </div>
        </div>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/homepage.blade.php ENDPATH**/ ?>