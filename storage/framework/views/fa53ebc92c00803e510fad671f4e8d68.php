<!--====== Header Start ======-->
<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
                <div class="header-top-left mt-2">
                    <ul class="header-meta">
                        <li><a href="mailto://<?php echo e(config('app.email')); ?>"><?php echo e(config('app.email')); ?></a></li>
                    </ul>
                </div>
                <div class="header-top-right mt-2">
                    <div class="header-link">
                        <a class="notice" href="notice.html">Notice</a>
                        <a class="login" href="<?php echo e(route('login')); ?>">Login</a>
                        <a class="login" href="<?php echo e(route('register')); ?>">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="navigation" class="navigation navigation-landscape">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('images/logo.svg')); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 position-static">
                    <div class="nav-toggle"></div>
                    <nav class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            <li>
                                <a href="<?php echo e(route('home')); ?>">Головна</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admission')); ?>"><?php echo e(__('Вступ')); ?></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="<?php echo e(route('admission.confirmation')); ?>"><?php echo e(__('Підтвердження вступу')); ?></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Навчання</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="<?php echo e(route('education.schedule')); ?>">Розклад навчання</a></li>
                                    <li><a href="<?php echo e(route('education.session')); ?>">Розклад іспитів</a></li>
                                    <li><a href="<?php echo e(route('education.lists')); ?>">Списки груп</a></li>
                                    <li><a href="<?php echo e(route('education.details')); ?>">Реквізити оплати за навчання</a></li>
                                    <li><a href="<?php echo e(route('education.reference')); ?>">Довідки</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Наука</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="<?php echo e(route('science.conference')); ?>">Конференції</a></li>
                                    <li><a href="<?php echo e(route('science.vsdemm')); ?>">ВСДЕММ</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo e(route('contact')); ?>">Контакти</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 position-static">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== Header Ends ======-->
<?php /**PATH Z:\Laragon-Server\www\laravel-11\resources\views/agromaster/header.blade.php ENDPATH**/ ?>