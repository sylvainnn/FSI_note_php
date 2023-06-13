<?php
include_once('../../public/inc/header.php');
include_once('../../public/inc/footer.php');
require_once "../../config/appConfig.php";
$connexion = new DTO\Bdd($Bdd);
$DAO = new DAO\Etudiant_DAO($connexion->getPDO());
$MesEtudiants = $DAO->getAll();
$DAOtut = new DAO\Tuteur_DAO($connexion->getPDO());
$MesTuteur = $DAOtut->getAll();
if (empty($_SESSION) || $_SESSION['tuteur']) {
    header('location: connexion.php');
}
?>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>
<body>


<div class="sectionLeft">
    <h1>Affecter tuteur</h1>
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
    <span style="position: absolute;
            width: 37%;
            bottom: 85%;
            padding: 6px 20px;
            display: inline-block;
            border-radius: 30px;
            box-sizing: border-box;
            font-size: 16px;">
        <div class="select">
            <form method="POST" action="../controler/control_affe.php">
                <select name="id_etu">
                    <?php foreach ($MesEtudiants as $etudiant) { ?>
                        <option value="<?= $etudiant->getIdEtu() ?>"><?= $etudiant->getNomEtu() ?></option>
                    <?php } ?>
                </select>

        </div>
    </span>
    <span style="position: absolute;
            width: 37%;
            bottom: 70%;
            padding: 6px 20px;
            display: inline-block;
            border-radius: 30px;
            box-sizing: border-box;
            font-size: 16px;">
        <div class="select">
            <select name="id_tut">
                <?php foreach ($MesTuteur as $Tuteur) { ?>
                    <option value="<?= $Tuteur->getIdTut() ?>"><?= $Tuteur->getNomTut() ?></option>
                <?php } ?>
            </select>
        </div>
    </span>
    <span style="position: absolute; bottom: 50%; left: 39%">
        <input type="submit" value="Enregistrer">
    </span>
    </form>
</div>

</body>
</html>