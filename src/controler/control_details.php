<?php
require_once '../../config/appConfig.php';
$idClub = intval($_GET['id_etu']);
echo $idClub;
$connexion = new DTO\Bdd($Bdd);

$filters = array(
    'id_etu' => FILTER_VALIDATE_INT,
);
$datas = filter_input_array(INPUT_POST, $filters);
dump_var($datas, DUMP, '$_POST filtré');
$repo = new DAO\Etudiant_DAO($connexion->getPDO());
$MesEtudiants = $repo->GetById($idClub);
dump_var($MesEtudiants, DUMP, 'getClubId(1):');

