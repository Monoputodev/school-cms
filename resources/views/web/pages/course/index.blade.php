@extends('web.app.app')
@section('main-body')
<div class="main-body">
    <section class="breadcrumbs-area bg-3 ptb-110 bg-opacity bg-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumbs">
                        <h2 class="page-title">Our Courses</h2>
                        <ul>
                            <li>
                                <a class="active" href="#">Home</a>
                            </li>
                            <li>
                                <a>Pages</a>
                            </li>
                            <li>Our Top Courses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('web.component.section-3')
</div>

@endsection

