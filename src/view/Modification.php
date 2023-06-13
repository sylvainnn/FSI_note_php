<?php
require_once "../../config/appConfig.php";
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
if(empty($_SESSION)){ header('location: connexion.php');}
$id_tut = intval($_GET['id_tut']);
$connexion = new DTO\Bdd($Bdd);
$repo = new DAO\Tuteur_DAO($connexion->getPDO());
$Tuteur = $repo->GetBytuteur($id_tut);

?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>
<body>


<div class="sectionLeft">
    <h1>Modification</h1>
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
    <style>
        input[type=text], select {
            width: 65%;
            padding: 6px 20px;
            margin: 8px;
            display: inline-block;
            border: 0px solid #ccc;
            border-radius: 30px;
            box-sizing: border-box;
            background-color: #efefef;
            font-size: 16px;
        }
        input[type=number], select {
            width: 65%;
            padding: 6px 20px;
            margin: 8px;
            display: inline-block;
            border: 0px solid #ccc;
            border-radius: 30px;
            box-sizing: border-box;
            background-color: #efefef;
            font-size: 16px;
        }
    </style>
    <?php {if($Tuteur != null ) {{ ?>
    <?php foreach ($Tuteur as $mesBilan) { ?>

    <span style="position: absolute; top: 15%; left: 25%;">
    <form method="post" action="../controler/control_update_tuteur.php?id_tut=<?=$id_tut?>">
        <input type="text"  name="nom_tut" id="nom_tut" value="<?= $mesBilan->getNomTut();?>">
        <input type="text"  name="pre_tut"id="pre_tut" value="<?= $mesBilan->getPreTut();?>">
        <input type="number"  name="tel_tut" id="tel_tut" minlength="5" maxlength="10" value="<?= $mesBilan->getTelTut();?>">
        <input type="text" name="email_tut" id="email_tut" value="<?= $mesBilan->getEmailTut();?>">
        <span style="position: absolute; top: 300px; left: 25%">
            <input type="submit" value="Enregistrer">



    </form>
    </span>
    <?php }}}} ?>
</div>

</body>
</html>