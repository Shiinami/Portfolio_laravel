<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home | Deva Syaiful</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/borgar.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo e(asset('assets/css/main.css')); ?>" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img position-relative">
            <img src="assets/img/profile.jpeg" alt="" class="img-fluid rounded-circle">
            <?php if(Auth::check()): ?>
                <form action="<?php echo e(route('logout')); ?>" method="POST"
                    style="position: absolute; top: 10px; left: 10px; z-index: 10;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger btn-sm"></button>
                </form>
            <?php else: ?>
                <a href="<?php echo e(url('/login')); ?>" id="login-btn" class="btn btn-primary btn-sm position-absolute"
                    style="top: 10px; left: 10px; z-index: 10;"></a>
            <?php endif; ?>
        </div>

        <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center justify-content-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/borgar.png" alt="">
            <h1 class="sitename">Deva Muhamad S.A</h1>
        </a>

        <div class="social-links text-center">
            <a href="https://x.com/MrBoyMan4" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.instagram.com/mr.boyman28/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://github.com/Shiinami" class="github"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/deva-muhamad-30a9a7340/" class="linkedin"><i
                    class="bi bi-linkedin"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
                <li><a href="#testimonials"><i class="bi bi-chat-left-text navicon"></i> My Friends</a></li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>

    </header>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
            <div class="copyright text-center ">
                <p><span>Portfolio by</span> <strong class="px-1 sitename">iPortfolio</strong> <span>Edited by</span> <strong>Deva Syaiful</strong></p>
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>
</html>
<?php /**PATH C:\Users\devam\Documents\GitHub\Portfolio_laravel\resources\views/layout/sidebar.blade.php ENDPATH**/ ?>