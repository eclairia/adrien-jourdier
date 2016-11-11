<?php 

if(!empty($_POST["nomcontact"]) AND !empty($_POST["prenomcontact"]) AND !empty($_POST['commentairescontact']) AND !empty($_POST['mailcontact'])){
   
  $nomcontact = htmlspecialchars(addslashes($_POST["nomcontact"]));
  $prenomcontact = htmlspecialchars(addslashes($_POST["prenomcontact"]));
  $commentairescontact = htmlspecialchars(addslashes($_POST["commentairescontact"]));
  $mailcontact = htmlspecialchars(addslashes($_POST["mailcontact"]));

    $mail = "Mail provenant du portfolio";
  
    $sujet = "Mail envoyé du formuaire de contact du portfolio";

    $destinataire = "adrien.jourdier@eemi.com";

    $message = "<p>" . $_POST["nomcontact"] . "</p>" . $_POST["prenomcontact"] . "</p>" . "<p>" . $_POST["commentairescontact"] . "</p>" . "<p>" . $_POST["mailcontact"] . "</p>";

    $entete = 'From:'.$mail;
    
    mail($destinataire, $sujet, $message, $entete);
    
    $ok = "Votre email a bien été envoyé !! Merci !! je vous répondrai dès que possible !!";
    
    unset($_POST, $message, $nomcontact, $prenomcontact, $commentairescontact, $mailcontact);
    
    }

else{ 
$error = "Tous les champs sont obligatoires !";

}

?>
  