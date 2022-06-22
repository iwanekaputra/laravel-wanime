<x-app-layout>
    <section class="product spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						@foreach ($seasons as $season)
							{{-- expr --}}
						<div class="col-lg-3 anime__details__text">
							<p><a href="{{ url($season['link']['endpoint']) }}">{{ $season['title'] }}</a></p>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</section>
</x-app-layout>