
<header class="header-area">
    <div class="header-top blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12">
                    <div class="header-top-info">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-phone"></i>
                                </a>
                                {{ $content->website_phone }}
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>
                                    {{ $content->website_email }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header-bottom stick-h2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('') }}uploads/content/{{ $content->website_logo }}" alt=""> </a>
                    </div>
                </div>
                <div class="col-md-8 hidden-sm d-none d-md-block">
                    <div class="menu-area f-right">
                        <nav>
                            <ul>
                                <li><a href="{{ route('index') }}">Home  </a></li>
                                <li class="active coloumn-one"><a href="index.html">Notice <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul>
                                        <li><a href="text-animation-1.html">home animated text 1</a></li>
                                        <li><a href="text-animation-2.html">home animated text 2</a></li>
                                        <li><a href="text-animation-3.html">home animated text 3</a></li>
                                        <li><a href="text-animation-4.html">home animated text 4</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('course.index') }}">Our Programme  </a></li>
                                <li><a href="{{ route('news.index') }}">NEWS  </a></li>
                                <li><a class="none-padding" href="contact.html">CONTACT </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
