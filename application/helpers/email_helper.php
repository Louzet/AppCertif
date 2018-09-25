<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


/**
 * email reinitialisation du mot de passe utilisateur
 *
 * @param [type] $email
 * @return void
 */
function reinit_password_email($email)
{
	$mail = new PHPMailer(true);
	
	try {
		//Server settings
		// $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host        = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
		$mail->SMTPAuth    =  true;                               // Enable SMTP authentication
		$mail->Username    = 'soomize91@gmail.com';              // SMTP username
		$mail->Password    = 'u8u7ky00';                         // SMTP password
		$mail->SMTPSecure  = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port        =  587;
		$mail->ContentType = 'html';
		$mail->CharSet     = 'UTF-8'; 
		$mail->Priority    =  3;                                  // TCP port to connect to
		
		

		//Recipients
		$mail->setFrom('soomize91@gmail.com', 'Thag@service.fr');
		$mail->addAddress($email);     // Add a recipient
		// $mail->addAddress('ellen@example.com');                // Name is optional
		// $mail->addReplyTo('soomize91@gmail.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
	
		// Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');                 // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');            // Optional name
		$base_url = base_url('connexion/reinit_mot_de_passe');
		//Content
		$token = sha1($email);

		$mail->isHTML(true); 
		                                            // Set email format to HTML
		$mail->Subject = 'Réinitialisation de votre de passe';
		
		$mail->Body   = "<h4>Activation de votre compte</h4>.

		<p>Pour réinitialiser votre mot de passe :<p>
		
		<p>Accédez à la page Mot de passe oublié.
		En cliquant sur le lien suivant <a href='$base_url?id=$token'>réinitialiser mon mot de passe</a> !
		Saisissez votre nouveau mot de passe et confirmez le !<p>;
		
		";
		
		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
		
}

/**
 * fonction email, permettant d'activer le compte utilisateur
 *
 * @return void
 */
function confirm_inscription($email, $pseudo)
{
	$mail = new PHPMailer(true);

	try {
		//Server settings
		// $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host        = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
		$mail->SMTPAuth    =  true;                               // Enable SMTP authentication
		$mail->Username    = 'soomize91@gmail.com';              // SMTP username
		$mail->Password    = 'u8u7ky00';                         // SMTP password
		$mail->SMTPSecure  = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port        =  587;
		$mail->ContentType = 'html';
		$mail->CharSet     = 'UTF-8'; 
		$mail->Priority    =  3;                                  // TCP port to connect to
		
		

		//Recipients
		$mail->setFrom('soomize91@gmail.com', 'Thag@service.fr');
		$mail->addAddress($email);     // Add a recipient
		// $mail->addAddress('ellen@example.com');                // Name is optional
		// $mail->addReplyTo('soomize91@gmail.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
	
		// Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');                 // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');            // Optional name
		$base_url = base_url('inscription/active_account');
		//Content
		$token = sha1($email.$pseudo);

		$mail->isHTML(true); 
		                                            // Set email format to HTML
		$mail->Subject = 'Confirmation création de compte';
		
		$mail->Body   = "<h4>THAG</h4>.

		<p>Pour activer votre compte :<p>
		
		<p>Vous venez de créer un compte sur Thag@service.fr. <br>
		Afin de valider cette action, vous devez confirmer votre compte en cliquant sur le lien suivant <a href='$base_url?id=$token'>réinitialiser mon mot de passe</a> <p>;
		
		";
		
		$mail->send();
		
	} catch (Exception $e) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	}

}

