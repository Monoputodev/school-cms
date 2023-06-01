<div class="">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="section-title text-center mb-55">
                <h1 class="uppercase">নোটিশ বোর্ড</h1>
                <div class="separator my mtb-15">
                    <i class="icofont icofont-hat-alt"></i>
                </div>
            </div>
            <div class="container bg-light mb-3 py-4">
                <div class="row">
                    <div class="col-md-3"><img src="{{ asset('/assets/web/images/notice.png') }}"
                            width="110" height=""></div>
                    <div class="col-md-7 text-dark">
                        <ul class="" style="margin:0">
                            @foreach ($notices as $notice)
                                <li class="box-list"><a class="box-name"
                                        href="{{ route('notice.details', $notice->id) }}">{{ $notice->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('notice.index') }}" class="btn btn-success">All Notice</a>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-6 col-lg-6">
            <div class="section-title text-center mb-55">
                <h1 class="uppercase">ক্লাস রুটিন</h1>
                <div class="separator my mtb-15">
                    <i class="icofont icofont-hat-alt"></i>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"><img
                        src="{{ asset('/assets/web/images/rutine.png') }}"
                        alt="চলমান ফলাফল" width="110" height=""></div>
                <div class="col-md-9 text-dark">
                    <ul class="" style="margin:0">
                        @foreach ($courses as $course)
                            <li class="box-list"><a class="box-name"
                                    href="{{ route('rutine.course', $course->id) }}">{{ $course->name }}</a></li>
                        @endforeach
                    </ul>
                </div>


            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="section-title text-center mb-55">
                <h1 class="uppercase">চলমান ফলাফল</h1>
                <div class="separator my mtb-15">
                    <i class="icofont icofont-hat-alt"></i>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"><img
                        src="{{ asset('/assets/web/images/result.png') }}"
                        alt="চলমান ফলাফল" width="110" height=""></div>
                <div class="col-md-9 text-dark">
                    <ul class="" style="margin:0">
                        @foreach ($courses as $course)
                            <li class="box-list"><a class="box-name"
                                    href="{{ route('result.course', $course->id) }}">{{ $course->name }}</a></li>
                        @endforeach
                    </ul>
                </div>


            </div>
        </div>

    </div>
</div>
