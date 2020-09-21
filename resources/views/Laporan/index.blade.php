@extends('main')

@section('main')
<a href="{{ route('generate') }}" class="btn btn-primary" target="_blank">Generate Report</a>
<table class="table">
  <thead class="thead-light">
    <tr>

      <th scope="col">Mata Pelajaran</th>
      <th scope="col">File</th>
      <th scope="col">Nilai</th>


    </tr>
  </thead>
  <tbody>
    @foreach ($rpps as $rpp)
    
    <tr>
      <td>{{$rpp->nama_mapel}}</td>
      <td>{{$rpp->file}}</td>
      <td>{{$rpp->nilai}}</td>





    </tr>
    @endforeach

    <table class="table">
      <thead class="thead-light">
        <tr>


          <th scope="col">nama supervisor</th>
          <th scope="col">jam</th>
          <th scope="col">tanggal</th>

        </tr>
      </thead>
      <tbody>

       @foreach ($supervisors as $supervisor)

       <tr>

        <td>{{$supervisor->nama_supervisor}}</td>
        <td>{{$supervisor->jam}}</td>
        <td>{{$supervisor->tanggal}}</td>





      </tr>
      @endforeach
      <table class="table">
        <thead class="thead-light">
          <tr>


            <th scope="col">nama jadwal</th>
            <th scope="col">guru</th>
            <th scope="col">jam</th>
            <th scope="col">hari</th>
            <th scope="col">tanggal</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($jadwals as $jadwal)
          <tr>

            <td>{{$jadwal->nama_jadwal}}</td>
            <td>{{$jadwal->guru}}</td>
            <td>{{$jadwal->jam}}</td>
            <td>{{$jadwal->hari}}</td>
            <td>{{$jadwal->tanggal}}</td>




          </tr>
          @endforeach

        </tbody>
      </table>

      <script type="text/javascript">
        println()
      </script>
      @endsection