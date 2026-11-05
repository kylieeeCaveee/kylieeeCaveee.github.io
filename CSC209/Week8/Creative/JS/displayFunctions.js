function displayValks(){
    document.getElementById("valksSlideShow").style.display="block";
    document.getElementById("dreamSlideShow").style.display="none";
    showSlides(1,1); 
}
function displayDream(){
    document.getElementById("valksSlideShow").style.display="none";
    document.getElementById("dreamSlideShow").style.display="block";
    showSlides (1,2); 
}
let slideIndex = [1,1];


// Next/previous controls
function plusSlides(n, slideshowNumber) {
  showSlides(slideIndex[slideshowNumber -1] += n, slideshowNumber);
}

// Thumbnail image controls
function currentSlide(n, slideshowNumber) {
  showSlides(slideIndex[slideshowNumber-1]=n, slideshowNumber);
}

function showSlides(n, slideshowNumber) {
  let i;
  let slideshow;
  if(slideshowNumber==1){
    slideshow=document.getElementById("valksSlideShow");
  }else {
    slideshow= document.getElementById("dreamSlideShow");
  }
  let slides = slideshow.getElementsByClassName("mySlides");
   
  if(n>slides.length){
    slideIndex[slideshowNumber-1]=1; 
  }
  if(n<1){
    slideIndex[slideshowNumber-1]=slides.length;
  }
  for(i=0; i<slides.length; i++){
    slides[i].style.display="none";
  }

  if(slides.length>0){
    slides[slideIndex[slideshowNumber-1]-1].style.display="block"; 
  }
//   let dots = document.getElementsByClassName("dot");
  
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
  
//   dots[slideIndex-1].className += " active";
}