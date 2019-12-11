<?php $__env->startSection('content'); ?>

<?php if($app->errorsExist()): ?>
<ul class='error alert alert-danger'>
    <?php $__currentLoopData = $app->errors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>

<div id='product-new'>
    <h2>Create New Product</h2>

        <form method='POST' id='product-new' action='/products/new'>
        <h3>Enter Product Information Below</h3>

        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class="form-control" name='name' id='name' value='<?php echo e($app->old("name")); ?>'>
        </div>

        <div class='form-group'>
            <label for='description'>Description</label>
            <textarea name='description' id='description' class='form-control'><?php echo e($app->old('description')); ?></textarea>
        
        </div>

        <div class='form-group'>
            <label for='price'>Price</label>
            <input type='text' class="form-control" name='price' id='price' value='<?php echo e($app->old("price")); ?>'>
        </div>

        <div class='form-group'>
            <label for='available'>Available</label>
            <input type='text' class="form-control" name='available' id='available' value='<?php echo e($app->old("available")); ?>'>
        </div>

        <div class='form-group'>
            <label for='weight'>Weight</label>
            <input type='text' class="form-control" name='weight' id='weight' value='<?php echo e($app->old("weight")); ?>'>
        </div>

        <div class='form-group'>
            <label for='perishable'>Perishable</label>
            <input type='text' class="form-control" name='perishable' id='perishable' value='<?php echo e($app->old("perishable")); ?>'>
        </div>


        <button type='submit' class='btn btn-primary'>Enter Product</button>
    </form>

    

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e2/zipfoods/views/products/new.blade.php ENDPATH**/ ?>