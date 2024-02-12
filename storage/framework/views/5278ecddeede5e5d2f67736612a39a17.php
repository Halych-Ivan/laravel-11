<!--====== Friends Start ======-->
<section class="blog-wrapper">
    <div class="container">
        <div class="row blog-active">
            <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-2 mt-15 single-specialty text-center">
                    <div class="box-content">
                        <img src="<?php echo e(asset($item)); ?>" alt="">
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!--====== Friends Ends ======-->
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/assets/friends.blade.php ENDPATH**/ ?>