	@extends('layouts.index')
	@section('content')
		<div class="slide__carosel owl-carousel owl-theme">
			<div class="slider__area slider--four bg-image--19 d-flex slider__fixed--height justify-content-start align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="slider__activation">
								<!-- Start Single Slide -->
								<div class="slide">
									<div class="slide__inner">
										<!-- <h6><span class="color-pink">He</span><span class="secondary-color">llo</span> Kidz <span class="separator">,</span></h6> -->
										<h1 style="color: black;">PPDB MTs AL IKHLAS</h1>
										<p style="color: black; font-size: 20px">MTs AL IKHLAS menerima pendaftaran siswa/i baru .....</p>
										<div class="slider__btn">
											<a class="dcare__btn btn__org max__height-btn hover--theme" href="#">Daftar Sekarang</a>
										</div>
									</div>
								</div>
								<!-- End Single Slide -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__area slider--four bg-image--19 d-flex slider__fixed--height justify-content-start align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="slider__activation">
								<!-- Start Single Slide -->
								<div class="slide">
									<div class="slide__inner">
										<!-- <h6><span class="color-pink">He</span><span class="secondary-color">llo</span> Kidz <span class="separator">,</span></h6> -->
										<h1 style="color: black;">Selamat Datang di situs<br>Resmi MTs AL IKHLAS</h1>
										<p style="color: black; font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										<div class="slider__btn">
											<a class="dcare__btn btn__org max__height-btn hover--theme" href="#">Read More</a>
										</div>
									</div>
								</div>
								<!-- End Single Slide -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- <section class="header-3-navigation">
			<div class="container">
				<div class="row">
					<nav id="site-navigation" class="navbar">
						<div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
							<button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
								<i class="fa fa-times fa-2x" aria-hidden="true"></i>
							</button>
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="academics.html">Academics</a></li>
								<li><a href="events.html">Events</a></li>
								<li><a href="news.html">News</a></li>
								<li><a href="schedule.html">Schedule</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="gallery.html">Resources</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</section> -->
		
		<section class="welcome">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-7">
						<div class="welcome-content">
							<h3> SAMBUTAN DARI KEPALA SEKOLAH</h3><!-- <span>Assalamualikum Wr.Wb</span> -->
							<p style="font-size: 17px;">Marilah kita bersyukur kehadirat Illahi Rabbi yang telah melimpahkan rahmat dan anugerah serta hidayah-Nya kepada kita. Semoga yang Maha Kuasa selalu meridhoi segala usaha kita dalam upaya meningkatkan mutu pendidikan.
Website MTs AL IKHLAS KEBAN II dibuat sebagai media informasi dan komunikasi bagi sekolah untuk memberikan informasi yang akurat, lengkap, utuh dan terpecaya tentang MTs AL IKHLAS KEBAN II sehingga dapat dijadikan sebagai media komunikasi yang efektif antara MTs AL IKHLAS KEBAN II dengan UPT dinas Pendidikan, Pemuda dan Olahraga Propinsi, Kabupaten maupun Kota,dan kecamatan sandes orangtua/walisiswa dan masyarakat luas.

Web ini juga memuat Visi dan Misi serta informasi lain tentang MTs AL IKHLAS KEBAN II yang selalu berbenah dan mengembangkan diri untuk menjadi sekolah yang terdepan.

Terimakasih kami sampaikan pada seluruh masyarakat atas kepercayaan yang diberikan kepada kami untuk mendidik Sumber Daya Manusia yang handal dan profesional untuk menyongsong masa depan lebih cemerlang. Ucapan terimakasih juga kepada 100 lebih partner kerja MTs AL IKHLAS KEBAN II yang telah berkolaborasi sangat harmonis dengan kami dalam hal rekrutmen, guru tamu, maupun bantuan-bantuan peralatan yang telah kami gunakan untuk mendidik dan melatih siswa selama belajar di MTs AL IKHLAS KEBAN II.

