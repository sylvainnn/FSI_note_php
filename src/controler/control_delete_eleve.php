<?php

//  Les inclusions nécessaires
require_once '../../config/appConfig.php';

$idClub = intval($_GET['id_etu']);
echo $idClub;
$connexion = new DTO\Bdd($Bdd);
$repo = new DAO\Etudiant_DAO($connexion->getPDO());
$MesEtudiants = $repo->deleteetudian($idClub);
header('location: ../view/listeEtudiants.php');
