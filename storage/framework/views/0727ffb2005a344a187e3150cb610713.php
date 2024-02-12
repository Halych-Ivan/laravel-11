<!--====== Counter Start ======-->
<div class="counter-area">
    <div class="container">
        <div class="counter-wrapper bg_cover mt-10" style="background-image: url(<?php echo e(asset($counter['bg'])); ?>);">
            <div class="row">
                <?php $__currentLoopData = $counter['arr']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s"
                         data-wow-delay="0.2s">
                        <span class="counter-count"><span class="count"><?php echo e($item['count']); ?></span>+</span>
                        <p><?php echo e($item['title']); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<!--====== Counter Ends ======-->
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/assets/counter.blade.php ENDPATH**/ ?>