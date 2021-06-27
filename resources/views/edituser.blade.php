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
            <h3>List Of All Users</h3>
            </div>
            </br></br>
            <form action="/user/update/{{$user->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$user->id}}"></br>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required="required" name="passsword" value="{{$user->password}}"></br>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}"></br>
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <input type="text" class="form-control" required="required" name="roles" value="{{$user->roles}}"></br>
                </div>
                <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
            </form>
            </br></br>        
        </div>
    </div>
    </blockquote>
</div>
</div>

@endsection