<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu Fila - Landing Page</title>
    <!-- Add Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> <!-- Link to custom CSS -->
</head>

<body>

    <!-- Hero Section -->
    <section class="hero bg-dark text-white text-center py-5">
        <div class="container">
            <h1 class="display-3 mb-4">Selamat datang di Edu Fila</h1>
            <p class="lead mb-4">Edukasi tentang ...</p>
            <a href="" class="btn btn-primary btn-lg">Lebih Lanjut</a>
        </div>
    </section>

    <!-- Navbar Section -->
    @include('utils.layout.navbar')

    <!-- Features Section -->
    <section id="features" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center text-primary mb-4">Our Services</h2>
            <div class="row">
                <!-- Promotive Feature -->
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
                <!-- Preventive Feature -->
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
                <!-- Diagnostic Feature -->
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
                <!-- Monitoring Feature -->
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

    <!-- Call to Action Section -->
    <section class="cta text-center py-5 bg-primary text-white">
        <div class="container">
            <h2 class="display-4 mb-4">Start Your Educational Journey Today!</h2>
            <p class="lead mb-4">Join us in making a difference in education.</p>
            <a href="#" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </section>

    <!-- Footer Section -->
    @include('utils.layout.footer')

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>