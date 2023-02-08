$(document).ready(function () {

    $( "#target1" ).on("click", function() {
        currentSlide(1);
      });

    $( "#target2" ).on("click", function() {
        currentSlide(2);
      });
    $( "#target3" ).on("click", function() {
        currentSlide(3);
      });

let slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  console.log("cs");
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides"); 
  let dots = document.getElementsByClassName("dot");
  console.log(slides.length);
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}





});

