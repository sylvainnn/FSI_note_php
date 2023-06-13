<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
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
     $mesnote = array();
     $bilannote2 = array();
     $idetu=$etudiant->getIdEtu();
     $notesEtudiant = $DAOb->GetById($idetu);
     $bilan2 = $DAO2->GetById($idetu);
     if ($notesEtudiant) {
         foreach ($notesEtudiant as $note){
             $note=array(
                 'id_bil'=>$note->getIdBil(),
                 'dat_bil'=>$note->getDatBil(),
                 'not_ent_bil'=>$note->getNotEntBil(),
                 'not_oral_bil'=>$note->getNotOralBil(),
                 'not_dos_bil'=>$note->getNotDosBil(),
                 'remarque'=>$note->getRemarque()
             );
             $mesnote[]=$note;
         }
     }
     if ($bilan2) {
        foreach ($bilan2 as $note){
            $note=array(
             'id_bil'=>$note->getIdBil(),
             'Dat_bil'=>$note->getDatBil(),
             'Not_bil'=>$note->getNotBil(),
             'NotOralBil'=>$note->getNotOralBil(),
             'remarque'=>$note->getRemarque()
         );
         $bilannote2[]=$note;
         }
     }
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
         "id_tut"=>$etudiant->getIdTut(),
         "Bilan_1" => $mesnote,
         "Bilan 2" => $bilannote2

     );




     // rajoute dans le table $etu l'indice note $etu['notes'] = $notesEtudiant

         $Mesetu[]=$etu;
 }



echo json_encode($Mesetu,JSON_PRETTY_PRINT);


