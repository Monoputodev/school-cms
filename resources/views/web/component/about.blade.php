<section id="about">
	<div class="container pb-90 pb-sm-90">
		<div class="section-content">
			<div class="row">
				<div class="col-sm-6 col-md-8">
					<h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">Welcome to <span
							class="text-theme-colored3">{{ $content->website_name }}</span></h2>

					<div class="box-hover-effect play-button">
						<div class="effect-wrapper">
							<div class="thumb mb-20">
								<img class="img-fullwidth"
									src="{{ asset('/') }}/uploads/content/{{ $content->about_image }}"
									alt="project">
							</div>
							<div class="text-holder text-holder-middle">
								<a href="https://www.youtube.com/watch?v=F3QpgXBtDeo"
									data-lightbox-gallery="youtube-video" title="Youtube Video"><img
										alt=""
										src="{{ asset('/') }}/assets/web/images/play-button/s14.png"></a>
							</div>
						</div>
					</div>
					<p class="font-15">{!! $content->about_content !!}</p>
					<a class="btn btn-colored btn-lg btn-theme-colored mt-15 mb-sm-30"
						href="page-about1.html">Read more</a>
				</div>
				<div class="col-sm-6 col-md-4">
					<h2 class="mt-0 mb-40 mt-xs-20 line-height-1">Get Notice</h2>
					<div class="bxslider bx-nav-top" data-minslides="6">
						@foreach($notices as $notice)
						<div class="event media mt-0 no-bg no-border">
							<div class="event-date media-left text-center flip bg-theme-colored pl-10">
								<ul class="mt-15 mt-sm-30">
									<li class="font-20 text-white font-weight-600">{{ $notice->created_at->format('d') }}</li>
									<li class="font-14 text-uppercase text-white">{{ $notice->created_at->format('M') }}</li>
								</ul>
							</div>
							<div class="media-body">
								<div class="event-content pull-left flip pl-20 pl-xs-10">
									<h4
										class="event-title media-heading font-raleway font-weight-700 mb-0 pt-5">
										<a href="#">{{ $notice->title }}</a></h4>
									
									<p class="mb-5">
									<a href="{{asset('')}}uploads/notices/{{$notice->pdf_file }}">{{ $notice->pdf_file }}</a>
									 </p>
								</div>
							</div>
						</div>
						@endforeach
						

					</div>
				</div>
			</div>
		</div>
	</div>
</section>