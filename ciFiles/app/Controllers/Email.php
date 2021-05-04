<?php namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require './vendor/autoload.php';

class Email extends BaseController
{

    public function send(){



        $mail = new PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        
        //Enable SMTP debugging
        //SMTP::DEBUG_OFF = off (for production use)
        //SMTP::DEBUG_CLIENT = client messages
        //SMTP::DEBUG_SERVER = client and server messages
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
        //if your network does not support SMTP over IPv6,
        //though this may cause issues with TLS
        
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        
        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'ratneshkarbhari74@gmail.com';
        
        //Password to use for SMTP authentication
        $mail->Password = 'biryani@47';
        
        //Set who the message is to be sent from
        $mail->setFrom('ratneshkarbhari74@gmail.com', 'Ratnesh Karbhari');
        
        //Set an alternative reply-to address
        $mail->addReplyTo('noreply@gmail.com', 'Ratnesh Karbhari');
        
        //Set who the message is to be sent to
        $mail->addAddress('ratneshkarbhari74@gmail.com', 'Ratnesh Karbhari');
        $mail->addAddress('vaidehi.prapanchstudio@gmail.com', 'Vaidehi Bugade');
        $mail->addAddress('vinayak.prapanchstudio@gmail.com', 'Vinayak Poriwade');
        $mail->addAddress('gopal.prapanchstudio@gmail.com', 'Gopal Budke');
        

        
        //Set the subject line
        $mail->Subject = 'New Lead';

        $full_name = $this->request->getPost("full_name");
        $email = $this->request->getPost("email");
        $mobile_number = $this->request->getPost("mobile_number");
        
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->Body    = 'Full Name: '.$full_name.'<br>Email: '.$email.'<br>Mobile Number:'.$mobile_number;
        
        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
        
        //Attach an image file
        // $mail->addAttachment('images/phpmailer_mini.png');
        
        //send the message, check for errors
        if ($mail->send()) {
            return redirect()->to(site_url("thank-you")); 

        }
        
        

    }

}