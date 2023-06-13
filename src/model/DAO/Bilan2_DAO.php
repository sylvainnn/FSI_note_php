<?php

namespace DAO;

use DTO\Bilan2;

class Bilan2_DAO
{
    private \PDO $bdd;

    public function __construct(\PDO $bdd)
    {
        $this->bdd = $bdd;
    }
    public function ajoutbilan2(int $id_etu,bilan2 $entity): ?bilan2
    {
        $resultat = true;

        $query = "INSERT INTO `bilan2`(`dat_bil`, `Not_bil`, `Not_oral_bil`, `Remarque`, `id_etu`) VALUES (:dat_bil,:Not_bil,:Not_oral_bil,:Remarque,:id_etu,);";
         dump_var($entity, DUMP, '$entity dans ma fonction ajout Resa');
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute(
            [':dat_bil' => $entity->getDatBil(),
                ':Not_bil' => $entity->getNotBil(),
                ':Not_oral_bil' => $entity->getNotOralBil(),
                ':Remarque' => $entity->getRemarque(),
                ':id_etu' => $id_etu
            ]
        );
        return $entity;
    }
    public function GetById(int $id): ?array
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM bilan2 WHERE id_etu =:id_etu;';

        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_etu' => $id]);

        if ($res) {
            $reqPrep->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($reqPrep as $row) {
                $resultSet[] = new bilan2($row);

            }
        }
        return $resultSet;
    }

    public function getAll():?array
    {

        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM bilan2');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new bilan2($row);

            }
        }
        return $resultSet;
    }
}