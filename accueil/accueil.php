<!--Page Accueil-->

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
        <link rel="stylesheet" href="accueil.css"> 
        <!--pour la typo google font Raleway-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <?php include ('../header_footer_body/header.php'); ?> <!-- appel du fichier header.php-->

        <main class="vertical">
            <!-- <section class="accueil_event">         bandeau pour les events 
                <img src="" alt="event_photo">
                <h2> Event + date </h2>
                <p> blablabla </p>
                <ul>
                    <li><a href="arctile_connecte"> titre arcticle</a></li>
                    <li><a href="arctile_connecte"> titre arcticle</a></li>
                    <li><a href="arctile_connecte"> titre arcticle</a></li>
                </ul>
                <img src="" alt="event_agrandi">
            </section> -->
        
            <section class="horizontal">  <!-- 1er bloc texte + photo -->
                                
                <div class="zone_text">
                    <h1> A propos </h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                    </p>
                </div>

                <div class="pics1">
                    <img src="../img/giphy.gif" alt="qui_sommes_nous">
                </div>
                
            </section>
        
            <section class="horizontal"> <!-- 2eme bloc, dans le même style que le 1er mais avec la photo et le texte inversés -->
                <div class="pics2">
                    <img src="../img/giphy.gif" alt="que_fait_on">
                </div>
                
                <div class="zone_text">
                    <h1> Que fait-on ? </h1>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                    </p>
                </div>
                
            </section>

            <section class="sponsors"> <!--Possibilité de mettre un carrousel des sponsos ici quand il y en aura plus de 3. Sinon c'est un bandeau en bas de l'écran pour les partenariats-->
                <div class="sponso">              
                    <nav><a href="/partenariat/partenariat.php"><img src="../img/partenariat.jfif" alt="partenariat1"></a></nav>
                </div>
                <div class="sponso">
                    <nav><a href="partenariat/partenariat.php"><img src="../img/partenariat.jfif" alt="partenariat2"></a></nav>
                </div> 
                <div class="sponso">
                    <nav><a href="partenariat/partenariat.php"><img src="../img/partenariat.jfif" alt="partenariat3"></a></nav>
                </div>
            </section>
            
        </main>

        <?php include('../header_footer_body/footer.php'); ?>  <!-- appel du fichier footer.php-->
    </body>
</html>
