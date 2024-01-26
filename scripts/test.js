let current_slide = 0;
slidetTo(current_slide);

function slidetTo(current_slide) {
    let slides = document.getElementsByClassName("mySlides");

    if (current_slide > slides.length - 1) {
        current_slide = 0;
    }

    if (current_slide < 0) {
        current_slide = slides.length - 1;
    }

    for (let i=0; i<slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[current_slide].style.display = "block";
    console.log(current_slide);
}

function nextSlide() {
    current_slide = current_slide + 1;
    slidetTo(current_slide);
}

function prevSlide() {
    current_slide = current_slide - 1;
    slidetTo(current_slide);
}