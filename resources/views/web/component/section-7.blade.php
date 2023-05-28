
<div class="event-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-55">
                    <h1 class="uppercase">LATEST NEWS</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit  sed do <br> eiumod tempor incididunt ut labore et. </p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $news)
            <div class="col-lg-4 col-md-6">
                <div class="news-are">
                    <div class="news-img">
                        <img src="{{ asset('') }}uploads/blogs/{{ $news->image }}" alt="" >
                        <div class="news-date">
                            <div class="blog-meta-2">
                                <span class="published3">
                                    <i class="icofont icofont-ui-calendar"></i>
                                    {{ $news->created_at->format('d M Y') }}
                                </span>
                            </div>
                            <div class="blog-meta for-news">
                                <span class="published3">
                                    <a href="#">
                                        <i class="icofont icofont-eye"></i> 34
                                    </a>
                                </span>

                            </div>
                        </div>
                    </div>
                    <div class="img-text gray-bg">
                        <h3><a href="#">{{ $news->title }}</a></h3>
                        <p>{{ $news->subtitle }}</p>
                        <a class="button extra-small" href="{{ route('news.details',$news->id) }}">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
