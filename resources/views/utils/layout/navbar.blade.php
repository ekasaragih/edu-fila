<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5 py-3">
    <div class="container-fluid">
        <!-- Brand Logo -->
        <a class="navbar-brand fs-3 fw-bold" href="/" style="font-size: 1.75rem;">Edu Fila</a>
        <!-- Toggle Button for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Promotive Link -->
                <li class="nav-item">
                    <a class="btn nav-link fs-5 {{ Route::currentRouteName() == 'promotive' ? 'active' : '' }}"
                        href="{{ route('promotive') }}">
                        <i class="fas fa-users"></i> Promotive
                    </a>
                </li>
                <!-- Preventive Link -->
                <li class="nav-item">
                    <a class="btn nav-link fs-5 {{ Route::currentRouteName() == 'preventive' ? 'active' : '' }}"
                        href="{{ route('preventive') }}">
                        <i class="fas fa-shield-alt"></i> Preventive
                    </a>
                </li>
                <!-- Diagnostic Link -->
                <li class="nav-item">
                    <a class="btn nav-link fs-5 {{ Route::currentRouteName() == 'diagnostic' ? 'active' : '' }}"
                        href="{{ route('diagnostic') }}">
                        <i class="fas fa-stethoscope"></i> Diagnostic
                    </a>
                </li>
                <!-- Monitoring Link -->
                <li class="nav-item">
                    <a class="btn nav-link fs-5 {{ Route::currentRouteName() == 'monitoring' ? 'active' : '' }}"
                        href="{{ route('monitoring') }}">
                        <i class="fas fa-chart-line"></i> Monitoring
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>