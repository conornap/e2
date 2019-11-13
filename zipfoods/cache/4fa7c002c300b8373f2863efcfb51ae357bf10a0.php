<?php $__env->startSection('title'); ?>
  Product <?php echo e($id); ?> not found
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h2>Product <?php echo e($id); ?> not found</h2>
      <div>
        Uh oh - we were not able to find the product you were looking for.
      </div>
    <a href='/products'>&larr; Check out our other products...</a>

  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e2/zipfoods/views/products/missing.blade.php ENDPATH**/ ?>