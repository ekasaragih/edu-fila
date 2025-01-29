@extends('layout')

@section('content')

<section class="hero bg-dark text-white text-center py-5 mt-5">
    <div class="container">
        <h1 class="display-3 mb-4">Selamat Datang di <br /> Edu Fila</h1>
        <p class="lead mb-4">Edukasi tentang pembelajaran untuk masa depan yang lebih baik.</p>
        <div class="d-flex justify-content-center align-items-center mt-4 gap-3">
            <a href="{{ route('promotive') }}" class="btn btn-primary px-2 py-2" style="font-size: 14px;">
                Pelajari Lebih Lanjut
            </a>
            <a href="{{ route('admin.login') }}" class="btn btn-outline-warning px-2 py-2" style="font-size: 14px;">
                Masuk sebagai Admin
            </a>
        </div>
    </div>
</section>

@include('utils.layout.navbar')

<section id="features" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Layanan Kami</h2>
        <div class="row">

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://i.pinimg.com/736x/dd/12/5a/dd125aae5bd7df5d2db2b5e959d38f89.jpg"
                        class="card-img-top" style="height: 300px !important; object-fit: cover;" alt="Promotive">
                    <div class="card-body">
                        <h5 class="card-title">Promotif</h5>
                        <p class="card-text">Tingkatkan kesadaran Anda dengan video edukasi lengkap tentang kaki gajah,
                            termasuk penyebab, gejala, hingga cara pencegahannya.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://i.pinimg.com/474x/2a/4f/9b/2a4f9b99d25169dd1e8c48605aa0a3da.jpg"
                        class="card-img-top" style="height: 300px !important; object-fit: cover;" alt="Preventive">
                    <div class="card-body">
                        <h5 class="card-title">Preventif</h5>
                        <p class="card-text">Akses booklet dan leaflet informatif tentang kaki gajah yang dirancang
                            untuk membantu pencegahan sejak dini.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://i.pinimg.com/474x/0e/4a/11/0e4a111c994200dc7b68d4c210fd659b.jpg"
                        class="card-img-top" style="height: 300px !important; object-fit: cover;" alt="Diagnostic">
                    <div class="card-body">
                        <h5 class="card-title">Diagnostik</h5>
                        <p class="card-text">Gunakan form digital kami untuk membantu mendiagnosa dan melihat hasil
                            serta potensi kaki gajah
                            secara mudah dan cepat.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://i.pinimg.com/474x/dc/2c/d2/dc2cd2804101f957dba0aeed3d277c5c.jpg"
                        class="card-img-top" style="height: 300px !important; object-fit: cover;" alt="Monitoring">
                    <div class="card-body">
                        <h5 class="card-title">Monitoring</h5>
                        <p class="card-text">Sistem pemantauan khusus untuk admin guna memonitor perkembangan pasien
                            dengan gejala atau riwayat kaki gajah.</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta text-center py-5 bg-primary text-white">
    <div class="container">
        <h2 class="display-4 mb-4">Mulai Perjalanan Pendidikan Anda Hari Ini!</h2>
        <p class="lead mb-4">Bergabunglah bersama kami untuk membuat perubahan dalam pendidikan.</p>
        <a href="{{ route('promotive') }}" class="btn btn-light btn-lg">Mulai Sekarang</a>
    </div>
</section>

@include('utils.layout.footer')

@endsection