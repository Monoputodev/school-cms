@extends('web.app.app')
@section('main-body')
<div class="main-body">
    <section class="breadcrumbs-area bg-3 ptb-110 bg-opacity bg-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">{{ $course->name }}</h2>
                            <ul>
                                <li>
                                    <a class="active" href="#">Home</a>
                                </li>
                                <li>
                                    <a>Course</a>
                                </li>
                                <li>Courses Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="courses-details pt-110 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="course-left-sidebar">
                        <h3 class="sidebar-title">{{ $course->name }}</h3>
                        <div class="course-details-img">
                            <img alt="" src="{{ asset('') }}uploads/courses/{{ $course->image }}">

                            <div class="free-area pt-30">
                                <div class="free-text">
{!! $course->description !!}
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="course-sidebar mrg-xs">
                        <div class="course-categoris">
                            <h3 class="cate-title">Courses</h3>
                            <ul>
                                @foreach ($courses as $item)

                                <li><a href="{{ route('course.details',$item->id) }}">P{{ $item->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

