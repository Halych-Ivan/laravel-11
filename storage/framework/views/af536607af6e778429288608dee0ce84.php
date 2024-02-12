<!--====== Blog Start ======-->
<section class="mt-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="section-title-2 text-center">
                    <h2 class="title">Освітні програми спеціальності 208&nbspАгроінженерія</h2>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="blog-wrapper">
            <div class="row blog-active">
                <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="<?php echo e(route($item['href'])); ?>">
                                <img src="<?php echo e(asset($item['image'])); ?>" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="<?php echo e(route($item['href'])); ?>"><?php echo e($item['title']); ?></a></h4>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<!--====== Blog Ends ======-->
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/assets/blog.blade.php ENDPATH**/ ?>