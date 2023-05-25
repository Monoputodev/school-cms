@extends('web.app.app')

@section('main-body')
    <div class="main-body">

        <!-- notice breadcrumb version one strat here -->
        <section class="breadcrumb-notice-version-one">
            <div class="single-bredcurms" style="background-image:url('images/bercums/contact-page.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>News & Info</h2>
                                <ul>
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li class="active"><a href="notice-single.html">News & Info</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- notice breadcrumb version one end here -->

        <!-- Start notice -->
        <section id="notice" class="section-paddings single section page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12  mainPage_wrapper">
                        <!-- Begin: mainPage_wrapper -->
                        <div class="mainPage_inner cont-page">
                            <!-- Begin: mainPage_inner -->



                            <div class="col-sm-9 col-md-9 col-lg-9 content-page">
                                <!-- Begin: content -->

                                <div id="passage">
                                    <h2 class="page-title">News and Info</h2>

                                    <div class="paragraph page-para">

                                        @foreach ($notices as $notice)
                                            <div class="several-news">
                                                <h3>{{ $notice->title }}</h3>
                                                @if ($notice->subtitle)
                                                    <p class="p-2">{{ $notice->subtitle }}</p>
                                                @endif

                                                <div class="entry-utility">
                                                    {{ \Carbon\Carbon::parse($notice->created_at)->format('d M, Y') }}
                                                </div>
                                                <a href="{{ asset('uploads/notices/' . $notice->pdf_file) }}"
                                                    target="_blank" class="\&quot;more2\&quot;">বিস্তারিত তথ্য ডাউনলোড করার
                                                    জন্যএইখানে ক্লিক করুন</a>
                                            </div> <!-- End: several news -->
                                        @endforeach




                                        <!-- show pagination here -->

                                    </div>
                                    {{-- <center>
                                        <div class="pagination"><span>Page 1 of 275</span><span class="current">1</span><a
                                                href="https://hajj.gov.bd/news-and-info/page/2/" class="inactive">2</a><a
                                                href="https://hajj.gov.bd/news-and-info/page/3/" class="inactive">3</a><a
                                                href="https://hajj.gov.bd/news-and-info/page/4/" class="inactive">4</a><a
                                                href="https://hajj.gov.bd/news-and-info/page/5/" class="inactive">5</a><a
                                                href="https://hajj.gov.bd/news-and-info/page/2/">Next ›</a><a
                                                href="https://hajj.gov.bd/news-and-info/page/275/">Last »</a></div>
                                    </center> --}}

                                </div>

                            </div><!-- End: content -->

                            <div class="col-sm-3 col-md-3 col-lg-3  sidebar-left">
                                <!-- Begin: sidebar left -->

                                <div class="cont-list cont-list-news">
                                    <div class="cont-header">
                                        <h2>Related News</h2>
                                    </div>
                                    <div class="services-news">
                                        <ul>
                                            @foreach ($notices as $notice)
                                                <li><a href="{{ asset('uploads/notices/' . $notice->pdf_file) }}"
                                                        target="_blank" class="news-sidebar">{{ $notice->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-12 col-lg-12 padd-off">
                                    <div class="pre-registration-gov" style="margin-bottom:15px;">
                                        <a href="https://prp.pilgrimdb.org/pilgrim-reg-request/create" target="_blank"
                                            title="">
                                            <img src="https://hajj.gov.bd/wp-content/themes/HMS_portal_v2/images/interface/gov-wise-registration.png"
                                                width="100%" alt="Registration for Gov">
                                        </a>
                                    </div>
                                </div>
                            </div><!-- End: sidebar left -->
                        </div><!-- End: mainPage_inner -->
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
