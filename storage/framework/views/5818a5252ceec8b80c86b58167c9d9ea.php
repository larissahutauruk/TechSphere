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
            <li><b><a href="<?php echo e(route('user.home')); ?>">Home</a></b></li>
            <li class="dropdown">
                <b><a href="#">Category</a></b>
                <ul class="itulah"> <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('homepage', $category->id)); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li><b><a href="#">About Us</a></b></li>
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
            <img class="partner-img" src="<?php echo e(asset('pict/mi.png')); ?>" alt="mi" width="100px" height="70px">
            <img class="partner-img" src="<?php echo e(asset('pict/apple.png')); ?>" alt="apple" width="100px" height="80px">
            <img class="partner-img" src="<?php echo e(asset('pict/samsung.png')); ?>" alt="samsung" width="270px" height="50px">
            <img class="partner-img" src="<?php echo e(asset('pict/huawei.png')); ?>" alt="huawei" width="100px" height="70px">
            <img class="partner-img" src="<?php echo e(asset('pict/asus.png')); ?>" alt="asus" width="200px" height="50px">
            <img class="partner-img" src="<?php echo e(asset('pict/lenovo.png')); ?>" alt="lenovo" width="200px" height="60px">
        </div>
    </div>

    <div class="frame-4">
        <h2>Meet With Our Team</h2>
        <div class="team">
            <div class="box">
                <img src="<?php echo e(asset('pict/larissa.jpg')); ?>" alt="me">
                <h3>Larissa Paulina Christmas Hutauruk</h3>
                <p>Front End Dev</p>
            </div>
            <div class="box">
                <img src="<?php echo e(asset('pict/rey.jpg')); ?>" alt="rey">
                <h3>Reyjuno Al Cannavaro</h3>
                <p>Back End Dev</p>
            </div>
        </div>
    </div>

    <div class="web">
        <h2>www.techsphere.com</h2>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h2>TechSphere.</h2>
                <p>
                    Platform terpercaya yang menyajikan informasi lengkap, akurat, <br>
                    dan terbaru tentang alat komunikasi seperti smartphone, laptop, PC, dan tablet.
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

</html><?php /**PATH C:\xampp\htdocs\techsephere\resources\views/user/about.blade.php ENDPATH**/ ?>