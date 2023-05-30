      <div class="container-md g-0">
          <div class="row">

              <div
                  class="
                  @if ($content->banner_hero_status == 1) col-sm-10
                  @else
                  col-sm-12 @endif">
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

              @if ($content->banner_hero_status == 1)
                  <div class="col-sm-2">
                      <div class="banner-area">
                        <a href="{{ route('admission.index') }}">
                            <img src="{{ asset('/') }}uploads/content/{{ $content->banner_hero }}" class="w-100"
                            alt=""></a>

                      </div>
                  </div>
              @endif
          </div>
      </div>
