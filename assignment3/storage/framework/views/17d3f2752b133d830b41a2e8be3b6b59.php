

<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>

    <h2 style="text-align:center;">About Us</h2>

    <?php
        $name = "Secret Company";
        $services = ["Selling our products", "Delivery", "Maintenance"];
        $isOnline = true;
    ?>

    <?php if(isset($name)): ?>
        <p>We at <?php echo e($name); ?> offer a wide range of services</p>
    <?php endif; ?>

    <h3>Services</h3>

    <ul>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($service); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php if($isOnline): ?>
        <p style="color:green;">Support team online</p>
    <?php else: ?>
        <p style="color:red;">Support team offline</p>
    <?php endif; ?>

    <a href="/" class="btn">Go Home</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Adm\assignment3\resources\views/about.blade.php ENDPATH**/ ?>