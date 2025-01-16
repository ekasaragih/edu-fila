@extends('layout')
@include('utils.layout.navbar')

@section('content')

<div style="margin-top: 5em;">

    <div class="container py-2">
        <h2 class="display-5 fw-bold text-dark">Promotive</h2>
    </div>

    <main>
        <!-- Carousel Structure with YouTube Iframes -->
        <div class="container text-white rounded-4 p-4" style="background-color: #001f4d;">
            <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Carousel items -->
                    <div class="carousel-item active">
                        <div class="ratio ratio-16x9" style="max-width: 1000px; margin: auto;">
                            <iframe src="https://www.youtube.com/embed/zrBWDtVep7o" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="ratio ratio-16x9" style="max-width: 1000px; margin: auto;">
                            <iframe src="https://www.youtube.com/embed/LldZEXBSdQI" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="ratio ratio-16x9" style="max-width: 1000px; margin: auto;">
                            <iframe src="https://www.youtube.com/embed/ZH96goFnKEY" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="ratio ratio-16x9" style="max-width: 1000px; margin: auto;">
                            <iframe src="https://www.youtube.com/embed/ca7_j5PUZW4" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- Arrow buttons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection