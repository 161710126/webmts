<header id="masthead" class="site-header container">
			<div class="row">
				<div class="site-branding col-sm-3 col-md-3">
					<h1 class="site-title">
						<a href="/beranda" title="Sekolah" rel="home">
							<img src="{{asset('assets/guest/images/logo1.png')}}" alt="logo">
						</a>
					</h1>
				</div>

				<div class="col-sm-9 col-md-9">
					<nav id="site-navigation" class="navbar">
						<div class="navbar-header">
							<div class="navbar-header">
								<div class="mobile-menu">
									<ul class="nav navbar-nav">
										<li>
											<a href="#" data-featherlight="#search-lightbox-mobile">
												<i class="fa fa-search fa-lg" aria-hidden="true"></i>
											</a>
											<div id="search-lightbox-mobile" class="search-lightbox">
												<div class="gallery-lightbox-content">
													<input type="text" placeholder="Type any keyword to search">
												</div>
											</div>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
								<button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
								<button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
									<i class="fa fa-times fa-2x" aria-hidden="true"></i>
								</button>
								<ul class="nav navbar-nav">
									<li><a href="/beranda">Beranda</a></li>
									<li><a href="/about">Profil</a></li>
									<li><a href="/fasilitas">Fasilitas</a></li>
									<li><a href="/guru">Guru</a></li>
									<li><a href="/blog">Berita</a></li>
									<li><a href="/eskulprestasi">Ekstrakurikuler</a></li>
									<li><a href="/galeri">Galery</a></li>
									<li><a href="/contact">Kontak</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="#" data-featherlight="#search-lightbox">
											<i class="fa fa-search fa-lg" aria-hidden="true"></i>
										</a>
										<div id="search-lightbox" class="search-lightbox">
											<div class="gallery-lightbox-content">
												<input type="text" placeholder="Type any keyword to search">
											</div>
										</div>
									</li>
									<!-- <li>
										<a href="{{url('/login')}}">
											<i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
										</a>
									</li> -->
								</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>