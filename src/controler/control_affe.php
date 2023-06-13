<?php
require_once '../../config/appConfig.php';
$connexion = new DTO\Bdd($Bdd);
$filters = array(
    'id_tut' => FILTER_VALIDATE_INT,
    'id_etu' => FILTER_VALIDATE_INT
);
$datas = filter_input_array(INPUT_POST, $filters);
dump_var($datas, DUMP, '$_POST filtré');
$userConnect = new DTO\Etudiant($datas);
dump_var($userConnect, DUMP, '$_POST filtré');
$repo = new DAO\Etudiant_DAO($connexion->getPDO());
$MesEtudiants = $repo->affecter($userConnect);
dump_var($MesEtudiants, DUMP, '$_POST filtré');
header('location: ../view/listeEtudiants.php');