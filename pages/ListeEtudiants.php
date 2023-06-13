<link href="/public/css/style.css" rel="stylesheet">
<table>
    <?php foreach ($MesEtudiants as $etudiant)?>
    <tr>
        <th><?php $etudiant?></th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Mail</th>
        <th>Spécialité</th>
        <th>Classe</th>
        <th>Autres</th>
        <th>EDIT</th>
    </tr>
</table>

<?php

require "../src/model/DTO/Etudiant.php";
$MesEtudiants = new \DAO\Etudiant_DAO();

$bonbon = new \DTO\Etudiant(["id_uti"]);

var_dump($bonbon->getNom());

?>