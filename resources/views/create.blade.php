<div class="container">
    <h4>Tambah Data</h4>
    <form method="post" action="{{route('store')}}">
        @csrf
        <div>Judul <input type="text" name="judul"></div>
        <div>Penulis <input type="text" name="penulis"></div>
        <div>Harga <input type="text" name="harga"></div>
        <div>Tgl.terbit <input type="date" name="terbit"></div>
        <div><button type="submit">simpan</button>
        <a href="/buku">batan</a></div>
    </form>
</div>
