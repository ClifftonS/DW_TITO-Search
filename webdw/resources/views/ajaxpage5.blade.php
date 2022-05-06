<table class= "table">
    <tr>
        <th>ID Cabang</th>
        <th>Nama Cabang</th>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah Terjual</th>
    </tr>
    @foreach ($datasend as $item5)
    <tr>
        <td>{{$item5->id_cabang}}</td>
        <td>{{$item5->nama_cabang}}</td>
        <td>{{$item5->product_id}}</td>
        <td>{{$item5->product_name}}</td>
        <td>{{$item5->price}}</td>
        <td>{{$item5->Jumlah_Terjual}}</td>
    </tr>
    @endforeach
</table>
