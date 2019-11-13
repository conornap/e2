<!doctype html>
<html lang='en'>
<head>

    <title><?php echo $__env->yieldContent('title', $app->config('app.name')); ?></title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='/css/zipfoods.css' rel='stylesheet'>

    <?php echo $__env->yieldContent('head'); ?>

</head>
<body>

<header>
    <img id='logo' src='/images/zipfoods-logo.png' alt='<?php echo e($app->config('app.name')); ?> Logo'>
</header>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<footer>
</footer>

<?php echo $__env->yieldContent('body'); ?>

</body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/e2/zipfoods/views/templates/master.blade.php ENDPATH**/ ?>