<?php

require_once '../../../config/appConfig.php';
require '../../model/DAO/Etudiant_DAO.php';

$connexion = new DTO\Bdd($Bdd);
$DAO = new DAO\Etudiant_DAO($connexion->getPDO());
$DAOb = new DAO\Bilan_DAO($connexion->getPDO());
$DAO2 = new DAO\Bilan2_DAO($connexion->getPDO());
$MesEtudiants = $DAO2->getAll();


//foreach ()
    $mesnote = array();
        foreach ($MesEtudiants as $note){
            $note=array(
                'id_bil'=>$note->getIdBil(),
                'dat_bil'=>$note->getDatBil(),
                'not_oral_bil'=>$note->getNotOralBil(),
                'remarque'=>$note->getRemarque(),
                'id_etu'=>$note->getIdEtu()
            );
            $mesnote[]=$note;

    }


echo json_encode($mesnote,JSON_PRETTY_PRINT);


