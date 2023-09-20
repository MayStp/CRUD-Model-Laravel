<div class="container">
    <h4>Update Data</h4>
    <form method="post" action="{{route('update', $buku->id)}}">
        @csrf
        <div>Judul <input type="text" name="judul" value="{{$buku->judul}}"></div>
        <div>Penulis <input type="text" name="penulis" value="{{$buku->penulis}}"></div>
        <div>Harga <input type="text" name="harga" value="{{$buku->harga}}"></div>
        <div>Tgl.terbit <input type="date" name="terbit" value="{{$buku->tgl_terbit}}"></div>
        <div><button type="submit">simpan</button>
        <a href="/buku">batal</a></div>
    </form>
</div>
