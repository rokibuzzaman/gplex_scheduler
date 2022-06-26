<?php

	require_once('./vendor/autoload.php');
    define('DEBUG', false);
    if (DEBUG) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
    define('BASEPATH', dirname(__FILE__)."/");
    if(session_id() == ''){
        session_start();
    }


    const PRIVATE_PATH = BASEPATH . 'private/';
    require_once(PRIVATE_PATH . 'helper.php');
    require_once(PRIVATE_PATH . 'db/CRUD.php');

    // Set timezone
    date_default_timezone_set(config()['TIME_ZONE']);

    if( isset($_GET['task']) ){

        $controller = taskToControllerName($_GET['task']);
        $action     = isset($_GET['act']) ? $_GET['act'] : 'index';
        if(file_exists(PRIVATE_PATH . "Controller/{$controller}.php")){
            
            require_once(PRIVATE_PATH . "Controller/{$controller}.php");
            if(method_exists($controller, $action)){
                $reqObj = new $controller;
                return $reqObj->$action();
                exit;
            }

        }
    }
    // If url not valid
    echo '404 Not found!';

?>

<br>
<br>
<br>
<a href="<?= url('task=appointment') ?>">Setup Appointment</a>
<br>
<a href="<?= url('task=login') ?>">Admin Login</a>