<!--====== Footer Start ======-->
<section class="footer-area footer-02 bg_cover" style="background-image: url({{ asset('images/counter-bg.jpg') }});">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-link mt-45">
                        <h4 class="footer-title">{{__('Інформація')}}</h4>
                        <ul class="link-list">
                            <li><a href="https://biotechuniv.edu.ua/">Університет</a></li>
                            <li><a href="https://biotechuniv.edu.ua/fakulteti-instituti/faculty-of-mechanotronics-and-engineering/">Факультет</a></li>
                            <li><a href="https://biotechuniv.edu.ua/fakulteti-instituti/faculty-of-mechanotronics-and-engineering/employeers-fme/">Деканат</a></li>
                            <li><a href="https://biotechuniv.edu.ua/fakulteti-instituti/faculty-of-mechanotronics-and-engineering/educational-programs/">Спеціальності</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-link mt-45">
                        <h4 class="footer-title">{{__('Випускові кафедри')}}</h4>
                        <ul class="link-list">
                            <li><a href="https://biotechuniv.edu.ua/fakulteti-instituti/faculty-of-mechanotronics-and-engineering/kafedra-mechatronics-and-machine-parts/">Мехатроніки, БЖ та упр. якістю</a></li>
                            <li><a href="https://biotechuniv.edu.ua/fakulteti-instituti/faculty-of-mechanotronics-and-engineering/kafedra-traktoriv-i-avtomobiliv/">Тракторів і автомобілів</a></li>
                            <li><a href="https://biotechuniv.edu.ua/fakulteti-instituti/faculty-of-mechanotronics-and-engineering/kafedra-optimizatsiyi-tehnologichnih-sistem-v-roslinnitstvi/">Оптимізації технологічних систем</a></li>
                            <li><a href="https://biotechuniv.edu.ua/fakulteti-instituti/faculty-of-mechanotronics-and-engineering/kafedra-silskogospodarskih-mashin/">Сільськогосподарських машин та інжинерії тваринництва</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-link mt-45">
                        <h4 class="footer-title">{{__('Корисні посилання')}}</h4>
                        <ul class="link-list">
                            <li><a href="{{ route('home') }}">Home Page</a></li>
                            <li><a href="{{ route('home') }}">FAQs</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-link mt-45">
                        <h4 class="footer-title">{{__('Контакти')}}</h4>
                        <ul class="link-list">
                            <li>
                                <p>{{ config('app.address') }}</p>
                            </li>
                            <li>
                                <p><a href="tel:{{ config('app.phone-2') }}">{{ config('app.phone-2') }}</a></p>
                                <p><a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a></p>
                            </li>
                            <li>
                                <p><a href="mailto://{{ config('app.email') }}">{{ config('app.email') }}</a></p>
                                <p></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-widget-wrapper">
                <div class="footer-social">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/profile.php?id=100075522477800"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://t.me/agromaster_info"><i class="fab fa-telegram-plane"></i></a></li>
                        <li><a href="https://www.instagram.com/agromaster.info"><i class="fab fa-instagram"></i></a></li>
{{--                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
                    </ul>
                </div>
                <div class="footer-menu">
                    <ul class="menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Notice Board</a></li>
                        <li><a href="#">Offers</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="copyright text-center">
                <p>&copy; Copyright all right reserved by <a href="{{ route('home') }}">Halych Ivan</a></p>
            </div>
        </div>
    </div>
</section>
<!--====== Footer Ends ======-->
