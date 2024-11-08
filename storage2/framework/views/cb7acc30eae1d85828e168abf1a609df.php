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
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/zakelijkstyle.css', 'resources/js/zakelijkscript.js']); ?>
    <?php 
        $user = session('user', null);

        if ($user === null) {
            return redirect('login_or_signup')->send();
        }
    ?>

    <main id="mainZakelijk">
        <div class="block-text">
            <h1>Welkom!</h1>
            <p>We zijn blij om u te kunnen helpen. Hoe kunnen wij assisteren?</p>
            <div class="buttons">
                <a href="<?php echo e(url('bestellen')); ?>"><button>Ontvang hulp</button></a>
                <button id="verzoekenBtn" style="display: none;" onclick="viewRequests()">Verzoeken bekijken</button>
            </div>
        </div>
    </main>
    <script>
        window.onload = function() {
            <?php if(isset($user) && $user['role'] === 'admin'): ?>
                document.getElementById("verzoekenBtn").style.display = "block";
                document.getElementById("verzoekenBtn").addEventListener("click", function() {
                    window.location.href = "<?php echo e(url('verzoeken')); ?>";
                });
            <?php endif; ?>
        };
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $attributes = $__attributesOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__attributesOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $component = $__componentOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__componentOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\uneeditGoeie\resources\views/zakelijk.blade.php ENDPATH**/ ?>