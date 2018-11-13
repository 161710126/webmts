@extends('layouts.index')
@section('content')
<section class="events-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>Kumpulan Dewan Guru</h2>
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
					@foreach($gurus as $data)
					<div class="col-xs-5 col-lg-3">
						<div class="events-item">
							<div class="events-item-img">
							<img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="width: 350px; height: 350px;" alt="image">
							</div>
							<div class="events-item-info">
								<h3>{{ $data->nama}}</h3>
								<p>{{ $data->jabatan }}</p>
							</div>	
						</div>
					</div>	
					@endforeach
				</div>
				<a href="#" class="events-load-more">
					<span>Load More <i class="fa fa-angle-down" aria-hidden="true"></i></span>
				</a>
			</div>
		</section>
@endsection