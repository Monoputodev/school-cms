@extends('web.app.app')
@section('main-body')
    <div class="main-body">
        <section class="breadcrumbs-area bg-3 ptb-110 bg-opacity bg-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">{{ $news->title }}</h2>
                            <ul>
                                <li>
                                    <a class="active" href="#">Home</a>
                                </li>
                                <li>
                                    <a>News</a>
                                </li>
                                <li>{{ $news->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-details-area pt-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-details-all gray-bg">
                            <img src="{{asset('')}}uploads/blogs/{{$news->image}}" alt="">
                            <div class="news-details-all-area pt-40 pl-200 pr-200">
                                <div class="news-details-top">
                                    <h3>{{$news->title}} </h3>
                                    <div class="news-details-calender">
                                        <div class="blog-meta-2">
                                            <span class="published3">
                                                <i class="icofont icofont-ui-calendar"></i>
                                                {{$news->created_at->format('d M Y')}}
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="news-details-middle">
                                    {!! $news->description !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
