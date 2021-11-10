<?php
/*
    This config file is specific to the development machine.
    The config file on production will have the same
      functions, but they will return different values.
  */
  //Import PHPMailer classes into the global namespace
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require_once "vendor/phpmailer/phpmailer/src/PHPMailer.php";
  require_once "vendor/phpmailer/phpmailer/src/SMTP.php";
  require_once "vendor/phpmailer/phpmailer/src/Exception.php";

  function createMailer($debug=false) {
    //$debugMode = $debug ? 2 : 0;
    $mail = new PHPMailer(true);
  
    // Change these values to match your settings
    $mail->Host = "mail.alejandroarguinzones.com"; // hotmail.com or outlook.com
    $mail->Port = 25;
    $mail->Username = 'info@alejandroarguinzones.com'; // SMTP account username
    $mail->Password = '214675263AAAelMORO!'; // SMTP account password
    $mail->setFrom('info@alejandroarguinzones.com', 'Alejandro Arguinzones');
    
    // Uncomment the next line and change the email address
    //   if you don't want replies to go to the from address
    // $mail->addReplyTo('donotreply@example.com');
  
    // Don't change values below this
    $mail->IsSMTP(); // use Simple Mail Transfer Protocol
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = 'TLS'; // use Transport Layer Security
    $mail->isHTML(true); // send as HTML
    $mail->SMTPDebug = 0; // Debugging. 0 = no debug output
  
    return $mail;
    
    
  }
?>