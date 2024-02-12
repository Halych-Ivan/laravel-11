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

    <section class="container">
        <div class="">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2 class="title">Підтвердження вступу та оформлення договору на навчання</h2>
                        <span class="line"></span>
                        <h4 class="title mt-4">Перелік документів</h4>
                        <p>Для підтвердження вашого вступу до <b>Державного біотехнологічного університету</b> на факультет мехатроніки та інжиніригу
                            необхідно подати пакет документів:</p>
                        <ul>
                            <li>- Заявка (друкується із бази ЄДЕБО або кабінету вступника);</li>
                            <li><a href="<?php echo e(asset('uploads/admission/agreement.pdf')); ?>"
                                   target="_blank">- Договір про надання освітніх послуг (2 екземпляри)<u>(завантажити)</u></a></li>
                            <li><a href="<?php echo e(asset('uploads/admission/contract.pdf')); ?>"
                                   target="_blank">- Контракт про надання платної освітньої послуги (2 екземпляри)<u>(завантажити)</u></a></li>
                            <li><a href="<?php echo e(asset('uploads/admission/message.pdf')); ?>"
                                   target="_blank">- Повідомлення про проходження акредитації у поточному навчальному році (тільки для спеціальності 208 Агроінженерія)<u>(завантажити)</u></a></li>
                            <li>- Фото 3х4 (дві шт.)</li>
                            <li>- Копія паспорту (всі заповнені сторінки)</li>
                            <li>- Копія РНОКПП (Ідентифікаційний код)</li>
                            <li>- Копія документу про освіту з додатком (диплом, атестат, свідоцтво ПЗСО)</li>
                            <li>- Копія військово-облікового документу. А саме приписне свідоцтво, якщо вступнику до 27 років, або війсковий квиток всі сторінки. Допускається тимчасове посвідчення.
                                Обовязково має бути відмітка <b>взятий на облік</b>. У разі відсуттності даного документу пишеться
                                <a href="<?php echo e(asset('uploads/admission/receipt.jpg')); ?>" target="_blank"><u><b>розписка</b></u></a> про те, що протягом місяця ви
                                зобов'яуєтесь оформити доний документ та додається фотокопія направлення на медичний огляд від поліклініки.</li>
                        </ul>

                        <h4 class="title mt-4">Підтвердження вступу, подача документів</h4>

                        <p>Фотокопію підписаної заявки завантажити в електронний кабінет, або відправити на електронну адресу <b>agromaster.info@ukr.net</b> та
                            вказати логін і пароль від кабінету (якщо створювали самостійно).</p>

                        <p>Дані документи можна підписати особисто в університеті ДБТУ: м. Харків, вул. Алчевських 44, кімната 210.</p>

                        <p>Або відправити новою поштою на адресу:<br>
                            - м. Харків, нова пошта №91,<br>
                            - Галич Іван Васильович,<br>
                            - (097) 850-36 82.<br>
                        </p>

                        <div class="single-notice faq-wrapper">
                            <h4 class="title">Приклад заповнення договору та контракту:</h4>

                            <div class="accordion" id="accordion">

                                <div class="card mt-3">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse1">Магістратура</a>
                                    </div>

                                    <div id="collapse1" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <h5 class="mt-1">Контракт
                                                <a href="<?php echo e(asset('uploads/admission/contract-5.pdf')); ?>"
                                                   target="_blank"><u>денна форма навчання</u></a> ||
                                                
                                                
                                            </h5>
                                            <h5 class="mt-3">Договір
                                                <a href="<?php echo e(asset('uploads/admission/agreement-208-5.pdf')); ?>"
                                                   target="_blank"><u>208 Агроінженерія</u></a> ||
                                                
                                                
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mt-3">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse2">Бакалаврат (1 курс, вступ після школи, ліцею)</a>
                                    </div>

                                    <div id="collapse2" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <h5 class="mt-1">Контракт
                                                <a href="<?php echo e(asset('uploads/admission/contract-1.pdf')); ?>"
                                                   target="_blank"><u>денна форма навчання</u></a> ||
                                                
                                                
                                            </h5>
                                            <h5 class="mt-3">Договір
                                                <a href="<?php echo e(asset('uploads/admission/agreement-208-1.pdf')); ?>"
                                                   target="_blank"><u>208 Агроінженерія</u></a> ||
                                                
                                                
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mt-3">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapse3">Бакалаврат (2 курс, вступ після коледжу, бакалавра, спеціаліста чи магістра)</a>
                                    </div>

                                    <div id="collapse3" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <h5 class="mt-1">Контракт
                                                <a href="<?php echo e(asset('uploads/admission/contract-2.pdf')); ?>"
                                                   target="_blank"><u>денна форма навчання</u></a> ||
                                                
                                                
                                            </h5>
                                            <h5 class="mt-3">Договір
                                                <a href="<?php echo e(asset('uploads/admission/agreement-208-2.pdf')); ?>"
                                                   target="_blank"><u>208 Агроінженерія</u></a> ||
                                                
                                                
                                            </h5>
                                        </div>
                                    </div>
                                </div>
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
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/admission/confirmation.blade.php ENDPATH**/ ?>