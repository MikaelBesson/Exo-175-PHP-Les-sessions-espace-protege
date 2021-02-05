<?php

$_SESSION['passOK'] = "groot";

if($_POST["pass"] === $_SESSION['passOK']){
    ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>tu as reussi</title>
</head>
<body>
    <div id="cont1"><h3>Bravo !! la force est avec toi</h3></div>
</body>
</html>
<?php
}
else {
    ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>tu as echoué</title>
</head>
<body>
    <div id="cont2"><h3>Raté !! le coté obscur t'emporte</h3></div>
</body>
</html>
    <?php
}


