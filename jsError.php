<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alejandro Arguinzones | JavaScript Error</title>
    <link rel="stylesheet" type="text/css" href="css/indexStyle.css">
</head>
<body class="errorBody">
<div class="errorDiv">
<div>
        <img class="errorImagen" src="images/icon.png" alt="">
    </div>
    <div>
        <p class="errorJS">Alejandro Arguinzones</p>
    </div>

</div>
    <h1>JavaScript <strong style="color:red">Required</strong></h1>
    <hr>
    <p>We're sorry, but this page dosen't work property without Javascript enabled,
        Here are the <a href="https://www.enable-javascript.com/" target="_blank"> instructions how to enable JavaScript in your browser</a>
     </p>
     <?php 
     $a = $_GET['a'] ?? '';
     if($a == 'own'){?>
        <p><a href="index.php">return to Alejandro Arguinzones</a></p>
     <?php }elseif($a == 'pet'){?>
        <p><a href="petshopsandy/index.php">return to Sandy's Pet Shop</a></p>
     <?php }else{ echo"";} ?>
</body>
</html>