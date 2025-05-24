<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo e(asset(path: 'css/about.css')); ?>" />
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

    <div class="frame">
        <div class="overlap-group">
            <div class="overlap"><img class="image" src="<?php echo e(asset('pict/image.png')); ?>">
                <div class="text-wrapper">About Our Company</div>
                <div class="div">TechSphere.</div>
            </div>
        </div>
    </div>

    <div class="frame-2">
        <h2>Apa Itu TechSphere?</h2>
        <p class="platform">
            TechSphere adalah sebuah platform terpercaya yang menyajikan informasi lengkap, akurat, dan terbaru
            tentang alat komunikasi
            seperti
            smartphone, laptop, PC, dan tablet. Kami hadir untuk membantu pengguna memahami teknologi melalui
            ulasan
            mendalam, perbandingan produk, dan tips penggunaan yang mudah dipahami. <br /><br />Dengan fokus
            pada
            transparansi dan objektivitas, Techsphere menjadi jembatan antara kebutuhan pengguna dan kemajuan
            teknologi
            komunikasi.
        </p>
        <img src="<?php echo e(asset('pict/group-1.png')); ?>" alt="company" class="company">
    </div>
    <div class="frame-3">
        <h2>Our Partner</h2>
        <div class="partner">
            <img src="<?php echo e(asset('pict/mi.png')); ?>" alt="mi">
            <img src="<?php echo e(asset('pict/apple.png')); ?>" alt="apple">
            <img src="<?php echo e(asset('pict/samsung.png')); ?>" alt="samsung">
            <img src="<?php echo e(asset('pict/huawei.png')); ?>" alt="huawei">
            <img src="<?php echo e(asset('pict/asus.png')); ?>" alt="asus">
            <img src="<?php echo e(asset('pict/lenovo.png')); ?>" alt="lenovo">
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/about.blade.php ENDPATH**/ ?>