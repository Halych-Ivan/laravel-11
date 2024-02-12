<!--====== Campus Visit Start ======-->
<section class="container mt-5">
    <div class="campus-visit-wrapper">
        <div class="campus-image-col">
            <div class="campus-image">
                <?php $__currentLoopData = $campus['image']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class=" single-campus">
                    <img src="<?php echo e(asset($item)); ?>" alt="">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="campus-content-col">
            <div class="campus-content">
                <h2 class="campus-title">Довідкова інформація</h2>
                <span class="line"></span>
                <p>Відео-презентація</p>
                <a class="play video-popup" href="<?php echo e($campus['video']); ?>">Дивитись
                    відео</a>
                <p>Консультації експертів приймальної комісії</p>
                <a class="play" href="viber://chat?number=<?php echo e(config('app.phone-2')); ?>"><i class="far fa-comment-dots"></i>
                    <span>Viber-консультація</span></a>
            </div>
        </div>
    </div>
    </div>
</section>
<!--====== Campus Visit Ends ======-->
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/assets/campus.blade.php ENDPATH**/ ?>