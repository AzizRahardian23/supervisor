@extends('main')

@section('main')
<!-- Button trigger modal -->
<div class="right">
<button type="button" class="btn btn-success mb-2" style="margin-left: 85%;" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
</div>
@if ($errors->any())
<ul>
   @foreach ($errors->all() as $error)
   <li>{{$error}}</li>
   @endforeach
</ul>

@endif

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data supervisor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{route('supervisor_create')}}" method="POST">
         {{csrf_field()}}
         <div class="form-group">
          <label for="exampleInputPassword1">Supervisor</label>
          <input name="nama_supervisor" type="text" class="form-control" id="exampleInputPassword1">
        </div>    
        <div class="form-group">
			    <label for="exampleInputPassword1">Jam</label>
			    <input name="jam" type="text" class="form-control" id="exampleInputPassword1">
		    </div> 
        <div class="form-group">
          <label for="exampleInputPassword1">Tanggal</label>
          <input name="tanggal" type="date" class="form-control" id="exampleInputPassword1">
        </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">supervisor</th>
      <th scope="col">jam</th>
      <th scope="col">tanggal</th>

    </tr>
  </thead>
  <tbody>
  	@foreach ($supervisor as $supervisor)
    <tr>
      <td>{{$supervisor->id}}</td>
      <td>{{$supervisor->nama_supervisor}}</td>
      <td>{{$supervisor->jam}}</td>
      <td>{{$supervisor->tanggal}}</td>
      
<td>
      <a class="btn btn-primary" href="{{ url('supervisor_edit', $supervisor->id)}}" >Edit</a>

     <a class="btn btn-primary" href="{{ url('supervisor_delete', $supervisor->id)}}"  onclick="return confirm('yakin akan di hapus?')">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection