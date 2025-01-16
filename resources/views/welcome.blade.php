@extends('layout')

@section('content')

<section class="hero bg-dark text-white text-center py-5 mt-5">
    <div class="container">
        <h1 class="display-3 mb-4">Selamat Datang di Edu Fila</h1>
        <p class="lead mb-4">Edukasi tentang pembelajaran untuk masa depan yang lebih baik.</p>
        <a href="{{ route('promotive') }}" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
    </div>
</section>

@include('utils.layout.navbar')

<section id="features" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Layanan Kami</h2>
        <div class="row">

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Promotive">
                    <div class="card-body">
                        <h5 class="card-title">Promotif</h5>
                        <p class="card-text">Menyediakan program edukasi yang memberdayakan individu dengan
                            pengetahuan dan keterampilan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Preventive">
                    <div class="card-body">
                        <h5 class="card-title">Preventif</h5>
                        <p class="card-text">Mencegah kesenjangan pendidikan dengan mengatasi masalah sebelum
                            memengaruhi performa.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Diagnostic">
                    <div class="card-body">
                        <h5 class="card-title">Diagnostik</h5>
                        <p class="card-text">Mendiagnosis dan menganalisis kebutuhan pendidikan untuk menciptakan
                            solusi yang sesuai.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Monitoring">
                    <div class="card-body">
                        <h5 class="card-title">Monitoring</h5>
                        <p class="card-text">Memantau dan mengevaluasi kemajuan pendidikan untuk memastikan
                            perbaikan yang berkelanjutan.</p>
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
        <a href="#" class="btn btn-light btn-lg">Mulai Sekarang</a>
    </div>
</section>

@include('utils.layout.footer')

@endsection