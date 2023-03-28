<?php 

try {
    $db = New PDO('mysql:host=localhost;dbname=contacts_site;charset=utf8','root', ''); /*connexion à la bdd créée pour la récupération des données */
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();           /* pour avoir un message d'erreur si la connexion n'aboutie pas*/
    return;
}

if(!empty($_POST["user_name"]) && !empty($_POST["user_email"]) 
    && !empty($_POST["user_objet"]) && !empty($_POST["user_message"])){   /*on vérifie s'il y a des données saisies dans les champs du formulaire */

        $user_name = htmlspecialchars($_POST["user_name"]);     /*récupération des données saisies dans le champs user_name en prenant en compte les caractères spéciaux*/
        $user_email = htmlspecialchars($_POST["user_email"]);
        $user_objet = htmlspecialchars($_POST["user_objet"]);
        $user_message = htmlspecialchars($_POST["user_message"]);

        $s="INSERT INTO contact (user_name,user_email,user_objet,user_message) /* requète sql qui insérera/créera les données saisies dans le formulaire contact -> dans la bdd*/
                VALUES (:user_name,:user_email,:user_objet,:user_message)";
        
        $r = $db->prepare($s);     /* on prépare la requête */
        
        $r->BindValue(':user_name',$user_name);     /*Associe la valeur saisie dans le champs du nom au paramètre user_name*/
        $r->BindValue(':user_email',$user_email);
        $r->BindValue(':user_objet',$user_objet);
        $r->BindValue(':user_message',$user_message);
       
        $ok = $r->execute();    /*exécute la requête préparée */
        
        if(!$ok){                             /*si la requête ne s'exécute pas correctement */
            die ("Une erreur est survenue");   /*la procédure s'arrète et un message d'erreur s'affiche */
        }else{
            echo "Votre message a bien été transmis. Nous vous remercions de nous avoir contacté      
            et nous vous répondrons dès que possible. A bientôt ! Le club de robotique CESI de Brest" ; /*si les données remontent bien en bdd, un message de remerciement s'affiche*/
        
        }
}else{
    die("Le formulaire est incomplet. Veuillez remplir tous les champs, s'il vous plait. Merci !");  /*si tous les champs ne sont pas remplis et que le user submit, un message d'erreur s'affiche */
}

?>