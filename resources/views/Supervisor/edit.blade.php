@extends('main')

@section('main')

<div class="row">
	<div class="col-md-8 offset-sm-2">
		<h2 class="display-6">Edit</h2>
	</div>
</div>

<div class="row">
	<div class="col-md-8 offset-sm-2">
	<form action="{{url('supervisor_update', $supervisor->id)}}" method="POST">
		{{csrf_field()}}
		<div class="form-group">
			<label for="exampleInputPassword1">Supervisor</label>
			<input name="nama_supervisor" type="text" class="form-control" id="exampleInputPassword1" value="{{$supervisor->nama_supervisor}}">
		</div>    
		<div class="form-group">
			<label for="exampleInputPassword1">Jam</label>
			<input name="jam" type="text" class="form-control" id="exampleInputPassword1" value="{{$supervisor->jam}}">
		</div>  



</div>
	</div>


	<button type="submit" style="margin-left: 70%;" class="btn btn-primary mb-3">save</button>
</form>

</div>
</div>

@endsection