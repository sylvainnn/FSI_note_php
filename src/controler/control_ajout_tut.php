<?php
require_once '../../config/appConfig.php';
if ('POST' == $_SERVER["REQUEST_METHOD"]) {
    dump_var($_POST, DUMP, '$_POST brut');



    $filters = [
        'nom_tut' => FILTER_SANITIZE_STRING,
        'pre_tut' => FILTER_SANITIZE_STRING,
        'tel_tut' => FILTER_SANITIZE_STRING,
        'email_tut' => FILTER_SANITIZE_STRING,
    ];
    $datas = filter_input_array(INPUT_POST, $filters);
    dump_var($datas, DUMP, '$_POST filtré');
    $userConnect = new DTO\Tuteur($datas);
    $connexion = new DTO\Bdd($Bdd);
    $repo = new DAO\Tuteur_DAO($connexion->getPDO());
    $user = $repo->ajouttut($userConnect);
    header('location:../view/NotesBilan1.php?id_etu='.$id_tut);
}