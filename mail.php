<?php
header('Content-type: application/json');
require_once 'mail-config-sample.php';
require_once 'includes/utilities.php';
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$destinoMail = 'arguinzones.alejandro@gmail.com';
$name = ucfirst($_POST['firstName']).' '.ucfirst($_POST['lastName']);
$email = $_POST['email'];
$message = $_POST['message'];
$date =date('Y');
// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


$mensaje ='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alejandro Arguinzones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css"> 
        #estilo-blue{
            background: -webkit-linear-gradient(180deg, #fff 33%, rgba(0, 0, 0, 0) 34%), linear-gradient(180deg, black 66%, #fff 66%)!important;
            background: -o-linear-gradient(180deg, #fff 33%, rgba(0, 0, 0, 0) 34%), linear-gradient(180deg, black 66%, #fff 66%)!important;
            background: -moz-linear-gradient(180deg, #fff 33%, rgba(0, 0, 0, 0) 34%), linear-gradient(180deg, black 66%, #fff 66%)!important;
            background: linear-gradient(180deg, #fff 33%, rgba(0, 0, 0, 0) 34%), linear-gradient(180deg, black 66%, #fff 66%)!important;
            padding:46px; color:white!important;
        }
        #color{color: white!important;} 
        .phone{color: black!important;}
        body{background-color:#fff!important;}
        #direccion{line-height: 5px;}
        img{top: 3px; position: fixed; left: 50%; margin-left: -50px;}
        #backgroun-footer{background-color: black!important; color: white!important;}
    </style>
</head>
<body>
        <div class="container" >
            <div class="row" id="estilo-blue">
                <div class="col-sm-12 col-md-12 col-lg-12  text-center">
                        <a id="color" href="www.alejandroarguinzones.com" style="text-decoration:none;">
                            <img alt="PHPMailer" src="cid:my-attach" width="100px" >
                        </a>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" ><br>
                    <p><strong>Name:</strong> '.$name.'.</p>
                    <p><strong>Email:</strong> '.$email.'</p>
                    <p><strong>Messages:</strong> '.$message.'</p>
                    <br>
                    <div id="direccion">
                        <p><strong>Alejandro Arguinzones</strong></p>
                        <p><a class="phone" href="tel:+14075917617">Phone. (407) 5917617</a></p>
                        <p><a href="www.alejandroarguinzones.com">www.alejandroarguinzones.com</a></p>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row"><a ></a>
                <div class="col-sm-12 col-md-12 col-lg-12" id="backgroun-footer">
                    <h6 align="center" style="font-size: 12px">Copyright &copy; '.$date.' Alejandro Arguinzones.</h6>
                </div>  
            </div>
        </div>      
</body>
</html>';

$mensaje2 ='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alejandro Arguinzones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css"> 
        #estilo-blue{
            background: -webkit-linear-gradient(180deg, #fff 33%, rgba(0, 0, 0, 0) 34%), linear-gradient(180deg, black 66%, #fff 66%)!important;
            background: -o-linear-gradient(180deg, #fff 33%, rgba(0, 0, 0, 0) 34%), linear-gradient(180deg, black 66%, #fff 66%)!important;
            background: -moz-linear-gradient(180deg, #fff 33%, rgba(0, 0, 0, 0) 34%), linear-gradient(180deg, black 66%, #fff 66%)!important;
            background: linear-gradient(180deg, #fff 33%, rgba(0, 0, 0, 0) 34%), linear-gradient(180deg, black 66%, #fff 66%)!important;
            padding:46px; color:white!important;
        }
        #color{color: white!important;} 
        .phone{color: black!important;}
        body{background-color:#fff!important;}
        #direccion{line-height: 5px;}
        img{top: 3px; position: fixed; left: 50%; margin-left: -50px;}
        #backgroun-footer{background-color: black!important; color: white!important;}
    </style>
</head>
<body>
        <div class="container" >
            <div class="row" id="estilo-blue">
                <div class="col-sm-12 col-md-12 col-lg-12  text-center">
                        <a id="color" href="http://www.alejandroarguinzones.com" style="text-decoration:none;">
                            <img alt="PHPMailer" src="cid:my-attach"width="100px" >
                        </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" ><br>
                    <p>Hello, '.$name.'.</p>
                    <p>&#161;Thank you for contacting me; A will respond your request as soon as possible.</p>
                    <br>
                    <div id="direccion">
                        <p><strong>Alejandro Arguinzones</strong></p>
                        <p><a class="phone" href="tel:+14075917617">Phone. (407) 5917617</a></p>
                        <p><a href="http://www.alejandroarguinzones.com">www.alejandroarguinzones.com</a></p>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row"><a ></a>
                <div class="col-sm-12 col-md-12 col-lg-12" id="backgroun-footer">
                    <h6 align="center" style="font-size: 12px">Copyright &copy; '.$date.' Alejandro Arguinzones.</h6>
                </div>  
            </div>
        </div>      
</body>
</html>';
if(!empty($_POST['firstName'])&& !empty($_POST['lastName'])
&& !empty($_POST['email']) && !empty($_POST['message'])){ 
    try {
        $mail = createMailer();
        for($i=0; $i<=1; $i++){
            if($i == '0'){
                    $mail->addAddress('info@alejandroarguinzones.com', 'Alejandro Arguinzones');     // Add a recipient
            }else if($i == '1'){
                    $mail->ClearAllRecipients();
                    $mail->addAddress($email, $name);     // Add a recipient
            }
            //Server settings
            $mail->addReplyTo('no-reply@gmail.com', 'Information');
            $mail->AddEmbeddedImage("images/logo.png", "my-attach", "logo.png");
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Customer message: '.$name.'';
            if($i == '0'){
                $mail->Body    = $mensaje;
                $mail->AltBody = $mensaje;
            }else if($i == '1'){
                $mail->Body    = $mensaje2;
                $mail->AltBody = $mensaje2;
            }
            $mail->send();
        }
        return print(json_encode('ok'));
    } catch (Exception $e) {
      logError($e, true);
    }
}

?>