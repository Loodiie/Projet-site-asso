var slideIndexPrincipal = [1];
var slideIndexSecondaire = [1, 1, 1, 1, 1, 1];
showSlides(slideIndexPrincipal[0], 'slide_images_principal');
showSlides(slideIndexSecondaire[0], 'slide_images_secondaire_0');
showSlides(slideIndexSecondaire[1], 'slide_images_secondaire_1');
showSlides(slideIndexSecondaire[2], 'slide_images_secondaire_2');
showSlides(slideIndexSecondaire[3], 'slide_images_secondaire_3');
showSlides(slideIndexSecondaire[4], 'slide_images_secondaire_4');
showSlides(slideIndexSecondaire[5], 'slide_images_secondaire_5');

function plusSlides(n, carrousel, tableau_index) {
  var slides = document.getElementsByClassName(carrousel);
  var tmp = carrousel == 'slide_images_principal' ? slideIndexPrincipal[tableau_index] : slideIndexSecondaire[tableau_index];

  if (tmp + n > slides.length) {
    tmp = 1;
  }
  else if (tmp + n < 1) {
    tmp = slides.length;
  }
  else {
    tmp += n;
  }


  if ( carrousel == 'slide_images_principal'){
    slideIndexPrincipal[tableau_index] = tmp
    showSlides(slideIndexPrincipal[tableau_index], carrousel);
  }
  else {
    slideIndexSecondaire[tableau_index] = tmp
    showSlides(slideIndexSecondaire[tableau_index], carrousel);
  }
}

function showSlides(index, carrousel) {
  var i;
  var slides = document.getElementsByClassName(carrousel);

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[index-1].style.display = "flex";
}