<?php

namespace DAO;

use DTO\Bilan;
use DTO\Bdd;
use PDO;

class Bilan_DAO
{
    private \PDO $bdd;

    public function __construct(\PDO $bdd)
    {
        $this->bdd = $bdd;
    }
    public function ajoutbilan(int $id_etu,bilan $entity): ?bilan
    {
        $resultat = true;

        $query = "INSERT INTO bilan" .
            " (dat_bil, not_ent_bil, not_oral_bil,not_dos_bil,remarque,id_etu)"
            . " VALUES (:dat_bil,  :not_ent_bil, :not_oral_bil,:not_dos_bil,:remarque,:id_etu)";
        //dump_var($entity, DUMP, '$entity dans ma fonction ajout Resa');
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute(
            [':dat_bil' => $entity->getDatBil(),
                ':not_ent_bil' => $entity->getNotEntBil(),
                ':not_oral_bil' => $entity->getNotOralBil(),
                ':not_dos_bil' => $entity->getNotDosBil(),
                ':remarque' => $entity->getRemarque(),
                ':id_etu' => $id_etu
            ]
        );
        return $entity;
    }
    public function GetById(int $id): ?array
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM bilan WHERE id_etu =:id_etu;';

        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_etu' => $id]);

        if ($res) {
            $reqPrep->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($reqPrep as $row) {
                $resultSet[] = new bilan($row);

            }
        }
        return $resultSet;
    }
    public function getAll(): ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM bilan');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new bilan($row);

            }
        }
        return $resultSet;
    }
}