@extends('layouts.user')
@section('content')

@foreach($kartikels as $data)
<center>         	
						<center><img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="max-height: 125px;max-width: 125px;margin-top: 7px"></center>
						<br>
				    	<h4>{{ $data->judul}}</h4>
						<h4>{{ $data->deskripsi}}</h4>
						<h4>{{ $data->kategori_artikel->nama_artikel}}</h4>
						 </div><!-- /.col-lg-4 -->
</center>
				      @endforeach	
				      @endsection