<?php

//  Les inclusions nécessaires
require_once '../../config/appConfig.php';

$idClub = intval($_GET['id_tut']);
$connexion = new DTO\Bdd($Bdd);
$repo = new DAO\Etudiant_DAO($connexion->getPDO());
$repos = new DAO\Tuteur_DAO($connexion->getPDO());
$MesEtudiants = $repo->deletetuteur($idClub);
$MesEtudiants = $repos->deletetuteur($idClub);
header('location: ../view/parametrage.php');
