<?php
    include("mysql_inc.php");
	
	$nom = $_POST["surname"];
	$prenom = $_POST["name"];
	$societe = $_POST["company"];
	$ville = $_POST["city"];
	$email = $_POST["mail"];
	$telephone = $_POST["phone"];
	$message = $_POST["msg"];
	
    if (isset($_POST["surname"]))
	{
        $query = "insert into projet1a_contacts
                (contact_firstname, contact_lastname, contact_company, contact_city, contact_mail, contact_phone, contact_message)
                values
                ('" . $prenom . "','" . $nom . "','" . $societe . "','" . $ville . "','" . $email . "','" . $telephone . "','" . $message . "')";
        
        $q = mysql_query($query);

        if (!$q)
		{
            header("Location:contact.php?notif=nok");
            exit;
        }
		
        else
		{
			$emailTo = "nicolas.gerbault@eemi.com";
			
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$headers .= "From: {$nom} <{$email}>" . "\r\n";
			
			$objet = "Message via AQUALIS";
				
			$body = "";
			$body .= "<p><strong>Nom:</strong> $nom</p>";
			$body .= "<p><strong>Prénom:</strong> $prenom</p>";
			$body .= "<p><strong>Société:</strong> $societe</p>";
			$body .= "<p><strong>Ville:</strong> $ville</p>";
			$body .= "<p><strong>Email:</strong> $email</p>";
			$body .= "<p><strong>Téléphone:</strong> $telephone</p>";
			$body .= "<p><strong>Message:</strong><br/> $message</p>";
			
			mail($emailTo, $objet, $body, $headers);

            header("Location:contact.php?notif=ok");
            exit;
        }
    }