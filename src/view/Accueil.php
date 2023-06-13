<?php
require_once '../../config/appConfig.php';
if(empty($_SESSION)){ header('location: connexion.php');}
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
 ?>

<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>
<body>

<div class="sectionLeft"><h1>Accueil</h1>
    <span style="position: absolute; top: 110px; left: 90px;">
        <img src="../../public/images/sitting-4.png" height="170px">
    </span>
    <span class="LGestionTutorat">
    <b><h3>Gestion du tutorat</h3></b>
    </span>
    <span>
    </span>
    <span class="LOrtEtudesSup">
    ORT Etudes Supérieures
    </span>
    <span class="Lbar">
    <img src="../../public/images/Slide%20Lines.png">
    </span>
</div>

<div class="sectionRight">
    <span style="position: absolute; top: 38%; left: 20%; font-size: 30px; text-align: center;">
         <?php

         if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] != null) {$user=$_SESSION["administrateur"];
             echo '<i style="color: #499C54" class="fa-solid fa-toolbox"> Compte Administrateur</i> <br>';
             echo '<br><div class="alert alert-primary" role="alert">Bonjour</div>';}
            if (isset($_SESSION['tuteur']) && $_SESSION['tuteur'] != null) {
             $user=$_SESSION["tuteur"];
             echo '<i style="color: #499C54" class="fa-solid fa-user"> Compte Tuteur</i> <br>';
             echo '<br><div class="alert alert-primary" role="alert">Bonjour</div>';}

         ?>
         <br>

         <?php
         if (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] != null) {
             $user=$_SESSION["administrateur"];
             echo '<div class="alert alert-primary" role="alert">'.$user->getPreAd(). ' '.$user->getNomAd(). ', vous êtes connectée</div>';}
         if (isset($_SESSION['tuteur']) && $_SESSION['tuteur'] != null) {
             $user=$_SESSION["tuteur"];
             echo '<div class="alert alert-primary" role="alert">'.$user->getNomTut(). ' '.$user->getPreTut(). ', vous êtes connectée</div>';}

         ?>
    </span>
</div>
</body>
</html>

