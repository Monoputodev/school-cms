@extends('web.app.app')
@section('main-body')
    <div class="main-body">

        <section class="breadcrumbs-area bg-3 ptb-110 bg-opacity bg-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">All Announcements</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="upcoming-event-area pt-110 pb-70">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h1 class="uppercase">All Announcements</h1>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
                <div class="all-upcoming-event">
                    <div class="row">

                        @foreach ($notices as $notice)
                            <div class="col-lg-6 col-md-12">
                                <div class="single-upcoming mb-40">
                                    <div class="upcoming-date text-center">
                                        <div class="date-all">
                                            <span>{{ $notice->created_at->format('d') }}</span>
                                            <span class="month">{{ $notice->created_at->format('M y') }}</span>
                                        </div>
                                    </div>
                                    <div class="single-upcoming-text">
                                        <div class="blog-meta">
                                            <span class="published3">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                {{ $notice->created_at->format('h:i a') }}
                                            </span>
                                            <span class="published4">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{ $content->website_name }}
                                            </span>
                                        </div>
                                        <h3><a href="#">{{ $notice->title }}</a></h3>
                                        <p>{{ $notice->subtitle }}</p>
                                        @if ($notice->pdf_file)
                                            <a href="{{ asset('') }}uploads/notices/{{ $notice->pdf_file }}"
                                                target="_blank" rel="noopener noreferrer" class="btn btn-primary">Download
                                                file</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
