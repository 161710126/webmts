@extends('layouts.index')
@section('content')
<!-- <section class="about-us-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>Kami bertekad untuk mencapai standar tertinggi
						<br>dalam segala hal yang kami lakukan..</h2>
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

		<div class="about-us-content-image">
			<img src="{{asset('assets/guest/images/guru.jpg')}}" alt="image">
		</div>
		

		
<section class="junior__welcome__area section-padding--lg poss-relative bg-image--21">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title--2">
							<h2 class="title__line" data-shadow="Welcome to Our School">Visi Misi MTs AL IKHLAS</h2>
						</div>
					</div>
				</div>
				<div class="row jn__welcome__wrapper--2 align-items-center">
					<div class="col-md-12 col-lg-5 col-sm-12">
						<div class="welcome__juniro__three">
							<div class="welcome-tab nav" role="tablist">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#vission" role="tab">Vision</a>
	                            <a class="nav-item nav-link " data-toggle="tab" href="#mission" role="tab">Mission</a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#object" role="tab">Tujuan</a>
                    		</div>
							<div class="welcome__tab__content">
								<!-- Start Single Content -->
								<div class="single__welcome__content tab-pane fade show active" id="vission" role="tabpanel">
									<p style="font-size: 17px; line-height:33px;">Meningkatkan Prestasi Siswa dalam bidang Imtek dan imtaq serta berakhlakul Karimah.</p>
								</div>
								<div class="single__welcome__content tab-pane fade" id="mission" role="tabpanel">
									<p style="font-size: 17px; line-height:33px;">1.Melaksanakan pembelajaran dan bimbingan secara efektif untuk mengoptimalkan potensi siswa<br>
                           2.Mengciptakan suasana yang kondusif untuk keefektipan seluruh kegiatan madrasah<br>
                           3.Mengembangkan budaya kompeletif bagi peningkatan prestasi siswa<br>
                           4.Menumbuhkembangkan penghayatan dan pengamalan terhadap Agama untuk membentuk budi pekerti yang baik.</p>
								</div>
								<!-- End Single Content -->
								<!-- Start Single Content -->
								<!-- End Single Content -->
								<!-- Start Single Content -->
								<div class="single__welcome__content tab-pane fade" id="object" role="tabpanel">
									<p style="font-size: 17px; line-height:33px;">1.Bersaing dalam penerapan ilmu pengetahuan dan teknologi<br>
									   2. Bersaing dalam kegiatan keagamaan dan kepedulian sekolah<br>
									   3. Bersaing dalam kebiasaan sopan santun dan berbudi pekerti.</p>
								</div>
								<!-- End Single Content -->
							</div>
							<!-- <div class="wel__btn">
								<a class="dcare__btn btn__white" href="about-us.html">Read More</a>
							</div> -->
						</div>
					</div>
				</div>
				<div class="welcome__images wow fadeInUp" data-wow-delay="0.5s">
					<img src="{{asset('assets/baru/images/logo/bcmts.jpg')}}" style="width: 800px; height: 450px;" alt="welcome images">
				</div>
				
			</div>
		</section><br>
		
		<section class="dcare__testimonial__area section-padding--lg bg-image--23">
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
<section class="about-us-content">
			<center><h2>Profile Madrasah</h2></center><br>
			<div class="container">
				<div class="row">
					<div class="section-content">
		 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (1.Identitas)</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NSM</th>
                  <th>NPSN</th>
                  <th>Status Madrasah</th>
                  <th>Waktu Belajar</th>
                  <th>Nama Madarasah</th>
                  <th>NPWP</th>
                  <th>Nomor Telpon</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td>121216060009</td>
                  <td> 10600249/69853334</td>
                  <td>Swasta</td>
                  <td>Siang, Jam 11.30 s/d 5.15 wib</td>
                  <td>MTs. Al Ikhlas Keban II</td>
                  <td> - </td>
                  <td>08127446510</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
         <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (2.Data Kepala)</div>
         <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kepala Madrasah</th>
                  <th>Jenis Kelamin</th>
                  <th>Status Kepegawaian</th>
                  <th>NIP/NUPTK</th>
                  <th>NRG Sertifikasi</th>
                  <th>Pendidikan Terakhir</th>
                  <th>Nomor Telpon/HP</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td> Mahyudin, S.Pd.I</td>
                  <td> Laki - Laki</td>
                  <td>PNS</td>
                  <td>197712072006041001 / 9539755656200003</td>
                  <td> - </td>
                  <td> Starata Satu (S1) </td>
                  <td>08127446510</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (3.Alamat Madrasah)</div>
         <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
               <tr>
                  <th>Jalan/Kampung</th>
                  <th>Propins</th>
                  <th>Kabupaten</th>
                  <th>Kecamatan</th>
                  <th>Desa</th>
                  <th>Kode Pos</th>
                 <!--  <th>Alamat E-mail</th> -->
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td> Jl. Kabupaten Desa Keban II</td>
                  <td> Sumatera Selatan</td>
                  <td> Musi Banyuasin</td>
                  <td>Sanga Desa</td>
                  <td> Keban II </td>
                  <td> 30752 </td>
                 <!--  <td>mtsalikhlaskeban2@yahoo.com</td> -->
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (4. Informasi Dokumen dan Perijinan)</div>
         <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tahun berdiri</th>
                  <th>No. SK Pendirian</th>
                  <th>Tgl SK Pendirian</th>
                  <th>No. SK Akreditasi</th>
                  <th>Status Akreditasi</th>
                  <th>Tahun Akreditas</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td> 1988</td>
                  <td>  Wf.6.308.152.89</td>
                  <td>11 Juli 1988</td>
                  <td> KPTS/Kw.06.4/4/PP.<br>03.2/220/2012 </td>
                  <td>Terakreditasi C </td>
                  <td> 2012 </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
         <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Profile Madrasah (5. Data Bantuan Oprasional Sekolah)</div>
         <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Bendahara BOS</th>
                  <th>Nomor Rekening Sekolah</th>
                  <th>Pemilik Rekening</th>
                  <th>Nama Bank</th>
                  <th>Kantor Cabang</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <td> Tetty Arpita</td>
                  <td>   1490985695</td>
                  <td>MTs Al Ikhlas Keban II</td>
                  <td> Bank SUMSEL</td>
                  <td> Sekayu </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
       <!--  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
      </div>
      </div>
      </div>
      </section>
				
		<section class="about-us-content">
			<div class="container">
				<div class="row">
					<div class="section-content">
						<h2>Struktur Kurikulum MTs Al Ikhlas Keban II</h2>
						<p>Struktur kurikulum merupakan pola dan susunan mata pelajaran yang harus ditempuh oleh peserta didik
