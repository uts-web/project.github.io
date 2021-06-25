@extends('layout.master')  
@section('content')
<div class="container">
  <br><br><br>
  <div class="box">
  <blockquote>
  <div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
            <h3>List Of All Kategori</h3>
            </div>
            </br></br>
            <form action="/kategoris/update/{{$kategoris->id}}" method="post"enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$kategoris->id}}"></br>
              <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" required="required" name="title" value="{{$kategoris->title}}"></br>
              </div>
              <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" required="required" name="genre" value="{{$kategoris->genre}}"></br>
              </div>
              <div class="form-group">
              <label for="image">Featured Image</label>
              <input type="file" class="form-control" required="required" name="image" value="{{$kategoris->featured_image}}"></br>
              <img width="150px" src="{{$kategoris->featured_image}}">
              </div>
              <div class="form-group">
                <label for="trailer">Trailer</label>
                <input type="text" class="form-control" required="required" name="Trailer" value="{{$kategoris->featured_trailer}}"></br>
              </div>
              <button type="submit" name="edit" class="btn btn-primary floatright">Ubah Data</button>
              </form>
            </br></br>        
        </div>
    </div>
    </blockquote>
  </div>
</div>
<!-- /.container -->
@endsection