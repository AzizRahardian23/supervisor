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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data RPP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{route('rpp_create')}}" method="POST" enctype="multipart/form-data">
         {{csrf_field()}}
         <div class="form-group">
          <label for="exampleInputPassword1">Mata Pelajaran</label>
          <input name="nama_mapel" type="text" class="form-control" id="exampleInputPassword1">
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">File</label>
          <input name="file" type="file" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
			    <label for="exampleInputPassword1">Tanggal</label>
			    <input name="tanggal" type="date" class="form-control" id="exampleInputPassword1">
		    </div>        

       <input type="hidden" name="nilai" value="0">
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
      <th scope="col">Mata Pelajaran</th>
      <th scope="col">File</th>
      
       
    </tr>
  </thead>
  <tbody>
  	@foreach ($rpp as $rpp)
    <tr>
      <td>{{$rpp->id}}</td>
      <td>{{$rpp->nama_mapel}}</td>
      <td>{{ Str::limit($rpp->file, 40)}}</td>
      
    
      
      <td>
        <a class="btn btn-primary" href="{{ url('rpp_edit', $rpp->id)}}" >Edit</a>
 
     
     <a class="btn btn-primary" href="{{ url('rpp_delete', $rpp->id)}}"  onclick="return confirm('yakin akan di hapus?')">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection