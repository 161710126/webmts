@extends('layouts.index')
@section('content')
<section class="news-single-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>{{ $artikels->judul}}</h2>
						<h2>Penulis : {{ $artikels->user->name}}</h2>
						<h2> <i class="fa fa-calendar"></i> <!-- {{$artikels->created_at->diffForHumans()}} --> {{ date('M j, Y', strtotime($artikels->created_at)) }}</h2>
					</div>
				</div>
			</div>
		</section>
		
		<!-- <section class="news-single-meta">
			<div class="container">
				<div class="row">
					<p>Published in <a href="#">Student Article</a>, <a href="#">Design</a></p>
					<p>August, 15th 2016 <a href="#comments">2 Comments</a></p>
				</div>
			</div>
		</section> -->
				

		<section class="news-single-content">
			<div class="container">
				<div class="row">
				<div class="news-single-full-image">
			<img src="{{ asset ('assets/img/gambargaleri/'.$artikels->gambar) }}" alt="image">
		</div>
					<div class="section-content">
						<p>{!! $artikels->content !!}.</p>
					</div>
				</div>

				<div class="navigation-area">
								<div class="row">
								@if(isset($previous))
									<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="thumb">
											<a href="#"><img class="img-fluid" src="{{asset('assets/user/img/blog/prev.jpg')}}" alt=""></a>
										</div>
										<div class="arrow">
											<a href="{{ URL::to( 'blog/' . $previous->slug) }}"><span class="lnr text-white lnr-arrow-left"></span></a>
										</div>
										<div class="detials">
											<p>Prev Post</p>
											<a href="{{ URL::to( 'blog/' . $previous->slug) }}"><h4>{{ $previous->judul }}</h4></a>
										</div>
									</div>
									 @endif
									  @if(isset($next))
									<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Post</p>
											<a href="{{ URL::to( 'blog/' . $next->slug) }}"><h4>{{ $next->judul }}</h4></a>
										</div>
										<div class="arrow">
											<a href="{{ URL::to( 'blog/' . $next->slug) }}"><span class="lnr text-white lnr-arrow-right"></span></a>
										</div>
										<div class="thumb">
											<a href="{{ URL::to( 'blog/' . $next->slug) }}"><img class="img-fluid" src="{{asset('assets/user/img/blog/next.jpg')}}" alt=""></a>
										</div>										
									</div>	
									 @endif								
								</div>
							</div>
			
			<div class="container">
			<div class="row">
				<div class="section-footer">
					<div class="news-share">
						<h3>Share Via Social</h3>
						<ul>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}">
						<i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
					</li>

					<li>
						<a href="https://www.plus.google.com/sharer?url={{ urlencode(Request::fullUrl()) }}">
						<i class="fa fa-google-plus fa-3x" aria-hidden="true"></i></a>
					</li>
						
					<li>
						<a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}">
						<i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
					</li>

					<li>
						<a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}">
						<i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></a>
					</li>
							</ul>
						</div>
						<!-- <div class="news-author">
							<div class="row">
								<div class="col-xs-2">
									<a href="#">
										<img src="{{asset('assets/guest/images/jun.jpg')}}" alt="image">
									</a>
								</div>
								<div class="col-xs-10">
									<h3>Article By <a href="#">M Junika Berli</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl</p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			
		
		<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://webmts.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div>
</section>
@endsection