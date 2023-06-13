<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
require_once '../../../config/appConfig.php';
require '../../model/DAO/Etudiant_DAO.php';

$connexion = new DTO\Bdd($Bdd);

$etudiant = new DAO\Etudiant_DAO($connexion->getPDO());
if (isset($_GET["id"])) 
{
    $data = $etudiant->GetById($_GET ["id"]);
    echo json_encode ($data, JSON_PRETTY_PRINT);
}