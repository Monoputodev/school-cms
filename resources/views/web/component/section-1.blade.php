      <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <!-- Start of slider area -->
                <div class="slider-area">
                    <div class="slider-active">
                        @foreach ($sliders as $slider)
                        <div class="slider-all">
                            <img src="{{ asset('') }}uploads/hero/{{ $slider->image }}" alt="">

                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- End of slider area -->
            </div>
            <div class="col-sm-2">
                <div class="banner-area">
                    <img src="{{ asset('/') }}assets/web/images/banner.jpg" class="w-100" alt="">
                </div>
            </div>
        </div>
      </div>
