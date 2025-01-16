@extends('layout')

@section('content')

<section class="hero bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="display-3 mb-4">Selamat datang di Edu Fila</h1>
        <p class="lead mb-4">Edukasi tentang ...</p>
        <a href="{{ route('promotive') }}" class="btn btn-primary btn-lg">Lebih Lanjut</a>
    </div>
</section>


@include('utils.layout.navbar')

<section id="features" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Our Services</h2>
        <div class="row">

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Promotive">
                    <div class="card-body">
                        <h5 class="card-title">Promotive</h5>
                        <p class="card-text">Provide educational programs that empower individuals with knowledge
                            and skills.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Preventive">
                    <div class="card-body">
                        <h5 class="card-title">Preventive</h5>
                        <p class="card-text">Prevent educational gaps by addressing issues before they affect
                            performance.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Diagnostic">
                    <div class="card-body">
                        <h5 class="card-title">Diagnostic</h5>
                        <p class="card-text">Diagnose and analyze educational needs to create tailored solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-light rounded">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Monitoring">
                    <div class="card-body">
                        <h5 class="card-title">Monitoring</h5>
                        <p class="card-text">Track and evaluate educational progress to ensure continued
                            improvement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta text-center py-5 bg-primary text-white">
    <div class="container">
        <h2 class="display-4 mb-4">Start Your Educational Journey Today!</h2>
        <p class="lead mb-4">Join us in making a difference in education.</p>
        <a href="#" class="btn btn-light btn-lg">Get Started</a>
    </div>
</section>

@include('utils.layout.footer')

@endsection