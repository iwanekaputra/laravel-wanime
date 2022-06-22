<x-app-layout>
    <section class="product spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						@foreach ($genres as $genre)
							{{-- expr --}}
						<div class="col-lg-3 anime__details__text">
							<p><a href="{{ url($genre['link']['url']) }}">{{ $genre['title'] }}</a></p>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</section>
</x-app-layout>