<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Edu Fila</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'promotive' ? 'active' : '' }}"
                        href="{{ route('promotive') }}">
                        <i class="fas fa-users"></i> Promotive
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'preventive' ? 'active' : '' }}"
                        href="{{ route('preventive') }}">
                        <i class="fas fa-shield-alt"></i> Preventive
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'diagnostic' ? 'active' : '' }}"
                        href="{{ route('diagnostic') }}">
                        <i class="fas fa-stethoscope"></i> Diagnostic
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'monitoring' ? 'active' : '' }}"
                        href="{{ route('monitoring') }}">
                        <i class="fas fa-chart-line"></i> Monitoring
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>