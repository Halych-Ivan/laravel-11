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
                                <a href="<?php echo e(route('home')); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admission')); ?>"><?php echo e(__('Вступ')); ?></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="<?php echo e(route('admission.confirmation')); ?>"><?php echo e(__('Підтвердження вступу')); ?></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Events</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="event.html">Event 01</a></li>
                                    <li><a href="event-2.html">Event 02</a></li>
                                    <li><a href="event-details.html">Event Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="teachers.html">Teachers</a></li>
                                    <li><a href="teacher-details.html">Teachers Details</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                    <li><a href="testimonial.html">Testimonial</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li>
                                    <li><a href="notice.html">Notice</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Shop</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="shop.html">Shop </a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="product-details.html">Shop Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="active" href="#">Blog</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a class="active" href="blog.html">Blog </a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sideba.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
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