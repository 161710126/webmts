@extends('layouts.admin')
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
			   
			    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Guru</div>
        <div class="card-body">
         <a class="btn btn-outline-warning" href="{{ route('gurus.create') }}"><i class="fa fa-plus-square">&nbsp</i>Tambah</a>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" id="myTable">
              <thead>
			  		<tr>
			  		<th>No</th>
			  		  <th>Nama</th>
					  <th>Jabatan</th>
					  <th>Poto</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($gurus as $data)
				  	  <tr>
				  	  	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama}}</td>
						<td><p>{{ $data->jabatan }}</p></td>
						<td><img src="{{ asset ('assets/img/gambarweb/'.$data->poto) }}" style="width: 70px; height: 70px;"></td>
						<td>
							<a href="{{ route('gurus.edit',$data->id) }}" class="btn btn-outline-primary"><i class="fa fa-pencil-square-o">&nbsp</i>Edit</a>
						</td>
						
						<td>
							<form method="post" action="{{ route('gurus.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button onclick="return confirm('Yakin ingin mengahapus data?')"
                                 type="submit" class="btn btn-outline-danger">
                                    <i class="fa fa-remove">&nbsp</i>Delete
                                </button>
							</form>
						</td>
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

	    