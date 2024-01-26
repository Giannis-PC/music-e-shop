let my_slides = document.getElementsByClassName("mySlides");


/*for (let i=0; i<slides_length; i++) {
    my_slides[i+1].style.display = "none";
}*/

/*current slide always the first*/
function my_function() {

    for (var j=0; j<my_slides.length; j++) {
        if (my_slides[j].style.display == 'none') {
            var index = j;
        }
    }
    console.log(index);
}
