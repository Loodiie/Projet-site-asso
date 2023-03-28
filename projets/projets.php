<!--Page PROJETS-->

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <!--Pour que la responsivité s'active quand on inspecte (F12)-->
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no"> 
        <!-- lien pour le js -->
        <script src="../header_footer_body/header_anim.js" defer="defer"></script>
        <script src="https://kit.fontawesome.com/d93ad3eb56.js" crossorigin="anonymous"></script>
        <!-- lien pour les fichiers de style (css) -->
        <link rel="stylesheet" href="../header_footer_body/header_footer.css">
        <link rel="stylesheet" href="projets.css">
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
                            <button class="style_filtre" data-tag="events">Events</button> 
                            <button class="style_filtre" data-tag="electronique">Électronique</button>
                            <button class="style_filtre" data-tag="mecanique">Mécanique</button>
                            <button class="style_filtre" data-tag="programmation">Programmation</button> 
                            <button class="style_filtre" data-tag="3D">3D</button>    
   
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
                            <button class="style_filtre" data-tag="events">Events</button> 
                            <button class="style_filtre" data-tag="electronique">Électronique</button>
                            <button class="style_filtre" data-tag="mecanique">Mécanique</button>
                            <button class="style_filtre" data-tag="programmation">Programmation</button> 
                            <button class="style_filtre" data-tag="3D">3D</button> 
                        </ul>
                    </nav>
                </div>


                      <!-- Ce block permet de mettre les images des projets -->
                <div class="trois_blocks">

                    <div class="images_projet tout events electronique">
                        <img src="../img/image_carrousel.png" alt="image 1">
                        <div class="text">
                            <h3>Nom du projet</h3>
                        </div>
                        <div class="indivprojet">
                            <nav><a href="indiv_projet.php"><img
                                        src="../img/plus_rose.png" alt="lire_plus"></a></nav>
                        </div>

                    </div>
                    <div class="images_projet tout events mecanique">
                        <img src="../img/image_carrousel2.png" alt="image 2">
                        <div class="text">
                            <h3>Nom du projet</h3>
                        </div>
                        <div class="indivprojet">
                            <nav><a href="indiv_projet.php"><img
                                        src="../img/plus_rose.png" alt="lire_plus"></a></nav>
                        </div>
                    </div>

                    <div class="images_projet tout events programmation">
                        <img src="../img/image_carrousel3.png" alt="image 3">
                        <div class="text">
                            <h3>Nom du projet</h3>
                        </div>
                        <div class="indivprojet">
                            <nav><a href="indiv_projet.php"><img
                                        src="../img/plus_rose.png" alt="lire_plus"></a></nav>
                        </div>
                    </div>
                </div>


                <!-- Ce block permet de mettre les images des projets -->

                <div class="trois_blocks">

                    <div class="images_projet tout programmation">
                        <img src="../img/image_carrousel4.png" alt="image 4">
                        <div class="text">
                            <h3>Nom du projet</h3>
                        </div>
                        <div class="indivprojet">
                            <nav><a href="indiv_projet.php"><img
                                        src="../img/plus_rose.png" alt="lire_plus"></a></nav>
                        </div>
                    </div>

                    <div class="images_projet tout 3D">
                        <img src="../img/image_carrousel5.png" alt="image 5">
                        <div class="text">
                            <h3>Nom du projet</h3>
                        </div>
                        <div class="indivprojet">
                            <nav><a href="indiv_projet.php"><img
                                        src="../img/plus_rose.png" alt="lire_plus"></a></nav>
                        </div>
                    </div>

                    <div class="images_projet tout events 3D">
                        <img src="../img/image_carrousel6.png" alt="image 6">
                        <div class="text">
                            <h3>Nom du projet</h3>
                        </div>
                        <div class="indivprojet">
                            <nav><a href="indiv_projet.php"><img
                                        src="../img/plus_rose.png" alt="lire_plus"></a></nav>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include('../header_footer_body/footer.php'); ?> <!-- appel du fichier footer.php-->
       
        <script src="projets.js"></script>

    </body>
</html>
