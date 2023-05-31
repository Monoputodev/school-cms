<!-- start courses area -->
<div class="upcoming-event-area pt-110 pb-70">
    <div class="container">

        <div class="section-title text-center mb-55">
            <h1 class="uppercase">Leatest Information</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do <br>eiumod tempor incididunt ut labore
                et. </p>
            <div class="separator my mtb-15">
                <i class="icofont icofont-hat-alt"></i>
            </div>
        </div>


        <div class="tab-accordion-area bg-off-white elements-tab-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content fix">
                            <div class="tab-pane active" id="preview-2">
                                <ul class="tab-list nav" role="tablist">
                                    @foreach ($types as $key => $type)
                                        <li>
                                            <a href="#{{ $type->name }}" data-bs-toggle="tab"
                                                aria-selected="{{  $key === 0 ? 'true' : 'false'  }}" role="tab"
                                                class="{{ $key === 0 ? 'active' : '' }}">
                                                {{ $type->name }}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                                <div class="tab-content">
                                    @foreach ($types as $key => $type)
                                        <div class="tab-pane {{  $key === 0 ? 'active' : ''  }}" id="{{ $type->name }}"
                                            role="tabpanel">
                                            <div class="all-upcoming-event">
                                                <div class="row">
                                                    @foreach ($type->notices as $item)
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="single-upcoming mb-40">
                                                                <div class="upcoming-date text-center">
                                                                    <div class="date-all">
                                                                        <span>{{ $item->created_at->format('d') }}</span>
                                                                        <span
                                                                            class="month">{{ $item->created_at->format('M y') }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="single-upcoming-text">
                                                                    <div class="blog-meta">
                                                                        <span class="published3">
                                                                            <i class="fa fa-clock-o"
                                                                                aria-hidden="true"></i>
                                                                            {{ $item->created_at->format('h:i a') }}
                                                                        </span>
                                                                        <span class="published4">
                                                                            <i class="fa fa-map-marker"
                                                                                aria-hidden="true"></i>
                                                                            {{ $content->website_name }}
                                                                        </span>
                                                                    </div>
                                                                    <h3><a href="#">{{ $item->title }}</a></h3>
                                                                    <p>{{ $item->subtitle }}</p>
                                                                    @if ($item->pdf_file)
                                                                        <a href="{{ asset('') }}uploads/notices/{{ $item->pdf_file }}"
                                                                            target="_blank" rel="noopener noreferrer"
                                                                            class="btn btn-primary">Download
                                                                            file</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<!-- End courses area -->
