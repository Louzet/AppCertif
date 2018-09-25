<?php 



if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


class Email extends  CI_Controller
{
	public function __construct(){

		parent::__construct();

	}

	public function reinit_password_email()
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
			$base_url = "<?= site_url(); ?>";
			//Content
			$mail->isHTML(true);                                             // Set email format to HTML
			$mail->Subject = 'Réinitialisation de votre de passe';

			ob_start();

			$this->load->view('email/reinit_password_view');

			$mail->Body   = ob_get_clean();
			
		
			$mail->send();
			echo 'Message has been sent';
		} catch (Exception $e) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}

		
	
}

