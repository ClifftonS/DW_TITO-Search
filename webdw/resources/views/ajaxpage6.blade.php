<table class= "table">
    <tr>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah Customer Yang Pernah Beli</th>
    </tr>
    @foreach ($datasend as $item6)
    <tr>
        <td>{{$item6->product_id}}</td>
        <td>{{$item6->product_name}}</td>
        <td>{{$item6->price}}</td>
        <td>{{$item6->Jumlah_Customer}}</td>
    </tr>
    @endforeach
</table>
