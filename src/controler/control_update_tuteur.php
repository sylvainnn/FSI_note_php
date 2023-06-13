<?php
require_once '../../config/appConfig.php';
$id=intval($_GET['id_tut']);
header('location: ../view/parametrage.php');
if ('POST' ==$_SERVER["REQUEST_METHOD"]) {
    $filters = [
        'nom_tut' => FILTER_SANITIZE_STRING,
        'pre_tut' => FILTER_SANITIZE_STRING,
        'tel_tut' => FILTER_SANITIZE_STRING,
        'email_tut' => FILTER_SANITIZE_STRING,
    ];
    $datas = filter_input_array(INPUT_POST, $filters);
    $userConnect = new DTO\Tuteur($datas);
    $connexion = new DTO\Bdd($Bdd);
    $repo = new DAO\Tuteur_DAO($connexion->getPDO());
    $user = $repo->updateTuteur($id,$userConnect);
    }