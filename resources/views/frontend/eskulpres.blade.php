@extends('layouts.index')
@section('content')
<section class="schedule-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>Ekstrakurikuler</h2>
						
					</div>
				</div>
			</div>
		</section>

		 <center><header class="section-header">
          <h2>Pengertian Ekstrakurikuler</h2>
           <p>Ekstrakurikuler adalah kegiatan non-pelajaran formal yang dilakukan peserta didik sekolah atau universitas, umumnya di luar jam belajar kurikulum standar. <br>Kegiatan-kegiatan ini ada pada setiap jenjang pendidikan dari sekolah dasar sampai universitas.</p>
        </header></center>
		
		<div class="container">
				<div class="row">
						@foreach($eskuls as $data)
		<div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
              <br>
              <br>
               <center>
               <!-- <a href="#" data-featherlight="{{ asset ('assets/img/gambarweb/'.$data->poto) }}"> -->
               <img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" width="100" height="100" alt="image" class="img-fluid">
               <!-- </a> -->
               </center>
              </div>
              <h2 class="title">{{ $data->nama}}</h2>
              <p>
              {{ $data->content}}
              </p>
            </div>
          </div>
						@endforeach
			</div>
			</div>

			<section class="academics-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>Prestasi Siswa-Siswi MTs AL IKHLAS</h2>
						<!-- <a href="#" class="hvr-push">Download as PDF</a> -->
					</div>
				</div>
			</div>
		</section>
		
		<!-- <section class="events-search-filter">
			<div class="container">
				<div class="row">
					<div class="section-content clearfix">
						<div class="col-sm-6 col-md-3">
							<label>Keyword</label>
							<input type="text" placeholder="Type event keyword here"/>
						</div>
						<div class="col-sm-6 col-md-3">
							<label>Date</label>
							<input type="text" class="datepicker" >
						</div>
						<div class="col-sm-6 col-md-3">
							<label>Event Categories</label>
							<select class="selectpicker dropdown">
								<option>Select Categories</option>
								<option>Academics</option>
								<option>Sports</option>
								<option>Music</option>
								<option>Research</option>
							</select>
						</div>
						<div class="col-sm-6 col-md-3">
							<label></label>
							<input class="hvr-push" type="submit" value="Search Event"/>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		
		<section class="events-list">
			<div class="container">
				<div class="row">
				@foreach($prestasis as $data)
					<div class="col-xs-6 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
							<a href="#" data-featherlight="{{ asset ('assets/img/gambarweb/'.$data->poto) }}">
									<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" alt="image">
									</a>
							</div>
							<div class="events-item-info">
								<h3>{{ $data->nama}}</h3>
								<ul class="event-meta">
									<li>
										<i class="fa fa-calendar" aria-hidden="true"></i>
										{{ $data->tanggal_peroleh}}
									</li>
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										Kategori Eskul : {{ $data->eskul->nama}}
									</li>
								</ul>
								<p>{{ $data->deskripsi}}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
	
		@endsection