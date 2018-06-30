var slideIndex = 1;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slides");
    if (slides.length < 2) return;
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
    
    slideIndex++;
    if (slideIndex == slides.length) {
        slideIndex = 0;
    }    
}

setInterval(showSlides, 20000);
