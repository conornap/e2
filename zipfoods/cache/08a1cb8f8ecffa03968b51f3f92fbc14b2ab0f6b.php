<?php $__env->startSection('title'); ?>
    <?php echo e($product['name']); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if($app->errorsExist()): ?>
<ul class='error alert alert-danger'>
    <?php $__currentLoopData = $app->errors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>

<div id='product-show'>
    <h2><?php echo e($product['name']); ?></h2>

    <img src='/images/products/<?php echo e($product["id"]); ?>.jpg' class='product-image'>

    <p class='product-description'>
        <?php echo e($product['description']); ?>

    </p>

    <div class='product-price'>$<?php echo e($product['price']); ?></div>


        <form method='POST' id='product-review' action='/products/save-review'>
        <h3>Review this product</h3>
        <input type='hidden' name='id' value='<?php echo e($product["id"]); ?>'>
        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class="form-control" name='name' id='name' value='<?php echo e($app->old("name")); ?>'>
        </div>

        <div class='form-group'>
            <label for='content'>Review</label>
            <textarea name='content' id='content' class='form-control'><?php echo e($app->old('content')); ?></textarea>
        </div>

        <button type='submit' class='btn btn-primary'>Submit Review</button>
    </form>

    <h3>Reviews</h3>
    <?php if($reviews): ?>
    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class='review'>
        <span class='review-name'><?php echo e($review['name']); ?></span>
        <p><?php echo e($review['content']); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    No reviews yet.
    <?php endif; ?>
    
</div>



<a href='/products'>&larr; Return to all products</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e2/zipfoods/views/products/show.blade.php ENDPATH**/ ?>