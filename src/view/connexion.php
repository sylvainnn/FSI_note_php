<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <!-- <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/> -->

</head>
<body>
<?php
include_once  ('../../public/inc/footer.php');
include_once('../../public/inc/headerConnexion.php');
require '../../config/appConfig.php';
?>

<div class="sectionLeft"><h1>Connexion</h1>
    <br><br><br><br><br><br><br><br>
    <span style="position: absolute; top: 110px; left: 90px;">
        <img src="../../public/images/sitting-4.png" height="170px">
    </span>
    <br><br><br><b><h3>Gestion du tutorat</h3></b>
    <br>ORT Etudes Supérieures
    <br><br><br>
    <img src="../../public/images/Slide%20Lines.png" height="4px">
</div>
<link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

<div class="sectionRight">
    <span style="position: absolute; top: 20%; left: 40%; color: black;"
    <b><h1>Connexion</h1></b>
    </span>



    <span style="position: absolute; top: 40%; left: 33%">
    <form method="post" action="../controler/control_connexion.php">

        <input type="text" name="log_ad" id="log_ad" placeholder="Login"/>

        <input type="password" name="mdp_ad" id="mdp_ad" placeholder="Mot de passe"/>

        <input type="submit" value="Connexion" />
    </form>
    </span>
</div>

</body>
</html>