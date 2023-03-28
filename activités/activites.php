<!--Page ACTIVITES -->

<!DOCTYPE html>
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
        <link rel="stylesheet" href="../header_footer_body/body.css">
        <link rel="stylesheet" href="activites.css">
        <!--pour la typo google font Raleway-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400&display=swap" rel="stylesheet">  
    </head>
    <body>
        <?php include ('../header_footer_body/header.php'); ?> <!-- appel du fichier header.php-->
 
        <main> 
            <div class="intro"> <!-- bloc d'intro en début de page -->
                <h1>Pôles d'activités</h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <section class="horizontal"> <!-- section avec 3 blocs côtes à côtes qui représentent chacun une activité du club. Obligé de faire 3 blocs divisés en sous blocs 
            pour que la partie qui s'affiche et celle qui est masquée soient "soeurs" pour effectuer le hover -->

                <div class="column"> <!-- chaque colonne est formée de 2 blocs : un affiché (avec une image et du texte en dessous) et un masqué (qui s'affiche avec la fonction hover et qui est composé de texte et d'un lien)-->

                    <div class="bloc1">
                        <img src="../img/electro.activite.jpg" alt="Activite Electro&Meca"> 
                        <h2>Electro & Meca</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <div class="bloc1_hide">    <!-- ce bloc ecorrespond à la continuité du bloc 1 qui est masqué et qui s'affiche lorsque la souris passe sur le bloc 1 -->              
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <!-- petite icone + qui permet de mener à chacune des pages indiv activité correspondante -->
                        <nav class="lireplus"><a href="../activités/indiv_activite_elec.php"><img src="../img/plus_rose.png" alt="lire_plus" title="Lire plus"></a></nav>
                    </div>
                </div>

                <div class="column"> <!-- chaque colonne est formée de 2 blocs : un affiché (avec une image et du texte en dessous) et un masqué (qui s'affiche avec la fonction hover et qui est composé de texte et d'un lien)-->

                    <div class="bloc2">
                        <img src="../img/3D_printers.activite.png" alt="Activite Impression 3D">
                        <h2>Impression 3D</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <div class="bloc2_hide">  <!-- ce bloc ecorrespond à la continuité du bloc 2 qui est masqué et qui s'affiche lorsque la souris passe sur le bloc 2 -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <!-- petite icone + qui permet de mener à chacune des pages indiv activité correspondante -->
                        <nav class="lireplus"><a href="../activités/indiv_activite_3d.php"><img src="../img/plus_rose.png" alt="lire_plus" title="Lire plus"></a></nav>
                    </div>

                </div>

                <div class="column"> <!-- chaque colonne est formée de 2 blocs : un affiché (avec une image et du texte en dessous) et un masqué (qui s'affiche avec la fonction hover et qui est composé de texte et d'un lien)-->

                    <div class="bloc3">
                            <img src="../img/prog.activite.jpg" alt="Activite Programmation"> 
                            <h2>Programmation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <div class="bloc3_hide">  <!-- ce bloc ecorrespond à la continuité du bloc 3 qui est masqué et qui s'affiche lorsque la souris passe sur le bloc 3 -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <!-- petite icone + qui permet de mener à chacune des pages indiv activité correspondante -->
                        <nav class="lireplus"><a href="../activités/indiv_activite_prog.php"><img src="../img/plus_rose.png" alt="lire_plus" title="Lire plus"></a></nav>
                    </div>
                </div>
                
            </section>    
 
    
        </main>

        <?php include('../header_footer_body/footer.php'); ?> <!-- appel du fichier footer.php-->
    
    </body>

</html>
