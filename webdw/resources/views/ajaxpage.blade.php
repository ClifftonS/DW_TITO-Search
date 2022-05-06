<table class="table">
    <tr>
          <th>ID Cabang</th>
          <th>Cabang</th>
          <th>Total Omset</th>
          <th>Total Kunjungan</th>
    </tr>
    @foreach ($datasend as $item)
        <tr>
          <td>{{$item->id_cabang}}</td>
          <td>{{$item->nama_cabang}}</td>
          <td>{{$item->Total_Omset}}</td>
          <td>{{$item->Total_Kunjungan}}</td>
        </tr>
    @endforeach
</table>
