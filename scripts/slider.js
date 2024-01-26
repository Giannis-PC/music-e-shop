let index = 1;
slideTo(index);

function changeSlide(x) {
  slideTo(index += x);
}

function slideTo(x) {
  let slides = document.getElementsByClassName("mySlides");

  if (x > slides.length) {
    index = 1;
  }  

  if (x < 1) {
    index = slides.length;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  slides[index-1].style.display = "block"; 

  /*console.log("x: " + x); 
  console.log("index: " + index);
  console.log("slides.length: " + slides.length);
  console.log("slides[0]-->" + slides[0].style.display);
  console.log("slides[1]-->" + slides[1].style.display);
  console.log("slides[2]-->" + slides[2].style.display);
  console.log("---------------------------");*/
}



