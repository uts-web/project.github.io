@extends('layout.master')  
@section('content')
<br><br>
<div class="container">
<div class="box">
  <blockquote>
  <br><br><br>
  <div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
            <h3>List Of All Kategori</h3>
            </div>
            </br></br>
            <form action="/kategori/create" method="post" enctype="multipart/form-data">

            @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" required="required" name="title"></br>
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" required="required" name="genre"></br>
                </div>
                <div class="form-group">
                    <label for="image">Featured Image</label>
                    <input type="file" class="form-control" required="required" name="image"></br>
                </div>
                <br>
                <div class="form-group">
                    <label for="trailer">Featured Trailer</label>
                    <input type="text" class="form-control" required="required" name="trailer"></br>
                </div>
                <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
            </form>     
        </div>
</blockquote>
    </div>

    
</div>

<!-- /.container -->
@endsection