Motto MTs AL IKHLAS KEBAN II adalah Educative, Creative, Unity. Selain mendidik dan mengajar kami juga memiliki tanggung jawab menghantar sampai tujuan ke jenjang pendidikan yang lebih tinggi sesuai dengan kompetensi dan kemampuan yg dimiliki oleh siswa, sehingga “mutu profil tamatan” mutlak harus bagus yang pada gilirannya akan sangat mudah untuk bersaing di era global. Mudah mudahan dengan metode seperti ini dapat memperkecil angka putus sekolah di Indonesia khususnya di kec.sanga desa.<br><!-- <span>Assalamualikum Wr.Wb</span> --></p>
							<img src="{{asset('assets/guest/images/signature.png')}}" alt="signature">
							<strong class="author">Mahyudin S.pd <span>Kepala Sekolah</span></strong>
						</div>
					</div>
					
					<div class="col-sm-5 col-md-5">
						<div class="welcome-img">
							<img src="{{asset('assets/guest/images/mahyudin.jpg')}}" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- <section class="featured-box white-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<div class="box-1">
							<a href="/blog"> 
								Berita <span>Terbaru</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="box-2">
							<a href="/eskul">
								Prestasi <span>Siswa</span>
							</a>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="box-3">
							<a href="/guru">
								Daftar <span>Guru</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section> -->

			@php
		$artikels = App\Artikel::paginate(4);
		@endphp
		<section class="featured-news">
			<div class="container">
				<div class="row">
					<div class="section-header">
						<h2 style="margin-left: 500px;">Berita Terkini</h2>
					</div>
				</div>
				<div class="row">
					<div class="section-content">
					@foreach($artikels as $data)
						<div class="col-xs-6 col-md-3">
							<div class="news-item">
								<div class="item-meta-data">
									<div class="col-md-8">
										<a href="/blog/{{$data->slug}}"><img src="{{asset('assets/guest/images/logo1.png')}}" style="width: 25px; height: 25px;"  alt="image"></a>
										<a href="/blog/{{$data->slug}}"><span>{{ $data->user->name}}</span></a>
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
									<h3><a href="/blog/{{$data->slug}}">{{$data->judul}}</a></h3>
									<p>{!! str_limit($data->content, 100, '&raquo;') !!}.</p>
									<a href="/blog/{{$data->slug}}">Read More</a>
								</div>
							</div>
						</div>
						@endforeach
					  <a style="margin-left: 500px;" class="dcare__btn btn__org max__height-btn hover--theme" href="/blog">Lihat Semua Berita & Artikel Kami</a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="we-have-faith">
			<div class="container">
				<div class="row">
					<div class="section-header">
						<h3>KAMI MEMILIKI KEYAKINAN DALAM MASA DEPAN SISWA KAMI</h3>
						<p style="font-size: 17px;">Siswa kami berbakat, pekerja keras, dan penuh ide bagus. Kami mendorong dan memberdayakan mereka untuk mewujudkan ide mereka. Peluang langsung adalah apa yang kita semua tentang.</p>
					</div>
					<div class="section-content">
						<div class="col-sm-6 col-md-3">
							<img src="{{asset('assets/guest/images/we-have-faith-img-2.png')}}" alt="img">
							<h4>Pendidikan berbasis keunggulan lokal dan global</h4>
							<p style="font-size: 17px;">Globalisasi yang meramba dunia telah mengakibatkan bangsa bangsa di dunia berinteraksi secara
bebas. Inter aksi ini telah bernuansa dalam berbagai aspek kehidupan, baik dalam ilmu pengetahuan
dan teknologi, sosial budaya, politik, ekonomi, dan lain lain. Globalisasi telah membawa perubahan
sosial budaya dan prilaku manusia baik yang berdampak positif dan negativ. Secara sederhana
pengaruh dari sisi positif dapat dilihat berkembang dan meningkatnya ilmu pengetahuan dan teknology</p>
						</div>
						<div class="col-sm-6 col-md-3">
						<img src="{{asset('assets/guest/images/we-have-faith-img-1.png')}}" alt="img">
							<h4> Pengembangan diri</h4>
							<p style="font-size: 17px;">Pengembangan diri merupakan kegiatan pendidikan diluar mata pelajaran sebagai bagian integral dari
