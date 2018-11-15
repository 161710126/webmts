@extends('layouts.index')
@section('content')
<div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
             <!--  <img src="{{asset('assets/baru/images/bg-png/6.png')}}" alt="bradcaump images"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Kumpulan Guru MTs AL IKHLAS</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="/beranda">Home</a>
                                  <span class="brd-separetor"><img src="{{asset('assets/baru/images/icons/brad.png')}}" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Guru</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
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