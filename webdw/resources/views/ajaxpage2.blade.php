<table class= "table">
    <tr>
        <th>ID Customer</th>
        <th>Nama Customer</th>
        <th>Total Belanja</th>
        <th>Total Kunjungan</th>
      </tr>
      @foreach ($datasend as $item2)
      <tr>
        <td>{{$item2->customer_id}}</td>
        <td>{{$item2->customer_name}}</td>
        <td>{{$item2->Total_Belanja}}</td>
        <td>{{$item2->Total_Kunjungan}}</td>
      </tr>
      @endforeach
</table>
