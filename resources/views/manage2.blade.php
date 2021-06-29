@extends('layout.master')  
@section('content')
<div class="container">
<br><br>
<div class="row">

  <!-- Articles -->
    <div class="col-md-8">
        <div class="card">
        <div class="card-header text-center">
            <h3>List Of All Comment</h3>
        </div>
        <a href="komentar/add2" class="btn btn-primary">Add Data</a>
        </br>
        <div class="card body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>name</th>
                    <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                @foreach($komentar as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->name}}</td>
                    <td>{{$b->created_at}}</td>
                    <td>
                        <a href="komentar/edit2/{{$b->id}}" class="badge badge-warning">Edit</a>
                        <a href="komentar/delete2/{{$b->id}}" class="badge badge-danger">hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/komentar/cetak_pdf" class="btn btn-primary"target="_blank">CETAK PDF COMMENT</a>
        </div>
    </div>
</div>


<!-- Sidebar Widgets Column -->
<div class="col-md-4">

<!-- Search Widget -->
<div class="card my-4">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-append">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#">Kainan</a>
          </li>
          <li>
            <a href="#">Shoyo</a>
          </li>
          <li>
            <a href="#">Meihou</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#">Ryounan</a>
          </li>
          <li>
            <a href="#">Sannoh</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">Slam Dunk</h5>
  <div class="card-body">
  The manga and anime series Slam Dunk features a cast of 
  fictional characters created by Takehiko Inoue. The series 
  takes place in Japan, with the main characters being high school 
  basketball players from Kanagawa Prefecture.
  </div>
</div>

</div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
@endsection