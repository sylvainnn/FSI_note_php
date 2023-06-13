<?php

require_once '../../config/appConfig.php';
if($_SESSION){
    header('location: ../view/connexion.php');
    session_destroy();
}if(empty($_SESSION)){ header('location: connexion.php');}
