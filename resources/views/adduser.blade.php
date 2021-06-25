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
            <h3>List Of All User</h3>
            </div>
            </br></br>
            <form action="/user/create" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" required="required" name="name"></br>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" required="required" name="email"></br>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required="required" name="password"></br>
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <input type="text" class="form-control" required="required" name="roles"></br>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" required="required" name="image"></br>
                </div>
                <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
            </form>
            </br></br>        
        </div>
    </div>
</div>
</blockquote>
</div>
</div>

@endsection