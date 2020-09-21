@extends('main')

@section('main')

<div class="row">
	<div class="col-md-8 offset-sm-2">
		<h2 class="display-6">Edit</h2>
	</div>
</div>

<div class="row">
	<div class="col-md-8 offset-sm-2">
	<form action="{{url('nilai_update', $nilai->id)}}" method="POST">
		{{csrf_field()}}
		<div class="form-group">
			<label for="exampleInputPassword1">Mata Pelajaran</label>
			<input name="nama_mapel" type="text" class="form-control" id="exampleInputPassword1" value="{{$nilai->nama_mapel}}" readonly="">
		</div>    

		<div class="form-group">
			<label for="exampleInputPassword1">File</label>
			<br>
			<a href="{{ asset('files/'. $nilai->file) }}" rel="noopener noreferrer" target="_blank">Lihat File</a>
		</div>    

		<div class="form-group">
			<label for="exampleInputPassword1">Nilai</label>
			<input name="nilai" type="text" class="form-control" id="exampleInputPassword1" value="{{$nilai->nilai}}">
		</div>    



</div>
	</div>


	<button type="submit" style="margin-left: 70%;" class="btn btn-primary mb-3">save</button>
</form>

</div>
</div>

@endsection