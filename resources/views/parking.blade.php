<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Parkir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Sistem Parkir</h1>
        
        <!-- Form Input Kendaraan Masuk -->
        <h3>Kendaraan Masuk</h3>
        <form method="POST" action="{{ route('parking.entered') }}">
            @csrf
            <div class="mb-3">
                <label for="licenseNumber" class="form-label">Nomor Polisi</label>
                <input type="text" class="form-control" id="licenseNumber" name="licenseNumber" required>
            </div>
            <button type="submit" class="btn btn-primary">Masukkan Kendaraan</button>
        </form>

        <!-- Form Input Kendaraan Keluar -->
        <h3 class="mt-5">Kendaraan Keluar</h3>
        <form method="POST" action="{{ route('parking.exited') }}">
            @csrf
            <div class="mb-3">
                <label for="uniqueCode" class="form-label">Kode Unik</label>
                <input type="text" class="form-control" id="uniqueCode" name="uniqueCode" required>
            </div>
            <button type="submit" class="btn btn-danger">Keluarkan Kendaraan</button>
        </form>

        <!-- Laporan -->
        <h3 class="mt-5">Laporan Parkir</h3>
        <form method="GET" action="{{ route('parking.report') }}">
            <div class="row">
                <div class="col">
                    <label for="startDate" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="startDate" name="startDate" required>
                </div>
                <div class="col">
                    <label for="endDate" class="form-label">Tanggal Selesai</label>
                    <input type="date" class="form-control" id="endDate" name="endDate" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-3">Lihat Laporan</button>
        </form>
    </div>
</body>
</html>
