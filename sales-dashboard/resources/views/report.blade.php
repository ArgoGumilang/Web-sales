<!DOCTYPE html>
<html>
<head>
    <title>Semua Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Daftar Semua Laporan FU</h2>

    @if ($data->count())
        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Sales</th>
                    <th>STO</th>
                    <th>Nama POI</th>
                    <th>Alamat</th>
                    <th>Kegiatan</th>
                    <th>Feedback</th>
                    <th>Provider</th>
                    <th>Tanggal</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i => $d)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $d['nama_sales'] ?? '-' }}</td>
                        <td>{{ $d['sto'] ?? '-' }}</td>
                        <td>{{ $d['poi_name'] ?? '-' }}</td>
                        <td>{{ $d['address'] ?? '-' }}</td>
                        <td>{{ $d['kegiatan'] ?? '-' }}</td>
                        <td>{{ $d['feedback'] ?? '-' }}</td>
                        <td>{{ $d['provider'] ?? '-' }} - {{ $d['provider_detail'] ?? '-' }}</td>
                        <td>{{ \Carbon\Carbon::parse($d['timestamp'])->format('d-m-Y H:i') }}</td>
                        <td>
                            @if (!empty($d['photo_url']))
                                <a href="{{ asset($d['photo_url']) }}" target="_blank">
                                    <img src="{{ asset($d['photo_url']) }}" class="img-thumbnail" width="100">
                                </a>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning">Tidak ada data ditemukan.</div>
    @endif
</div>
</body>
</html>
