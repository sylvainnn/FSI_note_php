<?php
require_once '../../config/appConfig.php';
$id_etu = intval($_GET['id_etu']);
if ('POST' == $_SERVER["REQUEST_METHOD"]) {
    dump_var($_POST, DUMP, '$_POST brut');



    $filters = [
        'dat_bil' => FILTER_SANITIZE_STRING,
        'not_ent_bil' => FILTER_VALIDATE_INT,
        'not_oral_bil' => FILTER_VALIDATE_INT,
        'not_dos_bil' => FILTER_VALIDATE_INT,
        'remarque' => FILTER_SANITIZE_STRING
    ];
    $datas = filter_input_array(INPUT_POST, $filters);
    dump_var($datas, DUMP, '$_POST filtré');
    $userConnect = new DTO\Bilan($datas);
    $connexion = new DTO\Bdd($Bdd);
    $repo = new DAO\Bilan_DAO($connexion->getPDO());
    $user = $repo->ajoutbilan($id_etu,$userConnect );
    header('location:../view/NotesBilan1.php?id_etu='.$id_etu);
}

