<?php if (isset($component)) { $__componentOriginal4619374cef299e94fd7263111d0abc69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4619374cef299e94fd7263111d0abc69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/registrationstyle.css']); ?>

    <main class="main-content">
        <div class="form-container">
            <h2 class="form-title">Registreer</h2>
            <form id="registration-form" action="<?php echo e(url('register')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" name="naam" id="naam" placeholder="Naam" required class="input-field"><br>
                <input type="text" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer" required class="input-field"><br>
                <input type="email" name="email" id="email" placeholder="Email" required class="input-field"><br>
                <input type="text" name="address" id="address" placeholder="Address" required class="input-field"><br>
                <input type="password" name="password" id="password" placeholder="Wachtwoord" required class="input-field"><br>
                <button type="submit" class="submit-button">Registreer</button>
            </form>
        </div>
    </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $attributes = $__attributesOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__attributesOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $component = $__componentOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__componentOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\uneeditGoeie\resources\views/registration.blade.php ENDPATH**/ ?>