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
            <h3>List Of All Comment</h3>
            </div>
            </br></br>
            <form action="/komentar/update/{{$komentar->id}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$komentar->id}}"></br>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" required="required" name="name" value="{{$komentar->name}}"></br>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" required="required" name="content" value="{{$komentar->content}}"></br>
                </div>
                <div class="form-group">
                    <label for="image">Featured Image</label>
                    <input type="file" class="form-control" required="required" name="image" value="{{$komentar->featured_image}}"></br>
                    <img width="150px" src="{{asset('storage/'.$komentar->featured_image)}}">
                </div>
                <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
            </form>
      
        </div>
    </div>
  </div>
  </blockquote>
</div>
@endsection