<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($title ?? ''); ?></title>
    <meta name="description" content="<?php echo e($description ?? ''); ?>">
    <meta name="keywords" content="<?php echo e($keywords ?? ''); ?>">
    <meta name="robots" content="index, follow">

    <link rel="manifest" href="<?php echo e(asset('site.webmanifest')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('favicon-16x16.png')); ?>">
    <link rel="apple-touch-icon"      sizes="180x180" href="<?php echo e(asset('apple-touch-icon.png')); ?>">

    <meta property="og:locale"          content="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <meta property="og:type"            content="website">
    <meta property="og:url"             content="<?php echo e(URL::current()); ?>">
    <meta property="og:site_name"       content="<?php echo e($site_name ?? ''); ?>">
    <meta property="og:title"           content="<?php echo e($title ?? ''); ?>">
    <meta property="og:description"     content="<?php echo e($description ?? ''); ?>">
    <meta property="og:image"           content="<?php echo e($image ?? ''); ?>">
    <meta property="og:image:width"     content="<?php echo e($width ?? '180'); ?>"/>
    <meta property="og:image:height"    content="<?php echo e($height ?? '180'); ?>"/>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins/default.css')); ?>">
    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins/magnific-popup.css')); ?>">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <div>

        <?php echo $__env->make('agromaster.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>

        <?php echo $__env->make('agromaster.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    </div>

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>
    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="<?php echo e(asset('js/vendor/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/modernizr-3.7.1.min.js')); ?>"></script>

    <!--====== All Plugins js ======-->
    <script src="<?php echo e(asset('js/plugins/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/jquery.appear.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/ajax-contact.js')); ?>"></script>



    <!--====== Main Activation  js ======-->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>
</html>
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/layout.blade.php ENDPATH**/ ?>