<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/style1.css']); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

    <body>
        <nav id="navbar">
            <div id="logonav">
                <img src="<?php echo e(asset('images/cropped-logo UNEED-IT.png')); ?>">
            </div>
            <div id="logoptions">
                <ul>
                    <li class="redc"> <a href=" <?php echo e(url('/')); ?> ">Home</a> </li>
                    <li class="bluec"> <a href=" <?php echo e(url('overons')); ?> ">Over ons </a></li>
                    <li class="redc"> <a href=" <?php echo e(url('service')); ?> ">Service </a></li>
                    <li class="bluec" > <a href=" <?php echo e(url('zakelijk')); ?> ">Zakelijk </a></li>
                    <li class="redc"> <a href=" <?php echo e(url('faq')); ?> ">Faq </a> </li>
                    <li class="bluec"> <a href=" <?php echo e(url('webshop')); ?> ">Webshop </a> </li>
                    <li class="redc"><a href=" <?php echo e(url('bezorgdiensten')); ?> "> Bezorgdiensten </a></li>
                    <li class="bluec"> <a href=" <?php echo e(url('account')); ?> ">Account </a> </li>
                </ul>
            </div>
        </nav>

        <main id="mainContent">
            <?php echo e($slot); ?>

        </main>

    </body>
</html><?php /**PATH C:\xampp\htdocs\uneeditGoeie\resources\views/components/app-layout.blade.php ENDPATH**/ ?>