kurikulum. Kegiatan Pengembangan diri merupakan upaya pembentukan watak dan kepribadian
peserta didik
Pengembangan diri bertujuan memberikan kesempatan kepada peserta didik untuk mengembangkan
dan mengekspresikan diri sesuai dengan kebutuhan, potensi, bakat, minat, kondisi dan perkembangan
peserta didik, dengan memperhatikan kondisi Madrasah. Kegiatan Pengembangan Diri yang
dilaksanakan kegiatan ektrakurikuler dan Kegiatan Layanan Konseling, adapun Kegiatan ektrakurikuler
sbb:
- Kepramukaan
- Olahraga Volly
- Seni Tari</p>
						</div>
						<div class="col-sm-6 col-md-3">
							<img src="{{asset('assets/guest/images/we-have-faith-img-3.png')}}" alt="img">
							<h4>Kelulusan</h4>
							<!-- <p>Sesuai dengan ketentuan PP No. 19 tahun 2005 pasal 72</p><br> -->
							<p style="font-size: 17px;">1. Peserta didik dinyatakan lulus dari satuan pendidikan dasar dan menengah setelah<br>
								a. Menyelesaikan seluruh program pembelajaran.<br>
								b. Memperoleh nilai minimal baik pada penilaian akhir tahun seluruh mata pelajaran Agana dan
Akhlak mulia, kelompok mata pelajaran kewarganegaraan dan kepribadian, kelompok mata
pelajaran estetika, dan kelompok mata pelajaran jasmani, olahraga dan kesehatan.<br>
								c. Lulus Ujian Sekolah/Madrasah untukkelompok mata pelajaran ilmu pengetahuan dan
teknologi dan
								d. Lulus Ujian Nasional.
								<br>2. Kelulusan peserta didik dari satuan pendidikan ditetapkan oleh satuan pendidikan yang
bersangkutan sesuai dengan kriteria yang dikembangkan oleh Badan Standar Nasional
Pendidikan (BSNP) dan ditetapkan dengan peraturan mentri.</p>
						</div>
						<div class="col-sm-6 col-md-3">
							<img src="{{asset('assets/guest/images/we-have-faith-img-4.png')}}" alt="img">
							<h4>Pendidikan Kecakapan Hidup</h4>
							<p style="font-size: 17px;">a. Ruang lingkup<br>
							Kecakapan hidup yang ingin di capai MTs Al Ikhlas Keban II sebagai berikut :
							- Siswa kelas VII dapat mengoperasikan word<br>
