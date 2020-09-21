@extends('main')

@section('main')

<div class="row">
	<div class="col-md-8 offset-sm-2">
		<h2 class="display-6">Edit</h2>
	</div>
</div>

<div class="row">
	<div class="col-md-8 offset-sm-2">
	<form action="{{url('rpp_update', $rpp->id)}}" method="POST">
		{{csrf_field()}}
		<div class="form-group">
			<label for="exampleInputPassword1">Mata Pelajaran</label>
			<input name="nama_mapel" type="text" class="form-control" id="exampleInputPassword1" value="{{$rpp->nama_mapel}}">
		</div>    

		<div class="form-group">
			<label for="exampleInputPassword1">File</label>
			<input name="file" type="text" class="form-control" id="exampleInputPassword1" value="{{$rpp->file}}">
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Tanggal</label>
			<input name="tanggal" type="date" class="form-control" id="exampleInputPassword1" value="{{$rpp->tanggal}}">
		</div>

		   



</div>
	</div>


	<button type="submit" style="margin-left: 70%;" class="btn btn-primary mb-3">save</button>
</form>

</div>
</div>

@endsection