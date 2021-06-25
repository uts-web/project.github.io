<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        table tr td{padding:2px 4px; background-color:rgba(84, 84, 92, 0.253); color:rgb(0, 0, 0);},
        table tr th{padding:2px 4px; background-color:#007bff; color:rgb(0, 0, 0);}
        font-size: 9pt;
    }
    </style>
    <center>
        <h5>Laporan Users</h4>
    </center>
    <table class='table table-bordered'>
    <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>profil</th>
                    <th>Email</th>
                    <th>Roles</th>
                </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($user as $a)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$a->name}}</td>
                <td><img width="200px" src="{{ public_path('storage/'.$a->image)}}"></td>
                <td>{{$a->email}}</td>
                <td>{{$a->roles}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>