<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>DF-TSP</title>

    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!--Select-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <!--Animate-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <!--Scroll Bar-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">    

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

    <!--Footer-->
	<link rel="stylesheet" href="css/footer-basic-centered.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <b>DF</b>-TSP
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a class="nav-link" href="<?php echo e(url('/')); ?>"><?php echo e(__('Beranda')); ?></a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Informasi <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo e(url('kadar-air-tanah')); ?>" onclick="">
                                        <?php echo e(__('Kadar Air Tanah (M)')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(url('kecepatan-angin')); ?>" onclick="">
                                        <?php echo e(__('Kecepatan Angin (V)')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(url('klasifikasi-tanah')); ?>" onclick="">
                                        <?php echo e(__('Klasifikasi Tanah')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(url('persamaan')); ?>" onclick="">
                                        <?php echo e(__('Persamaan E')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(url('tutupan-lahan')); ?>" onclick="">
                                        <?php echo e(__('Tutupan Lahan (L)')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(url('contoh-perhitungan')); ?>" onclick="">
                                        <?php echo e(__('Contoh Perhitungan')); ?>

                                    </a>
                                </div>
                            </li>

                            <li><a class="nav-link" href="<?php echo e(url('about')); ?>"><?php echo e(__('About')); ?></a></li>
                            <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                            <!-- <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li> -->
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
            <footer class="footer-basic-centered">
                <?php echo $__env->make('user.backend.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </footer>
        </main>
    </div>
</body>
</html>
