// Définition des tableaux pour stocker les index des slides principale et secondaire
var slideIndexPrincipal = [1];
var slideIndexSecondaire = [1, 1, 1, 1, 1, 1];

// Affichage des slides principales et secondaires
showSlides(slideIndexPrincipal[0], 'slide_images_principal');
showSlides(slideIndexSecondaire[0], 'slide_images_secondaire_0');
showSlides(slideIndexSecondaire[1], 'slide_images_secondaire_1');
showSlides(slideIndexSecondaire[2], 'slide_images_secondaire_2');
showSlides(slideIndexSecondaire[3], 'slide_images_secondaire_3');
showSlides(slideIndexSecondaire[4], 'slide_images_secondaire_4');
showSlides(slideIndexSecondaire[5], 'slide_images_secondaire_5');

// Fonction pour changer de slide en avant ou en arrière
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

// Mise à jour de l'index dans le tableau en fonction du carrousel
if ( carrousel == 'slide_images_principal'){
slideIndexPrincipal[tableau_index] = tmp
showSlides(slideIndexPrincipal[tableau_index], carrousel);
}
else {
slideIndexSecondaire[tableau_index] = tmp
showSlides(slideIndexSecondaire[tableau_index], carrousel);
}
}

// Fonction pour afficher une slide en particulier
function showSlides(index, carrousel) {
var i;
var slides = document.getElementsByClassName(carrousel);

// On cache toutes les slides
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}

// On affiche la slide demandée
slides[index-1].style.display = "flex";
}

// Permet d'afficher seulement les carroussel demandé en fonction des data-tag mit. 

const contentBlocks = document.querySelectorAll('.carrousel_principal, .carrousel_secondaire');


document.querySelectorAll('.style_filtre').forEach(button => {
  button.addEventListener('click', event => {
    const selectedTag = event.target.dataset.tag;
    contentBlocks.forEach(block => {
      if (!block.classList.contains(selectedTag)) {
        block.style.display = 'none';
      } else {
        block.style.display = '';
      }
    });
  });
});
