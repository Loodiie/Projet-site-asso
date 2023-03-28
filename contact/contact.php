<!--Page CONTACT-->
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
        <link rel="stylesheet" href="contact.css"> 
        <link rel="stylesheet" href="../header_footer_body/body.css">
        <link rel="stylesheet" href="../header_footer_body/header_footer.css"> 
        <!--pour la typo google font Raleway-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400&display=swap" rel="stylesheet">  
    </head>

    <body>
        <?php include ('../header_footer_body/header.php'); ?>   <!-- appel du fichier header.php-->
        
        <main>
            <!-- partie formulaire -->
            <form action="traitement.php" method="post">     <!-- ouverture d'un formulaire pour après lier les données saisies par le user à la bdd -->
                <div class="titre"> 
                    <h2>Laissez-nous un message</h2>
                </div>
                <div class="contenu">
                    <div class="contact">               <!-- bloc de renseignement sur le user -->
                        <div class="contact_info">      <!-- pour le champs où le user saisi son nom -->
                            <label for="name"></label>
                            <input type="text" id="name" name="user_name" 
                                placeholder="Votre nom">
                        </div>

                        <div class="contact_info">         <!-- pour le champs où le user saisi son email -->
                            <label for="email"></label>
                            <input type="email" id="email" name="user_email" 
                                placeholder="Votre mail">
                        </div>
                    </div>

                    <div class="message">                 <!-- bloc concernant le message -->
                        <div class="message_objet">       <!-- pour le champs où le user saisi l'objet du message -->
                            <label for="objet"></label>
                            <input type="text" id="objet" name="user_objet" 
                                placeholder="Objet du message">
                        </div>

                        <div class="message_contenu">       <!-- pour le champs où le user saisi le message -->
                            <label for="message"></label>
                            <textarea type="text" id="message" name="user_message" placeholder="Tapez votre message ici"></textarea>
                        </div>
                    </div>

                    <div class="bouton">                 <!-- le bouton qui permet d'envoyer les données saisies à la base de données contacts_site -->
                        <button type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
    
            <!-- partie CESI -->
            <section class="localisation">            
                <div class="titre"> 
                    <h2>Où nous trouver ?</h2>
                </div>
                
                <div class="contenu">   <!-- bloc pour le logo du CESI -->
                    <div class="coordo">
                        <div class="logo">
                            <img src="https://www.capitainestudy.fr/wp-content/uploads/2019/02/cesi_RVB.png">
                        </div>
                        <div class="adresse">     <!-- bloc pour l'adresse du CESI -->
                            <p>CESI</p>
                            <p>230 rue Rolland Garros</p>
                            <p>29480 Guipavas</p>
                            <a href="https://brest.cesi.fr/">CESI Brest</a>
                        </div>
                    </div>
                    <!-- Map pour trouver le CESI Brest -->
                    <iframe src="https://www.google.com/maps/d/embed?mid=1K26ZFy1FHb_nfA7m-ERMWL-t4cxed-g&ehbc=2E312F"></iframe> <!-- width="640" height="480"-->
                </div>
            </section>
        </main>
        
        <?php include('../header_footer_body/footer.php'); ?> <!-- appel du fichier footer.php-->
        
    </body>
</html>
