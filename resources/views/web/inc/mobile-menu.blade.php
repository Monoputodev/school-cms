<div class="mobile-menu-area clearfix">
    <div class="container">
        <div class="row">
            <div class="d-block d-lg-none col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
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
