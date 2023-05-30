
<header class="header-area">
    @if ($content->banner_top_status == 1)
    <div class="header-top ">
        <div class="container-md g-0">
            <div class="row">
                <div class="col-lg-12">
                   <img src="{{ asset('/') }}uploads/content/{{ $content->banner_top }}" class="w-100" alt="">
                </div>

            </div>
        </div>
    </div>
    @endif

    <div class="header-bottom stick-h2">
        <div class="container-md g-0">
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
                                <li class="active coloumn-one"><a href="index.html">Notice <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul>
                                        @foreach ($types as $type)
                                        <li><a href="{{ route('notice.details',$type->id) }}">{{ $type->name }}</a></li>

                                        @endforeach

                                    </ul>
                                </li>

                                <li><a href="{{ route('admission.index') }}">Admission</a></li>
                                <li><a href="{{ route('teacher.index') }}">Teachers  </a></li>
                                <li><a href="{{ route('course.index') }}">Our Programme  </a></li>
                                <li><a href="{{ route('news.index') }}">NEWS  </a></li>
                                <li><a href="#contact">CONTACT </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
