<?php
// Définition des chemins:
define('BASE_DIR', dirname(dirname(__FILE__)));     // Le dossier de l'application
define('PUBLIC_DIR', BASE_DIR . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR);    //  Pour les fichiers publics
define('CONFIG_DIR', BASE_DIR . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR);    //  Pour les fichiers de configuration
define('SRC_DIR', BASE_DIR . DIRECTORY_SEPARATOR . 'src/model' . DIRECTORY_SEPARATOR);     //  Pour vos classes
define('LOG_DIR', BASE_DIR . DIRECTORY_SEPARATOR . 'log' . DIRECTORY_SEPARATOR);     //  Pour les fichiers de journalisation

define('CLASS_DIR', SRC_DIR . PATH_SEPARATOR);
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);

spl_autoload_register(function ($className) {
    $extension = '.php';
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once($className . $extension);
});

if(!function_exists('dump_var'))
{
    function dump_var($var, $dump=DUMP, $msg=null)
    {
        if($dump) {
            if($msg)
                echo"<p><strong>$msg</strong></p>";
            echo '<pre>';
            var_dump($var);
            echo '</pre>';
        }
    }
}