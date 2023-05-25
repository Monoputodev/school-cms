@extends('web.app.app')


@section('main-body')
    <div class="main-body">
        @include('web.component.hero')

        @include('web.component.about')
        @include('web.component.package')

        @include('web.component.destination')
        @include('web.component.blog')
        @include('web.component.us')
        @include('web.component.news')

        @include('web.component.testimonial')

        @include('web.component.team')


        <!-- testimonial area start here -->
        @include('web.component.gallery')

    </div>
@endsection
