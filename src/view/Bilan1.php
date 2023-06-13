<?php
require_once "../../config/appConfig.php";
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
if(empty($_SESSION)){ header('location: connexion.php');}
$idClub = intval($_GET['id_etu']);
$id_etu = $idClub;
echo $idClub;
?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>
<body>


<div class="sectionLeft"><h1>Bilan 1</h1>
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
    </style>

    <span style="position: absolute; top: 15%; left: 25%;">
    <form method="post" action="../controler/control_ajout_bilan1.php?id_etu=<?= $id_etu?>">
        <input type="date" name="dat_bil" id="dat_bil" placeholder="Date de visite en entreprise"/>
        <input type="text" name="not_ent_bil" id="not_ent_bil" placeholder="Note fixée par l'entreprise"/>
        <input type="text" name="not_oral_bil" id="not_oral_bil" placeholder="Note du dossier"/>
        <input type="text" name="not_dos_bil" id="not_dos_bil" placeholder="Note d'oral"/>
        <input type="text" name="remarque" id="remarque" placeholder="Remarque"/>




</span>
        <span style="position: absolute; top: 270px; left: 25%">

 <input type="submit" value="Enregistrer"/>


    </span>
    </form>
</div>
</body>
</html>