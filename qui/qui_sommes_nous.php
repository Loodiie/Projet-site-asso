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
    <link rel="stylesheet" href="qui_sommes_nous.css">
    <link rel="stylesheet" href="../header_footer_body/body.css">
    <!--pour la typo google font Raleway-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400&display=swap" rel="stylesheet"> 
</head>

<body>
    <?php include('../header_footer_body/header.php'); ?> <!-- appel du fichier header.php-->

    <main class="vertical">


        <!-- Ce block permet de presenter les membres du bureau -->
        <section class="bureau">

            <div class="fond">
                <h1> Le bureau </h1>

                <div class="trois_blocks">

                    <div class="image_qui_bureau">
                        <img src="../img/silhouette.png" alt="president">
                        <p> Président
                            <br> LOORE Ilan
                            <br> Développement informatique
                        </p>
                    </div>

                    <div class="image_qui_bureau">
                        <img src="../img/silhouette.png" alt="secraitaire">
                        <p> Secrétaire
                            <br> BAUDRIER Coline
                            <br> Développement informatique
                        </p>
                    </div>

                    <div class="image_qui_bureau">
                        <img src="../img/silhouette.png" alt="trésorier">
                        <p> Trésorier
                            <br> LANSONNEUR David
                            <br> Développement informatique
                        </p>
                    </div>

                </div>
            </div>
        </section>


              <!-- Ce block permet de presenter les filières des membres du club -->
        <section class="membres">

            <div class="fond">

                <h1> Les membres </h1>

                <div class="trois_blocks_couleur">

                    <div class="image_qui_membre">
                        <img src="../img/silhouette_goupe.png" alt="informatique">
                        <p> La filière informatique </p>
                    </div>

                    <div class="image_qui_membre">
                        <img src="../img/silhouette_goupe.png" alt="passion">
                        <p> Les passionnés </p>
                    </div>

                    <div class="image_qui_membre">
                        <img src="../img/silhouette_goupe.png" alt="expértise">
                        <p> Les intervenants </p>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php include('../header_footer_body/footer.php'); ?> <!-- appel du fichier footer.php-->
</body>

</html>