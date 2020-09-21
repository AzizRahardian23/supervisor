@extends('main')

@section('main')
<!-- Button trigger modal -->
<div class="right">
<button type="button" class="btn btn-success mb-2" style="margin-left: 85%;" class="btn btn-success mb-2" data-toggle="modal" data-target="#exampleModal">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{route('jadwal_create')}}" method="POST">
         {{csrf_field()}}
         <div class="form-group">
          <label for="exampleInputPassword1">Jadwal</label>
          <input name="nama_jadwal" type="text" class="form-control" id="exampleInputPassword1">
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Guru</label>
          <input name="guru" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Jam</label>
          <input name="jam" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Hari</label>
          <input name="hari" type="text" class="form-control" id="exampleInputPassword1">
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
      <th scope="col">Jadwal</th>
      <th scope="col">Guru</th>
      <th scope="col">Jam</th>
      <th scope="col">Hari</th>
      <th scope="col">Tanggal</th>

    </tr>
  </thead>
  <tbody>
  	@foreach ($jadwal as $jadwal)
    <tr>
      <td>{{$jadwal->id}}</td>
      <td>{{$jadwal->nama_jadwal}}</td>
      <td>{{$jadwal->guru}}</td>
      <td>{{$jadwal->jam}}</td>
      <td>{{$jadwal->hari}}</td>
      <td>{{$jadwal->tanggal}}</td>
   

       <td>
        <a class="btn btn-primary" href="{{ url('jadwal_edit', $jadwal->id)}}" >Edit</a>
 
     
     <a class="btn btn-primary" href="{{ url('jadwal_delete', $jadwal->id)}}"  onclick="return confirm('yakin akan di hapus?')">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection