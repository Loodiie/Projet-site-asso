<html lang="fr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!--Pour que la responsivité s'active quand on inspecte (F12)-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <!-- lien pour le js -->
    <script src="../header_footer_body/header_anim.js" defer="defer"></script>
    <script src="https://kit.fontawesome.com/d93ad3eb56.js" crossorigin="anonymous"></script>
     <!-- lien pour les fichiers de style (css) -->
    <link rel="stylesheet" href="../header_footer_body/header_footer.css">
    <link rel="stylesheet" href="galerie.css">
    <link rel="stylesheet" href="../header_footer_body/body.css">
    <!--pour la typo google font Raleway-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400&display=swap" rel="stylesheet"> 
  </head>

  <body>

    <?php include ('../header_footer_body/header.php'); ?> <!-- appel du fichier header.php-->

    <main>
      <section class="vertical">
        <!-- Barre des filtres -->
        <div class="ordi">
          <nav class="choix_filtres_ordi">
            <ul class="filtre">
              <button class="style_filtre" data-tag="tout">Tout</button>
              <button class="style_filtre" data-tag="3D">Filtre 3D</button>
              <button class="style_filtre" data-tag="projets">Filtre projets</button>
              <button class="style_filtre" data-tag="concours">Filtre concours</button>
              <button class="style_filtre" data-tag="filtre">Filtre...</button>
            </ul>
          </nav>
        </div>

        <div class="tel">
          <input type="checkbox" class="toggle_filtres"/>

          <div class="filtre_image">
            <a href="#">
              <i class="fa-solid fa-filter"></i>
            </a>
          </div>

          <nav class="choix_filtres_tel">
            <ul class="filtre_deroule">
              <button class="style_filtre" data-tag="tout">Tout</button>
              <button class="style_filtre" data-tag="3D">Filtre 3D</button>
              <button class="style_filtre" data-tag="projets">Filtre projets</button>
              <button class="style_filtre" data-tag="concours">Filtre concours</button>
              <button class="style_filtre" data-tag="filtre">Filtre...</button>
            </ul>
          </nav>
        </div>

      </section>


    <!-- ce block permet de gerer le carrousel principal -->
      <div class="carrousel_principal tout">
        <a class="principal_carrousel-prev" onclick="plusSlides(-1,
          'slide_images_principal', 0)">&#10094;</a>
        <div class="slide_carrousel_principal">
          <div class="slide_images_principal">
            <img src="../img/image_carrousel.png" alt="image 1">
          </div>
          <div class="slide_images_principal">
            <img src="../img/image_carrousel2.png" alt="image 2">
          </div>
          <div class="slide_images_principal">
            <img src="../img/image_carrousel3.png" alt="image 3">
          </div>
          <div class="slide_images_principal">
            <img src="../img/image_carrousel4.png" alt="image 4">
          </div>
          <div class="slide_images_principal">
            <img src="../img/image_carrousel5.png" alt="image 5">
          </div>
          <div class="slide_images_principal">
            <img src="../img/image_carrousel6.png" alt="image 6">
          </div>
        </div>
        <a class="principal_carrousel-next" onclick="plusSlides(1,
          'slide_images_principal', 0)">&#10095;</a>
      </div>

    <!-- ce block permet de gerer la 1ère partie des carrousels secondaire -->
      <div class="trois_blocks">

        <div class="carrousel_secondaire 3D projets tout">
          <a class="carrousel_prev" onclick="plusSlides(-1,
            'slide_images_secondaire_0', 0)">&#10094;</a>
          <div class="slide_carrousel_secondaire">

            <div class="slide_images_secondaire_0">
              <img src="../img/image_carrousel.png" alt="image 7"
                class="resize_img">
              <p> Nom de l'image 1</p>
            </div>
            <div class="slide_images_secondaire_0">
              <img src="../img/image_carrousel2.png" alt="image 8"
                class="resize_img">
              <p> Nom de l'image 2</p>
            </div>
            <div class="slide_images_secondaire_0">
              <img src="../img/image_carrousel3.png" alt="image 9"
                class="resize_img">
              <p> Nom de l'image 3</p>
            </div>
          </div>
          <a class="carrousel_next" onclick="plusSlides(1,
            'slide_images_secondaire_0', 0)">&#10095;</a>
        </div>


        <div class="carrousel_secondaire 3D tout">
          <a class="carrousel_prev" onclick="plusSlides(-1,
            'slide_images_secondaire_1', 1)">&#10094;</a>
          <div class="slide_carrousel_secondaire">
            <div class="slide_images_secondaire_1">
              <img src="../img/image_carrousel.png" alt="image 7"
                class="resize_img">
              <p> Nom de l'image 1</p>
            </div>
            <div class="slide_images_secondaire_1">
              <img src="../img/image_carrousel2.png" alt="image 8"
                class="resize_img">
              <p> Nom de l'image 2</p>
            </div>
            <div class="slide_images_secondaire_1">
              <img src="../img/image_carrousel3.png" alt="image 9"
                class="resize_img">
              <p> Nom de l'image 3</p>
            </div>
          </div>
          <a class="carrousel_next" onclick="plusSlides(1,
            'slide_images_secondaire_1', 1)">&#10095;</a>
        </div>


        <div class="carrousel_secondaire projets tout">
          <a class="carrousel_prev" onclick="plusSlides(-1,
            'slide_images_secondaire_2', 2)">&#10094;</a>
          <div class="slide_carrousel_secondaire">
            <div class="slide_images_secondaire_2">
              <img src="../img/image_carrousel.png" alt="image 7"
                class="resize_img">
              <p> Nom de l'image 1</p>
            </div>
            <div class="slide_images_secondaire_2">
              <img src="../img/image_carrousel2.png" alt="image 8"
                class="resize_img">
              <p> Nom de l'image 2</p>
            </div>
            <div class="slide_images_secondaire_2">
              <img src="../img/image_carrousel3.png" alt="image 9"
                class="resize_img">
              <p> Nom de l'image 3</p>
            </div>
          </div>
          <a class="carrousel_next" onclick="plusSlides(1,
            'slide_images_secondaire_2', 2)">&#10095;</a>
        </div>
      </div>


    <!-- ce block permet de gerer la 2ème partie des carrousels secondaire -->
      <div class="trois_blocks">

        <div class="carrousel_secondaire filtre tout">
          <a class="carrousel_prev" onclick="plusSlides(-1,
            'slide_images_secondaire_3', 3)">&#10094;</a>
          <div class="slide_carrousel_secondaire">

            <div class="slide_images_secondaire_3">
              <img src="../img/image_carrousel4.png" alt="image 10"
                class="resize_img">
              <p> Nom de l'image 1</p>
            </div>
            <div class="slide_images_secondaire_3">
              <img src="../img/image_carrousel5.png" alt="image 11"
                class="resize_img">
              <p> Nom de l'image 2</p>
            </div>
            <div class="slide_images_secondaire_3">
              <img src="../img/image_carrousel6.png" alt="image 12"
                class="resize_img">
              <p> Nom de l'image 3</p>
            </div>
          </div>
          <a class="carrousel_next" onclick="plusSlides(1,
            'slide_images_secondaire_3', 3)">&#10095;</a>
        </div>


        <div class="carrousel_secondaire filtre projets tout">
          <a class="carrousel_prev" onclick="plusSlides(-1,
            'slide_images_secondaire_4', 4)">&#10094;</a>
          <div class="slide_carrousel_secondaire">
            <div class="slide_images_secondaire_4">
              <img src="../img/image_carrousel4.png" alt="image 10"
                class="resize_img">
              <p> Nom de l'image 1</p>
            </div>
            <div class="slide_images_secondaire_4">
              <img src="../img/image_carrousel5.png" alt="image 11"
                class="resize_img">
              <p> Nom de l'image 2</p>
            </div>
            <div class="slide_images_secondaire_4">
              <img src="../img/image_carrousel6.png" alt="image 12"
                class="resize_img">
              <p> Nom de l'image 3</p>
            </div>
          </div>
          <a class="carrousel_next" onclick="plusSlides(1,
            'slide_images_secondaire_4', 4)">&#10095;</a>
        </div>


        <div class="carrousel_secondaire concours tout">
          <a class="carrousel_prev" onclick="plusSlides(-1,
            'slide_images_secondaire_5', 5)">&#10094;</a>
          <div class="slide_carrousel_secondaire">
            <div class="slide_images_secondaire_5">
              <img src="../img/image_carrousel4.png" alt="image 10"
                class="resize_img">
              <p> Nom de l'image 1</p>
            </div>
            <div class="slide_images_secondaire_5">
              <img src="../img/image_carrousel5.png" alt="image 11"
                class="resize_img">
              <p> Nom de l'image 2</p>
            </div>
            <div class="slide_images_secondaire_5">
              <img src="../img/image_carrousel6.png" alt="image 12"
                class="resize_img">
              <p> Nom de l'image 3</p>
            </div>
          </div>
          <a class="carrousel_next" onclick="plusSlides(1,
            'slide_images_secondaire_5', 5)">&#10095;</a>
        </div>
      </div>

    </main>

    <?php include('../header_footer_body/footer.php'); ?> <!-- appel du fichier footer.php-->
    <script src="galerie.js"></script>
  </body>
</html>
