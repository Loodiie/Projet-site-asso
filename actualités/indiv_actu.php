<!--Page qui s'ouvrira lorsqu'on cliquera sur une actualité = page qui présentera une actu plus en détails-->

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
    <link rel="stylesheet" href="indiv_actu.css">
    <link rel="stylesheet" href="../header_footer_body/body.css">
    <!--pour la typo google font Raleway-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400&display=swap" rel="stylesheet"> 

</head>

<body>
    <?php include('../header_footer_body/header.php'); ?> <!-- appel du fichier header.php-->

    <main class="vertical">

        <section class="horizontal">

            <!-- premier duo d'image-->
            <div class="img_article" id="img_duo_1">
                <img class="pics1" src="../img/giphy.gif" alt="alaune">
                <img class="pics1" src="../img/jiminy.jpg" alt="alaune2">
            </div>
            <!-- deuxième duo d'image-->
            <div class="img_article" id="img_duo_2">
                <img class="pics1" src="../img/jiminy.jpg" alt="alaune3">
                <img class="pics1" src="../img/giphy.gif" alt="alaune4">
            </div>
            <div class="text">
                <h2>Nom de l'article</h2>
                <p> Date de parution</p><br>

                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>
        </section>

    </main>

    <?php include('../header_footer_body/footer.php'); ?> <!-- appel du fichier footer.php-->

</body>

</html>