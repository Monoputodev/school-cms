<section class="top-courses pt-110 pb-80">
    <div class="container">
        <div class="section-title text-center mb-55">
            <h1 class="uppercase">OUR Courses</h1>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>
        <div class="row">


            @foreach ($courses as $course)
                <div class="col-lg-4 col-md-6">
                    <div class="single-course mb-30">
                        <a href="#"><img src="{{ asset('') }}uploads/courses/{{ $course->image }}" alt=""></a>
                        <div class="single-coures-text">
                            <h3><a href="#">{{ $course->name }}</a></h3>
                            <p>{{ $course->description }}</p>
                            <a href="{{route('course.details',$course->id)}}">READ MORE</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    @if (request()->routeIs('index'))
<div class="view-all-button text-center">
    <a href="{{ route('course.index') }}" class="mx-auto text-center btn btn-dark btn-sm">View All</a>
</div>
@endif

</section>
