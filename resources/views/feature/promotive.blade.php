@extends('layout')
@include('utils.layout.navbar')

@section('content')

<div style="margin-top: 5em; margin-left: 15px; margin-right: 15px;">

    <div class="container py-2">
        <h2 class="display-5 fw-bold text-dark">Promotif</h2>
    </div>

    <main>

        <!-- Carousel Structure with YouTube Iframes -->
        <div class="container text-white rounded-4 p-4" style="background-color: #001f4d;">
            <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Carousel items -->
                    <div class="carousel-item active">
                        <div class="ratio ratio-16x9" style="max-width: 1000px; margin: auto;">
                            <video controls>
                                <source src="{{ asset('asset/materi.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="mt-3 text-center">
                            <p>Filariasis, atau kaki gajah, disebabkan oleh cacing filaria dan ditularkan melalui
                                nyamuk, menyebabkan pembengkakan ekstrem.
                            </p>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </main>
    <!-- Button Section: Display based on admin status -->
    <div class="container mb-4 mt-4 text-left">
        @if(Auth::guard('admin')->check())
        <!-- Check if admin is logged in -->
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger px-4 py-2" style="font-size: 14px;">
                Keluar dari Akun Admin
            </button>
        </form>
        @else
        <a href="{{ route('admin.login') }}" class="btn btn-outline-warning px-4 py-2" style="font-size: 14px;">
            Masuk sebagai Admin
        </a>
        @endif
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection