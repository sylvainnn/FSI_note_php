<?php

declare(strict_types=1);

//  Pour forcer les dumps pendant les tests
define('DUMP', true);

use DTO\administrateur;

echo '<h1>Instanciation par défaut</h1>';
$obj = new administrateur();
dump_var($obj, DUMP, 'Administrateur par défaut:');

$tab = array (
    'idAd'=>1,
    'loginAd' => '',
    'mdpAd' => '');