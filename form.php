<?php

	/**
	 * Liste des variable du formulaire 
	 */

	$sexe = $_POST['sexe'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Ajustement du nom
	$noms = "$nom $prenom";

	// Préparation du mail 
	$lemail = '<html><body>Bonjour '. $sexe .' '. $noms .', '
	. nl2br("\n\n") .'Nous avons bien reçu votre message. Nous vous remercions pour votre visite '
	. 'et de nous avoir contactés.'. nl2br("\n\n") .'Merci !'. nl2br("\n\n\n\n") .'<span>Téléphone : 0623524131
	'. nl2br("\n") .'E-mail : toiwilouhassane@gmail.com'. nl2br("\n") .'Adresse : 13 Rue Saint Georges 94480 
	Abmon-Sur-Seine'.nl2br("\n").'</span>
	<h1 style="font-family: monospace; font-size: 20px; color: #6d09ff;">TOIWILOU\'S WEBSITE</h1></body></html>';

	// Ajustement du message
	$texte= '<html><body>'. $message .' '. nl2br("\n\n") .'E-mail : '. $email.'</body></html>';

	// Gestion des dépendance
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;
	require './vendor/autoload.php';

	// Création de la fonction sendmail
	function sendmail($title, $name, $e_mail, $text) {
	    $mail = new PHPMailer(true);

	    try {
	        // Parametrage du serveur                   
	        $mail->SMTPDebug = 0;
	        $mail->isSMTP();                                      
	        $mail->Host = 'smtp.gmail.com';               
	        $mail->SMTPAuth = true;                          
	        $mail->Username = 'toiwilouswebsite@gmail.com';                         
	        $mail->Password = 'Website12';                              
	        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	        $mail->Port = 587;  

	        // Bénéficiaires
	        $mail->setFrom('toiwilouswebsite@gmail.com', $title);
	        $mail->addAddress($e_mail, $name);

	        // Contenu
	        $mail->isHTML(true);                            
	        $mail->Subject = 'Toiwilou\'s website';
	        $mail->Body = $text;
	        
	        // Envoi
	        $mail->send();
	        
	    } catch (Exception $e) {
	        echo "Mailer Error: {$mail->ErrorInfo}";
	    }
	}

	// Réception du message
	sendmail("$sexe $noms", $telephone, "toiwilouhassane@gmail.com", $texte);

	//Accusé de réception
	sendmail("Toiwilou HASSANE", $noms, $email, $lemail);

	// Redirection
	header('Location: contact.php'); 

?>
