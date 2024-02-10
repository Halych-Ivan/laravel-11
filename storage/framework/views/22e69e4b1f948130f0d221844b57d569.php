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

    <h1><?php echo e($meta['title']); ?></h1>

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
<?php /**PATH E:\Server\Laragon-Server\www\laravel-11\resources\views/agromaster/index.blade.php ENDPATH**/ ?>