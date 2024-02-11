<!--====== Campus Visit Start ======-->
<section class="container mt-5">
    <div class="campus-visit-wrapper">
        <div class="campus-image-col">
            <div class="campus-image">
                @foreach($campus['image'] as $item)
                <div class=" single-campus">
                    <img src="{{ asset($item) }}" alt="">
                </div>
                @endforeach
            </div>
        </div>
        <div class="campus-content-col">
            <div class="campus-content">
                <h2 class="campus-title">Довідкова інформація</h2>
                <span class="line"></span>
                <p>Відео-презентація</p>
                <a class="play video-popup" href="{{ $campus['video'] }}">Дивитись
                    відео</a>
                <p>Консультації експертів приймальної комісії</p>
                <a class="play" href="viber://chat?number={{ config('app.phone-2') }}"><i class="far fa-comment-dots"></i>
                    <span>Viber-консультація</span></a>
            </div>
        </div>
    </div>
    </div>
</section>
<!--====== Campus Visit Ends ======-->
