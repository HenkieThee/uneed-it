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
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/style.css']); ?>
    <main>
        <div class="Onze-Service">
            <h1 class="cred">ONZE <span class="Service-Color">SERVICE</span></h1>
        </div>
        <div class="Lorem">
            <p class="Lorem-Text">Dit zijn alle diensten die wij leveren.</p>
        </div>
        <div class="Service-Align">
            <div class="Graphic-Design">
                <img src="" alt="">
                <h1 class="Service-Text">Graphic Design</h1>
                <p class="Service-Paragraaf">Ons bedrijf biedt grafisch ontwerp diensten aan, zoals logo's, branding, webdesign, printmaterialen en visuele content.</p>
            </div>
            <div class="Graphic-Design1">
                <img src="" alt="">
                <h1 class="Service-Text2">Software Development</h1>
                <p class="Service-Paragraaf">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit dignissimos, facere consectetur, ipsam delectus voluptatibus reiciendis quas, </p>
            </div>
            <div class="Graphic-Design">
                <img src="" alt="">
                <h1 class="Service-Text">Product Design</h1>
                <p class="Service-Paragraaf">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis nihil provident ipsa ut optio sunt tenetur vitae excepturi consequuntur est, </p>
            </div>
        </div>
        <div class="Service-Align2">
            <div class="Graphic-Design1">
                <img src="" alt="">
                <h1 class="Service-Text2">Blog Writing</h1>
                <p class="Service-Paragraaf">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora deleniti, dolorum dolore, </p>
            </div>
            <div class="Graphic-Design">
                <img src="" alt="">
                <h1 class="Service-Text">Social Marketing</h1>
                <p class="Service-Paragraaf">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ab quo tempore? </p>
            </div>
            <div class="Graphic-Design1">
                <img src="" alt="">
                <h1 class="Service-Text2">IT Services</h1>
                <p class="Service-Paragraaf">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, accusantium? </p>
            </div>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\uneeditGoeie\resources\views/service.blade.php ENDPATH**/ ?>