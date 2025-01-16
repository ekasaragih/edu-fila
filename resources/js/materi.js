document.addEventListener("DOMContentLoaded", function () {
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");
    const carousel = document.querySelector("#video-carousel .flex");
    const slides = carousel.children;
    const slideWidth = slides[0].offsetWidth;
    let currentIndex = 0;

    function showSlide(index) {
        const offset = -index * slideWidth;
        carousel.style.transform = `translateX(${offset}px)`;
    }

    prevBtn.addEventListener("click", function () {
        currentIndex = Math.max(currentIndex - 1, 0);
        showSlide(currentIndex);
    });

    nextBtn.addEventListener("click", function () {
        currentIndex = Math.min(currentIndex + 1, slides.length - 1);
        showSlide(currentIndex);
    });
});
