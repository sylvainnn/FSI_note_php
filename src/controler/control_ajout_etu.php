<?php
require_once '../../config/appConfig.php';
if ('POST' == $_SERVER["REQUEST_METHOD"]) {
    dump_var($_POST, DUMP, '$_POST brut');



    $filters = [
        'nom_etu' => FILTER_SANITIZE_STRING,
        'pre_etu' => FILTER_SANITIZE_STRING,
        'tel_etu' => FILTER_SANITIZE_STRING,
        'mail_etu' => FILTER_SANITIZE_STRING,
        'spe_etu' => FILTER_SANITIZE_STRING,
        'classe_etu' => FILTER_SANITIZE_STRING,
        'autres_etu' => FILTER_SANITIZE_STRING,
        'log_etu' => FILTER_SANITIZE_STRING,
        'mdp_etu' => FILTER_SANITIZE_STRING
    ];
    $datas = filter_input_array(INPUT_POST, $filters);
    dump_var($datas, DUMP, '$_POST filtré');
    $userConnect = new DTO\Etudiant($datas);
    $connexion = new DTO\Bdd($Bdd);
    $repo = new DAO\Etudiant_DAO($connexion->getPDO());
    $user = $repo->ajoutetu($userConnect);
    header('location:../view/NotesBilan1.php?id_etu='.$id_etu);
}