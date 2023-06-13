<?php
require_once '../../config/appConfig.php';
if($_SESSION){
    header('location: ../view/accueil.php');
}
else {
    if ('POST' == $_SERVER["REQUEST_METHOD"]) {
        //dump_var($_POST, DUMP, '$_POST brut');

        $login = $_POST['log_ad'];
        $mdp = $_POST['mdp_ad'];;
        if ($login != null && $mdp != null) {
            $filters = array(
                'log_ad' => FILTER_SANITIZE_SPECIAL_CHARS,
                'mdp_ad' => FILTER_SANITIZE_SPECIAL_CHARS,
            );
            $datas = filter_input_array(INPUT_POST, $filters);
            //  Instanciation d'un objet User avec les données filtrées
            $userConnect = new DTO\Administrateur($datas);
            $userConnect = new DTO\Tuteur($datas);


            $connexion = new DTO\Bdd($Bdd);

            //  Instanciation du  et authentification de la personne
            $repo = new DAO\Administrateur_DAO($connexion->getPDO());

            $user = $repo->Authentify_ad($login, $mdp);
            if ($user) {
                $_SESSION['identifiant'] = $user;
                header("location: ../view/accueil.php");

            } elseif ($user == false) {
                $repo = new DAO\Tuteur_DAO($connexion->getPDO());
                $user2 = $repo->Authentify_tut($login, $mdp);
                if ($user2) {

                    
                    header("location: ../view/accueil.php");
			echo '<p>Connexion réussie2</p>';
                } else {
                    header('location: ../view/Connexion.php');
                    echo '<p>Erreur de connexion !</p>';
                    header('location: ../view/Connexion.php');
                }
            }

        } else {

            header('location: ../view/Connexion.php');
        }

    }

}