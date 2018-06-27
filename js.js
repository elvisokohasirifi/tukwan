var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("myslides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
    
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 0;
    }    
}

while (1==1){
    setTimeout(showSlides, 2000);
}
