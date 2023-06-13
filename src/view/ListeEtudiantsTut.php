<?php
require_once "../../config/appConfig.php";
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
if(empty($_SESSION)){ header('location: connexion.php');}
$user=$_SESSION["tuteur"];
    $connexion = new DTO\Bdd($Bdd);
    $DAO = new DAO\Etudiant_DAO($connexion->getPDO());
    $MesEtudiants = $DAO->GetBytuteur($user->getIdTut());
    ?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>



<body>

<div class="sectionLeft"><h1>Liste Etudiants Tuteur</h1>
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
    <table class="customTable">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Spécialité</th>
            <th>Classe</th>
            <th>Détails</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($MesEtudiants as $etudiant) {?>
            <tr>
                <td><?= $etudiant->getNomEtu()?></td>
                <td><?= $etudiant->getPreEtu()?></td>
                <td><?= $etudiant->getTelEtu()?></td>
                <td><?= $etudiant->getMailEtu()?></td>
                <td><?= $etudiant->getSpeEtu()?></td>
                <td><?= $etudiant->getClasseEtu()?></td>
                <td style="text-align: center;"><a style="color: #499C54;" href="Details.php?id_etu=<?= $etudiant->getIdEtu()?>"><i class="fa-solid fa-circle-info"></i></td>

                <!-- <td> <a href="../controller/modif_etudiant_control.php" style="color:floralwhite;"><img src="../../public/img/1160515.png" alt="" style="width:40px"/> </a></td>
                 <td> <a href="../controller/modif_etudiant_control.php" style="color:floralwhite;"><img src="../../public/img/51646.png" alt="" style="width:40px"/> </a></td>
                 <td> <a href="../controller/modif_etudiant_control.php" style="color:floralwhite;"><img src="../../public/img/51646.png" alt="" style="width:40px"/> </a></td>-->
            </tr>
        <?php }?>
        </tbody>
</table>

</div>

</body>
</html>
