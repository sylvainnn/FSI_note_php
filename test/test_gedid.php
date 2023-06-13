<?php


//  Permet d'utiliser le typage fort. !! Laisser en première ligne !!
declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

//  Pour avoir la configuration et les informations de connexion dans $infoBdd
require_once '../config/appConfig.php';
//  Pour utiliser les fonctions
$connexion = new DTO\Bdd($Bdd);
$repo = new DAO\Etudiant_DAO($connexion->getPDO());


dump_var($connexion, DUMP, 'Objet PDO:');

if (!is_null($connexion)) {
    $res = $repo->GetById( 2);
    dump_var($res, DUMP, 'getClubId(1):');

    $res = $repo->GetById( 9999);
    dump_var($res, DUMP, 'getClubId(9999):');

    $res = $repo->GetById( '9999');
    dump_var($res, DUMP, 'getClubId("9999"):');
} else {
    echo '<h1>Erreur de création de la connexion $db</h1>';
}
