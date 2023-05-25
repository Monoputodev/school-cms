<section id="team">
	<div class="container pb-sm-70">
		<div class="section-title text-center">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
					<h2 class="mt-0 line-height-1">Faculty <span
							class="text-theme-colored3">Members</span></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Acque quidem eaque, amet
						doloribus, error inventore, quisquam totam magni cumque.</p>
				</div>
			</div>
		</div>
		<div class="section-content text-center">
			<div class="row">
				@foreach($teams as $team)
				<div class="col-sm-6 col-md-3 mb-sm-30">
					<div class="team-block bg-light pt-10 pb-15">
						<div class="team-thumb"><img class="img-fullwidth"
								src="{{ asset('/') }}uploads/teams/{{ $team->image }}" alt="">
						</div>
						<div class="info">
							<div class="pt-10 pb-10 bg-theme-colored2">
								<h4 class="mt-0 mb-0 text-white">{{ $team->name }}</h4>
								<h6 class="mt-0 mb-0 text-white">{{ $team->designation }}</h6>
							</div>

						</div>
					</div>
				</div>
				@endforeach
				

			</div>
		</div>
	</div>
</section>