- Siswa kelas VIII dapat mengoperasikan exel<br> - Siswa kelas IX dapat mengoperasikan internet
<br>b. Target
Yang ingin dicapai dari pendidikan kecakapan hidup ini adalah agar setelah siswa lulus sekolah,
mereka telah memiliki kemampuhan menguasai ilmu pengetahuan dan teknologi, trampil, dan
memiliki jiwa tanggap terhadap iptek</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
		<!-- <section class="call-to-action">
			<div class="container">
				<div class="row">
					<div class="call-to-action-content clearfix">
						<div class="col-md-9">
							<img src="images/call-to-action-img.png" alt="image">
							<p><strong>Our students are talented,</strong>passionate, hard-working and full of good ideas.</p>
						</div>
						<div class="col-md-3">
							<a href="#" class="hvr-push">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		
		<!-- <section class="academic-calendar">
			<div class="container">
				<div class="row">
					<div class="academic-calendar-header">
						<h2>Academic Calendar</h2>
						<p>Our students are talented, hard-working and full of good ideas. We encourage and empower them to bring their ideas to life. Hands-on opportunities are what we're all about. <a href="#">View Full Calendar</a></p>
					</div>
				</div>
				
				<div class="row">

				<ul class="nav nav-year">
					<li class="active"><a href="#yr2017" data-toggle="tab">2017</a></li>
					<li><a href="#yr2018" data-toggle="tab">2018</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active clearfix" id="yr2017">
					
						<div class="col-md-2">
							<div class="calendar-nav">
								<h3 class="year-title"> 
									<a href="#" class="yr-prev">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</a> 
									2017 
									<a href="#" class="yr-next">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</h3>
								<ul class="nav nav-month">
									<li class="active"><a href="#jan2017" data-toggle="tab">January</a></li>
									<li><a href="#feb2017" data-toggle="tab">February</a></li>
									<li><a href="#mar2017" data-toggle="tab">March</a></li>
									<li><a href="#apr2017" data-toggle="tab">April</a></li>
									<li><a href="#may2017" data-toggle="tab">May</a></li>
									<li><a href="#jun2017" data-toggle="tab">June</a></li>
									<li><a href="#jul2017" data-toggle="tab">July</a></li>
									<li><a href="#aug2017" data-toggle="tab">August</a></li>
									<li><a href="#sep2017" data-toggle="tab">September</a></li>
									<li><a href="#oct2017" data-toggle="tab">October</a></li>
									<li><a href="#nov2017" data-toggle="tab">November</a></li>
									<li><a href="#dec2017" data-toggle="tab">December</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-10">
							<div class="tab-content tab-month clearfix">
								<div class="tab-pane active" id="jan2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 January</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 January</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 January</span> National Education Day</li>
												<li><span>18 - 20 January</span> OSIS Activity</li>
												<li><span>21 - 31 January</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="feb2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4-end">28</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 February</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 February</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 February</span> National Education Day</li>
												<li><span>18 - 20 February</span> OSIS Activity</li>
												<li><span>21 - 18 February</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="mar2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 March</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 March</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 March</span> National Education Day</li>
												<li><span>18 - 20 March</span> OSIS Activity</li>
												<li><span>21 - 31 March</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="apr2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 April</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 April</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 April</span> National Education Day</li>
												<li><span>18 - 20 April</span> OSIS Activity</li>
												<li><span>21 - 30 April</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="may2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 May</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 May</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 May</span> National Education Day</li>
												<li><span>18 - 20 May</span> OSIS Activity</li>
												<li><span>21 - 31 May</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="jun2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 June</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 June</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 June</span> National Education Day</li>
												<li><span>18 - 20 June</span> OSIS Activity</li>
												<li><span>21 - 31 June</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="jul2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
													<li class="inactive">6</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 July</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 July</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 July</span> National Education Day</li>
												<li><span>18 - 20 July</span> OSIS Activity</li>
												<li><span>21 - 31 July</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="aug2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 August</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 August</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 August</span> National Education Day</li>
												<li><span>18 - 20 August</span> OSIS Activity</li>
												<li><span>21 - 31 August</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="sep2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 September</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 September</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 September</span> National Education Day</li>
												<li><span>18 - 20 September</span> OSIS Activity</li>
												<li><span>21 - 31 September</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="oct2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">25</li>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 October</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 October</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 October</span> National Education Day</li>
												<li><span>18 - 20 October</span> OSIS Activity</li>
												<li><span>21 - 31 October</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="nov2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 November</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 November</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 November</span> National Education Day</li>
												<li><span>18 - 20 November</span> OSIS Activity</li>
												<li><span>21 - 30 November</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="dec2017">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-start">15</li>
													<li class="event-5-end">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 December</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 December</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 December</span> National Education Day</li>
												<li><span>18 - 20 December</span> OSIS Activity</li>
												<li><span>21 - 31 December</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="yr2018">
						<div class="col-md-2">
							<div class="calendar-nav">
								<h3 class="year-title"> 
									<a href="#" class="yr-prev">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</a> 
									2018 
									<a href="#" class="yr-next">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</h3>
								<ul class="nav nav-month">
									<li class="active"><a href="#jan2018" data-toggle="tab">January</a></li>
									<li><a href="#feb2018" data-toggle="tab">February</a></li>
									<li><a href="#mar2018" data-toggle="tab">March</a></li>
									<li><a href="#apr2018" data-toggle="tab">April</a></li>
									<li><a href="#may2018" data-toggle="tab">May</a></li>
									<li><a href="#jun2018" data-toggle="tab">June</a></li>
									<li><a href="#jul2018" data-toggle="tab">July</a></li>
									<li><a href="#aug2018" data-toggle="tab">August</a></li>
									<li><a href="#sep2018" data-toggle="tab">September</a></li>
									<li><a href="#oct2018" data-toggle="tab">October</a></li>
									<li><a href="#nov2018" data-toggle="tab">November</a></li>
									<li><a href="#dec2018" data-toggle="tab">December</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-10">
							<div class="tab-content tab-month">
								<div class="tab-pane active" id="jan2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 January</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 January</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 January</span> National Education Day</li>
												<li><span>18 - 20 January</span> OSIS Activity</li>
												<li><span>21 - 31 January</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="feb2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4-end">28</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 February</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 February</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 February</span> National Education Day</li>
												<li><span>18 - 20 February</span> OSIS Activity</li>
												<li><span>21 - 18 February</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="mar2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 March</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 March</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 March</span> National Education Day</li>
												<li><span>18 - 20 March</span> OSIS Activity</li>
												<li><span>21 - 31 March</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="apr2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
													<li class="inactive">6</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 April</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 April</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 April</span> National Education Day</li>
												<li><span>18 - 20 April</span> OSIS Activity</li>
												<li><span>21 - 30 April</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="may2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 May</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 May</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 May</span> National Education Day</li>
												<li><span>18 - 20 May</span> OSIS Activity</li>
												<li><span>21 - 31 May</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="jun2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 June</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 June</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 June</span> National Education Day</li>
												<li><span>18 - 20 June</span> OSIS Activity</li>
												<li><span>21 - 31 June</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="jul2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">25</li>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="col-sm-7">
											<div class="calendar-note">
												<h3>Explanation</h3>
												<ul>
													<li><span>1 - 4 July</span> 1st Sekolah Examination</li>
													<li><span>7 - 12 July</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
													<li><span>15 - 16 July</span> National Education Day</li>
													<li><span>18 - 20 July</span> OSIS Activity</li>
													<li><span>21 - 31 July</span> Semester Break</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="aug2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 August</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 August</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 August</span> National Education Day</li>
												<li><span>18 - 20 August</span> OSIS Activity</li>
												<li><span>21 - 31 August</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="sep2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 September</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 September</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 September</span> National Education Day</li>
												<li><span>18 - 20 September</span> OSIS Activity</li>
												<li><span>21 - 30 September</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="oct2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 October</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 October</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 October</span> National Education Day</li>
												<li><span>18 - 20 October</span> OSIS Activity</li>
												<li><span>21 - 31 October</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="nov2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="inactive">31</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-day">15</li>
													<li class="">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4-end">30</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 November</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 November</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 November</span> National Education Day</li>
												<li><span>18 - 20 November</span> OSIS Activity</li>
												<li><span>21 - 30 November</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="dec2018">
									<div class="calendar-info">
										<div class="calendar col-sm-5">
											<div class="calendar-header">
												<ul>
													<li>M</li>
													<li>T</li>
													<li>W</li>
													<li>T</li>
													<li>F</li>
													<li>S</li>
													<li>S</li>
												</ul>
											</div>
											<div class="calendar-body">
												<ul>
													<li class="inactive">26</li>
													<li class="inactive">27</li>
													<li class="inactive">28</li>
													<li class="inactive">29</li>
													<li class="inactive">30</li>
													<li class="event-1-start">1</li>
													<li class="event-1">2</li>
													<li class="event-1">3</li>
													<li class="event-1-end">4</li>
													<li>5</li>
													<li>6</li>
													<li class="event-2-start">7</li>
													<li class="event-2">8</li>
													<li class="event-2">9</li>
													<li class="event-2">10</li>
													<li class="event-2">11</li>
													<li class="event-2-end">12</li>
													<li>13</li>
													<li>14</li>
													<li class="event-5-start">15</li>
													<li class="event-5-end">16</li>
													<li>17</li>
													<li class="event-3-start">18</li>
													<li class="event-3">19</li>
													<li class="event-3-end">20</li>
													<li class="event-4-start">21</li>
													<li class="event-4">22</li>
													<li class="event-4">23</li>
													<li class="event-4">24</li>
													<li class="event-4">25</li>
													<li class="event-4">26</li>
													<li class="event-4">27</li>
													<li class="event-4">28</li>
													<li class="event-4">29</li>
													<li class="event-4">30</li>
													<li class="event-4-end">31</li>
													<li class="inactive">1</li>
													<li class="inactive">2</li>
													<li class="inactive">3</li>
													<li class="inactive">4</li>
													<li class="inactive">5</li>
													<li class="inactive">6</li>
												</ul>
											</div>
											<div class="calendar-footer">
												<ul>
													<li class="event-1"><span></span> Exam</li>
													<li class="event-2"><span></span> Tour</li>
													<li class="event-3"><span></span> OSIS</li>
													<li class="event-4"><span></span> Report</li>
												</ul>
											</div>
										</div>
										<div class="calendar-note col-sm-7">
											<h3>Explanation</h3>
											<ul>
												<li><span>1 - 4 December</span> 1st Sekolah Examination</li>
												<li><span>7 - 12 December</span> Study tour to Taman Sari, Yogyakarta, Indonesia</li>
												<li><span>15 - 16 December</span> National Education Day</li>
												<li><span>18 - 20 December</span> OSIS Activity</li>
												<li><span>21 - 31 December</span> Semester Break</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section> -->
		
		<section class="dcare__counterup__area section-padding--lg bg-image--6">	
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="counterup__wrapper d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-between">
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{asset('assets/baru/images/funfact/1.png')}}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count">25</span>
                                </div>
                                <div class="fact__title">
                                    <h2>Jumlah Guru</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{asset('assets/baru/images/funfact/2.png')}}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count color--2">121</span>
                                </div>
                                <div class="fact__title">
                                    <h2>Jumlah Siswa</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{asset('assets/baru/images/funfact/3.png')}}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count color--3">1988</span>
                                </div>
                                <div class="fact__title">
                                    <h2>MTs Berdiri</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="{{asset('assets/baru/images/funfact/2.png')}}" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count color--2">95</span>
                                </div>
                                <div class="fact__title">
                                    <h2>Jumlah Siswi</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
						</div>
					</div>
				</div>
			</div>
		</section>
		
	
		
		
		
		<!-- <section class="featured-video">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h2>Watch Our Video</h2>
						<p>From the teachers, to the assistants, to the students, there is such a family atmosphere that is perfect for nurturing academic ability. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<a href="#" class="primary-link hvr-push">Learn More</a>
					</div>
					<div class="col-sm-6">
						<div class="content-video">
							<a href="#">
								<img src="images/featured-video-img.jpg" alt="image">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section> -->
	
	@php
    $testimonis = App\Testimoni::all();
    @endphp
		<section class="dcare__testimonial__area section-padding--lg bg-image--23">
    <center><h1>Testimoni Alumni</h1></center>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<div class="testimonial__slide--3 owl-carousel owl-theme">
							<!-- Start Single Testimonial Area -->
							@foreach($testimonis as $data)
							<div class="testimonial--3">
								<div class="testimonial__thumb">
									<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" alt="clint images">
								</div>
								<div class="testimonial__content">
									<p style="color: black;">{{$data->content}}.</p>
									<div class="tes__info">
										<h6 style="color: black;">{{$data->nama}}</h6>
										<span style="color: black;">{{$data->angkatan}}</span>
									</div>
								</div>
							</div>
							@endforeach
							<!-- End Single Testimonial Area -->
							<!-- Start Single Testimonial Area -->
							
							<!-- End Single Testimonial Area -->
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="featured-gallery">
		<!-- <center><h2>INSTAGRAM</h2></center> -->
			<div class="row">
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-2">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
					</a>
					<div id="content-2" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-3">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
					</a>
					<div id="content-3" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-2">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
					</a>
					<div id="content-2" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-3">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
					</a>
					<div id="content-3" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-2">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
					</a>
					<div id="content-2" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/tari.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-3">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
					</a>
					<div id="content-3" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/juara.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<a href="#" data-featherlight="#content-4">
						<img src="{{asset('assets/guest/images/kegiatan/tari1.jpg')}}" alt="image">
					</a>
					<div id="content-4" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/tari1.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
					<a href="#" data-featherlight="#content-5">
						<img src="{{asset('assets/guest/images/kegiatan/juara1.jpg')}}" alt="image">
					</a>
					<div id="content-5" class="gallery-lightbox">
						<img src="{{asset('assets/guest/images/kegiatan/juara1.jpg')}}" alt="image">
						<div class="gallery-lightbox-content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- <section class="sponsor">
			<div class="container">
				<div class="row">
					<div class="sponsor-logo">
						<div class="col-sm-3">
							<img src="images/sponsor-logo-1.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-2.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-3.png" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="images/sponsor-logo-4.png" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="newsletter-content">
						<div class="col-md-6">
							<h2><strong>Get The Latest News From Sekolah!</strong> Join our newsletter now</h2>
						</div>
						<div class="col-md-6">
							<input type="email" placeholder="Enter your e-mail address">
							<input class="hvr-push" type="submit" value="Subscribe">
						</div>
					</div>
				</div>
			</div>
		</section> -->
		@endsection