<?php

namespace DAO;

use DTO\Etudiant;
use DTO\Bilan;

class Etudiant_DAO
{
    private \PDO $bdd;

    public function __construct(\PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getAll(): ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM etudiant');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new Etudiant($row) ;

            }
        }
        return $resultSet;
    }

    public function GetById(int $id): ?Etudiant
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM `etudiant`WHERE id_etu = :id_etu';

        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_etu' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if (!is_null($tab)) {

                $resultSet = new Etudiant($tab);
            }
        }
        return $resultSet;
    }
    public function GetBytuteur(int $id): ?array{
        $resultSet = NULL;
        $query = 'SELECT * FROM etudiant  where id_tut = :id_tut;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_tut' => $id]);

        if ($res) {
            $reqPrep->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($reqPrep as $row) {
                $resultSet[] = new Etudiant($row);

            }
        }
        return $resultSet;
    }

    public function getAllbilan(): ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM etudiant e INNER JOIN bilan b ON e.id_etu = b.id_etu');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new Bilan($row);

            }
        }
        return $resultSet;
    }
    public function deletetuteur(int $id): bool
    {
        $resultSet = NULL;
        $query = 'UPDATE `etudiant` SET `id_tut`= NULL WHERE `id_tut` = :id_tut;';

        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_tut' => $id]);

        if($res = true){
            return true;
        }else return false;
    }
    public function affecter(Etudiant $entity): ?Etudiant
    {
        $resultSet = NULL;
        $query = 'UPDATE `etudiant` SET `id_tut`= :id_tut WHERE `id_etu` = :id_etu;';

        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_tut' => $entity->getIdTut(),':id_etu' => $entity->getIdEtu()]);

        return $entity;
    }
    public function ajoutetu(Etudiant $entity): ?Etudiant
    {
        $resultat = true;

        $query = "INSERT INTO `etudiant`( `nom_etu`, `pre_etu`, `tel_etu`, `mail_etu`, `spe_etu`, `classe_etu`,".
                      " `autres_etu`, `log_etu`, `mdp_etu`) VALUES".
                        "(:nom_etu,:pre_etu,:tel_etu,:mail_etu,:spe_etu,".
                       ":classe_etu,:autres_etu,:log_etu,:mdp_etu)";
        //dump_var($entity, DUMP, '$entity dans ma fonction ajout Resa');
        $reqPrep = $this->bdd->prepare($query);
        $pass = md5($entity->getMdpEtu());

        $res = $reqPrep->execute(
            [':nom_etu' => $entity->getNomEtu(),
                ':pre_etu' => $entity->getPreEtu(),
                ':tel_etu' => $entity->getTelEtu(),
                ':mail_etu' => $entity->getMailEtu(),
                ':spe_etu' => $entity->getSpeEtu(),
                ':classe_etu' => $entity->getClasseEtu(),
                ':autres_etu' => $entity->getAutresEtu(),
                ':log_etu' => $entity->getLogEtu(),
                ':mdp_etu' => $pass
            ]
        );
        return $entity;
    }
    public function deleteetudian(int $id): bool
    {
        $query = 'DELETE FROM `etudiant` WHERE id_etu = :id_etu;';

        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_etu' => $id]);

        if($res = true){
            return true;
        }else return false;
    }
}