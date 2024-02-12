<!--====== Slider Start ======-->
<section class="slider-area slider-active">
    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="single-slider d-flex align-items-center bg_cover" style="background-image: url(<?php echo e(asset($slider['image'])); ?>);">
            <div class="container">
                <div class="slider-content">
                    <h2 class="title" data-animation="fadeInLeft" data-delay="0.2s"><?php echo e($slider['title']); ?></h2>
                    <ul class="slider-btn">
                        <li><a data-animation="fadeInUp" data-delay="0.6s" class="main-btn main-btn-2" href="<?php echo e(route($slider['link_1'])); ?>"><?php echo e($slider['btn_1']); ?></a></li>
                        <li><a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="<?php echo e(route($slider['link_2'])); ?>"><?php echo e($slider['btn_2']); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<!--====== Slider Ends ======-->
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/assets/slider.blade.php ENDPATH**/ ?>