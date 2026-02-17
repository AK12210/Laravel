<!DOCTYPE html>
<head>
    <meta name="description" content="Laravel page">
    <title><?php echo $__env->yieldContent('title', 'My Laravel App'); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('app.css')); ?>">

</head>
<body>

<header>
    <h1>Laravel Website</h1>
</header>

<main>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</main>

<footer>
    <p>Laravel App</p>
</footer>

</body>
</html>
<?php /**PATH C:\Users\Adm\assignment3\resources\views/layout.blade.php ENDPATH**/ ?>