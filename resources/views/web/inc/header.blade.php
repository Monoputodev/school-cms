
<header class="header-area">
    @if ($content->banner_top_status == 1)
    <div class="header-top ">
        <div class="container-md  g-0">
            <div class="row">
                <div class="col-lg-12">
                   <img src="{{ asset('/') }}uploads/content/{{ $content->banner_top }}" class="w-100" alt="">
                </div>

            </div>
        </div>
    </div>
    @endif

    <div class="header-bottom stick-h2">
        <div class="container-md bg-white g-0">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('') }}uploads/content/{{ $content->website_logo }}" class="logo" alt=""> </a>
                    </div>
                </div>
                <div class="col-md-8 hidden-sm d-none d-md-block">
                    <div class="menu-area f-right">
                        <nav>
                            <ul>
                                <li><a href="{{ route('index') }}">Home  </a></li>
                                <li><a href="{{ route('admission.index') }}">Admission</a></li>
                                <li ><a href="{{ route('notice.index') }}">Notice</a></li>
                                <li ><a href="{{ route('result.index') }}">Result</a></li>
                                <li ><a href="{{ route('rutine.index') }}">Rutine</a></li>
                                <li><a href="{{ route('teacher.index') }}">Teachers  </a></li>
                                <li><a href="{{ route('course.index') }}">Our Courses  </a></li>
                                <li><a href="{{ route('news.index') }}">News  </a></li>
                                <li><a href="#contact">Contact </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
