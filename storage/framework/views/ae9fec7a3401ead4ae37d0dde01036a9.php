<!--====== Top Course Start ======-->
<section class="top-courses-area">
    <div class="container mb-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title mt-10">
                    <h2 class="title">Спеціальності <br> факультету</h2>
                    <p>З повним переліком спеціальностей університету можна ознайомитися на <u><a href="https://biotechuniv.edu.ua">офіційному сайті</a></u></p>
                </div>
            </div>
        </div>
        <div class="courses-wrapper wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">

                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6 courses-col">
                    <div class="single-courses-2 mt-30">
                        <div class="courses-image">
                            <a href="<?php echo e(route($item['href'])); ?>"><img src="<?php echo e(asset($item['image'])); ?>" width="270" height="170" alt="courses"></a>
                        </div>
                        <div class="courses-content">
                            <h4 class="courses-title"><a href="<?php echo e(route($item['href'])); ?>"><?php echo e($item['title']); ?></a></h4>
                            <div class="duration-rating">
                                <div class="duration-fee">
                                    <p class="duration"><?php echo $item['duration']; ?></p>
                                    <p class="fee"><?php echo $item['fee']; ?></p>
                                </div>
                            </div>
                            <div class="courses-link">
                                <a class="apply" href="<?php echo e(route($item['href'])); ?>"></a>
                                <a class="more" href="<?php echo e(route($item['href'])); ?>">Детально <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</section>
<!--====== Top Course Ends ======-->
<?php /**PATH E:\Server\Laragon-Server\www\laravel-11\resources\views/agromaster/assets/courses.blade.php ENDPATH**/ ?>