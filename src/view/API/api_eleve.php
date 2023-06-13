<?php

require_once '../../../config/appConfig.php';
require '../../model/DAO/Etudiant_DAO.php';

$connexion = new DTO\Bdd($Bdd);
$DAO = new DAO\Etudiant_DAO($connexion->getPDO());
$DAOb = new DAO\Bilan_DAO($connexion->getPDO());
$DAO2 = new DAO\Bilan2_DAO($connexion->getPDO());
$MesEtudiants = $DAO->getAll();
// $mesnote = $DAOb->getAll();


//foreach ()
$Mesetu = array();
foreach ($MesEtudiants as $etudiant) {

    $etu= array(
        "id_etu"=>$etudiant->getIdEtu(),
        "nom_etu"=>$etudiant->getNomEtu(),
        "pre_etu"=>$etudiant->getNomEtu(),
        "tel_etu"=>$etudiant->getTelEtu(),
        "mail_etu"=>$etudiant->getMailEtu(),
        "spe_etu"=>$etudiant->getSpeEtu(),
        "classe_etu"=>$etudiant->getClasseEtu(),
        "autres_etu"=>$etudiant->getAutresEtu(),
        "log_etu"=>$etudiant->getLogEtu(),
        "mdp_etu"=>$etudiant->getMdpEtu(),
    );




    // rajoute dans le table $etu l'indice note $etu['notes'] = $notesEtudiant

    $Mesetu[]=$etu;
}



echo json_encode($Mesetu,JSON_PRETTY_PRINT);
