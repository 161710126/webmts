@extends('layouts.index')
@section('content')
<section class="news-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>Sekolah Latest News</h2>
					</div>
				</div>
			</div>
		</section>
		
		<!-- <section class="search-bar">
			<div class="container">
				<div class="row">
					<input type="text" placeholder="Type any keyword and enter to search">
				</div>
			</div>
		</section> -->
		
		<section class="latest-news">
			<div class="container">
				<div class="row">
					<div class="section-content">
						@foreach($artikels as $data)
						<div class="col-md-6">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="/blog/{{$data->slug}}"><img src="{{asset('assets/guest/images/logo1.png')}}" style="max-height: 50px;max-width: 50px;margin-top: 7px" alt="image"></a>
										<a href="#"><span>By Penulis : {{ $data->user->name}}</span></a>
									</div>
									<div class="col-md-4">
										<span>{{$data->created_at->diffForHumans()}}</span>
									</div>
								</div>
								<div class="item-image">
									<a href="/blog/{{$data->slug}}">
										<img src="{{ asset ('assets/img/gambargaleri/'.$data->gambar) }}" alt="image">
									</a>
								</div>
								<div class="item-info">
									<h2><a href="/blog/{{$data->slug}}">{{ $data->judul}}</a></h2>
									
										<li>{{ $data->kategori->nama_kategori}}</li>
									
									<p>{!! str_limit($data->content, 300, '&raquo;') !!}.</p>
									<a href="/blog/{{$data->slug}}">Read More</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<!-- <div class="row">
					<div class="news-pagination">
						<ul>
							<li class="prev"><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="active"><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">12</a></li>
							<li class="next"><a href="#">Next</a></li>
						</ul>
					</div>
				</div> -->
				
			</div>
		</section>
		@endsection