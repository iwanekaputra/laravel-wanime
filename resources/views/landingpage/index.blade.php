<x-app-layout title="All Anime">
	<!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="{{ asset('anime-main/img/hero/hero-1.jpg') }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate/kaleid liner Prisma☆Illya Movie: Licht – Namae no Nai Shoujo </h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="{{ url('show', 'fate-kaleid-movie-2-sub-indo') }}"><span>Download Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

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
                        	@foreach ($allData as $data)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $data['link']['thumbnail'] }}">
                                        
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                        	@foreach ($data['genre'] as $genre)
                                            	<li>{{ $genre }}</li>
                                        	@endforeach
                                        </ul>
                                        <h5><a href="{{ route('show' , $data['link']['endpoint']) }}">{{ $data['title'] }}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Rekomendasi</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	@foreach ($rekomendasi as $r)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $r['link']['thumbnail'] }} ">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">{{ $r['title'] }}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                    <div class="product__sidebar__comment">
				        <div class="section-title">
                                <h5>Genres</h5>
                            </div>
                            <div class="row">
                            	@foreach ($genres as $genre)
                            	<div class="col-lg-3">
								<button class="badge badge-info text-white"><a href="{{ url($genre['link']['url']) }}">{{ $genre['title'] }}</a></button>
                            	</div>
							@endforeach
                            </div>
				    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>