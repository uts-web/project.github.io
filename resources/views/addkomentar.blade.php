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
            <form action="/komentar/create" method="post"enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" required="required" name="name"></br>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" required="required" name="content"></br>
                </div>
                <div class="form-group">
                    <label for="image">Featured Image</label>
                    <input type="file" class="form-control" required="required" name="image"></br>
                </div>
                <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
            </form>
            </br></br>  
</blockquote>      
        </div>
    </div>

@endsection