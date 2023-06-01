<div class="lecturers-area ptb-110">
    <div class="">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-60">
                    <h1 class="uppercase">Our Lecturers</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                        <br>
                        eiumod tempor incididunt ut labore et.
                    </p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($teams as $teacher)
            <div class="col-lg-3 col-md-6">
                <div class="single-lecturers">
                    <div class="lecturers-ig">
                        <a href="#"><img alt="" src="{{ asset('') }}uploads/teams/{{ $teacher->image }}"></a>
                        <div class="img-title">
                            <h3>{{ $teacher->name }}</h3>
                            <p> {{ $teacher->designation }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>


</div>
@if (request()->routeIs('index'))
<div class="view-all-button text-center">
    <a href="{{ route('teacher.index') }}" class="mx-auto text-center btn btn-dark btn-sm">View All</a>
</div>
@endif
