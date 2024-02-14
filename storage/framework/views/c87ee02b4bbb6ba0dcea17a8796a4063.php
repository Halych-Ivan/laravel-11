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

        <section class="container">
            <div class="">
                <div class="row">
                    <div class="col-lg-12 notice-content">
                        <div class="single-notice">
                            <h3 class="notice-title">Довідки від деканату</h3>
                            <p>
                                Для отримання довідки від деканату про місце навчання здобувачами вищої освіти,
                                що навчаються на спеціальності 208 "Агроінженерія" денної форми навчання
                                є можливість замовлення через <a href="https://forms.gle/YuttqGCSDbu9Jsoq7" target="_blank"><u>гугл-форму</u></a>.
                                При цьому, слід вказати назва організації, куди видається довідка та у випадку отримання довідки
                                "Новою поштою" за рахунок отримувача: населений пункт, Номер відділення Нової пошти, телефон та прізвище отримувача.
                            </p>
                            <a class="btn main-btn" href="https://forms.gle/YuttqGCSDbu9Jsoq7" target="_blank">Замовлення довідки від деканату</a>

                            <p>
                                Для отримання довідки за <b>формою 20 (для ТЦК та СП)</b>, необхідно заповнити <a href="https://docs.google.com/forms/d/e/1FAIpQLSf5KVqRv_mC0sOsHjBJrPJhaXLIYCv0nuWhDX9LuDEzLTi-pg/viewform" target="_blank"><u><b>"Анкету для постановки на військовий облік в Державному біотехнологічному університеті"</b></u></a>
                                за посиланням нижче:
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSf5KVqRv_mC0sOsHjBJrPJhaXLIYCv0nuWhDX9LuDEzLTi-pg/viewform" target="_blank">
                                    <u>https://docs.google.com/forms/d/e/1FAIpQLSf5KVqRv_mC0sOsHjBJrPJhaXLIYCv0nuWhDX9LuDEzLTi-pg/viewform</u></a>
                            </p>
                            <a class="btn main-btn main-btn-2" href="https://docs.google.com/forms/d/e/1FAIpQLSf5KVqRv_mC0sOsHjBJrPJhaXLIYCv0nuWhDX9LuDEzLTi-pg/viewform" target="_blank">Замовлення довідки ФОРМА 20</a>

                            <p>
                                Довідки готують працівники війського-мобілізаційного відділу, підписує - ректор університету
                                (або проректор за дорученням ректора). Після підписання довідку передають до деканату.
                                Готові довідки можна забрати в деканаті або <a href="https://forms.gle/YuttqGCSDbu9Jsoq7" target="_blank"><u>замовити відправлення "Новою поштою"</u></a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/education/reference.blade.php ENDPATH**/ ?>