@extends('main')

@section('main')

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Mata Pelajaran</th>
      <th scope="col">File</th>
      <th scope="col">Nilai</th>
 
    </tr>
  </thead>
  <tbody>
  	@foreach ($nilai as $nilai)
    <tr>
      <td>{{$nilai->id}}</td>
      <td>{{$nilai->nama_mapel}}</td>
      <td>{{$nilai->file}}</td>
      <td>{{$nilai->nilai}}</td>
      
      <td>
        <a class="btn btn-primary" href="{{ url('nilai_edit', $nilai->id)}}" >Nilai</a>
 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection