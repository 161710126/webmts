@extends('layouts.index')
@section('content')
<section class="contact-hero">
			<div class="container">
				<div class="hero-content">						
					<div class="hero-caption">
						<h2>Silakan Hubungi Kami</h2>
					</div>
				</div>
			</div>
		</section>
		
		<section class="contact-form">
			<div class="container">
				<div class="section-content clearfix">
					<h3>Kirim Pesan</h3>
					
@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(['route'=>'contactus.store']) !!}
<div class="row">
<div class="form-group col-sm-6 {{ $errors->has('nama') ? 'has-error' : '' }}">
{!! Form::label('nama:') !!}
{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder'=>'Enter nama']) !!}
<span class="text-danger">{{ $errors->first('nama') }}</span>
</div>
	
<div class="form-group col-sm-6 {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>
</div>

<div class="row">
<div class="form-group col-sm-6 {{ $errors->has('telepon') ? 'has-error' : '' }}">
{!! Form::label('telepon:') !!}
{!! Form::text('telepon', old('telepon'), ['class'=>'form-control', 'placeholder'=>'Enter telepon']) !!}
<span class="text-danger">{{ $errors->first('telepon') }}</span>
</div>

<div class="form-group col-sm-6 {{ $errors->has('subject') ? 'has-error' : '' }}">
{!! Form::label('subject:') !!}
{!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder'=>'Enter subject']) !!}
<span class="text-danger">{{ $errors->first('subject') }}</span>
</div>
</div>

<div class="row">
<div class="form-group col-sm-6 {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>
</div>

<div class="form-group">
<button class="btn btn-warning">Kirim</button>
</div>

{!! Form::close() !!}

				</div>
			</div>
		</section>
		
		<section class="contact-information">
			<div class="container">
				<div class="section-content">
					<h3>Contact Information</h3>
					<ul>
						<li> 
							<i class="fa fa-home" aria-hidden="true"></i>
							Jl.Kabupaten Desa Keban II,Kec.Sanga Desa,Kab.Muba,provinsi.Sumsel
						</li>
						<li> 
							<i class="fa fa-phone" aria-hidden="true"></i>
							 08127446510
						</li>
						<li> 
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							mtsalikhlaskeban2@yahoo.com
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="contact-form">
		<center><h2>Maps</center></h2><br>
			<div class="container">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.3252189323553!2d103.49055714897064!3d-2.7194115980091387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3075065d6880cd%3A0xaf99af45910df3ee!2sMTs+Al-Ikhlas+keban+II!5e0!3m2!1sid!2sid!4v1539843096911" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section>
		<br><br><br>

		<section class="contact-form">
		<center><h2>Maps Zoom</h2></center><br>
			<div class="container">
			 <iframe src="https://www.google.com/maps/embed?pb=!4v1538731042398!6m8!1m7!1sIGyEbTeZ8fjX_ztad0j9NA!2m2!1d-2.719216632611727!2d103.4926186716606!3f181.08717533472128!4f-3.4272152749862954!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section>
		<br><br>
@endsection

