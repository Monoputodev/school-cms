<section id="blog">
    <div class="container pb-70">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <h2 class="mt-0 line-height-1 text-center">Latest <span
                            class="text-theme-colored3">News</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem temporibus
                        quisquam voluptas natus, provident porro et odio perferendis ipsam, amet sint</p>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="row">
@foreach($blogs as $blog)
<div class="col-sm-6 col-md-4 col-lg-4">
    <article class="post clearfix maxwidth600 mb-30 border-1px">
        <div class="entry-header-new">
            <div class="post-thumb thumb"><img
                    src="{{ asset('/') }}uploads/blogs/{{ $blog->image }}"
                    alt="" class="img-responsive img-fullwidth">
            </div>
            <div class="blog-overlay"></div>
        </div>
        <div class="pr-20 pl-20 pb-30 text-center">
            <h3 class="entry-title mt-20 pt-0"><a class="text-theme-colored"
                    href="#">{{ $blog->title }}</a></h3>
            <ul class="list-inline entry-date font-13 mt-5">
                <li><i class="fa fa-clock-o mr-5 text-theme-colored"></i> {{ $blog->created_at->format('M') }} - {{ $blog->created_at->format('d') }} </li>

            </ul>
            <p class="mt-10">{{ $blog->subtitle }}</p>
            <a class="btn btn-theme-colored btn-lg btn-flat mt-0 text-white mt-10"
                href="#">Read more <i
                    class="fa fa-angle-double-right text-theme-colored2"></i></a>
        </div>
    </article>
</div>
@endforeach


            </div>
        </div>
    </div>
</section>