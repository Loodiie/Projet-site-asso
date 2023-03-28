<?php 

/*if (!isset($_POST)) {
    return;
}*/

try {
    $db = New PDO('mysql:host=localhost;dbname=contacts_site;charset=utf8','root', '');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    return;
}

if(!empty($_POST["user_name"]) && !empty($_POST["user_email"]) 
    && !empty($_POST["user_objet"]) && !empty($_POST["user_message"])){

        $user_name = htmlspecialchars($_POST["user_name"]);
        $user_email = htmlspecialchars($_POST["user_email"]);
        $user_objet = htmlspecialchars($_POST["user_objet"]);
        $user_message = htmlspecialchars($_POST["user_message"]);

        $s="INSERT INTO contact (user_name,user_email,user_objet,user_message) 
                VALUES (:user_name,:user_email,:user_objet,:user_message)";
        
        $r = $db->prepare($s);
        
        $r->BindValue(':user_name',$user_name);
        $r->BindValue(':user_email',$user_email);
        $r->BindValue(':user_objet',$user_objet);
        $r->BindValue(':user_message',$user_message);
       
        $ok = $r->execute();
        
        if(!$ok){
            die ("Une erreur est survenue");
        }else{
            echo "Votre message a bien été transmis. Nous vous remercions de nous avoir contacté
            et nous vous répondrons dès que possible. A bientôt ! Le club de robotique CESI de Brest" ;
        
        }
}else{
    die("Le formulaire est incomplet. Veuillez remplir tous les champs, s'il vous plait. Merci !");
}



?>