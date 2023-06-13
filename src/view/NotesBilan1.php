<?php
require_once "../../config/appConfig.php";
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
if(empty($_SESSION)){ header('location: connexion.php');}
$id_etu = intval($_GET['id_etu']);
$connexion = new DTO\Bdd($Bdd);
$repos = new DAO\Bilan_DAO($connexion->getPDO());;
$Bilan = $repos->GetById($id_etu);
if ($id_etu == null){
    header('location:ListeEtudiants.php');
}
elseif($Bilan == null){
    header('location:Bilan1.php?id_etu='.$id_etu);
}
?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>



<body>

<div class="sectionLeft"><h1>Notes Bilan 1</h1>
    <br><br><br><br><br><br><br><br>
    <span style="position: absolute; top: 110px; left: 90px;">
        <img src="../../public/images/sitting-4.png" height="170px">
    </span>
    <br><br><br><b><h3>Gestion du tutorat</h3></b>
    <br>
    ORT Etudes Supérieures
    <br><br><br>
    <img src="../../public/images/Slide%20Lines.png" height="4px">
</div>


<div class="sectionRight">
    <center><h2>Prénom Nom (élève)</h2></center>
    <table class="customTable">
        <thead>
        <tr>
            <th>Date visite entreprise</th>
            <th>Note entreprise</th>
            <th>Note du dossier</th>
            <th>Note d'oral</th>
            <th>Remarque</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($Bilan as $mesBilan) {?>
            <td><?= $mesBilan->getDatBil() ?></td>
            <td><?= $mesBilan->getNotEntBil() ?></td>
            <td><?= $mesBilan->getNotDosBil() ?></td>
            <td><?= $mesBilan->getNotOralBil() ?></td>
            <td><?= $mesBilan->getRemarque() ?></td>
        </tr>
        <?php }?>
        </tbody>
    </table>

    <span style="position: absolute; top: 50%; left: 40%">
           <a href="Bilan1.php?id_etu=<?= $id_etu?>"><input type="submit" value="Ajouter notes">
    </span>

</div>

</body>
</html>
