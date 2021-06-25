@extends('layout.master')
@section('content')
<div class="container">
    <br><br>
    <div class="row">

        <!-- Articles -->
        <div class="box">
            <blockquote>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <br><br>
                            <h3>List Of All Kategori</h3>
                        </div>
                        <a href="kategoris/add" class="btn btn-primary">Add Data</a>
                        </br>
                        <div class="card body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>genre</th>
                                        <th>Gambar</th>
                                        <th>trailer</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach($kategoris as $a)
                                    <tr>
                                        <td>{{ i++ }}</td>
                                        <td>{{$a->title}}</td>
                                        <td>{{$a->genre}}</td>
                                        <td><img src="{{ asset('/images/'.$a->featured_image) }}"></td>
                                        <td>{{$a->featured_trailer}}</td>
                                        <td>{{$a->created_at}}</td>
                                        <td>

                                            <a href="kategoris/edit/{{$a->id}}" class="btn btn-warning">Edit</a>
                                            <a href="kategoris/delete/{{$a->id}}" class="badge badge-danger">hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <a href="/kategoris/cetak_pdf" class="btn btn-warning">Cetak PDF</a>
                            </table>
                        </div>
                        </br>
                    </div>
            </blockquote>





            <!-- komentar -->

            <blockquote>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <br><br>
                            <h3>List Of All Komentar</h3>
                        </div>
                        <a href="komentar/add" class="btn btn-primary">Add Data</a>
                        </br>
                        <a href="/komentar/cetak_pdf" class="btn btn-warning">Cetak PDF</a>
                        <div class="card body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>name</th>
                                        <th>content</th>
                                        <th>Gambar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach($komentars as $a)
                                    <tr>
                                        <td>{{ i++ }}</td>
                                        <td>{{$a->name}}</td>
                                        <td>{{$a->content}}</td>
                                        <td><img src="{{ asset('/images/'.$a->featured_image) }}"></td>
                                        <td>{{$a->created_at}}</td>
                                        <td>
                                            <a href="komentar/edit/{{$a->id}}" class="btn btn-warning">Edit</a>
                                            <a href="komentar/delete/{{$a->id}}" class="badge badge-danger">hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </blockquote>



            <!-- user -->
            <blockquote>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <br><br>
                            <h3>List Of All Users</h3>
                        </div>
                        <a href="user/add" class="btn btn-primary">Add Data</a>
                        </br>
                        <a href="/user/cetak_pdf" class="btn btn-warning">Cetak PDF</a>
                        <div class="card body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>name</th>
                                        <th>id_game</th>
                                        <th>email</th>
                                        <th>image</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach($users as $a)
                                    <tr>
                                        <td>{{ i++ }}</td>
                                        <td>{{$a->name}}</td>
                                        <td>{{$a->id_game}}</td>
                                        <td>{{$a->email}}</td>
                                        <td><img src="{{ asset('/images/'.$a->image) }}"></td>
                                        <td>{{$a->created_at}}</td>
                                        <td>
                                            <a href="user/edit/{{$a->id}}" class="btn btn-warning">Edit</a>
                                            <a href="user/delete/{{$a->id}}" class="badge badge-danger">hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
            </blockquote>
        </div>
    </div>

    @endsection