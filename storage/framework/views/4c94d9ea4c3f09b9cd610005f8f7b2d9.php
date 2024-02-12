<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title', 'image']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title', 'image']); ?>
<?php foreach (array_filter((['title', 'image']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<!--====== Page Banner Start ======-->
<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url(<?php echo e(asset($image)); ?>);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title"><?php echo e($title); ?></h2>
            </div>
        </div>
    </div>
</section>
<!--====== Page Banner Ends ======-->
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/components/assets/banner.blade.php ENDPATH**/ ?>