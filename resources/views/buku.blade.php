
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <table border="1">
         <thead>
            <tr>
                <th>No</th>
                <th>id</th>
                <th>judul</th>
                <th>penulis</th>
                <th>harga</th>
                <th>tanggal terbit</th>
                <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach($data_buku as $buku)
            <tr>
                <td>{{++$no}}</td>
                <td>{{$buku->id}}</td>
                <td>{{$buku->judul}}</td>
                <td>{{$buku->penulis}}</td>
                <td>{{$buku->harga}}</td>
                <td>{{$buku->tgl_terbit}}</td>
                <td>
                    <form action="{{route('destroy', $buku->id)}}" method="post">
                        @csrf
                        <button onclick="return confirm('Yakin hapus data?')">HAPUS</button>
                    </form>

                    <!-- <form action="{{route('update', $buku->id)}}" method="post"> -->
                        <a href="{{route('edit', $buku->id)}}">
                            @csrf
                            <button>Update</button>
                        </a>
                    <!-- </form> -->
                </td>
            </tr>
            @endforeach
         </tbody>
    </table>
    <h1>Harga Total: Rp. {{$totharga}} ,-</h1>
    <h1>{{$jumldata}}</h1>
</div>

    <p align="center">
        <a href="{{route('create')}}">Tambah Buku</a>
    </p>
</body>
</html>