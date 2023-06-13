<?php
require_once "../../config/appConfig.php";
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
if(empty($_SESSION)){ header('location: connexion.php');}
?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

    <style>
        input[type=text], select {
            width: 45%;
            padding: 6px 20px;
            display: inline-block;
            border: 0px solid #ccc;
            border-radius: 30px;
            box-sizing: border-box;
            background-color: #efefef;
            font-size: 16px;
        }

    </style>

</head>
<body>


<div class="sectionLeft"><h1>Créer étudiant</h1>
    <br><br><br><br><br><br><br><br>
    <span style="position: absolute; top: 110px; left: 90px;">
        <img src="../../public/images/sitting-4.png" height="170px">
    </span>
    <br><br><br><b><h3>Gestion du tutorat</h3></b>
    <br>ORT Etudes Supérieures
    <br><br><br>
    <img src="../../public/images/Slide%20Lines.png" height="4px">
</div>

<div class="sectionRight">

    <span style="position: absolute; top: 15%; left: 5%;">
    <form method="post" action="../controler/control_ajout_etu.php">

        <input type="text" name="nom_etu" id="nom" placeholder="Nom">
        <input type="text" name="pre_etu" id="prenom" placeholder="Prénom">
        <input type="text" name="tel_etu" id="telephone" placeholder="Téléphone">
        <input type="text" name="mail_etu" id="adresse" placeholder="Adresse">
        <input type="text" name="spe_etu" id="spe_etu" placeholder="spe_etu">
        <input type="text" name="classe_etu" id="classe_etu" placeholder="classe_etu">
        <input type="text" name="autres_etu" id="autres_etu" placeholder="autres_etu">
        <input type="text" name="log_etu" id="log_etu" placeholder="log">
        <input type="text" name="mdp_etu"  id="mdp_etu" placeholder="mdp">

        <span style="position: absolute; top: 300px; left: 38%">
            <input type="submit" value="Enregistrer">

    </form>
        </span>
    </span>
</div>
</body>
</html>