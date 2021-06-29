<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        table tr td{padding:10px 14px; background-color:rgba(84, 84, 92, 0.253); color:rgb(0, 0, 0);},
        table tr th{padding:10px 14px; background-color:#007bff; color:rgb(0, 0, 0);}
        font-size: 9pt;
    }
    </style>
    <center>
        <h5>Laporan Artikel</h4>
    </center>
    <table class='table table-bordered'>
    <thead>
                <tr>
                    <th>No</th>
                    <th>title</th>
                    <th>genre</th>
                    <th>Gambar</th>
                </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($kategoris as $a)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$a->title}}</td>
                <td>{{$a->genre}}</td>
                <td><img width="300px" src="{{ public_path('storage/'.$a->featured_image)}}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>