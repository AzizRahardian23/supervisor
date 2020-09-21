@extends('main')

@section('main')

<div class="row">
	<div class="col-md-8 offset-sm-2">
		<h2 class="display-6">Edit</h2>
	</div>
</div>

<div class="row">
	<div class="col-md-8 offset-sm-2">
	<form action="{{url('jadwal_update', $jadwal->id)}}" method="POST">
		{{csrf_field()}}

		<div class="form-group">
			<label for="exampleInputPassword1">Jadwal</label>
			<input name="nama_jadwal" type="text" class="form-control" id="exampleInputPassword1" value="{{$jadwal->nama_jadwal}}">
		</div>    

		<div class="form-group">
			<label for="exampleInputPassword1">Guru</label>
			<input name="guru" type="text" class="form-control" id="exampleInputPassword1" value="{{$jadwal->guru}}">
		</div>    

		<div class="form-group">
			<label for="exampleInputPassword1">Jam</label>
			<input name="jam" type="text" class="form-control" id="exampleInputPassword1" value="{{$jadwal->jam}}">
		</div>    


		<div class="form-group">
			<label for="exampleInputPassword1">Hari</label>
			<input name="hari" type="text" class="form-control" id="exampleInputPassword1" value="{{$jadwal->hari}}">
		</div>    


		<div class="form-group">
			<label for="exampleInputPassword1">Tanggal</label>
			<input name="tanggal" type="date" class="form-control" id="exampleInputPassword1" value="{{$jadwal->tanggal}}">
		</div>    

</div>
	</div>


	<button type="submit" style="margin-left: 70%;" class="btn btn-primary mb-3">save</button>
</form>

</div>
</div>

@endsection