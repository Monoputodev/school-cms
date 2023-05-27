@extends('web.app.app')


@section('main-body')
    <div class="main-body">
            <!-- Section: home -->
            @include('web.component.hero')

            <!-- Section: About  -->
            @include('web.component.about')



            <!-- Section: free-registration  -->
            @include('web.component.querry')
            {{-- @include('web.component.testimonial') --}}


            <!-- Section: -->


            <!-- Section:  -->
            @include('web.component.team')

            <!-- Divider: -->
@include('web.component.divider')

            <!-- Section: blog -->
            @include('web.component.news')

            <!-- Divider: Reservation Form -->
@include('web.component.contact-us')

    </div>
@endsection
