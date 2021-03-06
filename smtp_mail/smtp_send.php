<?php
/**

 * This example shows making an SMTP connection with authentication.

 */

//SMTP needs accurate times, and the PHP time zone MUST be set

//This should be done in your php.ini, but this is how to do it if you don't have access to that

//date_default_timezone_set('Etc/UTC');

require 'smtp_mail/PHPMailerAutoload.php';

//require APP_INCLUDE_Library.'smtp_mail/Security.php';


class SMTP_mail {

    public $mail;

    public $sender_email;

    public $username;

    public $password;

    public $host;

    public $port;

    public $subject;   

    public $sender_name;

   // public $product_name;
    public function __construct() {
//        $this->mail = new PHPMailer;        
//        $this->port = 465;
//        $this->host = "hostingserver.leewaysoftech.com";       
//        $this->username = "info@aranyavilas.com";
//        $this->password = "@rany2!nf0#m21l";
        $this->mail = new PHPMailer;        
        $this->port = 465;
        $this->host = "mail.codexives.com";       
        $this->username = "info@codexives.com";
        $this->password = "info@123CDX";
    }   
    public function sendTestMail($data) {       
        
        $this->sender_email ='info@codexives.com';

        $this->sender_name ='Aranyavilas';

        $this->subject ='Contact us details';

        $this->mail->isSMTP();

        $this->mail->SMTPDebug = 0;

        $this->mail->Debugoutput = 'html';

        $this->mail->Host = $this->host;

        $this->mail->Port = $this->port;

        $this->mail->SMTPAuth = true;

        $this->mail->SMTPSecure = true;

        $this->mail->Username = $this->username;

        $this->mail->Password = $this->password;

        $this->mail->setFrom($this->sender_email,"Aranyavilas");

        $this->mail->addAddress("info@aranyavilas.com");

        $this->mail->Subject = $this->subject;

        $this->mail->isHTML(true);                                  // Set email format to HTML                                   
        $this->mail->Body ='Name: '.$data['name'].'<br> Email: '.$data['email'].'<br> Subject:'.$data['subject'].'<br> Message:'.$data['message'];

        $this->mail->AltBody = "";

        $resultMail=array();
        $resultMail['success']=0;
        $res=$this->mail->send();        
        if($res==1){
//            print_r($res);die;
            $resultMail['success']=1;
            return $resultMail;
        }else {
//            print_r($res);die;
            $resultMail['Error']="Mailer Error: " . $this->mail->ErrorInfo;
//            print_r($resultMail);die;
            return $resultMail;
        }
    }     
}
?>
