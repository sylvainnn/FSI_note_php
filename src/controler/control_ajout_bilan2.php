<?php
//  Les inclusions nécessaires
require_once '../../config/appConfig.php';
$id_etu = intval($_GET['id_etu']);
echo $id_etu;
if ('POST' == $_SERVER["REQUEST_METHOD"]) {
    dump_var($_POST, DUMP, '$_POST brut');



    $filters = [
        'dat_bil' => FILTER_SANITIZE_STRING,
        'Not_bil' => FILTER_VALIDATE_FLOAT,
        'Not_oral_bil' => FILTER_VALIDATE_FLOAT,
        'Remarque' => FILTER_SANITIZE_STRING
    ];
    $datas = filter_input_array(INPUT_POST, $filters);
    dump_var($datas, DUMP, '$_POST filtré');
    $userConnect = new DTO\Bilan2($datas);
    $connexion = new DTO\Bdd($Bdd);
    $repo = new DAO\Bilan2_DAO($connexion->getPDO());
    $user = $repo->ajoutbilan2($id_etu,$userConnect );
   //    header('location:../view/NotesBilan2.php?id_etu='.$id_etu);
}

