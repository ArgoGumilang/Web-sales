<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Report</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-4">
    <h2 class="mb-4">Semua Data Report</h2>

    @if($data->isEmpty())
      <div class="alert alert-warning">Tidak ada data tersedia.</div>
    @else
      @foreach ($data as $item)
        <table class="table table-bordered mb-5">
          <tr><th>Nama Sales</th><td>{{ $item->nama_sales }}</td></tr>
          <tr><th>Telda</th><td>{{ $item->telda }}</td></tr>
          <tr><th>STO</th><td>{{ $item->sto }}</td></tr>
          <tr><th>Jenis Kegiatan</th><td>{{ $item->kegiatan }}</td></tr>
          <tr><th>Nama POI</th><td>{{ $item->poi_name }}</td></tr>
          <tr><th>Alamat</th><td>{{ $item->address }}</td></tr>
          <tr><th>Nama PIC</th><td>{{ $item->contact_name }}</td></tr>
          <tr><th>Jabatan PIC</th><td>{{ $item->contact_position }}</td></tr>
          <tr><th>Telepon PIC</th><td>{{ $item->contact_phone }}</td></tr>
          <tr><th>Provider</th><td>{{ $item->provider }}</td></tr>
          <tr><th>Feedback</th><td>{{ $item->feedback }}</td></tr>
          <tr><th>Feedback Detail</th><td>{{ $item->feedback_detail }}</td></tr>
          <tr><th>Hasil FU</th><td>{{ $item->hasil_fu }}</td></tr>
          <tr><th>Biaya</th><td>{{ $item->cost }}</td></tr>
          <tr><th>Detail Info</th><td>{{ $item->detail_info }}</td></tr>
          <tr><th>Foto</th><td><img src="{{ $item->photo_url }}" alt="Foto" width="100"></td></tr>
          <tr><th>Tanggal</th><td>{{ $item->timestamp }}</td></tr>
          <tr><th>Visit ke</th><td>{{ $item->visit_ke }}</td></tr>
        </table>
      @endforeach
    @endif
  </div>
</body>
</html>
