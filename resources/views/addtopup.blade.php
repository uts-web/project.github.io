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
            <form action="/topup/create" method="post" enctype="multipart/form-data">

            @csrf
                <div class="form-group">
                    <label for="jumlah">Jumlah Diamond</label>
                    <input type="text" class="form-control" required="required" name="jumlah"></br>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" required="required" name="Harga"></br>
                </div>
                <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
            </form>     
        </div>
</blockquote>
    </div>

    
</div>

<!-- /.container -->
@endsection