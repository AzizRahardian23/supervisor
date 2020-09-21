<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Supervisi</title>
</head>
<body>
  <center>
    <h1>Laporan</h1>
    <br/>
    <table border="1" cellspacing="0" cellpading="5" align="center" style="width: 100%;">
      <tr align="center">

      <th scope="col">Mata Pelajaran</th>
      <th scope="col">File</th>
      <th scope="col">Nilai</th>
      <th scope="col">Nama Supervisor</th>
      <th scope="col">jam</th>
      <th scope="col">tanggal</th>
       <th scope="col">nama jadwal</th>
            <th scope="col">guru</th>
            <th scope="col">jam</th>
            <th scope="col">hari</th>
            <th scope="col">tanggal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($rpps as $rpp)
      <td>{{$rpp->nama_mapel}}</td>
      <td>{{$rpp->file}}</td>
      <td>{{$rpp->nilai}}</td>

    @foreach ($supervisors as $supervisor)
      <td>{{$supervisor->nama_supervisor}}</td>
      <td>{{$supervisor->jam}}</td>
      <td>{{$supervisor->tanggal}}</td>

     @foreach ($jadwals as $jadwal)
     <td>{{$jadwal->nama_jadwal}}</td>
            <td>{{$jadwal->guru}}</td>
            <td>{{$jadwal->jam}}</td>
            <td>{{$jadwal->hari}}</td>
            <td>{{$jadwal->tanggal}}</td>
      @endforeach
          @endforeach
              @endforeach
    </tr>
    </table>
    <br/>
    <em>Created by : Azizrahardian</em>
  </center>
</body>
</html>