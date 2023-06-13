<?php

namespace DAO;

use DTO\administrateur;
use DTO\Bdd;
use PDO;

class Administrateur_DAO
{
    private PDO $bdd;

    /**
     * @param PDO $bdd
     */
    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getAll(): ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM administrateur');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new administrateur($row);

            }
        }
        return $resultSet;
    }

    public function GetById($id)
    {
        $resultSet = NULL;
        $query = 'SELECT * FROM administrateur WHERE id_ad=:id_ad;';

        // On prépare la rêquete
        $reqPrep = $this->bdd->prepare($query);

        $res = $reqPrep->execute([':id_ad' => $id]);

        if ($res !== FALSE) {
            $tab = ($tmp = $reqPrep->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if (!is_null($tab)) {
                // Si on récupère une occurence, on crée un objet PERSONNEL avec cette dernière
                $resultSet = new administrateur($tab);
            }
        }
        return $resultSet;
    }

    public function authentify_ad(string $login, string $mdp): bool
    {
        $resultSet = NULL;
        if ($login != NULL) {
            if ($this->bdd) {
                //  Conversion de l'entité en tableau associatif (nécessaire pour le binding)
                $query = 'SELECT * FROM administrateur WHERE log_ad = :login and mdp_ad = :mdp';
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
                        $responsable = new administrateur($row);
                        //  Vérification du mot de passe.
                        // A FIARE PLUS TARD DANS LE SUJET
                        if ($row > 0) {
                            // if ($entity->getMdpPersonnel()== $personnel->getMdpPersonnel()){
                            //  On ne conserve nulle part le password en dehors de la bdd...
                            //  Mise en place des variables de session
                            // A FIARE PLUS TARD DANS LE SUJET
                            $_SESSION['administrateur'] = $responsable;
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
}