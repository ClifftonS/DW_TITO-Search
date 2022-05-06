<table class= "table">
    <tr>
        <th>ID Cabang</th>
        <th>Nama Cabang</th>
        <th>ID Customer</th>
        <th>Nama Customer</th>
        <th>Jumlah Kunjungan</th>
    </tr>
    @foreach ($datasend as $item4)
    <tr>
        <td>{{$item4->id_cabang}}</td>
        <td>{{$item4->nama_cabang}}</td>
        <td>{{$item4->customer_id}}</td>
        <td>{{$item4->customer_name}}</td>
        <td>{{$item4->Jumlah_Kunjungan}}</td>
    </tr>
    @endforeach
</table>
