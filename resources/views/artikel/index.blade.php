@extends('layouts.admin1')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<div class="row">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">

			 <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Data Artikel</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="/home">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>

			    <div class="card mb-3">
        <div class="card-header">
        <div class="card-body"> <a class="btn btn-outline-warning" href="{{ route('artikels.create') }}">Add Data</a>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
			  		<tr>
			  		<th>No</th>
			  		  <th>Judul</th>
					  <th>Deskripsi</th>
					  <th> Galeri</th>
					   <th>Penulis</th>
					   <th>Kategori</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($artikels as $data)
				  	  <tr>
				  	    <td>{{ $no++ }}</td>
				    	<td>{{ $data->judul}}</td>
				    	<td>{!! str_limit($data->content, 100, '&raquo;') !!}</td>
						<td><img class="img-circle" src="{{ asset ('assets/img/gambargaleri/'.$data->gambar) }}" style="width: 90px; height: 90px;"></td>
				    	<td>{{ $data->user->name}}</td>
				    	<td>{{ $data->kategori->nama_kategori}}</td>
						<td>
							<a href="{{ route('artikels.edit',$data->id) }}"  class="btn btn-outline-primary"><i class="fa fa-pencil-square-o">&nbsp</i>Edit</a>
						</td>
						<!-- <td><a href="{{ route('artikels.show',$data->id) }}" class="btn btn-outline-primary">Show</a></td> -->
						
						<td>
							<form method="post" action="{{ route('artikels.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button onclick="return confirm('Yakin ingin mengahapus data?')"
                                 type="submit" class="btn btn-outline-danger">
                                    <i class="fa fa-remove">&nbsp</i>Delete
                                </button>
							</form>
						</td>
						<td>
                  @if($data->status == 1)
                  <form action="{{ route('artikels.publish',$data->id) }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-outline-success">UnPublish</button>
                  </form>
                  @elseif($data->status == 0)
                  <form action="{{ route('artikels.publish',$data->id) }}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-outline-success" type="submit">Publish</button>
                  </form>
                </td>
                @endif
				      </tr>

				      @endforeach	
				  	</tbody>
				  </table>
				 
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection

	    