dalam kegiatan pembelajaran. Kedalaman muatan kurikulum pada setiap mata pelajaran dituangkan dalam
kompetensi yang harus dikuasai peserta didik sesuai dengan beban belajar yang tercantum dalam struktur
kurikulum.<br><br>
Struktur Kurikulum MTs Al Ikhlas Keban II perpaduan antara Kurikulum Tingkat Satuan Pendidikan (KTSP)
tahun 2006 dengan Kurikulum tahun 2013 untuk kelas VII dengan mata pelajaran khas madrasah
dilingkungan Kementrian Agama seperti mata pelajaran Al Qur’an Hadist, Fiqh, Sejarah Kebudayaan Islam,
AQidah Akhlak, dan Bahasa Arab, Kedalaman muatan kurikulum 2013 pada setiap mata pelajaran
Pendidikan Agama Islam (PAI) dituangkan dalam kompetensi yang harus dikuasai peserta didik sesuai
dengan beban belajar yang tercantum dalam struktur kurikulum. Kompetensi yang dimaksud terdiri atas
kompetensi Inti (KI) dan kompetensi Dasar (KD).dengan ketentuan sebagai berikut :<br>
a. Kurikulum MTs Al Ikhlas Keban II memuat 14 mata pelajaran, muatan lokal, dan pengembangan diri.<br>
b. Substansi mata pelajaran IPA dan IPS merupakan IPA terpadu dan IPS terpadu.<br>
c. Alokasi waktu jam pembelajaran adalah 35 menit.<br>
d. Minggu efektif dalam satu tahun pembelajaran selama dua semester adalah 34 s/d 38 minggu.<br><br>
Komponen mata pelajaran dikelompokan menjadi lima kelompok mata pelajaran sebagai berikut :<br>
1. Kelompok mata pelajaran Agama dan Akhlak Mulia.<br>
2. Kelompok mata pelajaran kepribadian dan kewarganegaraan.<br>
3. Kelompok mata pelajaran Ilmu Pengetahuan dan Teknologi.<br>
4. Kelompok mata pelajaran Estetika.<br>
5. Kelompok mata pelajaran Jasmani, Olah raga dan Kesehatan.<br><br>
Kelompok mata pelajaran tersebut dilaksanakan melalui muatan dan/atau kegiatan pembelajaran
sebagaimana diuraikan dalam PP.No. 19 tahun 2005 pasal 7, sedangkan komponen muatan lokal dan
pengembangan diri merupakan kegiatan integral dari struktur kurikulum dan dikembangkan sendiri oleh
sekolah.</p>
					</div>
					<!-- <div class="section-content-icons">
						<div class="row">
							<div class="col-sm-6">
								<div class="col-sm-2">
									<img src="{{asset('assets/guest/images/about-us-icon-1.png')}}" alt="image">
								</div>
								<div class="col-sm-10">
									<h3>Empower</h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="col-sm-2">
									<img src="{{asset('assets/guest/images/about-us-icon-2.png')}}" alt="image">
								</div>
								<div class="col-sm-10">
									<h3>Engage</h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="col-sm-2">
									<img src="{{asset('assets/guest/images/about-us-icon-3.png')}}" alt="image">
								</div>
								<div class="col-sm-10">
									<h3>Graduation</h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="col-sm-2">
									<img src="{{asset('assets/guest/images/about-us-icon-4.png')}}" alt="image">
								</div>
								<div class="col-sm-10">
									<h3>Awarding</h3>
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</section>

		
		<!-- <section class="page-sponsor">
			<div class="container">
				<div class="row">
					<div class="sponsor-logo">
						<div class="col-sm-3">
							<img src="{{asset('assets/guest/images/sponsor-logo-1.png')}}" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="{{asset('assets/guest/images/sponsor-logo-2.png')}}" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="{{asset('assets/guest/images/sponsor-logo-3.png')}}" alt="image">
						</div>
						<div class="col-sm-3">
							<img src="{{asset('assets/guest/images/sponsor-logo-4.png')}}" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section> -->
		@endsection

		<!-- <div class="crumina-module crumina-testimonial-item testimonial-item-quote-right">
<div class="testimonial-img-author">
<img src="https://smkassalaambandung.sch.id/photos/1/testimoni_alumni/5a7a7f53409ac.png" alt="author">
</div>
<div class="author-info"><a href="#!" class="h6 author-name">Akmal Musthofa</a>
<div class="author-company">Web Developer PT SMOOETS TEKNOLOGI OUTSOURCING</div>
</div>
<h6 class="testimonial-text">
<p>Selama belajar di SMK ASSALAAM, potensi diri semakin melejit. Bersyukur bisa sekolah di lembaga pendidikan yang berkualitas, mengajarkan kreatifitas, dan dibekali ilmu agama seperti SMK ASSALAAM. SMK ASSALAAM luar biasa bermanfaat.</p>
</h6>
<div class="quote"><svg class="utouch-icon utouch-icon-quotes"><use xlink:href="#utouch-icon-quotes"></use></svg></div>
</div> -->