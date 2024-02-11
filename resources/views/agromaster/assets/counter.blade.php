<!--====== Counter Start ======-->
<div class="counter-area">
    <div class="container">
        <div class="counter-wrapper bg_cover mt-10" style="background-image: url({{ asset($counter['bg']) }});">
            <div class="row">
                @foreach($counter['arr'] as $item)
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s"
                         data-wow-delay="0.2s">
                        <span class="counter-count"><span class="count">{{$item['count']}}</span>+</span>
                        <p>{{$item['title']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--====== Counter Ends ======-->
