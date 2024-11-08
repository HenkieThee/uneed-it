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
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/overonsstyle.css']); ?>

    <main style="background-image: url('<?php echo e(asset("images/uneedi01.jpg")); ?>');" id="mainOverOns">
        <div class="red-text">
            <p>Over Ons</p>
        </div>
        <div class="ootext">
            <p class="white-text">
                Welkom bij Uneed-it, uw vertrouwde partner voor al uw reparatiebehoeften. Bij Uneed-it streven we ernaar hoogwaardige kwalitatieve reparatiediensten te bieden met een onwrikbare focus op klanttevredenheid en excellentie in kwaliteit.
            </p>
            <p class="white-text">
                Met een schat aan ervaring in de sector hebben we een onberispelijke reputatie opgebouwd als een bedrijf dat synoniem staat voor vakmanschap, snelle service en eerlijke prijzen. Of het nu gaat om het herstellen van elektronica, huishoudelijke apparaten, auto's of andere technische apparaten, ons team van deskundige technici staat paraat om uw problemen op te lossen en uw apparaten weer in optimale staat te herstellen.
            </p>
            <p class="white-text">
                Bij Uneed-it streven we naar een naadloze ervaring, vanaf het moment dat u contact met ons opneemt tot het moment dat u tevreden bent met de uitgevoerde reparatie. We begrijpen hoe essentieel uw apparaten zijn voor uw dagelijks leven, en daarom doen we er alles aan om ze snel en efficiënt te repareren, zodat u snel weer verder kunt.
            </p>
            <p class="white-text">
                Kies Uneed-it voor een professionele reparatieservice waarop u kunt vertrouwen. We staan klaar om u te helpen met al uw reparatiebehoeften.
            </p>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\uneeditGoeie\resources\views/overons.blade.php ENDPATH**/ ?>