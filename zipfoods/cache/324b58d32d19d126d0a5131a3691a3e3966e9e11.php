<?php $__env->startSection('title'); ?>
    <?php echo e($app->config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
<p>
<?php echo e($app->config('app.name')); ?> is your one-stop-shop for convenient online grocery shopping in the greater Boston area.
</p>

<p>
    <a href='/products'>Check out our selection of products...</a>
</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e2/zipfoods/views/index.blade.php ENDPATH**/ ?>