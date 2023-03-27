<!--Page CONTACT-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--Pour que la responsivité s'active quand on inspecte (F12)-->
        <link rel="stylesheet" href="../header_footer_body/header_footer.css"> 
        <script src="../header_footer_body/header_anim.js" defer="defer"></script> 
        <script src="https://kit.fontawesome.com/d93ad3eb56.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="contact.css"> 
        <link rel="stylesheet" href="../header_footer_body/body.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400&display=swap" rel="stylesheet">  <!--pour la typo google font Raleway-->
    </head>

    <body>
        <?php include ('../header_footer_body/header.php'); ?>
        
        <main>
            <form action="traitement.php" method="post">
                <div class="titre"> 
                    <h2>Laissez-nous un message</h2>
                </div>
                <div class="contenu">
                    <div class="contact">
                        <div class="contact_info">
                            <label for="name"></label>
                            <input type="text" id="name" name="user_name" 
                                value="Votre nom"
                                onfocus="if (this.value== this.defaultValue) this.value=''"
                                onblur="if (this.value== '') this.value='Votre nom'">
                        </div>

                        <div class="contact_info">
                            <label for="email"></label>
                            <input type="mail" id="email" name="user_email" 
                                value="Votre mail"
                                onfocus="if (this.value== this.defaultValue) this.value=''"
                                onblur="if (this.value== '') this.value='Votre mail'">
                        </div>
                    </div>

                    <div class="message">
                        <div class="message_objet">
                            <label for="objet"></label>
                            <input type="text" id="objet" name="user_objet" 
                                value="Objet du message"
                                onfocus="if (this.value== this.defaultValue) this.value=''" 
                                onblur="if (this.value== '') this.value='Objet du message'">
                        </div>

                        <div class="message_contenu">  
                            <label for="message"></label>
                            <textarea id="message" name="user_message"
                                value="Tapez votre message ici"
                                onfocus="if (this.value== this.defaultValue) this.value=''"
                                onblur="if (this.value== '') this.value='Tapez votre message ici'">Tapez votre message ici
                            </textarea>
                        </div>
                    </div>

                    <div class="bouton">
                        <button type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
    
            <section class="localisation">
                <div class="titre"> 
                    <h2>Où nous trouver ?</h2>
                </div>
                
                <div class="contenu">
                    <div class="coordo">
                        <div class="logo">
                            <img src="https://www.capitainestudy.fr/wp-content/uploads/2019/02/cesi_RVB.png">
                        </div>
                        <div class="adresse"> 
                            <p>CESI</p>
                            <p>230 rue Rolland Garros</p>
                            <p>29480 Guipavas</p>
                            <a href="https://brest.cesi.fr/">CESI Brest</a>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/d/embed?mid=1K26ZFy1FHb_nfA7m-ERMWL-t4cxed-g&ehbc=2E312F"></iframe> <!-- width="640" height="480"-->
                </div>
            </section>
        </main>
        
        <?php include('../header_footer_body/footer.php'); ?>
        
    </body>
</html>
