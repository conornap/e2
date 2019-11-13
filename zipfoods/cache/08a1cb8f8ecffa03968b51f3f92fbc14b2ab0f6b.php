<?php $__env->startSection('title'); ?>
    <?php echo e($product['name']); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id='product-show'>
    <h2><?php echo e($product['name']); ?></h2>

    <img src='/images/products/<?php echo e($product["id"]); ?>.jpg' class='product-image'>

    <p class='product-description'>
        <?php echo e($product['description']); ?>

    </p>

    <div class='product-price'>$<?php echo e($product['price']); ?></div>
</div>

<a href='/products'>&larr; Return to all products</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e2/zipfoods/views/products/show.blade.php ENDPATH**/ ?>