document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".box-img");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    if (!images.length || !prevBtn || !nextBtn) {
        console.error("Elementos do carousel não foram encontrados. Verifique o HTML.");
        return;
    }

    let currentIndex = 0;
    const intervalTime = 3000;
    let autoSlide = setInterval(nextImage, intervalTime);
    let timeoutPause = null;

    function showImage(index) {
        images.forEach(img => img.classList.remove("active"));
        images[index].classList.add("active");
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    }

    nextBtn.addEventListener("click", () => {
        nextImage();
        pauseLoop(10);
    });

    prevBtn.addEventListener("click", () => {
        prevImage();
        pauseLoop(10);
    });

    function pauseLoop(seconds) {
        clearInterval(autoSlide);
        clearTimeout(timeoutPause);

        timeoutPause = setTimeout(() => {
            autoSlide = setInterval(nextImage, intervalTime);
        }, seconds * 1000);
    }
});