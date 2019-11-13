<?php $__env->startSection('title'); ?>
All Products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2>All Products</h2>

<div id='product-index'>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href='/product?id=<?php echo e($product['id']); ?>'>
        <div class='product'>
            <div class='product-name'><?php echo e($product['name']); ?></div>
            <img class='product-thumb' src="/images/products/<?php echo e($product['id']); ?>.jpg">
        </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e2/zipfoods/views/products/index.blade.php ENDPATH**/ ?>