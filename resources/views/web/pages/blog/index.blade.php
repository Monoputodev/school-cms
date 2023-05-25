@extends('web.app.app')


@section('main-body')
    <div class="main-body">
        <!-- blog breadcrumb version one strat here -->
        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms"
                style="background-image:url('{{ asset('uploads/content/' . $content->blog_background) }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Blog</h2>
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="active"><a href="single-package.html">Blog Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- blog breadcrumb version one end here -->
        <!-- guide and Expert Advice strat -->
        <section class="section-paddings">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Travel guide and Expert Advice</h2>
                            <p>there we share our experiences </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <!-- single travel blog-->
                        <div class="col-md-4 col-sm-6 phone-layout-s">
                            <div class="single-travel-blog single-travel-blog-2">
                                <div class="blog-image">
                                    <a href="{{ route('blog.details', $blog->title) }}"><img
                                            src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-content">
                                        <h4><a href="{{ route('blog.details', $blog->title) }}">{{ $blog->title }}</a></h4>
                                        <div class="blog-meta">
                                            <ul class="post-social-2">
                                                <li><a href="{{ route('blog.details', $blog->title) }}"><i
                                                            class="fa fa-calendar"></i>
                                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <p>{{ $blog->subtitle }}</p>
                                    </div>
                                    <div class="read-more-btn">
                                        <a href="{{ route('blog.details', $blog->title) }}">Read More <i
                                                class="fa fa-angle-right"> </i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end single travel guide & security-->
                    @endforeach


                </div>
            </div>
        </section>
        <!--End guide and Expert Advice strat -->
    </div>
@endsection
