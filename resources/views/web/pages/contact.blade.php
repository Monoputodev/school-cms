@extends('web.app.app')


@section('main-body')
<div class="main-body">
        <!-- blog breadcrumb version one strat here -->
        <section class="breadcrumb-blog-version-one">
        <div class="single-bredcurms" style="background-image:url('images/bercums/contact-page.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bredcrums-content">
                            <h2>Contact US</h2>
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li class="active"><a href="blog-single.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- blog breadcrumb version one end here -->

<!-- google map start  -->
<div class="map-wrapper">
	<div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3649.9477014223007!2d90.35606461538558!3d23.820458692012327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sbd!4v1681036451792!5m2!1sen!2sbd"  height="600" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>

<!-- google map end  -->
<section class="section-paddings">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="contacts-part">
                    <div class="footer-title">
                        <h3>Corporate Office</h3>
                    </div>
                    <ul class="footer-contact">
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/map.png"
                                alt="">{{ $content->website_address }}</li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/phone.png"
                                alt="">{{ $content->website_phone }}</li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/gmail.png"
                                alt="">{{ $content->website_email }}</li>
                        <li><a href="http://www.smtravelsint.com" target="_blank">www.smtravelsint.com</a></li>
                        <li><a href="http://www.thesawari.com" target="_blank">www.thesawari.com</a></li>
                        <li><a href="http://www.theflexibletours.com" target="_blank">www.theflexibletours.com</a>
                        </li>
                        <li><a href="http://www.flexibletoursuae.com" target="_blank">www.flexibletoursuae.com</a>
                        </li>
                    </ul>
                    <div class="footer-title">
                        <h3>USA Office:</h3>
                    </div>
                    <ul class="footer-contact">
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/map.png"
                                alt="">Flexible Travel &
                            Imam/Chaplain Muhammad Waliullah
                            Chaplain Zinat Sharmin Akram
                            68, Oakley Ave, Elmont, NY-11003, USA
                            0121-615-424-3457, 0121-516-263-6776
                        </li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/phone.png"
                                alt="">0121-615-424-3457 </li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/phone.png"
                                alt="">0121-516-263-6776 </li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/gmail.png"
                                alt="">Kamal770@yahoo.com</li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/gmail.png"
                                alt="">zinatakram747@gmail.com</li>
                        <li><a href="http://www.smtravelsint.com" target="_blank">www.smtravelsint.com</a></li>
                        <li><a href="http://www.thesawari.com" target="_blank">www.thesawari.com</a></li>
                    </ul>
                    <div class="footer-title">
                        <h3>Saudi Arabia Office</h3>
                    </div>
                    <ul class="footer-contact">
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/map.png"
                                alt="">Al-Maiman
                            Tower
                            Holy Mokkah-Al-Utalbyah Main St.
                            Next Al-Kordi Clinic Building
                        </li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/phone.png"
                                alt="">0560986121
                        </li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/phone.png"
                                alt="">0566463924
                        </li>
                        <li><a href="http://www.smtravelsint.com" target="_blank">www.smtravelsint.com</a></li>
                        <li><a href="http://www.thesawari.com" target="_blank">www.thesawari.com</a></li>

                        </li>
                    </ul>
                    <div class="footer-title">
                        <h3>Dubai Office</h3>
                    </div>
                    <ul class="footer-contact">
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/map.png"
                                alt="">Al-Maiman
                            Tours LLC
                            Royal Concord Hotel & Suites
                            Al Makthoom Street, Deira Dubai
                            1st floor, Shop No: SH-09
                            United Arab Emirates

                        </li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/phone.png"
                                alt="">+971 54
                            425 2711 </li>
                        <li><img class="map" src="{{ asset('') }}assets/web/images/icon/phone.png"
                                alt="">+971 50
                            425 2719 </li>
                        <li><a href="http://www.flexibletoursuae.com" target="_blank">www.flexibletoursuae.com</a>
                        </li>

                        </li>
                    </ul>
                </div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="contact-title">
					<h2>Contact</h2>
				</div>
				<div class="contact-form">
					<div id="contact">
						<div id="message"></div>
						<!-- Contact Form -->
						<form class="form" method="post" action="#" name="contactform" id="contactform">
							<div class="form-group">
								<input type="text" placeholder="Name" required="required" name="name" id="name">
							</div>
							<div class="form-group">
								<input type="email" placeholder="Email" required="required" name="email" id="email">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Subject" required="required" name="subject" id="subject">
							</div>
							<div class="form-group">
								<textarea name="message" rows="6" placeholder="Message" id="comments"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="button primary"><i class="fa fa-send"></i>Submit</button>
							</div>
						</form><!--/ End Contact Form -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- blog breadcrumb version one strat here -->
</div>

@endsection
