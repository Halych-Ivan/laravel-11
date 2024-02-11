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
                @foreach($blog as $item)
                <div class="col-lg-4">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="{{ route($item['href']) }}">
                                <img src="{{ asset($item['image']) }}" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="{{ route($item['href']) }}">{{ $item['title'] }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--====== Blog Ends ======-->
