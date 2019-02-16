@extends('layouts.admin1')
@section('content')

<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading"><b>Tambah Data Event </b>
		<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ url()->previous() }}"><i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
		</div>
	</div>
	<div class="panel-body">
		<form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                <input name="poto" type="file" required>
                            </div>

			<div class="form-group {{$errors->has('judul') ? 'has-error' : '' }}">
				<label class="control-label">Judul</label>
				<input type="text"  name="judul" class="form-control" required>
				@if ($errors->has('judul'))
				<span class="help-block"><strong>{{ $errors->first('judul') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('bulan') ? 'has-error' : '' }}">
				<label class="control-label">Bulan</label>
				<select name="bulan" class="form-control" required>
				<option>Pilih Bulan</option>
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                </select>
			</div>

			<div class="form-group {{$errors->has('tgl') ? 'has-error' : '' }}">
			<label class="control-label">Tanggal</label>
				<select name="tgl" class="form-control" required>
				<option>Pilih Tanggal</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                </select>
			</div>
			
			<div class="form-group {{$errors->has('tahun') ? 'has-error' : '' }}">
				<label class="control-label">Tahun</label>
				<select name="tahun" class="form-control" required>
				<option>Pilih Tahun</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                </select>
			</div>

			<div class="form-group {{$errors->has('jam') ? 'has-error' : '' }}">
				<label class="control-label">Jam</label>
				<input type="text"  name="jam" class="form-control" required>
				@if ($errors->has('jam'))
				<span class="help-block"><strong>{{ $errors->first('jam') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('alamat') ? 'has-error' : '' }}">
				<label class="control-label">Alamat</label>
				<input type="text"  name="alamat" class="form-control" required>
				@if ($errors->has('alamat'))
				<span class="help-block"><strong>{{ $errors->first('alamat') }}</strong></span>
				@endif
			</div>

			<div class="form-group {{$errors->has('deskripsi') ? 'has-error' : '' }}">
				<label class="control-label">deskripsi</label>
				<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required=""></textarea>
				@if ($errors->has('deskripsi'))
				<span class="help-block"><strong>{{ $errors->first('deskripsi') }}</strong></span>
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
<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>

</div>
@endsection


