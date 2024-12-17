@extends('layout.master')

@section('content')

<div class="position-relative">
    <img src="{{ asset('assets/parkings.jpeg') }}" class="img-fluid" alt="" style="filter:brightness(75%); width: 100%;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h5 class="titletop text-white fw-bold" style="text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3);">
            Ilham Parking Station
        </h5>
        <p class="descript text-white">Ilham Parking Station adalah aplikasi inovatif yang mempermudah pengguna dalam menemukan dan memesan tempat parkir secara praktis dan efisien.</p>
    </div>
</div>
<div class="container mt-5">
    <!-- Slider with Cards -->
    <div class="center">
        <div class="card slick-slide" style="width: 18rem;">
            <img src="assets/parkiran.jpg" class="card-img-top" alt="Image 1">
            <div class="card-body">
                <h5 class="card-title">LAHAN BARU!</h5>
                <p class="card-text">Pembukaan parkiran di lahan baru mayes dogdog</p>
                <a href="">read more></a>
            </div>
        </div>
        <div class="card slick-slide" style="width: 18rem;">
            <img src="assets/toppark.jpeg" class="card-img-top" alt="Image 2">
            <div class="card-body">
                <h5 class="card-title">Penataan Cahaya Laser</h5>
                <p class="card-text">Perubahan tatanan untuk cahaya laser parkiran</p>
                <a href="">read more></a>
            </div>
        </div>
        <div class="card slick-slide" style="width: 18rem;">
            <img src="assets/park.jpeg" class="card-img-top" alt="Image 3">
            <div class="card-body">
                <h5 class="card-title">Diskon 70%</h5>
                <p class="card-text">Diskon bagi pengendara yang memiliki tanggal lahir dibulan desember.</p>
                <a href="">read more></a>
            </div>
        </div>
        <div class="card slick-slide" style="width: 18rem;">
            <img src="assets/parkiran.jpg" class="card-img-top" alt="Image 1">
            <div class="card-body">
                <h5 class="card-title">LAHAN BARU!</h5>
                <p class="card-text">Pembukaan parkiran di lahan baru mayes dogdog</p>
                <a href="">read more></a>
            </div>
        </div>
        <div class="card slick-slide" style="width: 18rem;">
            <img src="assets/toppark.jpeg" class="card-img-top" alt="Image 2">
            <div class="card-body">
                <h5 class="card-title">Penataan Cahaya Laser</h5>
                <p class="card-text">Perubahan tatanan untuk cahaya laser parkiran</p>
                <a href="">read more></a>
            </div>
        </div>
        <div class="card slick-slide" style="width: 18rem;">
            <img src="assets/park.jpeg" class="card-img-top" alt="Image 3">
            <div class="card-body">
                <h5 class="card-title">Diskon 70%</h5>
                <p class="card-text">Diskon bagi pengendara yang memiliki tanggal lahir dibulan desember.</p>
                <a href="">read more></a>
            </div>
        </div>
    </div>

    <!-- Judul -->
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
@endsection
