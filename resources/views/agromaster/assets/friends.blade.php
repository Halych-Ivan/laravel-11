<!--====== Friends Start ======-->
<section class="blog-wrapper">
    <div class="container">
        <div class="row blog-active">
            @foreach($friends as $item)
                <div class="col-sm-2 mt-15 single-specialty text-center">
                    <div class="box-content">
                        <img src="{{ asset($item) }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--====== Friends Ends ======-->
