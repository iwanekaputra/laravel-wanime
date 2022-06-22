<x-app-layout>
	<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Seasons {{ $title }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	@foreach ($seasons as $season)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $season['link']['thumbnail'] }}">
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                        	@foreach ($season['genre'] as $genre)
                                            	<li>{{ $genre }}</li>
                                        	@endforeach
                                        </ul>
                                        <h5><a href="{{ route('show', $season['link']['endpoint']) }}">{{ $season['title'] }}</a></h5>
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
</x-app-layout>