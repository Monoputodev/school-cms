        <!-- start courses area -->
        <div class="upcoming-event-area pt-110 pb-80">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h1 class="uppercase">OUR GALLERY</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do <br> eiumod tempor incididunt ut
                        labore et. </p>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
                <div class="row">
                    @foreach ($photos as $photo)
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-img mb-30">
                                <img src="{{ asset('') }}uploads/photos/{{ $photo->image }}" alt="">
                                <div class="gallery-view">
                                    <a class="img-poppu" href="{{ asset('') }}uploads/photos/{{ $photo->image }}">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            @if (request()->routeIs('index'))
                <div class="view-all-button text-center">
                    <a href="{{ route('gallery.index') }}" class="mx-auto text-center btn btn-dark btn-sm">View All</a>
                </div>
            @endif
        </div>

        {{-- <div class="counter-area bg-2 bg-opacity bg-relative ptb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 text-center">
                        <div class="counter-bottom2">
                            <div class="counter-img">
                                <img src="{{ asset('') }}assets/web/images/icons/1.png" alt="" >
                            </div>
                            <div class="counter-all">
                                <div class="counter-next2">
                                    <h2>Teachers</h2>
                                </div>
                                <div class="counter cnt-two">
                                    <h1>34</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 text-center">
                        <div class="counter-bottom2 mrg-xs mrg-sm-none">
                            <div class="counter-img">
                                <img src="{{ asset('') }}assets/web/images/icons/2.png" alt="" >
                            </div>
                            <div class="counter-all">
                                <div class="counter-next2">
                                    <h2>Students</h2>
                                </div>
                                <div class="counter cnt-two">
                                    <h1>3554</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 text-center">
                        <div class="counter-bottom2 mrg-xs">
                            <div class="counter-img">
                                <img src="{{ asset('') }}assets/web/images/icons/3.png" alt="" >
                            </div>
                            <div class="counter-all">
                                <div class="counter-next2">
                                    <h2>Research</h2>
                                </div>
                                <div class="counter cnt-two">
                                    <h1>354</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 text-center">
                        <div class="counter-bottom2 mrg-xs">
                            <div class="counter-img">
                                <img src="{{ asset('') }}assets/web/images/icons/4.png" alt="" >
                            </div>
                            <div class="counter-all">
                                <div class="counter-next2">
                                    <h2>Awards</h2>
                                </div>
                                <div class="counter cnt-two">
                                    <h1>44</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End courses area -->
