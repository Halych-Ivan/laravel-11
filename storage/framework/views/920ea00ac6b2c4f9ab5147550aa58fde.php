<?php if (isset($component)) { $__componentOriginalfa1dab8c860f58b298b5eea1af56ad9e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa1dab8c860f58b298b5eea1af56ad9e = $attributes; } ?>
<?php $component = App\View\Components\AgromasterLayout::resolve(['meta' => $meta] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('agromaster-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AgromasterLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php if(isset($banner)): ?>
        <?php if (isset($component)) { $__componentOriginale88ed69cab9b46d3bf18c2c1d3f2a1a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale88ed69cab9b46d3bf18c2c1d3f2a1a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.assets.banner','data' => ['title' => ''.e($banner['title']).'','image' => ''.e($banner['image'] ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('assets.banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($banner['title']).'','image' => ''.e($banner['image'] ?? '').'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale88ed69cab9b46d3bf18c2c1d3f2a1a2)): ?>
<?php $attributes = $__attributesOriginale88ed69cab9b46d3bf18c2c1d3f2a1a2; ?>
<?php unset($__attributesOriginale88ed69cab9b46d3bf18c2c1d3f2a1a2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale88ed69cab9b46d3bf18c2c1d3f2a1a2)): ?>
<?php $component = $__componentOriginale88ed69cab9b46d3bf18c2c1d3f2a1a2; ?>
<?php unset($__componentOriginale88ed69cab9b46d3bf18c2c1d3f2a1a2); ?>
<?php endif; ?>
    <?php endif; ?>






 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfa1dab8c860f58b298b5eea1af56ad9e)): ?>
<?php $attributes = $__attributesOriginalfa1dab8c860f58b298b5eea1af56ad9e; ?>
<?php unset($__attributesOriginalfa1dab8c860f58b298b5eea1af56ad9e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa1dab8c860f58b298b5eea1af56ad9e)): ?>
<?php $component = $__componentOriginalfa1dab8c860f58b298b5eea1af56ad9e; ?>
<?php unset($__componentOriginalfa1dab8c860f58b298b5eea1af56ad9e); ?>
<?php endif; ?>
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/science/vsdemm.blade.php ENDPATH**/ ?>