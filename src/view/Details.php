<?php
require_once "../../config/appConfig.php";
$id_etu = intval($_GET['id_etu']);
$connexion = new DTO\Bdd($Bdd);
$repo = new DAO\Etudiant_DAO($connexion->getPDO());
$repos = new DAO\Entreprise_DAO($connexion->getPDO());
$etudiant = $repo->GetById($id_etu);
$entreprise = $repos->GetByEntreprise($id_etu);
if(empty($_SESSION)){ header('location: connexion.php');}
?>


<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>
<body>
<?php
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
?>

<div class="sectionLeft"><h1>Détails</h1>
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
    <span style="position: absolute; left: 5%; top: 5%; font-size: 26px;">
        <b>Informations de l'étudiant</b>
    </span>
    <span style="position: absolute; left: 5%; top: 15%">
        <?= $etudiant->getNomEtu()?> <?= $etudiant->getPreEtu()?><br><br>
        <?= $etudiant->getClasseEtu()?><br><br>
        <?= $etudiant->getTelEtu()?><br><br>
        (Adresse)<br><br>
        <?= $etudiant->getMailEtu()?>
    </span>
    <span style="position: absolute; left: 5%; top: 55%; font-size: 26px;">
        <b>Sujets d'analyses</b>
    </span>
    <span style="position: absolute; left: 5%; top: 65%">
        (Sujet d'analyse 3OLEN)<br><br>
        (Sujet de mémoire 4 et 5OLEN)
    </span>
    <span style="position: absolute; left: 55%; top: 5%; font-size: 26px;">
        <b>Informations de l'entreprise</b>
    </span>
    <span style="position: absolute; left: 55%; top: 15%">
        <?php if($entreprise != null ) {?>
        <?= $entreprise->getLibEnt()?><br><br>
          <?= $entreprise->getAdrEnt()?>,<?= $entreprise->getVillEnt()?>,<?= $entreprise->getCpEnt()?><br><br>
        <?= $entreprise->getPreEntTut()?> <?= $entreprise->getPreEntTut()?><br><br>
        <?= $entreprise->getTelEntTut()?><br><br>
        <?= $entreprise->getEmailEntTut()?>
        <?php } ?>
    </span>
    <span style="position: absolute; left: 5%; top: 83%">
    <a href="NotesBilan1.php?id_etu=<?= $id_etu?>"><input type="submit" value="Bilan 1">
    </span>
    <a style="position: absolute; left: 20%; top: 83%" href="NotesBilan2.php?id_etu=<?= $id_etu?>"><input type="submit" value="Bilan 2">
</div>
</body>
</html>