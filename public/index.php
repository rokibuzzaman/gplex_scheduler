<?php 
	require_once('../vendor/autoload.php');



    const PRIVATE_PATH = '../private/';
    require_once(PRIVATE_PATH . 'config.php');
    require_once(PRIVATE_PATH . 'helper.php');
    
    if( isset($_GET['task']) ){
        $controller = taskToControllerName($_GET['task']);        
        if(file_exists(PRIVATE_PATH . "Controller/{$controller}.php")){
            
            require_once(PRIVATE_PATH . "Controller/{$controller}.php");
            $reqObj = new $controller;
            $reqObj->index();

        }
    }


?>
