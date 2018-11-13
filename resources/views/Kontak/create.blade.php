@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Kontak </b>
		<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('kontaks.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group {{$errors->has('nama') ? 'has-error' : '' }}">
				<label class="control-label">Nama</label>
				<input type="text"  name="nama" class="form-control" required>
				@if ($errors->has('nama'))
				<span class="help-block"><strong>{{ $errors->first('nama') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('email') ? 'has-error' : '' }}">
				<label class="control-label">email</label>
				<input type="text"  name="email" class="form-control" required>
				@if ($errors->has('email'))
				<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('telepon') ? 'has-error' : '' }}">
				<label class="control-label">telepon</label>
				<input type="text"  name="telepon" class="form-control" required>
				@if ($errors->has('telepon'))
				<span class="help-block"><strong>{{ $errors->first('telepon') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('subject') ? 'has-error' : '' }}">
				<label class="control-label">subject</label>
				<input type="text"  name="subject" class="form-control" required>
				@if ($errors->has('subject'))
				<span class="help-block"><strong>{{ $errors->first('subject') }}</strong></span>
				@endif
			</div>
				
				<div class="form-group {{$errors->has('message') ? 'has-error' : '' }}">
				<label class="control-label">message</label>
				<input type="text"  name="message" class="form-control" required>
				@if ($errors->has('message'))
				<span class="help-block"><strong>{{ $errors->first('message') }}</strong></span>
				@endif
			</div>

				<div class="from-group">
				<button type="submit" class="btn btn-outline-primary">
				<i class="fa fa-save">&nbsp</i>Tambah</button>
				<button type="reset" class="btn btn-outline-success">
				<i class="fa fa-refresh fa-spin">&nbsp</i>Ulangi</button>
			</div>

		</form>
	</div>
</div>
</div>
</div>
</div>
@endsection


