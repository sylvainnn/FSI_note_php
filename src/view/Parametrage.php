<?php
require_once "../../config/appConfig.php";
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
if(empty($_SESSION)){ header('location: connexion.php');}
$connexion = new DTO\Bdd($Bdd);
$DAO = new DAO\Tuteur_DAO($connexion->getPDO());
$MesTuteurs = $DAO->getAll();
    ?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

    <style>
        table.customTable {
            width: 100%;
            background-color: #FFFFFF;
            border-collapse: collapse;
            border-width: 2px;
            border-color: #499C54;
            border-style: solid;
            color: #000000;
        }

        table.customTable td, table.customTable th {
            border-width: 2px;
            border-color: #499C54;
            border-style: solid;
            padding: 5px;
        }

        table.customTable thead {
            background-color: #499C54;
        }
    </style>

</head>
<body>


<div class="sectionLeft"><h1>paramétrage</h1>
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
    <table class="customTable">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Etudiant affecté</th>
            <th>suprimer</th>
            <th>modifier</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($MesTuteurs as $tuteur) {?>
            <tr>
                <td><?= $tuteur->getNomTut()?></td>
                <td><?= $tuteur->getPreTut()?></td>
                <td><?= $tuteur->getTelTut()?></td>
                <td><?= $tuteur->getEmailTut()?></td>
                <td></td>
                <td style="text-align: center;"><a style="color: #499C54;" href="../controler/control_delete_tuteur.php?id_tut=<?= $tuteur->getIdTut()?>"><i class="fa-solid fa-circle-info"></i></td>
                <td style="text-align: center;"><a style="color: #499C54;" href="modification.php?id_tut=<?= $tuteur->getIdTut()?>"><i class="fa-solid fa-circle-info"></i></td>
                </tr>
        <?php }?>
        </tbody>
    </table>

    <span style="position: absolute; top: 85%; left: 15%">
        <a href="affecterTuteur.php"><input type="submit" value="Affecter tuteur"/>
    </span>


        <a style="position: absolute; top: 85%; left: 37%" href="creerEtudiant.php"><input  type="submit" value="Créer étudiant"/>

        <a style="position: absolute; top: 85%; left: 60%" href="creerTuteur.php"><input  type="submit" value="Créer tuteur"/>

</div>

</body>
</html>
