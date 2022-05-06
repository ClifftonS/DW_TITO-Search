<table class= "table">
    <tr>
        <th>ID Cabang</th>
        <th>Nama Cabang</th>
        <th>ID Product</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Total Penjualan</th>
        <th>Total Uang Diterima</th>
    </tr>
    @foreach ($datasend as $item3)
    <tr>
        <td>{{$item3->id_cabang}}</td>
        <td>{{$item3->nama_cabang}}</td>
        <td>{{$item3->product_id}}</td>
        <td>{{$item3->product_name}}</td>
        <td>{{$item3->price}}</td>
        <td>{{$item3->Total_Penjualan}}</td>
        <td>{{$item3->Total_Uang_Diterima}}</td>
    </tr>
    @endforeach
</table>
