<x-app-layout>
	<!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="#">{{ $data['title'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{ $data['thumbnail'] }}">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $data['title'] }}</h3>
                                <span>{{ $data['japanese'] }}</span>
                            </div>
                            <p>{{ $data['sinopsis'] }}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> {{ $data['type'] }}</li>
                                            <li><span>Producers :</span> 
                                            	@foreach ($data['producers'] as $producer)
                                            		{{ $producer }},
                                            	@endforeach
                                            </li>
                                            <li><span>Date release:</span> {{ $data['release'] }}</li>
                                            <li><span>Status:</span> {{ $data['status'] }}</li>
                                            <li><span>Genre:</span> 
                                            	@foreach ($data['genre'] as $genre)
                                            	<a href="{{ url($genre['endpoint']) }}">{{ $genre['name'] }}</a>
                                            	@endforeach
                                            	
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Scores:</span> {{ $data['score'] }}</li>
                                            <li><span>Duration:</span> {{ $data['durasi'] }} menit per eps</li>
                                            <li><span>Quality:</span> HD</li>
                                            <li><span>Eps:</span> {{ $data['total_eps'] }} eps</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Downloads</h5>
                            </div>
                            <div class="anime__details__text">
                            	<p>{{ $data['list_download'][0][0] }}</p>
                            	@foreach ($data['list_download'][0][1] as $list)
                            		<p>{{ $list['resolusi'] }}: 
                            		@foreach ($list['link_download'] as $download)
                            			<a href="{{ $download['link'] }}" target="_blank">{{ $download['platform'] }}</a>	
                            		@endforeach
                            		</p>
                            	@endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Anime Section End -->
</x-app-layout>