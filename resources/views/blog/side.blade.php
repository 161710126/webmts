<div class="col-lg-3">
        				<div class="sidebar__widgets sidebar--right">

        					<!-- Single Widget -->
        					<div class="single__widget search">
        						<h4>Search</h4>
        						<form method="GET" action="{{url('blog')}}">
        							<input type="search" name="search" value="" placeholder="Search keyword" required>
        							<button type="submit"><i class="fa fa-search"></i></button>
        						</form>
        					</div>
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<div class="single__widget about">
								<div class="about__content">
									<img src="{{asset('assets/baru/images/others/junika.jpg')}}" alt="about images">
									<div class="about__info">
										<div class="about__inner">
											<span>SMK ASSALAAM BANDUNG</span>
											<h6>M Junika Berli</h6>
											<ul class="dacre__social__link d-flex justify-content-center">
												<li class="facebook"><a target="_blank" href="https://www.facebook.com/mjunikaberli.junika"><i class="fa fa-facebook"></i></a></li>
												<li class="vimeo"><a target="_blank" href="https://www.instagram.com/m_junika010601/"><i class="fa fa-instagram"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
        					</div>
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<div class="single__widget recent__post">
        						<h4>Recent Posts</h4>
								<ul>
									@foreach($recent as $data)
									<li>
										<a href="/blog/{{ $data->slug }}"><img src="{{ asset ('assets/img/gambargaleri/'.$data->gambar) }}" style="width: 70px; height: 70px;" alt="post images"></a>
										<div class="post__content">
											<h6><a href="/blog/{{ $data->slug }}">{{$data->judul}}</a></h6>
											<span class="date"><i class="fa fa-calendar"></i>{{ date('M j, Y', strtotime($data->created_at)) }}</span>
										</div>
									</li>
									@endforeach	
								</ul>
        					</div>
        					<br>

        					<div class="single__widget recent__post">
									<h4 class="category-title">Post Catgories</h4>
										@foreach($kategori as $data)
									<ul class="cat-list">
											<a href="/blog/kategori/{{ $data->slug }}" class="d-flex justify-content-between">
												<p>{{ $data->nama_kategori }}</p>
												<p>{{ $data->Artikel->count() }}</p>
											</a>
																						
									</ul>
										@endforeach
								</div>
								<br>
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<!-- <div class="single__widget offer">
								<div class="offer__thumb">
									<img src="images/others/2.jpg" alt="offer images">
								</div>
        					</div> -->
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<!-- <div class="single__widget recent__comment">
        						<h4>Recent Comment</h4>

        						<ul>
        							<li>
        								<h6><a href="#">Creative Design for blog post..also simple.</a></h6>
        								<ul>
        									<li>13 Oct 2017</li>
        									<li>04.00am</li>
        									<li><a href="#">Lostrees</a></li>
        								</ul>
        							</li>

        							<li>
        								<h6><a href="#">Creative Design for blog post..also simple.</a></h6>
        								<ul>
        									<li>14 Oct 2017</li>
        									<li>04.00am</li>
        									<li><a href="#">Irin</a></li>
        								</ul>
        							</li>

        							<li>
        								<h6><a href="#">Creative Design for blog post..also simple.</a></h6>
        								<ul>
        									<li>17 Oct 2017</li>
        									<li>04.00am</li>
        									<li><a href="#">Najnin</a></li>
        								</ul>
        							</li>

        						</ul>
        					</div> -->
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<!-- <div class="single__widget Popular__classes">
								<h4>Popular Classes</h4>
								<ul>
									<li><a href="class-details.html">Drawing Class</a></li>
									<li><a href="class-details.html">Dance Class</a></li>
									<li><a href="class-details.html">Preschool Class</a></li>
									<li><a href="class-details.html">Preschool Class</a></li>
									<li><a href="class-details.html">Swimming Class</a></li>
									<li><a href="class-details.html">Sports Class</a></li>
								</ul>
        					</div> -->
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<!-- <div class="single__widget instagram__feed">
								<h4>Instagram Feed</h4>
								<ul>
									<li><a href="#"><img src="images/blog/ins/1.jpg" alt="instafeed images"></a></li>
									<li><a href="#"><img src="images/blog/ins/2.jpg" alt="instafeed images"></a></li>
									<li><a href="#"><img src="images/blog/ins/3.jpg" alt="instafeed images"></a></li>
									<li><a href="#"><img src="images/blog/ins/4.jpg" alt="instafeed images"></a></li>
								</ul>
        					</div> -->
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<!-- <div class="single__widget recent__twitter">
        						<h4>Recent Tweets</h4>
        						<ul>
        							<li>
        								<h6><a href="#">@hellotwitter world</a></h6>
        								<p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        								<div class="twit__time">
        									<span>13 Feb 2016</span>
        									<span>04.00am</span>
        								</div>
        							</li>

        							<li>
        								<h6><a href="#">@goodmorning twitter</a></h6>
        								<p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        								<div class="twit__time">
        									<span>20 Feb 2017</span>
        									<span>04.00am</span>
        								</div>
        							</li>

        							<li>
        								<h6><a href="#">@new vivew with new day</a></h6>
        								<p>Sed ut perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        								<div class="twit__time">
        									<span>13 Feb 2017</span>
        									<span>04.00am</span>
        								</div>
        							</li>

        						</ul>
        					</div> -->
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<div class="single__widget Social__network">
								<h4>Social Network</h4>
								<ul class="dacre__social__link--2 bg--2 d-flex justify-content-start">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/mtsalikhlas.kebanii"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/MtsKeban"><i class="fa fa-twitter"></i></a></li>
									<li class="vimeo"><a target="_blank" href="https://www.instagram.com/wargamtsalikhlaskeban2/"><i class="fa fa-instagram"></i></a></li>
									
								</ul>
        					</div>
        					<!-- End Widget -->

        					<!-- Single Widget -->
        					<!-- <div class="single__widget tags">
        						<h4>Tags</h4>
        						<ul>
        							<li><a href="#">Junior</a></li>
        							<li><a href="#">Ipsum</a></li>
        							<li><a href="#">Dcare</a></li>
        							<li><a href="#">Class</a></li>
        							<li><a href="#">Teacher</a></li>
        							<li><a href="#">Child</a></li>
        							<li><a href="#">Care</a></li>
        						</ul>
        					</div> -->
        					<!-- End Widget -->

        				</div>
        			</div>