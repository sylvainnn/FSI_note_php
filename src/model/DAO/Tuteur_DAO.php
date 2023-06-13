<?php

namespace DAO;
use DTO\Tuteur;
use PDO;
class Tuteur_DAO


{
    private PDO $bdd;

    /**
     * @param PDO $bdd
     */
    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }


    public function authentify_tut(string $login, string $mdp): bool
    {
        $resultSet = NULL;
        if ($login != NULL) {
            if ($this->bdd) {
                //  Conversion de l'entité en tableau associatif (nécessaire pour le binding)
                $query = 'SELECT * FROM tuteur WHERE log_tut = :login and mdp_tut = :mdp';
                //  Préparation et exécution de la requête
                $reqPrep = $this->bdd->prepare($query);
                $rqtResult = $reqPrep->execute([
                    ':login' => $login,
                    ':mdp' => $mdp
                ]);
                if ($rqtResult) {
                    //  Récupération des résultats d'exécution de la requête

                    $row = $reqPrep->fetch(\PDO::FETCH_ASSOC);
                    if ($row) {
                        //  On a un résultat
                        $responsable = new tuteur($row);
                        //  Vérification du mot de passe.
                        // A FIARE PLUS TARD DANS LE SUJET
                        if ($row > 0) {
                            // if ($entity->getMdpPersonnel()== $personnel->getMdpPersonnel()){
                            //  On ne conserve nulle part le password en dehors de la bdd...
                            //  Mise en place des variables de session
                            // A FIARE PLUS TARD DANS LE SUJET
                            $_SESSION['tuteur'] = $responsable;
                            //  Authentification réussie, on retournera TRUE
                            $resultSet = TRUE;
                        } else
                            $resultSet = FALSE;
                    } else
                        $resultSet = FALSE;
                } else
                    $resultSet = FALSE;
            } else
                $resultSet = FALSE;
        }
        return $resultSet;
    }
    public function getAll(): ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM tuteur');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new Tuteur($row) ;

            }
        }
        return $resultSet;
    }
    public function deletetuteur(int $id): bool
    {
        $resultSet = NULL;
        $query = 'DELETE FROM `tuteur` WHERE `id_tut` = :id_tut;';

        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_tut' => $id]);

        if($res = true){
            return true;
        }else return false;
    }
    public function GetBytuteur(int $id): ?array{
        $resultSet = NULL;
        $query = 'SELECT * FROM `tuteur` where id_tut = :id_tut;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_tut' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {

                $resultSet[] = new Tuteur($tab);
            }
        }
        return $resultSet;
    }
    public function updateTuteur($id,Tuteur $entity): ?Tuteur{
        $query = 'UPDATE `tuteur` SET `nom_tut`=:nom_tut,`pre_tut`=:pre_tut,`tel_tut`=:tel_tut,`email_tut`=:email_tut WHERE `id_tut` =:id_tut';
        $reqPrep = $this->bdd->prepare($query);
        $res = $reqPrep->execute([':id_tut' =>$id,
                                 ':nom_tut' =>$entity->getNomTut(),
                                   ':pre_tut' =>$entity->getPreTut(),
                                   ':tel_tut' =>$entity->getTelTut(),
                                   ':email_tut' =>$entity->getEmailTut()]);
        return $entity;
    }

}

