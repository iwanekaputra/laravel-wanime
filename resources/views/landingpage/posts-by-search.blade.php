<x-app-layout>
	<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Latest</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	@forelse ($posts as $post)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $post['link']['thumbnail'] }}">
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                        	@foreach ($post['genre'] as $genre)
                                            	<li>{{ $genre }}</li>
                                        	@endforeach
                                        </ul>
                                        <h5><a href="{{ route('show' , $post['link']['endpoint']) }}">{{ $post['title'] }}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3 text-center">
		                        Data tidak ditemukan
		                    </div>
                            @endforelse
                        </div>
                    </div>
                </div>  
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Seasons</h5>
                            </div>
                            <div class="row">
                            @foreach ($seasons as $season)
                            	<div class="col-lg-3">
								<button class="badge badge-info text-white"><a href="{{ url($season['link']['endpoint']) }}">{{ $season['title'] }}</a></button>
                            	</div>
							@endforeach
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>